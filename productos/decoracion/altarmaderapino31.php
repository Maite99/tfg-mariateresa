<?php

        // CONEXION A LA BBDD
        $conexion = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

        // VERIFICAR LA CONEXION
        if (!$conexion) {
            die("La conexión ha fallado: " . mysqli_connect_error());
        }

        // SENTENCIA PARA OBTENER EL TITULO (NOMBRE) DEL PRODUCTO 
        $titulo = "SELECT nombre FROM productos WHERE id=48";

        // ESTABLECER LA QUERY PARA EL TITULO (NOMBRE)
            $query_titulo = mysqli_query($conexion, $titulo);

            // VERIFICAR SI LA CONSULTA FUE EXITOSA PARA EL TITULO
             if ($query_titulo) {
                // Obtener el resultado de la consulta para el titulo
                $fila_titulo = mysqli_fetch_assoc($query_titulo);
                
                // Asignar el nombre a la variable $titulo
                $titulo = $fila_titulo['nombre'];
                
                // Liberar el resultado
                mysqli_free_result($query_titulo);
                
            } else {
                // Si la consulta falla, mostrar un mensaje de error
                echo "Error al obtener el titulo: " . mysqli_error($conexion);
            }
        
        
        // SENTENCIA PARA OBTENER EL PRECIO DEL PRODUCTO 
        $precio = "SELECT precio FROM productos WHERE id=48";

        // ESTABLECER LA QUERY PARA EL PRECIO
            $query_precio = mysqli_query($conexion, $precio);

            // VERIFICAR SI LA CONSULTA FUE EXITOSA PARA EL PRECIO
            if ($query_precio) {
                // Obtener el resultado de la consulta para el precio
                $fila_precio = mysqli_fetch_assoc($query_precio);
                
                // Asignar el precio a la variable $precio
                $precio = $fila_precio['precio'];
                
                // Liberar el resultado
                mysqli_free_result($query_precio);
            } else {
                // Si la consulta falla, mostrar un mensaje de error
                echo "Error al obtener el precio: " . mysqli_error($conexion);
            }
        
        // SENTENCIA PARA OBTENER LA DESCRIPCIÓN DEL PRODUCTO 
        $descripcion = "SELECT descripcion FROM productos WHERE id=48";

            // ESTABLECER LA QUERY PARA EL DESCRIPCION
            $query_descripcion = mysqli_query($conexion, $descripcion);

            // VERIFICAR SI LA CONSULTA FUE EXITOSA PARA LA DESCRIPCION
            if ($query_descripcion) {
                // Obtener el resultado de la consulta para la descripcion
                $fila_descripcion = mysqli_fetch_assoc($query_descripcion);
                
                // Asignar la descripcion a la variable $descripcion
                $descripcion = $fila_descripcion['descripcion'];
                
                // Aplicar formato a la descripción: convertir saltos de línea en etiquetas <br>
                $descripcion_formateada = nl2br($descripcion);

                // Liberar el resultado
                mysqli_free_result($query_descripcion);
            } else {
                // Si la consulta falla, mostrar un mensaje de error
                echo "Error al obtener la descripcion: " . mysqli_error($conexion);
            }

        // SENTENCIA PARA OBTENER LA SEGUNDA DESCRIPCION DEL PRODUCTO 
        $descripcion2 = "SELECT descripcion2 FROM productos WHERE id=48";

            // ESTABLECER LA QUERY PARA EL DESCRIPCION
            $query_descripcion2 = mysqli_query($conexion, $descripcion2);

            // VERIFICAR SI LA CONSULTA FUE EXITOSA PARA LA DESCRIPCION
            if ($query_descripcion2) {
                // Obtener el resultado de la consulta para la descripcion
                $fila_descripcion2 = mysqli_fetch_assoc($query_descripcion2);
                
                // Asignar la descripcion a la variable $descripcion
                $descripcion2= $fila_descripcion2['descripcion2'];

                // Aplicar formato a la descripción: convertir saltos de línea en etiquetas <br>
                $descripcion2_formateada = nl2br($descripcion2);
                
                // Liberar el resultado
                mysqli_free_result($query_descripcion2);
            } else {
                // Si la consulta falla, mostrar un mensaje de error
                echo "Error al obtener la descripcion2: " . mysqli_error($conexion);
            }

            // SENTENCIA PARA OBTENER LA INFORMACION GENERAL DEL PRODUCTO 
                $informacion_general = "SELECT informacion_general FROM productos WHERE id=48";

                // ESTABLECER LA QUERY PARA LA INFORMACION GENERAL
                $query_informacion_general = mysqli_query($conexion, $informacion_general);

                // VERIFICAR SI LA CONSULTA FUE EXITOSA PARA LA INFORMACION GENERAL
                if ($query_informacion_general) {
                    // Obtener el resultado de la consulta para LA INFORMACION GENERAL
                    $fila_informacion_general = mysqli_fetch_assoc($query_informacion_general);
                    
                    // Asignar la descripcion a la variable $INFORMACION GENERAL
                    $informacion_general= $fila_informacion_general['informacion_general'];

                    // Aplicar formato a la descripción: convertir saltos de línea en etiquetas <br>
                        $informacion_general_formateada = nl2br($informacion_general);
                    
                    // Liberar el resultado
                    mysqli_free_result($query_informacion_general);
                } else {
                    // Si la consulta falla, mostrar un mensaje de error
                    echo "Error al obtener la informacion general: " . mysqli_error($conexion);
                }

            // SENTENCIA PARA OBTENER LA IMAGEN DEL PRODUCTO 
            $imagen1 = "SELECT ruta FROM imagenes WHERE id=85";

            // ESTABLECER LA QUERY PARA LA INFORMACION GENERAL
            $query_imagen1 = mysqli_query($conexion, $imagen1);

            // VERIFICAR SI LA CONSULTA FUE EXITOSA PARA LA INFORMACION GENERAL
            if ($query_imagen1) {
                // Obtener el resultado de la consulta para LA INFORMACION GENERAL
                $fila_imagen1 = mysqli_fetch_assoc($query_imagen1);
                
                // Asignar la descripcion a la variable $INFORMACION GENERAL
                $imagen1= $fila_imagen1['ruta'];
                
                // Liberar el resultado
                mysqli_free_result($query_imagen1);
            } else {
                // Si la consulta falla, mostrar un mensaje de error
                echo "Error al obtener la informacion general: " . mysqli_error($conexion);
            }

            // SENTENCIA PARA OBTENER LA IMAGEN DEL PRODUCTO CON 
            $imagen2 = "SELECT ruta FROM imagenes WHERE id=86";

            // ESTABLECER LA QUERY PARA LA INFORMACION GENERAL
            $query_imagen2 = mysqli_query($conexion, $imagen2);

            // VERIFICAR SI LA CONSULTA FUE EXITOSA PARA LA INFORMACION GENERAL
            if ($query_imagen2) {
                // Obtener el resultado de la consulta para LA INFORMACION GENERAL
                $fila_imagen2 = mysqli_fetch_assoc($query_imagen2);
                
                // Asignar la descripcion a la variable $INFORMACION GENERAL
                $imagen2= $fila_imagen2['ruta'];
                
                // Liberar el resultado
                mysqli_free_result($query_imagen2);
            } else {
                // Si la consulta falla, mostrar un mensaje de error
                echo "Error al obtener la informacion general: " . mysqli_error($conexion);
            }

            // SENTENCIA PARA OBTENER LA IMAGEN DEL PRODUCTO CON 
            $imagen3 = "SELECT ruta FROM imagenes WHERE id=87";

            // ESTABLECER LA QUERY PARA LA INFORMACION GENERAL
            $query_imagen3 = mysqli_query($conexion, $imagen3);

            // VERIFICAR SI LA CONSULTA FUE EXITOSA PARA LA INFORMACION GENERAL
            if ($query_imagen3) {
                // Obtener el resultado de la consulta para LA INFORMACION GENERAL
                $fila_imagen3 = mysqli_fetch_assoc($query_imagen3);
                
                // Asignar la descripcion a la variable $INFORMACION GENERAL
                $imagen3= $fila_imagen3['ruta'];
                
                // Liberar el resultado
                mysqli_free_result($query_imagen3);
            } else {
                // Si la consulta falla, mostrar un mensaje de error
                echo "Error al obtener la informacion general: " . mysqli_error($conexion);
            }

        // Cerrar la conexión
        mysqli_close($conexion);

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

    <title>Místico - Altar Madera Pino 31x31</title>
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
                                <!-- ICONO USER-->
                                <li class="nav-item">
                                    <a class="nav-link a-navbar" href="../../cuenta/cuenta.php" role="button" aria-expanded="false">
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
        <!-- imagen y presentacion del producto -->

        <section class="imagen-presentacion">
            <div class="container">
                <div class="row d-flex flex-row">
                    <!-- PRIMERA COLUMNA -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="caja-imagen-producto w-100 h-100 mt-5 mb-5">
                            
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                  <img src="<?php echo $imagen1 ?>" class="imagen-producto img-fluid" alt="Imagen 1" >

                                   
                                  </div>
                                  <div class="carousel-item ">
                                  <img src="<?php echo $imagen2 ?>" class="imagen-producto img-fluid" alt="Imagen 1" >
                                    
                                  </div>

                                  <div class="carousel-item ">
                                  <img src="<?php echo $imagen3 ?>" class="imagen-producto img-fluid" alt="Imagen 1" >
                                    
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  
                                </a>
                              </div>
                        </div>
                    </div>

                     <!-- SEGUNDA COLUMNA -->
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                        <div class="caja-texto-producto ">
                            <h2 class="mt-5"> <?php echo $titulo ?> </h2>
                            <h4 class="mt-3"> <?php echo $precio ?>€ </h4>
                            <p class="mt-4 parrafo-producto"> <?php echo $descripcion_formateada ?> </p>
                            <button class="boton-anadir mt-3">
                                Añadir al carrito
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <!-- TABS -->
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <ul class="nav nav-tabs">
                        <li class="nav-items"> <a href="#tab1" class="nav-link active" data-bs-toggle="tab">Descripción</a> </li>
                        <li class="nav-items"> <a href="#tab2" class="nav-link" data-bs-toggle="tab">Información general</a> </li>
                    </ul>
    
                    <div class="tab-content">
                        <div class="tab-pane active mt-4" id="tab1">
                            <p> <?php echo $descripcion2_formateada ?> </p>
                        </div>

                        <div class="tab-pane mt-4" id="tab2">
                        <p> <?php echo $informacion_general_formateada ?> </p>  
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>



        <!-- PRODUCTOS RELACIONADOS -->

        <section class="productos-relacionados mt-5 mb-5">
            <div class="container">
                <div class="row titulo-productos-relacionados">
                    <div class="col-12">
                        <h3 class="mb-5">Productos relacionados</h3>
                    </div>
                </div>
                <!-- Productos relacionados -->
                <div class="row  d-flex flex-row ">
    
                
                    <div class="categoria-portainciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                        <a href="altarmadera41.php">
                            <img src="../../img/altar-triangular-madre.jpg"  alt="" class="imagenescategorias">
                        </a>
                        <h5 class="texto-categorias mt-2">Altar Triangular de Madera 41x41x6</h5>
                        <p>42,50€</p>
                    </div>

                    <div class="categoria-portainciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                        <a href="altarmaderarosa.php">
                            <img src="../../img/altar-triangular-rosa.jpeg"  alt="" class="imagenescategorias">
                        </a>
                        <h5 class="texto-categorias mt-2">Altar Triangular de Madera Rosa 31x31</h5>
                        <p>45,50€</p>
                    </div>
                    
                    <div class="categoria-portainciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                        <a href="altarmaderaazul.php">
                            <img src="../../img/altar-triangular-azul.jpeg"  alt="" class="imagenescategorias">
                        </a>
                        <h5 class="texto-categorias mt-2">Altar Triangular de Madera Azul 31x31</h5>
                        <p>45,50€</p>
                    </div>

                    <div class="categoria-portainciensos col-lg-3 col-md-6 col-sm-6 mr-2">
                        <a href="altarmaderaluna.php">
                            <img src="../../img/altar-triangular-faselunar.jpg"  alt="" class="imagenescategorias">
                        </a>
                        <h5 class="texto-categorias mt-2">Altar Triangular de Madera con Fases Lunares 31x31</h5>
                        <p>45,50€</p>
                    </div>

                </div>
            </div>
        </section>



        <!-- FINAL MAIN -->

        
        

        

        <!-- INICIO FOOTER -->
       <footer class="container-footer">
        <div class="container  " >
            <div class="row  d-flex flex-row">
                <!-- PRIMERA COLUMNA FOOTER -->
                <div class="col-4">
                    <div class="primera-columna-footer mt-5 mb-5">
                        <p class="enlacedeinteres "><strong>ENLACE DE INTERÉS</strong></p>
                        <a href="../../enlacesdeinteres/avisolegal.php" target="_blank">Aviso Legal</a>
                        <br>
                        <a href="../../enlacesdeinteres/politicadeprivacidad.php" target="_blank">Política de Privacidad</a>
                        <br>
                        <a href="../../enlacesdeinteres/politicadeenviosydevoluciones.php" target="_blank">Política de Envíos y Devoluciones</a>
                        <br>
                        <a href="../../enlacesdeinteres/politicadecookies.php" target="_blank">Política de Cookies</a>
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