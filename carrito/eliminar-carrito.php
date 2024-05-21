<?php
session_start();

if (isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];

    // Eliminar el producto del carrito
    if (isset($_SESSION['carrito'][$producto_id])) {
        unset($_SESSION['carrito'][$producto_id]);
    }
}

// Redirigir de vuelta al carrito
header("Location: carrito.php");
exit();
?>