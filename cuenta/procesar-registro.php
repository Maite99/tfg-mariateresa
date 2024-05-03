<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email-register']) && !empty($_POST['password-register'])) {
        // Obtiene los datos del formulario
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $emailregister= $_POST['email-register'];
        $passwordregister = $_POST['password-register'];
        
        // Conexión a la bbdd
        $conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

        // Verifica si el correo está registrado
        $sql_check_email = "SELECT * FROM usuarios WHERE email = '$emailregister'";
        $result_check_email = mysqli_query($conn, $sql_check_email);

        if (mysqli_num_rows($result_check_email) > 0) {
            // Muestra un mensaje de error si el correo está registrado
            echo "Este correo electrónico ya está registrado";
        } else {
            $insertar = "INSERT INTO usuarios (nombre, apellidos, email, contrase_hash) VALUES ('$name', '$lastname', '$emailregister', '$passwordregister')";
            if (mysqli_query($conn, $insertar)) {
                header('Location: micuenta.php');
                exit; // Termina el script después de la redirección
            } else {
                // Muestra un mensaje de error si hay algún error 
                echo "Error: " . $insertar . "<br>" . mysqli_error($conn);
            }
        }
        // Cierra la conexión
        mysqli_close($conn);

    } 
}

// Verifica si el método de solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si los campos obligatorios están vacíos
    $nombre = $_POST['name'];
    $apellidos = $_POST['lastname'];
    $email = $_POST['email-register'];
    $contraseña = $_POST['password-register'];

    // Array para almacenar los mensajes de advertencia
    $mensajes_advertencia = [];

    if (empty($nombre)) {
        $mensajes_advertencia['name'] = "Por favor, introduzca un nombre.";
    }

    if (empty($apellidos)) {
        $mensajes_advertencia['lastname'] = "Por favor, introduzca sus apellidos.";
    }

    if (empty($email)) {
        $mensajes_advertencia['email-register'] = "Por favor, introduzca un correo electrónico.";
    }

    if (empty($contraseña)) {
        $mensajes_advertencia['password-register'] = "Por favor, introduzca una contraseña.";
    }

    // Si hay mensajes de advertencia, muestra los mensajes en rojo
    if (!empty($mensajes_advertencia)) {
        echo "<div style='color: red; margin-bottom: 10px;'>Por favor, corrija los siguientes errores:</div>";
        foreach ($mensajes_advertencia as $mensaje) {
            echo "<div style='color: red; margin-bottom: 5px;'>$mensaje</div>";
        }
    }
}



?>



