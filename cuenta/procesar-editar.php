<?php

session_start();

// Conexión a la bbdd
$conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se han enviado todos los campos necesarios
    if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['telefono']) && !empty($_POST['direccion'])) {
        // Obtiene los datos del formulario
        $name = $_POST['nombre'];
        $lastname = $_POST['apellidos'];
        $number = $_POST['telefono'];
        $adress = $_POST['direccion'];

        // validar el número de teléfono
        if (!preg_match('/^\d{9}$/', $number)) {
            echo  "El número de teléfono debe tener exactamente 9 dígitos.";
            header('Location: editar-cuenta.php');
            exit;
        }

        // Conexión a la base de datos
        $conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

        // Obtener datos del formulario
        $nombre = isset($_POST['nombre']) ? $conn->real_escape_string($_POST['nombre']) : '';
        $apellidos = isset($_POST['apellidos']) ? $conn->real_escape_string($_POST['apellidos']) : '';
        $telefono = isset($_POST['telefono']) ? $conn->real_escape_string($_POST['telefono']) : '';
        $direccion = isset($_POST['direccion']) ? $conn->real_escape_string($_POST['direccion']) : '';

        // Obtener el correo electrónico del usuario de la sesión
        $email = $_SESSION['email-login'];

        // Sentencia ACTUALIZAR datos en la bbdd
        $sql = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', telefono='$telefono', direccion='$direccion' WHERE email='$email'";

        if ($conn->query($sql) === TRUE) {
            echo "Registro actualizado con éxito";
            header('Location: micuenta.php');
            exit;
        } else {
            echo  "Por favor, completa todos los campos." . $conn->error;;
            header('Location: editar-cuenta.php');
            exit;
        }

        
    }
}


    // Cerrar la conexión
    $conn->close();
?>