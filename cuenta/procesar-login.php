<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si los campos obligatorios están vacíos
    $emaillogin = $_POST['email-login'];
    $passwordlogin = $_POST['password-login'];

    // Array para almacenar los mensajes de advertencia
    $mensajes_advertencia = [];

    if (empty($emaillogin)) {
        $mensajes_advertencia['email-login'] = "Por favor, introduzca un correo electrónico.";
    }

    if (empty($passwordlogin)) {
        $mensajes_advertencia['password-login'] = "Por favor, introduzca una contraseña.";
    }

    // Si hay mensajes de advertencia, muestra los mensajes en rojo
    if (!empty($mensajes_advertencia)) {
        echo "<div style='color: red; margin-bottom: 10px;'>Por favor, corrija los siguientes errores:</div>";
        foreach ($mensajes_advertencia as $campo => $mensaje) {
            echo "<div style='color: red; margin-bottom: 5px;'>{$mensaje}</div>";
        }
    } else {
        // Conexión a la bbdd
        $conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

        // Consulta para obtener la contraseña hasheada del usuario
        $consulta = "SELECT contrase_hash FROM usuarios WHERE email = '$emaillogin'";
        $resultado = $conn->query($consulta);

        // Verificar si se encontró algún registro
        if ($resultado->num_rows > 0) {
            // Obtener la contraseña hasheada almacenada en la base de datos
            $fila = $resultado->fetch_assoc();
            $contrase_hash_db = $fila['contrase_hash'];

            // Verificar si la contraseña proporcionada coincide con la contraseña hasheada de la base de datos
            if (password_verify($passwordlogin, $contrase_hash_db)) {
                // La contraseña coincide, redirige al usuario a la página de su cuenta
                header('Location: micuenta.php');
                exit; // Termina el script después de la redirección
            } else {
                // La contraseña no coincide, muestra un mensaje de error
                echo "El correo electrónico o la contraseña son incorrectos.";
            }
        } else {
            // El correo electrónico no está registrado
            echo "El correo electrónico o la contraseña son incorrectos.";
        }

        // Cerrar la conexión
        mysqli_close($conn);
    }
}

?>

