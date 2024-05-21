<?php
session_start();


require '../vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51PITZXC3U5GSv4o4AcL3ivVBfmZHWN6uMuRdlNNdQ7VaAfcL133ZSbmaZTcyt7X8z1R6FG8BRd7lo8sQisct9zo200eSbiK3Wq');

if (!isset($_POST['stripeToken']) || !isset($_POST['total_final'])) {
    die('Error: No se recibieron los datos necesarios.');
}

$token = $_POST['stripeToken'];
$total_final = floatval(str_replace(',', '.', $_POST['total_final'])) * 100; // Convertir a centavos

try {
    $charge = \Stripe\Charge::create([
        'amount' => $total_final,
        'currency' => 'eur',
        'source' => $token,
        'description' => 'Descripción del pedido',
    ]);
    echo "Pago realizado con éxito.";
} catch (\Stripe\Exception\ApiErrorException $e) {
    echo "Error al procesar el pago: " . $e->getMessage();
}


try {
    // Crear un cargo en Stripe
    $charge = \Stripe\Charge::create([
        'amount' => $total_final,
        'currency' => 'eur',
        'source' => $token,
        'description' => 'Compra en Místico',
    ]);

    // Actualizar la base de datos para reflejar la compra
    $conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");
    foreach ($_SESSION['carrito'] as $item) {
        $producto_id = $item['producto_id'];
        $cantidad = $item['cantidad'];
        $query = "UPDATE productos SET cantidad = cantidad - ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ii", $cantidad, $producto_id);
        mysqli_stmt_execute($stmt);
    }

    // Vaciar el carrito
    unset($_SESSION['carrito']);

    // Redirigir a la página de éxito
    header("Location: confirmacion-pago.php");
    exit();

} catch (\Stripe\Exception\CardException $e) {
    // Error en el pago
    echo 'Error: ' . $e->getMessage();
}
?>



<!DOCTYPE html>
<html lang="en">
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
          <!-- Incluir el script de Stripe.js -->
      <script src="https://js.stripe.com/v3/"></script>
    <title>Místico</title>
        <title>Místico</title>
        <style>
            .cantidad-cell {
                display: flex;
                align-items: center;

            }

            .cantidad-cell button {
                margin-right: 5px; /* Espacio entre los botones y el número */
            }
        </style>

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
                        </div>
                    </nav>
                </header>

                <!-- FINAL HEADER -->

                <!-- INICIO MAIN -->
                    

                <!-- FINAL MAIN -->

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
        </div>

        <!-- INCLUYO JQUERY PARA BOOTSTRAP -->
        <script src="../bootstrap/js/jquery-3.7.1.min.js"></script>
        <!-- INCLUYO JS DE BOOTSTRAP QUE INCLUYE POPPER.JS -->
        <script src="../bootstrap/js/bootstrap.bundle.js"></script>

        <!-- BUSCADOR -->
        <script>
        document.getElementById('searchIcon').addEventListener('click', function() {
            document.getElementById('searchForm').classList.toggle('d-none');
        });
        </script>

       

    </body>
    </html>