<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Declaramos las variables recuperando los datos del formulario
    $emaillogin = $_POST['email-login'];
    $passwordlogin = $_POST['password-login'];

    // Verificar si los campos están vacíos
    if (empty($emaillogin)) {
        $_SESSION['error'] = "Introduzca un correo electrónico";
        header('Location: cuenta.php');
        exit;
    }

    if (empty($passwordlogin)) {
        $_SESSION['error'] = "Introduzca una contraseña";
        header('Location: cuenta.php');
        exit;
    }

    // Conexión a la bbdd
    $conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

    // Consulta para obtener la contraseña hasheada del usuario
    $consulta = "SELECT contrase_hash FROM usuarios WHERE email = '$emaillogin'";
    $resultado = $conn->query($consulta);

    // Verificar si se encontró algún registro
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $contrase_hash_db = $fila['contrase_hash'];

        // Verificar si la contraseña coincide con la de la base de datos
        if (password_verify($passwordlogin, $contrase_hash_db)) {
            // Iniciar sesión
            $_SESSION['email-login'] = $emaillogin; // Establecer la sesión

           // Establecer una cookie de sesión que expire en un tiempo específico (por ejemplo, 1 día) y con la ruta adecuada
            $expiry = time() + (60 * 60 * 24); // 1 día en segundos
            setcookie('session_id', session_id(), $expiry, '/');


            // Redirigir al usuario a la página de su cuenta
            header('Location: micuenta.php');
            exit; 
        } else {
            // La contraseña no coincide, redirige con un mensaje de error almacenado en la sesión
            $_SESSION['error'] = "La contraseña es incorrecta.";
            header('Location: cuenta.php');
            exit;
        }
    } else {
        // El correo electrónico no está registrado, redirige con un mensaje de error almacenado en la sesión
        $_SESSION['error'] = "El correo electrónico es incorrecto.";
        header('Location: cuenta.php');
        exit;
    }

    // Cerrar la conexión
    mysqli_close($conn);
}



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

//     // Si hay mensajes de advertencia, redirige con los mensajes de error almacenados en la sesión
//     if (!empty($mensajes_advertencia)) {
//         $_SESSION['mensajes_advertencia'] = $mensajes_advertencia;
//         header("Location: cuenta.php");
//         exit;
//     } else {
//         // Conexión a la bbdd
//         $conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

//         // Consulta para obtener la contraseña hasheada del usuario
//         $consulta = "SELECT contrase_hash FROM usuarios WHERE email = '$emaillogin'";
//         $resultado = $conn->query($consulta);

//         // Verificar si se encontró algún registro
//         if ($resultado->num_rows > 0) {
//             $fila = $resultado->fetch_assoc();
//             $contrase_hash_db = $fila['contrase_hash'];

//             // Verificar si la contraseña coincide con la de la base de datos
//             if (password_verify($passwordlogin, $contrase_hash_db)) {
//                 // Iniciar sesión
//                 $_SESSION['email-login'] = $emaillogin; // Establecer la sesión



//                 // Redirigir al usuario a la página de su cuenta
//                 header('Location: micuenta.php');
//                 exit; 
//             } else {
//                 // La contraseña no coincide, redirige con un mensaje de error almacenado en la sesión
//                 $_SESSION['error'] = "La contraseña es incorrecta.";
//                 header('Location: cuenta.php');
//                 exit;
//             }
//         } else {
//             // El correo electrónico no está registrado, redirige con un mensaje de error almacenado en la sesión
//             $_SESSION['error'] = "El correo electrónico es incorrecto.";
//             header('Location: cuenta.php');
//             exit;
//         }

//         // Cerrar la conexión
//         mysqli_close($conn);
//     }
// }


// if (!empty($_POST['email-login']) && !empty($_POST['password-login']) && isset($_POST['btnlogin'])){

//     // ESTABLECER VARIABLES
//     $emaillogin = $_POST['email-login'];
//     $passwordlogin = $_POST['password-login'];

//     // CONEXIÓN A LA BBDD
//     $conexion = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

//     // SENTENCIA
//     $consulta = "SELECT contrase_hash FROM usuarios WHERE email = '$emaillogin'";

//     $resultado = $conexion->query($consulta);
// }

//  //Verificar si se encontró algún registro
//         if ($resultado->num_rows > 0) {
//             $fila = $resultado->fetch_assoc();
//             $contrase_hash_db = $fila['contrase_hash'];

//             // Verificar si la contraseña coincide con la de la base de datos
//             if (password_verify($passwordlogin, $contrase_hash_db)) {
//                 // Iniciar sesión
//                 $_SESSION['email-login'] = $emaillogin; // Establecer la sesión



//                 // Redirigir al usuario a la página de su cuenta
//                 header('Location: micuenta.php');
//                 exit; 
//             } else {
//                 // La contraseña no coincide, redirige con un mensaje de error almacenado en la sesión
//                 $_SESSION['error'] = "La contraseña es incorrecta.";
//                 header('Location: cuenta.php');
//                 exit;
//             }
//         } else {
//             // El correo electrónico no está registrado, redirige con un mensaje de error almacenado en la sesión
//             $_SESSION['error'] = "El correo electrónico es incorrecto.";
//             header('Location: cuenta.php');
//             exit;
//         }
?>



