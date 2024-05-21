<?php
session_start();

// Conexión a la bbdd
$conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

// Obtener el correo electrónico del usuario de la sesión
$email = $_SESSION['email-login'];

// Consultar datos del usuario
/// Consultar datos del usuario
$sql = "SELECT nombre, apellidos, telefono, direccion FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if (!$result) {
    echo "Error en la consulta: " . $conn->error;
    exit;
}

$email = $result->fetch_assoc();


// Verificar si se encontraron los datos del usuario
if (!$email) {
    echo "Usuario no encontrado.";
    exit;
}



// Cerrar conexión
$stmt->close();
$conn->close();

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

    <title>Místico</title>
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

        <!-- EDITAR CUENTA Y CERRAR SESIÓN  -->
        
        <section class=" mt-5 ">
            <div class="container-titulo">
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-12">
                        <div>
                            <h4 >Editar cuenta</h4>
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

                <!-- FORMULARIO EDITAR CUENTA  -->
                <div class="container">
                    <div class="form-container">
                        <form action="procesar-editar.php" method="post">
                            <div class="form-group mt-3">
                                <label for="nombre"><strong>Nombre</strong></label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($email['nombre']); ?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="apellidos"><strong>Apellido</strong></label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($email['apellidos']); ?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="telefono"><strong>Teléfono</strong></label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($email['telefono']); ?>">
                            </div>
                            <div class="form-group mt-3">
                                <label for="direccion"><strong>Dirección (Calle, Número, Piso, Localidad, Provincia, Código Postal)</strong></label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo htmlspecialchars($email['direccion']); ?>">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-5 boton-editar">Editar</button>
                        </form>
                    </div>
                </div>

    </main>

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

     <!-- BUSCADOR -->
     <script>
        document.getElementById('searchIcon').addEventListener('click', function() {
            document.getElementById('searchForm').classList.toggle('d-none');
        });
    </script>
</body>
</html>