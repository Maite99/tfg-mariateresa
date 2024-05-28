<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['email-login'])) {
    header("Location: ../cuenta/cuenta.php");
    exit();
}

// Verificar si el carrito no está vacío
if (empty($_SESSION['carrito'])) {
    die("El carrito está vacío.");
}


$conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

$email = $_SESSION['email-login'];
$query = "SELECT id FROM usuarios WHERE email = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_assoc($result);
    $user_id = $usuario['id'];
} else {
    die("Error al obtener los datos del usuario: " . mysqli_error($conn));
}

$total_final = $_SESSION['total_final']; // Suponiendo que tienes el total final almacenado en la sesión


// Comenzar una transacción
mysqli_begin_transaction($conn);

try {
    // Insertar la venta
    $query = "INSERT INTO ventas (fecha, importe_total, id_usuario) VALUES (NOW(), ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "di", $total_final, $user_id);
    mysqli_stmt_execute($stmt);
    $venta_id = mysqli_stmt_insert_id($stmt);

    // Verificar si el carrito está definido en la sesión
if (!isset($_SESSION['carrito'])) {
    die("El carrito no está definido en la sesión.");
}

// Obtener el contenido del carrito de la sesión
$carrito = $_SESSION['carrito'];

    // Insertar detalles de la venta y actualizar el stock de productos
    foreach ($carrito as $item) {
        $producto_id = $item['producto_id'];
        $cantidad = $item['cantidad'];
        $query = "SELECT precio FROM productos WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $producto_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $producto = mysqli_fetch_assoc($result);
            $importe = $producto['precio'] * $cantidad;
            
            // Insertar detalle de la venta
            $query = "INSERT INTO detallesventas (id_ventas, id_producto, cantidad, importe) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "iiid", $venta_id, $producto_id, $cantidad, $importe);
            mysqli_stmt_execute($stmt);

            // Actualizar el stock del producto
            $query = "UPDATE productos SET cantidad_stock = cantidad_stock - ? WHERE id = ?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "ii", $cantidad, $producto_id);
            mysqli_stmt_execute($stmt);
        } else {
            throw new Exception("Error al obtener los datos del producto con ID $producto_id.");
        }
    }

    // Confirmar la transacción
    mysqli_commit($conn);

    // Limpiar el carrito de la sesión
    unset($_SESSION['carrito']);
    unset($_SESSION['total_final']);

    // Redirigir a una página de confirmación exitosa
    header('Location: todobien.php');
    exit();

} catch (Exception $e) {
    // Revertir la transacción en caso de error
    mysqli_rollback($conn);

    // Redirigir a una página de error
    header('Location: error-pago.php');
    exit();
}
?>



