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

    <title>Místico - Aviso Legal</title>
</head>
<body >
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
                    <h1 style="text-align: center;">AVISO LEGAL</h1>
                        <h5>1.    OBJETO</h5>
                <p>El presente aviso legal regula el uso y utilización del sitio web del que es titular Maria Teresa Ramirez (en adelante, EL PROPIETARIO DE LA WEB).

                    La navegación por el sitio web de EL PROPIETARIO DE LA WEB le atribuye la condición de USUARIO del mismo y conlleva su aceptación plena y sin reservas de todas y cada una de las condiciones publicadas en este aviso legal, advirtiendo de que dichas condiciones podrán ser modificadas sin notificación previa por parte de EL PROPIETARIO DE LA WEB, en cuyo caso se procederá a su publicación y aviso con la máxima antelación posible.
                    
                    Por ello es recomendable leer atentamente su contenido en caso de desear acceder y hacer uso de la información y de los servicios ofrecidos desde este sitio web.
                    
                    El usuario, además, se obliga a hacer un uso correcto del sitio web de conformidad con las leyes, la buena fe, el orden público, los usos del tráfico y el presente Aviso Legal, y responderá frente a EL PROPIETARIO DE LA WEB o frente a terceros, de cualesquiera daños y perjuicios que pudieran causarse como consecuencia del incumplimiento de dicha obligación.
                    
                    Cualquier utilización distinta a la autorizada está expresamente prohibida, pudiendo EL PROPIETARIO DE LA WEB denegar o retirar el acceso y su uso en cualquier momento.</p>

                    <h5>2.    IDENTIFICACIÓN</h5>
                    <p>EL PROPIETARIO DE LA WEB, en cumplimiento de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico, le informa de que:
                        <ul>
                            <li>Su denominación social es: Maria Teresa Ramirez</li>
                            <li>Su CIF es: 12345678Q</li>
                            <li>Su domicilio social está en: CALLE MESILLA DEL DIENTE, MANSIÓN 8, 1º IZQ– 12345 – SAN ROQUE – CÁDIZ</li>
                            <li>[DATOS DE INSCRIPCIÓN EN EL REGISTRO MERCANTIL, EN SU CASO]</li>
                        </ul>
                    </p>

                    <h5>3.    COMUNICACIONES</h5>
                    <p>Para comunicarse con nosotros, ponemos a su disposición la siguiente dirección email: info@ecochoa.com

                        Todas las notificaciones y comunicaciones entre los usuarios y PROPIETARIO DE LA WEB se considerarán eficaces, a todos los efectos, cuando se realicen a través del método detallado  anteriormente.</p>
                    <h5>4.    CONDICIONES DE ACCESO Y UTILIZACIÓN</h5>
                    <p>El sitio web y sus servicios son de acceso libre y gratuito. No obstante, PROPIETARIO DE LA WEB puede condicionar la utilización de algunos de los servicios ofrecidos en su web a la previa cumplimentación del correspondiente formulario.

                        El usuario garantiza la autenticidad y actualidad de todos aquellos datos que comunique a PROPIETARIO DE LA WEB y será el único responsable de las manifestaciones falsas o inexactas que realice.
                        
                        El usuario se compromete expresamente a hacer un uso adecuado de los contenidos y servicios de PROPIETARIO DE LA WEB y a no emplearlos para, entre otros:
                        <ul>
                            <li> Difundir contenidos delictivos, violentos, pornográficos, racistas, xenófobos, ofensivos, de apología del terrorismo o, en general, contrarios a la ley o al orden público.</li>
                            <li> Introducir en la red virus informáticos o realizar actuaciones susceptibles de alterar, estropear, interrumpir o generar errores o daños en los documentos electrónicos, datos o sistemas físicos y lógicos de PROPIETARIO DE LA WEB o de terceras personas; así como obstaculizar el acceso de otros usuarios al sitio web y a sus servicios mediante el consumo masivo de los recursos informáticos a través de los cuales PROPIETARIO DE LA WEB presta sus servicios.</li>
                            <li> Intentar acceder a las cuentas de correo electrónico de otros usuarios o a áreas restringidas de los sistemas informáticos de PROPIETARIO DE LA WEB o de terceros y, en su caso, extraer información.</li>
                            <li> Vulnerar los derechos de propiedad intelectual o industrial, así como violar la confidencialidad de la información de PROPIETARIO DE LA WEB o de terceros.</li>
                            <li> Suplantar la identidad de cualquier otro usuario.</li>
                            <li> Reproducir, copiar, distribuir, poner a disposición de, o cualquier otra forma de comunicación pública, transformar o modificar los contenidos, a menos que se cuente con la autorización del titular de los correspondientes derechos o ello resulte legalmente permitido.</li>
                            <li> Recabar datos con finalidad publicitaria y de remitir publicidad de cualquier clase y comunicaciones con fines de venta u otras de naturaleza comercial sin que medie su previa solicitud o consentimiento.</li>
                        </ul>
                        Todos los contenidos del sitio web, como textos, fotografías, gráficos, imágenes, iconos, tecnología, software, así como su diseño gráfico y códigos fuente, constituyen una obra cuya propiedad pertenece a PROPIETARIO DE LA WEB, sin que puedan entenderse cedidos al usuario ninguno de los derechos de explotación sobre los mismos más allá de lo estrictamente necesario para el correcto uso de la web.
                        
                        En definitiva, los usuarios que accedan a este sitio web pueden visualizar los contenidos y efectuar, en su caso, copias privadas autorizadas siempre que los elementos reproducidos no sean cedidos posteriormente a terceros, ni se instalen a servidores conectados a redes, ni sean objeto de ningún tipo de explotación.
                        
                        Asimismo, todas las marcas, nombres comerciales o signos distintivos de cualquier clase que aparecen en el sitio web son propiedad de PROPIETARIO DE LA WEB, sin que pueda entenderse que el uso o acceso al mismo atribuya al usuario derecho alguno sobre los mismos.
                        
                        La distribución, modificación, cesión o comunicación pública de los contenidos y cualquier otro acto que no haya sido expresamente autorizado por el titular de los derechos de explotación quedan prohibidos.
                        
                        El establecimiento de un hiperenlace no implica en ningún caso la existencia de relaciones entre PROPIETARIO DE LA WEB y el propietario del sitio web en la que se establezca, ni la aceptación y aprobación por parte de PROPIETARIO DE LA WEB de sus contenidos o servicios.
                        
                        PROPIETARIO DE LA WEB no se responsabiliza del uso que cada usuario les dé a los materiales puestos a disposición en este sitio web ni de las actuaciones que realice en base a los mismos.</p>

                        <h5>4.1. EXCLUSIÓN DE GARANTÍAS Y DE RESPONSABILIDAD EN EL ACCESO Y LA UTILIZACIÓN</h5>
                        <p>El contenido del presente sitio web es de carácter general y tiene una finalidad meramente informativa, sin que se garantice plenamente el acceso a todos los contenidos, ni su exhaustividad, corrección, vigencia o actualidad, ni su idoneidad o utilidad para un objetivo específico.

                            PROPIETARIO DE LA WEB excluye, hasta donde permite el ordenamiento jurídico, cualquier responsabilidad por los daños y perjuicios de toda naturaleza derivados de:
                            <ul>
                                <li>La imposibilidad de acceso al sitio web o la falta de veracidad, exactitud, exhaustividad y/o actualidad de los contenidos, así como la existencia de vicios y defectos de toda clase de los contenidos transmitidos, difundidos, almacenados, puestos a disposición, a los que se haya accedido a través del sitio web o de los servicios que se ofrecen.</li>
                                <li>La presencia de virus o de otros elementos en los contenidos que puedan producir alteraciones en los sistemas informáticos, documentos electrónicos o datos de los usuarios.</li>
                                <li>El incumplimiento de las leyes, la buena fe, el orden público, los usos del tráfico y el presente aviso legal como consecuencia del uso incorrecto del sitio web. En particular, y a modo ejemplificativo, PROPIETARIO DE LA WEB no se hace responsable de las actuaciones de terceros que vulneren derechos de propiedad intelectual e industrial, secretos empresariales, derechos al honor, a la intimidad personal y familiar y a la propia imagen, así como la normativa en materia de competencia desleal y publicidad ilícita.</li>
                            </ul>
                            
                            Asimismo, PROPIETARIO DE LA WEB declina cualquier responsabilidad respecto a la información que se halle fuera de esta web y no sea gestionada directamente por nuestro webmaster. La función de los links que aparecen en esta web es exclusivamente la de informar al usuario sobre la existencia de otras fuentes susceptibles de ampliar los contenidos que ofrece este sitio web. PROPIETARIO DE LA WEB no garantiza ni se responsabiliza del funcionamiento o accesibilidad de los sitios enlazados; ni sugiere, invita o recomienda la visita a los mismos, por lo que tampoco será responsable del resultado obtenido. PROPIETARIO DE LA WEB no se responsabiliza del establecimiento de hipervínculos por parte de terceros.</p>
                        
                        <h5>4.2. PROCEDIMIENTO EN CASO DE REALIZACIÓN DE ACTIVIDADES DE CARÁCTER ILÍCITO</h5>
                        <p>En el caso de que cualquier usuario o un tercero considere que existen hechos o circunstancias que revelen el carácter ilícito de la utilización de cualquier contenido y/o de la realización de cualquier actividad en las páginas web incluidas o accesibles a través del sitio web, deberá enviar una notificación a PROPIETARIO DE LA WEB identificándose debidamente y especificando las supuestas infracciones.</p>
                  
                        <h5>4.3. PUBLICACIONES</h5>
                        <p>La información administrativa facilitada a través del sitio web no sustituye la publicidad legal de las leyes, normativas, planes, disposiciones generales y actos que tengan que ser publicados formalmente a los diarios oficiales de las administraciones públicas, que constituyen el único instrumento que da fe de su autenticidad y contenido. La información disponible en este sitio web debe entenderse como una guía sin propósito de validez legal.</p>

                        <h5>5.    LEGISLACIÓN APLICABLE</h5>
                        <p>Las condiciones presentes se regirán por la legislación española vigente.

                            La lengua utilizada será el Castellano.</p>

                        <h5>INFORMACIÓN CRISTALES </h5>
                        <p>Esta información no ha sido probada científicamente, se basa en la experiencia de usuarios y terapeutas. En caso de duda sobre su salud, consulte a un médico. Nos abstenemos de cualquier responsabilidad derivada del uso de los mismos. </p>


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