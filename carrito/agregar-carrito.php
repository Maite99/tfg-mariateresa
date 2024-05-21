<?php
session_start();

// verificamos si se envia el producto para añadirlo al carrito
if (isset($_POST['producto_id'])){
    $producto_id = $_POST['producto_id'];

    // inicializamos el carrito si no se ha creado
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    // añadimos el producto al carrito
    if (isset($_SESSION['carrito'][$producto_id])) {
        // Verificar que $_SESSION['carrito'][$producto_id] es un array antes de usarlo como tal
        if (is_array($_SESSION['carrito'][$producto_id])) {
            // si el producto ya esta en el carrito, aumentamos la cantidad
            $_SESSION['carrito'][$producto_id]['cantidad']++;
        } else {
            // Si no es un array, inicializarlo correctamente
            $_SESSION['carrito'][$producto_id] = array(
                'producto_id' => $producto_id,
                'cantidad' => 1
            );
        }
    } else {
        // si es la primera vez que se añade le ponemos cantidad 1
        $_SESSION['carrito'][$producto_id] = array(
            'producto_id' => $producto_id,
            'cantidad' => 1
        );
    }

    // redirigimos a carrito.php
    header("Location: carrito.php");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}
?>
