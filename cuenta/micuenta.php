<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['email-login'])) {
    // Si el usuario no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header('Location: cuenta.php');
    exit;
}

// Obtener el correo electrónico del usuario de la sesión
$email = $_SESSION['email-login'];

// Verificar si hay una cookie de sesión establecida y si coincide con la sesión actual del usuario
if (!isset($_COOKIE['session_id']) || $_COOKIE['session_id'] !== session_id()) {
    // Si no hay una cookie de sesión válida o no coincide con la sesión actual del usuario, redirigir al usuario a la página de inicio de sesión
    header('Location: cuenta.php');
    exit;
}



// Conexión a la bbdd
$conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

$sql = "SELECT nombre, apellidos, telefono, direccion FROM usuarios WHERE email = '$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si se encontraron resultados, obtener y mostrar el nombre y apellidos del usuario
    while($row = $result->fetch_assoc()) {
        $nombre = $row["nombre"];
        $apellidos = $row["apellidos"];
        $telefono = ($row["telefono"] !== null) ? $row["telefono"] : "Teléfono no disponible";
        $direccion = ($row["direccion"] !== null) ? $row["direccion"] : "Dirección no disponible";;
    }
} else {
    // Si no se encontraron resultados, establecer los valores predeterminados
    $nombre = "Nombre no disponible";
    $apellidos = "Apellido no disponible";
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

    <title>Mi cuenta</title>
    
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
                                    <a class="nav-link a-navbar" href="micuenta.php" role="button" aria-expanded="false">
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
                                    <a class="nav-link a-navbar" href="../carrito/carrito.php" role="button" aria-expanded="false">
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

    <main>

        <!-- MI CUENTA Y CERRAR SESIÓN  -->
       
            <section class=" mt-5 ">
                    <div class="container-titulo">
                        <div class="row">

                            <div class="col-lg-6 col-md-12 col-12">
                                <div>
                                    <h4 >Mi cuenta</h4>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 col-12 ps-lg-5 ">
                                <div>
                                    <a class="cerrar-sesion" href="cerrarsesion.php">Cerrar sesión > </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <hr>

            <!-- HISTORIAL DE PEDIDOS Y DETALLES DE LA CUENTA-->

            <section class="mt-5">
    <div class="container-titulo ajustar-margin mt-5">
        <div class="row  ">
            <div class="col-lg-6 col-md-12 col-12">
                <h4 class="titulo-micuenta">Historial de pedidos</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID del Pedido</th>
                                <th>Fecha</th>
                                <th>Importe Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Obtener el correo electrónico del usuario de la sesión
                            $email = $_SESSION['email-login'];

                            // Consulta para obtener el ID de usuario asociado con el correo electrónico
                            $query_user_id = "SELECT id FROM usuarios WHERE email = ?";
                            $stmt_user_id = mysqli_prepare($conn, $query_user_id);
                            mysqli_stmt_bind_param($stmt_user_id, "s", $email);
                            mysqli_stmt_execute($stmt_user_id);
                            $result_user_id = mysqli_stmt_get_result($stmt_user_id);

                            if ($result_user_id && mysqli_num_rows($result_user_id) > 0) {
                                // Si se encontró el ID de usuario, obtener el valor
                                $row = mysqli_fetch_assoc($result_user_id);
                                $user_id = $row['id'];

                                // Obtener los pedidos del usuario actual
                                $query_pedidos = "SELECT id, fecha, importe_total FROM ventas WHERE id_usuario = ?";
                                $stmt_pedidos = mysqli_prepare($conn, $query_pedidos);
                                mysqli_stmt_bind_param($stmt_pedidos, "i", $user_id);
                                mysqli_stmt_execute($stmt_pedidos);
                                $result_pedidos = mysqli_stmt_get_result($stmt_pedidos);

                                // Mostrar los detalles de cada pedido
                                if ($result_pedidos && mysqli_num_rows($result_pedidos) > 0) {
                                    while ($pedido = mysqli_fetch_assoc($result_pedidos)) {
                                        echo "<tr>";
                                        echo "<td><a href='../carrito/detalle-pedido.php?pedido_id=" . $pedido['id'] . "'>" . $pedido['id'] . "</a></td>";

                                        echo "<td>" . $pedido['fecha'] . "</td>";
                                        echo "<td>" . $pedido['importe_total'] . "€" . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='3'>No se encontraron pedidos.</td></tr>";
                                }
                            } else {
                                // Si no se encontró el ID de usuario, muestra un mensaje de error
                                echo "<tr><td colspan='3'>Error: No se pudo encontrar el ID de usuario.</td></tr>";
                            }

                            // Cerrar conexión
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12 ps-lg-5 mt-5 mt-lg-0">
                <div>
                                <h4 class="titulo-micuenta ">Detalles de la cuenta</h4>
                                <?php echo "<strong>Nombre completo: </strong> " . $nombre . " " . $apellidos?>
                                <br>
                                <?php echo "<strong>Email: </strong> " . $email ?>
                                <br>
                                <?php echo "<strong>Teléfono: </strong> " . $telefono ?>
                                <br>
                                <?php echo "<strong>Dirección completa: </strong> " .  $direccion ?>
                                <br>
                                <button class="boton-editar mt-2" onClick="window.location.href='editar-cuenta.php';">Editar</button>


                            </div>
            </div>
        </div>
    </div>
</section>

           
              
            
</main>

<br>
<br>
<br>
<br>
<br>
<br>
<br>



<!--FINAL MAIN   -->


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

     <!-- JS BUSCADOR -->
     <script>
        document.getElementById('searchIcon').addEventListener('click', function() {
            document.getElementById('searchForm').classList.toggle('d-none');
        });
    </script>
</body>
</html>