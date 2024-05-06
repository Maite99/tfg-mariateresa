<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['email-register']) && !empty($_POST['password-register']) && !empty($_POST['password-confirmation-olvidaste'])) {
        
        // Obtener los datos del formulario
        $email = $_POST['email-register'];
        $password = $_POST['password-register'];
        $password_confirm = $_POST['password-confirmation-olvidaste'];
        
        // Verificar si las contraseñas coinciden
        if ($password != $password_confirm) {
            echo "Las contraseñas no coinciden.";
            exit;
        }

        // Conexión a la base de datos
        $conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

        // Verificar si el correo electrónico existe en la base de datos
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Si el correo existe cambiamos la contraseña
            $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hashear la contraseña
            $update_sql = "UPDATE usuarios SET contrase_hash = '$hashed_password' WHERE email = '$email'";
            if (mysqli_query($conn, $update_sql)) {
                echo "Contraseña actualizada correctamente.";
                // Aquí podrías redirigir al usuario a la página de inicio de sesión o a otra página de tu elección
            } else {
                echo "Error al actualizar la contraseña: " . mysqli_error($conn);
            }
        } else {
            echo "El correo electrónico no está registrado.";
            // Aquí podrías redirigir al usuario de nuevo al formulario de reestablecimiento de contraseña con un mensaje de error
        }

        // Cerrar la conexión
        mysqli_close($conn);
    } else {
        echo "Todos los campos son obligatorios.";
        
    }
}
?>
