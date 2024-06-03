<?php
session_start();

$conn = new mysqli("localhost", "root", "", "tiendaonlinetfg");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si el usuario está logueado
if (!isset($_SESSION['email-login'])) {
    header("Location: ../cuenta/cuenta.php");
    exit();
}

// Destinatario del correo
$to = filter_var($_SESSION['email-login'], FILTER_VALIDATE_EMAIL);

if ($to === false) {
    die("Dirección de correo inválida.");
}

// OBTENER DATOS ENVIO DEL USUARIO DE LA SESION
$query_usuario = "SELECT nombre, apellidos, telefono, direccion FROM usuarios WHERE email = ?";
$stmt_usuario = mysqli_prepare($conn, $query_usuario);
mysqli_stmt_bind_param($stmt_usuario, "s", $to);
mysqli_stmt_execute($stmt_usuario);
$result_usuario = mysqli_stmt_get_result($stmt_usuario);

if ($result_usuario && mysqli_num_rows($result_usuario) > 0) {
    $usuario = mysqli_fetch_assoc($result_usuario);
} else {
    die("Error al obtener los datos del usuario: " . mysqli_error($conn));
}

$venta_id = $_SESSION['venta_id'];

// Obtener el importe total de la venta
$query_venta = "SELECT importe_total FROM ventas WHERE id = ?";
$stmt_venta = mysqli_prepare($conn, $query_venta);
mysqli_stmt_bind_param($stmt_venta, "i", $venta_id);
mysqli_stmt_execute($stmt_venta);
$result_venta = mysqli_stmt_get_result($stmt_venta);

if ($result_venta && mysqli_num_rows($result_venta) > 0) {
    $venta = mysqli_fetch_assoc($result_venta);
    $importe_total = $venta['importe_total'];
} else {
    die("Error al obtener el importe total de la venta: " . mysqli_error($conn));
}

// OBTENER DATOS PEDIDO 
$query_pedido = "SELECT dv.cantidad, dv.importe, p.nombre 
                FROM detallesventas dv
                INNER JOIN productos p ON dv.id_producto = p.id
                WHERE dv.id_ventas = ?";

$stmt_pedido = mysqli_prepare($conn, $query_pedido);
mysqli_stmt_bind_param($stmt_pedido, "i", $venta_id); 
mysqli_stmt_execute($stmt_pedido);
$result_pedido = mysqli_stmt_get_result($stmt_pedido);

$subject = "Detalles del pedido";
// Inicializar la variable $message
$message = "";

// IMPRIMIR LOS DATOS DE ENVIO
$message .= "Datos del envio:\n";
$message .= "Nombre completo: " . $usuario['nombre'] . " " . $usuario['apellidos'] . "\n";
$message .= "Teléfono: " . $usuario['telefono'] . "\n";
$message .= "Dirección: " . $usuario['direccion'] . "\n\n";



// IMPRIMIR LOS DATOS DEL PEDIDO
if ($result_pedido && mysqli_num_rows($result_pedido) > 0) {
    $message .= "Datos del pedido:\n";
    while ($pedido = mysqli_fetch_assoc($result_pedido)) {
        $message .= "Producto: " . $pedido['nombre'] . "\n";
        $message .= "Cantidad: " . $pedido['cantidad'] . "\n";
        $message .= "Importe: " . $pedido['importe'] . "€\n\n";
    }
} else {
    die("Error al obtener los detalles del pedido: " . mysqli_error($conn));
}

// IMPRIMIR EL IMPORTE TOTAL DE LA VENTA
$message .= "Importe total del pedido: " . $importe_total . "€\n\n";

$headers = "From: info@mistico.com\r\n" .
           "Reply-To: info@mistico.com\r\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    header('Location: confirmacion-pedido.php');
    exit();
} else {
    echo "NO HA SIDO ENVIADO";
}
?>


