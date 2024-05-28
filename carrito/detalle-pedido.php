
<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['email-login'])) {
    // Si el usuario no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header('Location: cuenta.php');
    exit;
}

// Obtener el ID del pedido de la URL
if (isset($_GET['pedido_id'])) {
    $pedido_id = $_GET['pedido_id'];


    // Consulta para obtener los detalles del pedido
    $query_pedido = "SELECT * FROM detallesventas WHERE id_ventas = ?";
    $stmt_pedido = mysqli_prepare($conn, $query_pedido);
    mysqli_stmt_bind_param($stmt_pedido, "i", $pedido_id);
    mysqli_stmt_execute($stmt_pedido);
    $result_pedido = mysqli_stmt_get_result($stmt_pedido);
}

// Obtener los datos del usuario de la sesión
$email = $_SESSION['email-login'];
$query_usuario = "SELECT * FROM usuarios WHERE email = ?";
$stmt_usuario = mysqli_prepare($conn, $query_usuario);
mysqli_stmt_bind_param($stmt_usuario, "s", $email);
mysqli_stmt_execute($stmt_usuario);
$result_usuario = mysqli_stmt_get_result($stmt_usuario);
$row_usuario = mysqli_fetch_assoc($result_usuario);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <!-- PARA LOS ICONOS DE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="../img/favicon.jpg" type="image/x-icon">
    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&display=swap" rel="stylesheet">
    
    <title>Detalle pedido</title>
</head>


<body>
<div class="container-fluid">
    <header>
        <!-- INICIO NAVBAR -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- LOGO NAVBAR -->
                <a class="navbar-brand" href="../index.php">
                    <img src="../img/logo2.jpg" alt="logo" width="130" height="100">
                </a>
                <!-- NOMNRE EN NAVBAR -->
                <a class="navbar-brand mt-2 nombre-navbar cantata-one-regular" href="../index.php">Místico</a>

                <!-- BOTÓN MENÚ DESPLEGABLE EN MÓVILES Y PANTALLA PEQUEÑA -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#secciones-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- INICIO SECCIONES NAVBAR -->
                <div class="collapse navbar-collapse" id="secciones-menu">
                    <!-- con ms-auto llevo el menú a la derecha -->
                    <ul class="navbar-nav ms-auto">
                        <!-- INICIO -->
                        <li class="nav-item">
                            <a class="nav-link  a-navbar" aria-current="page" href="../index.php">Inicio</a>
                        </li>
                        <!-- INCIENSOS -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Inciensos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item a-navbar" href="../productos/inciensos/inciensos.php">Inciensos</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/inciensos/portainciensos.php">Quemadores / Porta-inciensos</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/inciensos/palosanto.php">Palo Santo y Hierbas</a></li>
                            </ul>
                        </li>
                        <!-- MINERALES -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Minerales
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item a-navbar " href="../productos/minerales/enformas.php">En formas</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/minerales/rodados.php">Rodados</a></li>
                            </ul>
                        </li>
                        <!-- DECORACIÓN -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Decoración
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item a-navbar" href="../productos/decoracion/altares.php">Altares</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/decoracion/velasdecorativas.php">Velas decorativas</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/decoracion/portavelas.php">Portavelas</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/decoracion/varios.php">Varios</a></li>
                            </ul>
                        </li>
                        <!-- JOYAS -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Joyas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item a-navbar" href="../productos/joyas/pulseras.php">Pulseras</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/joyas/collares.php">Collares</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/joyas/anillos.php">Anillos</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/joyas/colgantes.php">Colgantes</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/joyas/pendientes.php">Pendientes</a></li>
                            </ul>
                        </li>
                        <!-- ESOTÉRICO -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Esotérico
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item a-navbar" href="../productos/esoterico/barajastarot.php">Barajas de Tarot</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/esoterico/aguaesoterica.php">Agua Esotérica</a></li>
                                <li><a class="dropdown-item a-navbar" href="../productos/esoterico/velasritualizadas.php">Velas Ritualizadas</a></li>
                            </ul>
                        </li>
                        <!-- KITS PARA REGALAR-->
                        <li class="nav-item">
                            <a class="nav-link a-navbar" href="../productos/kits/kitsregalo.php" role="button">
                                Kits de regalo
                            </a>
                        </li>
                        <!-- ICONO USER-->
                        <li class="nav-item">
                            <a class="nav-link a-navbar" href="../cuenta/micuenta.php" role="button" aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                                </a>
                            </li>
                        <!-- BUSCADOR -->
                        <li class="nav-item">
                            <a class="nav-link a-navbar" role="button" aria-expanded="false" id="searchIcon">
                                <i class="bi bi-search"></i>
                            </a>
                            <form action="../busqueda/busqueda/buscar-productos.php" method="GET" id="searchForm" class="d-none buscador">
                                <input type="text" name="query" placeholder="Buscar productos...">
                            </form>
                        </li>
                        <!-- CARRITO -->
                        <li class="nav-item">
                            <a class="nav-link a-navbar" href="carrito.php" role="button" aria-expanded="false">
                                <i class="bi bi-cart-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- FIN NAVBAR -->
    </header>

    <!-- Contenido principal -->
    <div class="container">
        <h1 class="text-center mb-3">Detalles del pedido</h1>

        <!-- Datos del usuario -->
        <h2 class=" mb-3">Datos del usuario</h2>
        <p><strong>Nombre completo:</strong> <?php echo $row_usuario['nombre'] . " " . $row_usuario['apellidos']; ?></p>
        <p><strong>Email:</strong> <?php echo $row_usuario['email']; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $row_usuario['telefono']; ?></p>
        <p><strong>Dirección:</strong> <?php echo $row_usuario['direccion']; ?></p>


        
        <!-- Resumen de la compra -->
        <h2 class="mt-5 text-center">Resumen de la compra</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Importe</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Realizar la consulta para obtener los detalles de la compra
                if(isset($pedido_id)){
                    $query_detalles = "SELECT productos.nombre AS producto, detallesventas.cantidad, detallesventas.importe 
                                        FROM detallesventas 
                                        INNER JOIN productos ON detallesventas.id_producto = productos.id 
                                        WHERE detallesventas.id_ventas = ?";
                    $stmt_detalles = mysqli_prepare($conn, $query_detalles);
                    mysqli_stmt_bind_param($stmt_detalles, "i", $pedido_id); // $pedido_id debe ser el ID de la venta específica que estás visualizando
                    mysqli_stmt_execute($stmt_detalles);
                    $result_detalles = mysqli_stmt_get_result($stmt_detalles);

                    // Mostrar los detalles de la compra en la tabla
                    while ($row_detalles = mysqli_fetch_assoc($result_detalles)) {
                ?>
                
                <tr>
                    <td><?php echo $row_detalles['producto']; ?></td>
                    <td><?php echo $row_detalles['cantidad']; ?></td>
                    <td><?php echo $row_detalles['importe']; ?>€</td>
                </tr>
                <?php 
                    } 
                } else {
                    echo "<tr><td colspan='3'>No se encontraron detalles de compra para este pedido.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        

    </div>

    <!-- INICIO FOOTER -->
    <footer class="container-footer">
            <div class="container  " >
                <div class="row  d-flex flex-row">
                    <!-- PRIMERA COLUMNA FOOTER -->
                    <div class="col-4">
                        <div class="primera-columna-footer mt-5 mb-5">
                            <p class="enlacedeinteres "><strong>ENLACE DE INTERÉS</strong></p>
                            <a href="../enlacesdeinteres/avisolegal.php" target="_blank">Aviso Legal</a>
                            <br>
                            <a href="../enlacesdeinteres/politicadeprivacidad.php" target="_blank">Política de Privacidad</a>
                            <br>
                            <a href="../enlacesdeinteres/politicadeenviosydevoluciones.php" target="_blank">Política de Envíos y Devoluciones</a>
                            <br>
                            <a href="../enlacesdeinteres/politicadecookies.php" target="_blank">Política de Cookies</a>
                        </div>
                    </div>
                    <!-- SEGUNDA COLUMNA FOOTER -->
                    <div class="col-4">
                        <div class="segunda-columna-footer">
                            <p class="contacto mt-5"><strong>CONTACTO</strong></p>
                            <p class="texto-contacto">Estaremos encantados de resolver cualquier duda que tengas. 
                                Contáctanos en <a href="mailto:info@mistico.com?" style="color: #b0d688"> info@mistico.com </a>
                                <br>
                                Whatsapp  +34 618 398 065
                            </p>
                        </div>
                    </div>
                    <!-- TERCERA COLUMNA FOOTER -->
                    <div class="col-4">
                        <div class="tercera-columna-footer">
                            <p class="redes mt-5"><strong>¿QUIERES SEGUIRNOS EN REDES?</strong></p>
                            <a href="https://www.instagram.com/greenwitchart_/"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.tiktok.com/@greenwitchart_?lang=es"><i class="bi bi-tiktok"></i></a>
                            <a href="https://www.facebook.com/p/Green-Witch-Art-100080655604514/"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.pinterest.es/GreenWitchArt_/"><i class="bi bi-pinterest"></i></a>
                        </div>
                        
                    </div>

                </div>
            </div>
        </footer>
        <!-- FINAL FOOTER -->




</body>
</html>