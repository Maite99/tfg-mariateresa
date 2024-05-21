<?php 
session_start();
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

    <title>Místico - Política de Cookies</title>
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
                                <!-- ICONO USER -->
                                <li class="nav-item">
                                    <?php
                                    // Verificar si el usuario ha iniciado sesión
                                    if (isset($_SESSION['email-login'])) {
                                        // Si ha iniciado sesión, dirigir al usuario a micuenta.php
                                        echo '<a class="nav-link a-navbar" href="../cuenta/micuenta.php" role="button" aria-expanded="false">';
                                    } else {
                                        // Si no ha iniciado sesión, dirigir al usuario a cuenta.php
                                        echo '<a class="nav-link a-navbar" href="../cuenta/cuenta.php" role="button" aria-expanded="false">';
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
                                    <form action="../busqueda/busqueda/buscar-productos.php" method="GET" id="searchForm" class="d-none buscador">
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
        <hr>
        <!-- FINAL HEADER -->


        <!-- INICIO MAIN -->
       <div class="texto-enlacesdeinteres">
        <div class="row">
            <div class="col">
            <h1 style="text-align: center;">POLÍTICA DE COOKIES</h1>
            
            <h5>1. ANTECEDENTES</h5>
                
            <p>De conformidad con la normativa española que regula el uso de cookies en relación a la prestación de servicios de comunicaciones electrónicas, recogida en el Real Decreto Ley 13/2012 del 30 de marzo, te informamos sobre las cookies utilizadas en el sitio web de Mystical Tienda y el motivo de su uso. Asimismo, le informamos de que al navegar en el Sitio Web estás prestando tu consentimiento para poder utilizarlas.  </p>

            <h5>2. ¿QUE SON LAS COOKIES?</h5>
           <p>Una cookie es un fichero que se descarga en tu ordenador al acceder a determinadas páginas web. Las cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de la forma en que utilice el equipo, pueden utilizarse para reconocer al usuario. Las cookies se asocian únicamente a un usuario anónimo y su ordenador o dispositivo y no proporcionan referencias que permitan conocer tus datos personales.</p>
            
            <h5>3. TIPOS DE COOKIES</h5>
            <ol>
                <li>Cookies propias: Son aquéllas que se envían al equipo terminal del usuario desde un equipo o dominio gestionado por el propio editor y desde el que se presta el servicio Solicitado por el usuario.</li>
                <li>Cookies de terceros: Son aquéllas que se envían al equipo terminal del usuario desde un equipo o dominio que no es gestionado por el editor, sino por otra entidad que trata los datos obtenidos través de las cookies.</li>
                <li> Cookies de sesión: Son un tipo de cookies diseñadas para recabar y almacenar datos mientras el usuario accede a una página web.</li>
                <li>Cookies persistentes: Son un tipo de cookies en el que los datos siguen almacenados en el terminal y pueden ser accedidos y tratados durante un periodo definido por el responsable de la cookie, y que puede ir de unos minutos a varios años.</li>
                <li>Cookies de análisis: Son aquéllas que bien tratadas por nosotros o por terceros, nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de la utilización que hacen los usuarios del servicio ofertado. Para ello se analiza su navegación en nuestra página web con el fin de mejorar la oferta de productos o servicios que le ofrecemos.</li>
                <li>Cookies publicitarias: Son aquéllas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado en base a criterios como el contenido editado o la frecuencia en la que se muestran los anuncios.</li>
                <li>Cookies de publicidad comportamental: Son aquéllas que permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios que, en su caso, el editor haya incluido en una página web, aplicación o plataforma desde la que presta el servicio solicitado. Estas cookies almacenan información del comportamiento de los usuarios obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo. Asimismo es posible que al visitar alguna página web o al abrir algún email donde se publique algún anuncio o alguna promoción sobre nuestros productos o servicios se instale en tu navegador alguna cookie que nos sirve para mostrarte posteriormente publicidad relacionada con la búsqueda que hayas realizado, desarrollar un control de nuestros anuncios en relación, por ejemplo, con el número de veces que son vistos, donde aparecen, a qué hora se ven, etc.</li>
            </ol>

            <h5>4. TIPOS DE COOKIES UTILIZADAS POR ESTE SITIO WEB</h5>
            <p>Las cookies de análisis permiten medir y analizar la actividad de los sitios web y elaborar perfiles de navegación de los usuarios.

                Utilizamos las cookies de GOOGLE ANALYTICS para recopilar estadísticas anónimas y conjuntas que nos permitan comprender la forma en que los usuarios utilizan nuestra web, con el fin de mejorarla y ajustarla a las preferencias de nuestros visitantes.
                GOOGLE ANALYTICS es una herramienta provista por la empresa Google, Inc., 1600 Amphitheatre Parkway. Mountain View, CA 94043. EE.UU. Puede obtener más información sobre el funcionamiento de GOOGLE ANALYTICS y las cookies utilizadas por este servicio en los siguientes enlaces:
                <ul>
                    <li><a href="https://support.google.com/analytics/answer/6004245">https://support.google.com/analytics/answer/6004245</a></li>
                    <li><a href="http://www.google.com/intl/es/policies/privacy/">http://www.google.com/intl/es/policies/privacy/</a></li>
                </ul>
                Puede desactivar las cookies de GOOGLE ANALYTICS mediante la instalación en su navegador del complemento de inhabilitación creado por Google y disponible en el siguiente enlace: https://tools.google.com/dlpage/gaoptout?hl=es

En todo momento podrás acceder a la configuración de tu navegador aceptando o rechazando todas las cookies, o bien seleccionar aquéllas cuya instalación admites y cuáles no.
            </p>

            <h5>¿Cómo puedo gestionar las cookies?</h5>
            <p>
                Los usuarios de la web tienen la opción de no recibir cookies, borrarlas o de ser informados acerca de su fijación mediante la configuración de su navegador. Para saber cómo gestionar las cookies en su navegador, le invitamos a que consulte la ayuda del mismo.

Para su comodidad, a continuación, encontrará información proporcionada por los desarrolladores de los principales navegadores sobre la gestión de cookies:
                <ul>
                    <li>Chrome, <a href="http://support.google.com/chrome/bin/answer.py?hl=es&answer=95647">http://support.google.com/chrome/bin/answer.py?hl=es&answer=95647</a></li>
                    <li>Explorer, <a href="http://windows.microsoft.com/es-es/windows-vista/block-or-allow-cookies">http://windows.microsoft.com/es-es/windows-vista/block-or-allow-cookies</a></li>
                    <li>Firefox, <a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias">https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias</a></li>
                    <li>Safari, <a href="https://support.apple.com/kb/index?q=manage+cookies&src=globalnav_support&type=organic&page=search&locale=es_ES">https://support.apple.com/kb/index?q=manage+cookies&src=globalnav_support&type=organic&page=search&locale=es_ES</a></li>
                </ul>
                En caso de desactivar las cookies, es posible que no pueda hacer uso de todas las funcionalidades de la web.

Para inhabilitar el uso de cookies publicitarias de terceros, los usuarios pueden igualmente visitar la página de inhabilitación de la Iniciativa publicitaria de la red (NAI, Network Advertising Initiative. Página en inglés: http://www.networkadvertising.org/managing/opt_out.asp).
            </p>
            
            </div>
        </div>
    </div>

<!-- FINAL MAIN -->
       


       
       <!-- INICIO FOOTER -->
       <footer class="container-footer">
        <div class="container  " >
            <div class="row  d-flex flex-row">
                <!-- PRIMERA COLUMNA FOOTER -->
                <div class="col-4">
                    <div class="primera-columna-footer mt-5 mb-5">
                        <p class="enlacedeinteres "><strong>ENLACE DE INTERÉS</strong></p>
                        <a href="avisolegal.php" target="_blank">Aviso Legal</a>
                        <br>
                        <a href="politicadeprivacidad.php" target="_blank">Política de Privacidad</a>
                        <br>
                        <a href="politicadeenviosydevoluciones.php" target="_blank">Política de Envíos y Devoluciones</a>
                        <br>
                        <a href="politicadecookies.php" target="_blank">Política de Cookies</a>
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