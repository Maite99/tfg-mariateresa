
<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/style.css">
    <!-- PARA LOS ICONOS DE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="icon" href="img/favicon.jpg" type="image/x-icon">
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
                         <a class="navbar-brand" href="index.php">
                            <img src="img/logo2.jpg" alt="logo" width="130" height="100">
                        </a> 
                        <!-- NOMNRE EN NAVBAR -->
                        <a class="navbar-brand mt-2 nombre-navbar cantata-one-regular" href="index.php">Místico</a>

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
                                    <a class="nav-link  a-navbar" aria-current="page" href="index.php">Inicio</a>
                                </li>
                                <!-- INCIENSOS -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Inciensos
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item a-navbar" href="productos/inciensos/inciensos.php">Inciensos</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/inciensos/portainciensos.php">Quemadores / Porta-inciensos</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/inciensos/palosanto.php">Palo Santo y Hierbas</a></li>
                                    </ul>
                                </li>
                                <!-- MINERALES -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Minerales
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item a-navbar " href="productos/minerales/enformas.php">En formas</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/minerales/rodados.php">Rodados</a></li>
                                    </ul>
                                </li>
                                <!-- DECORACIÓN -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Decoración
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item a-navbar" href="productos/decoracion/altares.php">Altares</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/decoracion/velasdecorativas.php">Velas decorativas</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/decoracion/portavelas.php">Portavelas</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/decoracion/varios.php">Varios</a></li>
                                    </ul>
                                </li>
                                <!-- JOYAS -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Joyas
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item a-navbar" href="productos/joyas/pulseras.php">Pulseras</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/joyas/collares.php">Collares</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/joyas/anillos.php">Anillos</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/joyas/colgantes.php">Colgantes</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/joyas/pendientes.php">Pendientes</a></li>
                                    </ul>
                                </li>
                                <!-- ESOTÉRICO -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle a-navbar" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Esotérico
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item a-navbar" href="productos/esoterico/barajastarot.php">Barajas de Tarot</a></li>     
                                        <li><a class="dropdown-item a-navbar" href="productos/esoterico/aguaesoterica.php">Agua Esotérica</a></li>
                                        <li><a class="dropdown-item a-navbar" href="productos/esoterico/velasritualizadas.php">Velas Ritualizadas</a></li>
                                    </ul>
                                </li>
                                <!-- KITS PARA REGALAR-->
                                <li class="nav-item">
                                    <a class="nav-link a-navbar" href="productos/kits/kitsregalo.php" role="button">
                                        Kits de regalo
                                    </a>
                                </li>
                                <!-- ICONO USER -->
                                <li class="nav-item">
                                    <?php
                                    // Verificar si el usuario ha iniciado sesión
                                    if (isset($_SESSION['email-login'])) {
                                        // Si ha iniciado sesión, dirigir al usuario a micuenta.php
                                        echo '<a class="nav-link a-navbar" href="cuenta/micuenta.php" role="button" aria-expanded="false">';
                                    } else {
                                        // Si no ha iniciado sesión, dirigir al usuario a cuenta.php
                                        echo '<a class="nav-link a-navbar" href="cuenta/cuenta.php" role="button" aria-expanded="false">';
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
                                    <form action="busqueda/busqueda/buscar-productos.php" method="GET" id="searchForm" class="d-none buscador">
                                        <input type="text" name="query" placeholder="Buscar productos...">
                                    </form>
                                </li>
                                
                                 <!-- CARRITO -->
                                 <li class="nav-item">
                                    <a class="nav-link a-navbar" href="#" role="button" aria-expanded="false">
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
            <!-- INICIO CARRUSEL -->
            <div id="carouselPrincipal" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner carrusel-principal">
                  <div class="carousel-item active">
                    <img src="img/fondo-carrusel1.jpg" class="d-block w-100 img-carrusel" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/fondo-carrusel2.jpg" class="d-block w-100 img-carrusel" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/fondo-carrusel3.jpg" class="d-block w-100 img-carrusel" alt="...">
                  </div>
                </div>
            </div>
            <!-- FIN CARRUSEL -->

            <!-- INICIO TEXTO CON IMÁGENES -->
            <section class="texto-imagenes mt-5 ml-5">
            	<div class="container">
            		<div class="row">
            			<div class="col-lg-5 col-md-12 col-12">
            				<div class="texto-imagenes-img">
            					<img src="img/texto1.jpg" class="img-fluid ms-lg-4" alt="">
            				</div>
            				
            			</div>
            			<div class="col-lg-6 col-md-12 col-12 ps-lg-5 ">
            				<div class="texto-imagenes-txt">
            					<h1 class="titulo-texto-1 mt-lg-4">Tienda esotérica online</h1>
            					<h2>Descubre un mundo de magia y misterio</h2>
            					<p class="mt-lg-2 texto-1">¡Bienvenidos a nuestro santuario virtual de productos espirituales y esotéricos! donde encontrarás una amplia gama de cuarzos, piedras de sanación, objetos de brujería, velas, inciensos y más. <br> Navega por nuestro catálogo cuidadosamente seleccionado para encontrar las herramientas perfectas para tu práctica espiritual. Entra en el fascinante universo de la espiritualidad y la magia con nosotros.</p>
                                <p class="mt-lg-2 texto-1-2"> <strong>¡Encuentra la esencia de tu ser interior y despierta tu potencial místico! </strong> </p>	
            				</div>
            			</div>
            		</div>
            	</div>
            </section>

            <section class="texto-imagenes mt-5 ml-5">
            	<div class="container">
            		<div class="row">
            			<div class="col-lg-6 col-md-12 col-12 ps-lg-5 ">
            				<div class="texto-imagenes-txt">
            					<!-- <h1>Tienda esotérica online</h1> -->
            					<h2 class="mt-lg-5 subtitulo-texto-2">Despierta tu potencial místico</h2>
            					<p class="mt-lg-2 texto-2">Este es un espacio dedicado a ti, amante de las buenas energías. Con nuestros productos podrás enriquecer tus meditaciones diarias, rituales y lecturas de tarot. Los artículos están seleccionados con mimo y cuidado para sorprenderte y que puedas regalarte y regalar artículos con intención espiritual.</p>	
            				</div>
            			</div>

            			<div class="col-lg-5 col-md-12 col-12">
            				<div class="texto-imagenes-img">
            					<img src="img/texto2.jpg" class="img-fluid" alt="">
            				</div>
            				
            			</div>
            		</div>
            	</div>
            </section>

            <!-- FINAL TEXTO CON IMÁGENES -->

            <!-- INICIO CATEGORÍAS -->
            <section class="categorias mt-5 mb-5">
            	<div class="container">
                    <div class="row titulo-categorias">
                        <div class="col-12">
                            <h2 class="mb-5">Categorías TOP</h2>
                        </div>
                    </div>
            		<!-- PRIMERA FILA CATEGORIAS -->
            		<div class="row  d-flex flex-row ">
            			<div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                            <a href="productos/inciensos/inciensos.php">
                                <img src="img/categoria-inciensos.jpg"  alt="" class="imagenescategorias">
                            </a>
                            <h5 class="texto-categorias mt-2">Inciensos</h5>
            			</div>

                        <div class="categoria-portainciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                            <a href="productos/inciensos/portainciensos.php">
                                <img src="img/categoria-portainciensos.jpg"  alt="" class="imagenescategorias">
                            </a>
                            <h5 class="texto-categorias mt-2">Porta-inciensos</h5>
            			</div>

                        <div class="categoria-cristalesyminerales col-lg-3 col-md-6 col-sm-6 mr-2">
                            <a href="productos/minerales/rodados.php">
                                <img src="img/categoria-rodados.jpg"  alt="" class="imagenescategorias">
                            </a>
                            <h5 class="texto-categorias mt-2">Minerales Rodados</h5>
            			</div>

                        <div class="categoria-velas col-lg-3 col-md-6 col-sm-6 mr-2">
                            <a href="productos/decoracion/velasdecorativas.php">
                                <img src="img/categoria-velas.jpg"  alt="" class="imagenescategorias">
                            </a>
                            <h5 class="texto-categorias mt-2">Velas</h5>
            			</div>

            		</div>
					<!-- SEGUNDA FILA CATEGORIAS -->
            		<div class="row  d-flex flex-row mt-2">
            			<div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                            <a href="productos/decoracion/portavelas.php">
                                <img src="img/categoria-portavelas.jpg"  alt="" class="imagenescategorias">
                            </a>
                            <h5 class="texto-categorias mt-2">Porta-velas</h5>
            			</div>

                        <div class="categoria-incienso col-lg-3 col-md-6 col-sm-6 mr-2">
                            <a href="productos/joyas/colgantes.php">
                                <img src="img/categorias-joyas.jpg"  alt="" class="imagenescategorias">
                            </a>
                            <h5 class="texto-categorias mt-2">Colgantes</h5>
            			</div>

                        <div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                            <a href="productos/esoterico/barajastarot.php">
                                <img src="img/categorias-tarot.jpg"  alt="" class="imagenescategorias">
                            </a>
                            <h5 class="texto-categorias mt-2">Tarot</h5>
            			</div>

                        <div class="categoria-inciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                            <a href="productos/kits/kitsregalo.php">
                                <img src="img/categorias-kitsderegalo.jpg"  alt="" class="imagenescategorias">
                            </a>
                            <h5 class="texto-categorias mt-2">Kits de regalo</h5>
            			</div>

            		</div>
            	</div>
            	
            </section>

            <!-- FINAL CATEGORÍAS -->

            <!-- INICIO INFORMACIÓN -->
            <section class="section-informacion mt-5 mb-5">
                <div class="container-informacion">
                    <div class="row">
                        <div class="informacion col-lg-3 col-md-6 col-sm-6 mr-2">
                            <i class="icono-informacion bi bi-airplane"></i>
                            <h4 class="texto-categorias mt-2">Envíos nacionales</h4>
                            <p>Envíos gratis a partir de 25€</p>
            			</div>

                        <div class="informacion col-lg-3 col-md-6 col-sm-6 mr-2">
                            <i class=" icono-informacion bi bi-gift"></i>
                            <h4 class="texto-categorias mt-2">Regalos inolvidables</h4>
                            <p>Regalos que marcan la diferencia</p>
            			</div>

                        <div class="informacion col-lg-3 col-md-6 col-sm-6 mr-2">
                            <i class=" icono-informacion bi bi-info-square"></i>
                            <h4 class="texto-categorias mt-2">Productos exclusivos</h4>
                            <p>Información detallada en cada producto</p>
            			</div>

                        <div class="informacion col-lg-3 col-md-6 col-sm-6 mr-2">
                            <i class="icono-informacion bi bi-house-heart"></i>
                             <h4 class="texto-categorias mt-2">Garantía de satisfacción</h4>
                             <p>Tu tranquilidad, nuestra prioridad</p>
            			</div>
                    </div>

                </div>
            </section>

            <!-- FINAL INFORMACIÓN -->

            <!-- INICIO LOS MÁS VENDIDOS -->
             <section class="vendidos mt-5">
                <div class="container-fluid"> 
                    <!-- título -->
                     <div class="row titulo-vendidos">
                        <div class="col">
                            <h2>Los más vendidos</h2>
                        </div>
                    </div>

            
                    <!-- productos -->
                    <div class="row caja-productos mt-5 ">
                        <div class="col-lg-2 col-md-3 col-6">
                            <a href="productos/esoterico/aguaflorida.php"><img src="img/aguaesoterica-murrayylanman.jpg" class="img-vendidos d-block w-100" alt="Producto 1"> </a>
                            <h5>Agua de Florida Murray & Lanman</h5>
                            <p>8,50€</p>
                        </div>
                        
                        <div class="col-lg-2 col-md-3 col-6">
                        <a href="productos/minerales/formacuencoselenitaluna.php"> <img src="img/mineral-forma-cuenco.jpeg" class="img-vendidos d-block w-100" alt="Producto 2"></a>
                            <h5>Cuenco de Selenita Grande Luna</h5>
                            <p>21,00€</p>
                        </div>

                        <div class="col-lg-2 col-md-3 col-6">
                        <a href="productos/decoracion/lamparasalhimalaya.php"> <img src="img/decoracion-lampara-salhimalaya.png" class="img-vendidos d-block w-100" alt="Producto 2"></a>
                            <h5>Lámpara de Sal del Himalaya</h5>
                            <p>12,50€</p>
                        </div>

                        <div class="col-lg-2 col-md-3 col-6">
                        <a href="productos/esoterico/oraculo7energias.php"> <img src="img/tarot-7energias.png" class="img-vendidos d-block w-100" alt="Producto 2"></a>
                            <h5>El Oráculo de las 7 Energías</h5>
                            <p>20,60€</p>
                        </div>
                        
                        <div class="col-lg-2 col-md-3 col-6">
                        <a href="productos/inciensos/portainciensokuroi.php"><img src="img/incensario-kuroi.jpg" class="img-vendidos d-block w-100" alt="Producto 2"></a>
                            <h5>Incensario Kuroi</h5>
                            <p>10,50€</p>
                        </div>
                    </div> 
                 </div>
             </section>
            
            <!-- FINAL LOS MÁS VENDIDOS -->

            
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
                            <a href="enlacesdeinteres/avisolegal.php" target="_blank">Aviso Legal</a>
                            <br>
                            <a href="enlacesdeinteres/politicadeprivacidad.php" target="_blank">Política de Privacidad</a>
                            <br>
                            <a href="enlacesdeinteres/politicadeenviosydevoluciones.php" target="_blank">Política de Envíos y Devoluciones</a>
                            <br>
                            <a href="enlacesdeinteres/politicadecookies.php" target="_blank">Política de Cookies</a>
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
    <script src="bootstrap/js/jquery-3.7.1.min.js"></script>
    <!-- INCLUYO JS DE BOOTSTRAP QUE INCLUYE POPPER.JS -->
    <script src="bootstrap/js/bootstrap.bundle.js"></script>

    <!-- BUSCADOR -->
    <script>
        document.getElementById('searchIcon').addEventListener('click', function() {
            document.getElementById('searchForm').classList.toggle('d-none');
        });
    </script>
    
</body>
</html>