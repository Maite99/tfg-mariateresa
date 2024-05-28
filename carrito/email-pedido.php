<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verificar si el usuario está logueado
if (!isset($_SESSION['email-login'])) {
    header("Location: ../cuenta/cuenta.php");
    exit();
}

// Destinatario del correo
$to = $_SESSION['email-login'];

// Asunto del correo
$subject = "Detalles del pedido";

// Obtener datos del usuario
$query_usuario = "SELECT nombre, apellidos, email, telefono, direccion FROM usuarios WHERE email = ?";
$stmt_usuario = mysqli_prepare($conn, $query_usuario);
mysqli_stmt_bind_param($stmt_usuario, "s", $to);
mysqli_stmt_execute($stmt_usuario);
$result_usuario = mysqli_stmt_get_result($stmt_usuario);

if ($result_usuario && mysqli_num_rows($result_usuario) > 0) {
    $usuario = mysqli_fetch_assoc($result_usuario);
} else {
    die("Error al obtener los datos del usuario: " . mysqli_error($conn));
}

// Obtener detalles del pedido (aquí debes agregar tu lógica para obtener los detalles del pedido)

// Mensaje del correo
$message = "Detalles del pedido:\n";
$message .= "Producto: Nombre del producto\n";
$message .= "Cantidad: \n"; 
$message .= "Precio \n"; 
$message .= "Subtotal: $20.00\n"; 

$message .= "\nDatos de envío:\n";
$message .= "Nombre completo: " . $usuario['nombre'] . " " . $usuario['apellidos'] . "\n";
$message .= "Email: " . $usuario['email'] . "\n";
$message .= "Teléfono: " . $usuario['telefono'] . "\n";
$message .= "Dirección: " . $usuario['direccion'] . "\n";

// Encabezados del correo
$headers = "From: info@mistico.com" . "\r\n";
$headers .= "Reply-To: info@mistico.com" . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envío del correo
$mail_sent = mail($to, $subject, $message, $headers);

// Verificar si el correo se envió correctamente
if ($mail_sent) {
    echo "Correo electrónico enviado correctamente.";
} else {
    echo "Error al enviar el correo electrónico.";
}
?>
