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

    <title>Místico - Política de Envíos y Devoluciones</title>
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
                                    <a class="nav-link a-navbar" href="../cuenta/cuenta.php" role="button" aria-expanded="false">
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
                                    <a class="nav-link a-navbar" href="#" role="button" aria-expanded="false">
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
            <h1 style="text-align: center;">POLÍTICA DE ENVÍOS Y DEVOLUCIONES</h1>
            
            <h5>Envíos</h5>
                
            <p>Todos los envíos serán gratuitos a partir de 50€ en España Península (Baleares a partir de 60€) No se realizan envíos a Canarias debido a su alto coste. En el resto de Europa esta cantidad será de 90€. En cuanto a los plazos de entrega se cumplirán siempre, excepto en casos circunstanciales considerados de fuerza mayor que impidan cumplir con dichos plazos. 

            Las empresas con la que se enviarán los productos se combinarán entre las más importantes de España siendo las más utilizadas Correos y Correos Express Paq24 aunque las compañías podrían variar dependiendo de las circunstancias o destino. Siempre elegiremos la más rápida y conveniente para el cliente.
            
            Para envíos fuera de la Unión Europea por favor seleccione su país y los precios se actualizarán automáticamente, si tiene alguna duda no dude en ponerse en contacto con nosotros info@mistico.com  o via whatapp +34 618398065 </p>

            <h5>Garantías</h5>
           <p>La garantía de los productos es la estipulada por el fabricante. Si tiene alguna duda de cómo proceder con la garantía en caso de necesitar hacer uso de la misma contáctenos en info@mistico.com  o en el +34 618398065 y le ayudaremos a gestionarla. </p>
            
            <h5>Política de Devoluciones</h5>
            <p>En ecochoa.com, nos comprometemos a garantizar la satisfacción y confianza total de nuestros clientes. Siguiendo las disposiciones legales del Real Decreto Legislativo 1/2007 del Texto Refundido de la Ley General de Consumidores, nuestros clientes tienen el derecho a ejercer el desistimiento de la compra a través de los espacios de contacto habilitados en nuestro sitio web o enviando un correo electrónico a info@mistico.com.

                El plazo de desistimiento comienza a contar desde el día en que recibes el producto.
                No obstante si necesita asistencia alternativa para resolver su problema de consumo le animamos a que visite la Plataforma de resolución de litigios en línea de la Unión Europea en el siguiente enlace Plataforma de resolución de litigios de la Unión Europea a la que se refiere el Reglamento (EU) nº 524/2013 del Parlamento Europeo y del Consejo, de 21 de mayo de 2013, relativa a la resolución alternativa de litigios en materia de consumo.</p>
            

            <h5>Devoluciones</h5>
            <p>Nuestra política de devoluciones tiene una duración de 14 días. Si han pasado 14 días desde tu compra, lamentablemente no podemos ofrecer un reembolso o cambio.

                Para ser elegible para una devolución, el artículo debe estar sin usar y en las mismas condiciones en que lo recibiste, además de estar en su embalaje original.
                
                El procedimiento para ejercer el desistimiento o devolución de la compra requiere:
                <ol>
                    <li>Notificación por correo electrónico en un plazo no superior a 14 días desde la fecha de recepción del pedido a info@mistico.com o bien via whatapp al +34 618398065</li>
                    <li>Devolución del producto en perfecto estado en su embalaje original.</li>
                    <li>El envío de devolución corre por cuenta del cliente y debe realizarse a nuestra dirección: Calle Mesilla del Diente, Mansión 8, 1º izquierda, San Roque, Cádiz, C.P.11360. No olvides incluir el número de pedido original.</li>
                </ol>
                En caso de no cumplir con los requisitos anteriores, nos pondremos en contacto contigo para aclarar cualquier duda o incidencia detectada.

                Una vez que recibamos e inspeccionemos tu devolución, te notificaremos por correo electrónico. Después de verificar que la devolución cumple con los requisitos, procederemos al abono del 100% del importe pagado por el cliente correspondiente a la mercancía devuelta. El abono se realizará del mismo modo en que realizaste la compra o por transferencia, en un plazo inferior a 5 días laborales. Ten en cuenta que no se devolverá el importe correspondiente a los envíos.
            </p>

                <h5>Producto Roto o Defectuoso</h5>
                <p>LSi un producto llega roto o defectuoso, contáctanos en las primeras 48 horas a través de nuestro correo electrónico info@ecochoa.com o via whatapp +34 693728706, indicando tu nombre y número de pedido. No nos haremos responsables de roturas notificadas después de este periodo o debidas al uso inadecuado por parte del cliente.

                    Es necesario proporcionar fotografías del producto defectuoso para su evaluación. Posteriormente, podrás optar por la reposición del producto (sujeto a disponibilidad) o el reembolso del importe.
                    
                    El reembolso o la sustitución se realizará dentro de los 14 días siguientes a la confirmación por nuestra parte.
                    
                    Ten en cuenta que no nos hacemos responsables de la rotura prematura de un producto debido a su mal uso, especialmente en el caso de minerales frágiles o pulseras de goma elástica.</p>
                
                <h5>Envío de Devolución</h5>
                <p>Para devolver tu producto, envíalo a: Calle Mesilla del Diente, Mansión 8, 1º izquierda, San Roque, Cádiz, C.P.11360.

                    El cliente es responsable de los costes de envío de retorno. Estos costes no son reembolsables. En caso de reembolso, el coste del envío de la devolución se deducirá del importe total.
                    
                    Si estás enviando un producto de valor superior a 50€, se recomienda utilizar un servicio de envío rastreable.</p>
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