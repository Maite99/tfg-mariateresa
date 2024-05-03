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

        // Consulta para verificar si el correo está registrado
        $consulta = "SELECT * FROM usuarios WHERE email = '$emaillogin' AND contrase_hash = '$passwordlogin'";
        $resultado = $conn->query($consulta);

        // Verificar si se encontró algún registro
        if ($resultado->num_rows > 0) {
            // El correo ESTÁ REGISTRADO y la contraseña coincide
            header('Location: micuenta.php');
            exit; // Termina el script después de la redirección
        } else {
            // El correo electrónico o la contraseña son incorrectos
            echo "El correo electrónico o la contraseña son incorrectos.";
        }

        // Cerrar la conexión
        mysqli_close($conn);
    }
}


// // Verifica si el método de solicitud es POST
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Verifica si los campos obligatorios están vacíos
//     $emaillogin = $_POST['email-login'];
//     $passwordlogin = $_POST['password-login'];

//     // Array para almacenar los mensajes de advertencia
//     $mensajes_advertencia = [];


//     if (empty($emaillogin)) {
//         $mensajes_advertencia['email-login'] = "Por favor, introduzca un correo electrónico.";
//     }

//     if (empty($passwordlogin)) {
//         $mensajes_advertencia['password-login'] = "Por favor, introduzca una contraseña.";
//     }

   
// }
// ?>


