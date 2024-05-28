<?php
session_start();
// CONEXION A LA BBDD
$conexion = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

// VERIFICAR LA CONEXION
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

// si no estás logueado te redirije a cuenta.php
if(!isset($_SESSION['email-login'])){
    header ("Location: ../cuenta/cuenta.php");
    exit();
}

// inicialziamos el total del carrito;
$total_carrito = 0;

?>

<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/css/style.css">
    <!-- PARA LOS ICONOS DE BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link rel="icon" href="../img/favicon.jpg" type="image/x-icon">
    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&display=swap" rel="stylesheet">

    <title>Místico- Carrito</title>
    <style>
  .cantidad-cell {
    display: flex;
    align-items: center;

  }

  .cantidad-cell button {
    margin-right: 5px; /* Espacio entre los botones y el número */
  }
</style>

</header>
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

        <?php
        // verificamos si el carrito esta vacio
        if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
            echo "<div class='container mt-5'>";
            echo "<div class='alert alert-warning'>El carrito está vacío.</div>";
            echo "</div>";
        } else {
            // Obtener los detalles de cada producto en el carrito
            echo "<div class='container mt-5'>";
            echo "<h2 class='text-center mb-5'>Carrito de compra</h2>";
            echo "<div class='table-responsive'>";
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead class='thead-dark'>";
            echo "<tr class='text-center'><th >Producto</th><th>Cantidad</th><th>Precio</th><th>Total</th><th>Eliminar</th></tr>";
            echo "</thead>";
            echo "<tbody>";
        
            foreach ($_SESSION['carrito'] as $producto_id => $producto) {
                $query = "SELECT nombre, precio FROM productos WHERE id = " . intval($producto_id);
                $result = mysqli_query($conexion, $query);
        
                if ($result) {
                    $fila = mysqli_fetch_assoc($result);
        
                    if ($fila) {
                        $nombre = $fila['nombre'];
                        $precio = $fila['precio'];
                        $cantidad = $producto['cantidad'];
                        $total_producto = $precio * $cantidad;
        
                        echo "<tr class='text-center'>";
                        echo "<td>$nombre</td>";
                        echo "<td>
                            <form action='actualizar-cantidad-carrito.php' method='post'>
                                <input type='hidden' name='producto_id' value='$producto_id'>
                                <input type='hidden' name='operacion' value='decremento'>
                                <button type='submit' class='btn btn-outline-secondary'><i class='bi bi-dash'></i></button>
                                
                            </form>
                            $cantidad
                            <form action='actualizar-cantidad-carrito.php' method='post'>
                                <input type='hidden' name='producto_id' value='$producto_id'>
                                <input type='hidden' name='operacion' value='incremento'>
                                <button type='submit' class='btn btn-outline-secondary'><i class='bi bi-plus'></i></button>
                            </form>
                        </td>";
                        echo "<td>$precio €</td>";
                        echo "<td class='totalProducto totalProducto_$producto_id'>$total_producto €</td>";
                        echo "<td>
                                <form action='eliminar-carrito.php' method='post' style='display:inline;'>
                                    <input type='hidden' name='producto_id' value='$producto_id'>
                                    <button type='submit' class='btn btn-danger'>
                                        <i class='bi bi-trash'></i>
                                    </button>
                                </form>
                            </td>";
                        echo "</tr>";
        
                        $total_carrito += $total_producto;
                    } else {
                        echo "<tr><td colspan='5' class='text-danger'>Error: Producto no encontrado en la base de datos.</td></tr>";
                    }
        
                    mysqli_free_result($result);
                } else {
                    echo "<tr><td colspan='5' class='text-danger'>Error en la consulta de la base de datos.</td></tr>";
                }
            }
        
            echo "</tbody>";
            echo "</table>";
            echo "</div>"; // End of table-responsive
            echo "<h3 class='text-center mt-4 mb-4'>Total del carrito: $total_carrito €</h3>";
            echo "<div class='text-center mb-4'>"; // Inicia el div centrado
             echo "<a href='checkout.php' class='btn btn-success'> Proceder al Pago </a>";
            echo "</div>"; 
            echo "</div>"; // End of container
        }
        
        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);

        ?>

         <!-- INICIO FOOTER -->
       <!-- <footer class="container-footer mt-5">
        <div class="container  " >
            <div class="row  d-flex flex-row"> -->
                <!-- PRIMERA COLUMNA FOOTER -->
                <!-- <div class="col-4">
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
                </div> -->
                <!-- SEGUNDA COLUMNA FOOTER -->
                <!-- <div class="col-4">
                    <div class="segunda-columna-footer">
                        <p class="contacto mt-5"><strong>CONTACTO</strong></p>
                        <p class="texto-contacto">Estaremos encantados de resolver cualquier duda que tengas. 
                            Contáctanos en <a href="mailto:info@mistico.com?" style="color: #b0d688"> info@mistico.com </a>
                            <br>
                            Whatsapp  +34 618 398 065
                        </p>
                    </div>
                </div> -->
                <!-- TERCERA COLUMNA FOOTER -->
                <!-- <div class="col-4">
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
    </footer> -->
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

