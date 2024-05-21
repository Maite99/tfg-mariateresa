<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['producto_id']) && isset($_POST['operacion'])) {
    $producto_id = $_POST['producto_id'];
    $operacion = $_POST['operacion'];

    // Obtener el stock disponible del producto desde la base de datos
    $stock_disponible = obtenerStockDisponible($producto_id);
    if ($stock_disponible === false) {
        // Error al obtener el stock disponible del producto
        $_SESSION['error'] = 'Error al obtener el stock disponible del producto.';
        header("Location: carrito.php");
        exit();
    }

    // Realizar la operación de incremento o decremento en la cantidad del producto en el carrito
    if (isset($_SESSION['carrito'][$producto_id])) {
        if ($operacion === 'incremento') {
            // Verificar si la cantidad no supera el stock disponible
            if ($_SESSION['carrito'][$producto_id]['cantidad'] < $stock_disponible) {
                $_SESSION['carrito'][$producto_id]['cantidad']++;
            } else {
                // La cantidad supera el stock disponible
                $_SESSION['error'] = 'La cantidad ingresada supera el stock disponible.';
                header("Location: carrito.php");
                exit();
            }
        } elseif ($operacion === 'decremento' && $_SESSION['carrito'][$producto_id]['cantidad'] > 1) {
            $_SESSION['carrito'][$producto_id]['cantidad']--;
        }
    }

    // Redirigir de vuelta al carrito
    header("Location: carrito.php");
    exit();
}

function obtenerStockDisponible($producto_id) {
    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

    // Verificar la conexión
    if (!$conexion) {
        // Error en la conexión
        return false;
    }

    // Consulta para obtener el stock disponible del producto
    $query = "SELECT cantidad_stock FROM productos WHERE id = $producto_id";
    $result = mysqli_query($conexion, $query);

    // Verificar si la consulta fue exitosa
    if ($result) {
        // Obtener el stock disponible del resultado de la consulta
        $fila = mysqli_fetch_assoc($result);
        $stock_disponible = $fila['cantidad_stock'];

        // Liberar el resultado y cerrar la conexión
        mysqli_free_result($result);
        mysqli_close($conexion);

        // Devolver el stock disponible
        return $stock_disponible;
    } else {
        // Error en la consulta
        mysqli_close($conexion);
        return false;
    }
}
?>
