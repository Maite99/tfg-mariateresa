<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se han enviado todos los campos necesarios
    if (!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email-register']) && !empty($_POST['password-register'])) {
        // Obtiene los datos del formulario
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $emailregister = $_POST['email-register'];
        $passwordregister = $_POST['password-register'];

        // Conexión a la base de datos
        $conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

        // Verifica si el correo electrónico ya está registrado
        $sql_check_email = "SELECT * FROM usuarios WHERE email = '$emailregister'";
        $result_check_email = mysqli_query($conn, $sql_check_email);

        if (mysqli_num_rows($result_check_email) > 0) {
            // Si el correo electrónico ya está registrado, muestra un mensaje de error
            $_SESSION['error'] = "Este correo electrónico ya está registrado.";
            header('Location: cuenta.php');
            exit;
        } else {
            // Hashea la contraseña antes de guardarla en la base de datos
            $hashed_password = password_hash($passwordregister, PASSWORD_DEFAULT);

            // Inserta los datos del nuevo usuario en la base de datos
            $insert_query = "INSERT INTO usuarios (nombre, apellidos, email, contrase_hash) VALUES ('$name', '$lastname', '$emailregister', '$hashed_password')";

            if (mysqli_query($conn, $insert_query)) {
                // Si la inserción fue exitosa, redirige al usuario a su cuenta
                $_SESSION['success'] = "¡Registro exitoso! Por favor, inicia sesión.";
                header('Location: cuenta.php');
                exit;
            } else {
                // Si hubo un error durante la inserción, muestra un mensaje de error
                $_SESSION['error'] = "Error al registrar el usuario. Por favor, intenta nuevamente.";
                header('Location: cuenta.php');
                exit;
            }
        }
        // Cierra la conexión a la base de datos
        mysqli_close($conn);
    } else {
        // Si faltan campos, redirige con un mensaje de error
        $_SESSION['error'] = "Por favor, completa todos los campos.";
        header('Location: cuenta.php');
        exit;
    }
} else {
    // Si la solicitud no es de tipo POST, redirige con un mensaje de error
    $_SESSION['error'] = "Acceso no permitido.";
    header('Location: cuenta.php');
    exit;
}
?>




