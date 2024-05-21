<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../bootstrap/css/style.css">
    <!-- PARA LOS ICONOS DE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="icon" href="../../img/favicon.jpg" type="image/x-icon">
    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&display=swap" rel="stylesheet">

    <title>Místico - Collares</title>
</head>
<body>
    <div class="container-fluid">
        <header>
            <!-- INICIO NAVBAR -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
               
                        <!-- LOGO NAVBAR -->
                         <a class="navbar-brand" href="../../index.php">
                            <img src="../../img/logo2.jpg" alt="logo" width="130" height="100">
                        </a> 
                        <!-- NOMNRE EN NAVBAR -->
                        <a class="navbar-brand mt-2 nombre-navbar cantata-one-regular" href="../../index.php">Místico</a>

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
                                    <a class="nav-link  active" aria-current="page" href="../../index.php">Inicio</a>
                                </li>
                                <!-- INCIENSOS -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Inciensos
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item a-navbar" href="../inciensos/inciensos.php">Inciensos</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../inciensos/portainciensos.php">Quemadores / Porta-inciensos</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../inciensos/palosanto.php">Palo Santo y Hierbas</a></li>
                                    </ul>
                                </li>
                                <!-- MINERALES -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Minerales
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item a-navbar " href="../minerales/enformas.php">En formas</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../minerales/rodados.php">Rodados</a></li>
                                    </ul>
                                </li>
                                <!-- DECORACIÓN -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Decoración
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item a-navbar" href="../decoracion/altares.php">Altares</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../decoracion/velasdecorativas.php">Velas decorativas</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../decoracion/portavelas.php">Portavelas</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../decoracion/varios.php">Varios</a></li>
                                    </ul>
                                </li>
                                <!-- JOYAS -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Joyas
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item a-navbar" href="../joyas/pulseras.php">Pulseras</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../joyas/collares.php">Collares</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../joyas/anillos.php">Anillos</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../joyas/colgantes.php">Colgantes</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../joyas/pendientes.php">Pendientes</a></li>
                                    </ul>
                                </li>
                                <!-- ESOTÉRICO -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Esotérico
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item a-navbar" href="../esoterico/barajastarot.php">Barajas de Tarot</a></li>     
                                        <li><a class="dropdown-item a-navbar" href="../esoterico/aguaesoterica.php">Agua Esotérica</a></li>
                                        <li><a class="dropdown-item a-navbar" href="../esoterico/velasritualizadas.php">Velas Ritualizadas</a></li>
                                    </ul>
                                </li>
                                <!-- KITS PARA REGALAR-->
                               <li class="nav-item">
                                <a class="nav-link a-navbar" href="../kits/kitsregalo.php" role="button">
                                    Kits de regalo
                                </a>
                                </li>
                                <!-- ICONO USER -->
                               <li class="nav-item">
                                    <?php
                                    // Verificar si el usuario ha iniciado sesión
                                    if (isset($_SESSION['email-login'])) {
                                        // Si ha iniciado sesión, dirigir al usuario a micuenta.php
                                        echo '<a class="nav-link a-navbar" href="../../cuenta/micuenta.php" role="button" aria-expanded="false">';
                                    } else {
                                        // Si no ha iniciado sesión, dirigir al usuario a cuenta.php
                                        echo '<a class="nav-link a-navbar" href="../../cuenta/cuenta.php" role="button" aria-expanded="false">';
                                    }
                                    ?>
                                        <i class="bi bi-person-circle"></i>
                                    </a>
                                </li>
                               <!-- BUSCADOR -->
                                <li class="nav-item">
                                    <a class="nav-link a-navbar" role="button" aria-expanded="false" id="searchIcon">
                                        <i class="bi bi-search"></i>
                                    </a>
                                    <form action="../../busqueda/busqueda/buscar-productos.php" method="GET" id="searchForm" class="d-none buscador">
                                        <input type="text" name="query" placeholder="Buscar productos...">
                                    </form>
                                </li>
                                <!-- CARRITO -->
                                 <li class="nav-item">
                                    <a class="nav-link a-navbar" href="../../carrito/carrito.php" role="button" aria-expanded="false">
                                        <i class="bi bi-cart-fill"></i>
                                    </a>
                                </li>
                                
                            </ul>
                            <!-- BUSCADOR -->
                            <!-- <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
        <!-- FINAL HEADER -->

        <!-- INICIO MAIN -->
        <main>
       
            <!-- INICIO FOTO -->
                 <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-inner carrusel-principal mb-5">
                         <div class="carousel-item active">
                             <img src="../../img/portada-collares.png" class="d-block w-100 img-carrusel" style="width: 800px; height: auto;" alt="...">
                         </div>
                     </div>
                 </div>
             <!-- FINAL FOTO -->
 
             <!-- INICIO TEXTO -->
             <section class="texto-productos">
                 <div class="container">
                     <div class="row">
                         <div class="col-12 ps-lg-5 ">
                             <div class="caja-texto-productos">
                                 <h2>🔮 Collares Esotéricos: Portales de Sabiduría y Protección</h2>
                                 <p class="mt-lg-2 texto1-productos">Explora nuestros collares esotéricos, símbolos de conexión con lo divino y guardianes de energía sagrada. Cada collar está meticulosamente elaborado con cristales, amuletos y símbolos ancestrales para ofrecerte sabiduría y protección en tu camino espiritual.</p>
                                 <p class="mt-lg-2 texto2-productos">Descubre nuestra colección de collares, desde aquellos que incorporan piedras de sanación hasta otros que representan antiguos símbolos espirituales. Cada joya es un recordatorio constante de tu conexión con el universo y una herramienta para elevar tu conciencia y fortalecer tu aura.</p>
                                 <p class="mt-lg-2 texto-3"> <strong>¡Lleva contigo la magia de nuestros collares esotéricos y permite que te guíen hacia la luz y la protección en tu jornada espiritual! ✨📿 </strong> </p>	
                             </div>
                             
                         </div>
                     </div>
                 </div>
             </section>
 
             <!-- FINAL TEXTO -->
 
             <!-- INICIO PRODUCTOS -->
             <!-- INICIO CATEGORÍAS -->
             <section class="categorias mt-5 mb-5">
                 <div class="container">
                     <!-- PRIMERA FILA CATEGORIAS -->
                     <div class="row  d-flex flex-row ">
                         <div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                             <a href="collarsodalita.php">
                                 <img src="../../img/collar-sodalita.jpg"  alt="" class="imagenescategorias">
                             </a>
                             <h6 class="texto-productos mt-2">Collar Punta de Sodalita en Plata de Ley</h6>
                             <p class="precio">30,00€ </p>
                         </div>
 
                         <div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                             <a href="collarlemuriano.php">
                                 <img src="../../img/collar-cuarzolemuriano.jpg"  alt="" class="imagenescategorias">
                             </a>
                             <h6 class="texto-productos mt-2">Collar Punta de Cuarzo Lemuriano en Plata de Ley</h6>
                             <p class="precio">39,00€ </p>
                         </div>
 
                         <div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                             <a href="collarcitrino.php">
                                 <img src="../../img/collar-citrino.jpg"  alt="" class="imagenescategorias">
                             </a>
                             <h6 class="texto-productos mt-2">Collar Punta de Citrino Natural en Plata de Ley</h6>
                             <p class="precio">39,00€ </p>
                         </div>
 
                         <div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                             <a href="collaragata.php">
                                 <img src="../../img/collar-agata.jpg"  alt="" class="imagenescategorias">
                             </a>
                             <h6 class="texto-productos mt-2">Collar Corazon de Ágata Natural en Plata de Ley</h6>
                             <p class="precio">29,00€ </p>
                         </div>
 
                     </div>
                     <!-- SEGUNDA FILA CATEGORIAS -->
                     <div class="row  d-flex flex-row mt-2">
                         <div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                             <a href="collaramatista.php">
                                 <img src="../../img/collar-amatista.jpg"  alt="" class="imagenescategorias">
                             </a>
                             <h6 class="texto-productos mt-2">Collar Corazon de Amatista en Plata de Ley</h6>
                             <p class="precio">29,00€ </p>
                         </div>
 
                         <div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                             <a href="collarpiedramalaquita.php">
                                 <img src="../../img/collar-malaquita.jpg"  alt="" class="imagenescategorias">
                             </a>
                             <h6 class="texto-productos mt-2">Collar de Plata de Ley con Piedra Malaquita</h6>
                             <p class="precio">35,00€ </p>
                         </div>
 
                         <div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                             <a href="collarcuarzorosa.php">
                                 <img src="../../img/collar-cuarzorosa.jpg"  alt="" class="imagenescategorias">
                             </a>
                             <h6 class="texto-productos mt-2">Collar de Cuarzo Rosa con Calcita Amarilla en Plata 925</h6>
                             <p class="precio">35,00€ </p>
                         </div>
 
                         
 
                         <div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                             <a href="collarturmalinado.php">
                                 <img src="../../img/collar-turmalinado.jpg"  alt="" class="imagenescategorias">
                             </a>
                             <h6 class="texto-productos mt-2">Collar Corazon de Cuarzo Turmalinado en Plata de Ley </h6>
                             <p class="precio">35,00€ </p>
                         </div>
                     </div>
                 </div>
                 
             </section>
 
             <!-- FINAL CATEGORÍAS -->
 
             <!-- FINAL PRODUCTOS -->
 
 
         </main>
         <!-- FINAL MAIN -->
        

        <!-- INICIO FOOTER -->
       <footer class="container-footer">
        <div class="container  " >
            <div class="row  d-flex flex-row">
                <!-- PRIMERA COLUMNA FOOTER -->
                <div class="col-4">
                    <div class="primera-columna-footer mt-5 mb-5">
                        <p class="enlacedeinteres "><strong>ENLACE DE INTERÉS</strong></p>
                        <a href="#">Aviso Legal</a>
                        <br>
                        <a href="#">Política de Privacidad</a>
                        <br>
                        <a href="#">Política de Envíos y Devoluciones</a>
                        <br>
                        <a href="#">Política de Cookies</a>
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
    <script src="../../bootstrap/js/jquery-3.7.1.min.js"></script>
    <!-- INCLUYO JS DE BOOTSTRAP QUE INCLUYE POPPER.JS -->
    <script src="../../bootstrap/js/bootstrap.bundle.js"></script>

    <!-- BUSCADOR -->
    <script>
        document.getElementById('searchIcon').addEventListener('click', function() {
            document.getElementById('searchForm').classList.toggle('d-none');
        });
    </script>
    
</body>
</html>