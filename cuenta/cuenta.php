<?php
session_start();

// PARA QUE SALGA EL ALERT DE ERROR
// Verificar si hay un mensaje de error en la sesión
if(isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    
    // Eliminar el mensaje de error de la sesión
    unset($_SESSION['error']);
} else if(isset($_SESSION['success'])) {
    echo "<script>alert('" . $_SESSION['success'] . "');</script>";
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
                                    <a class="nav-link a-navbar" href="cuenta.php" role="button" aria-expanded="false">
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

        <!-- INICIO TEXTO -->
        <section class="texto-productos mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 ps-lg-5 ">
                        <div class="caja-texto-productos">
                            <h2>🌟 Bienvenido al Portal de Magia Interior 🌟</h2>
                        </div>   
                    </div>
                </div>
            </div>
        </section>
 
             <!-- FINAL TEXTO -->

            <!-- INICIO FORMULARIO -->
        <section class="caja-formulario-login-register mt-5 ">
            	<div class="container">
            		<div class="row">
                        <!-- INICIO FORMULARIO LOGIN -->
            			<div class="col-lg-5 col-md-12 col-12">
            				<div class="caja-formulario-login mb-5 offset-md-5">
                                <div class="card-body">
                                    <h3 class="text-center mb-4 titulo-login">Inicio de sesión</h3>
                                        <form action="procesar-login.php" method="post">
                                            <div class="form-group">
                                                <label for="email-login"> Correo electrónico <label style="color:red" > *  </label> </label> 
                                                <input type="text" class="form-control mb-3" id="email-login" name="email-login">
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="password-login"> Contraseña <label style="color:red" > *  </label>  </label>
                                                <input type="password" class="form-control mb-3" id="password-login" name="password-login">
                                        
                                                <a href="olvidastecontraseña.php"> ¿Olvidaste la contraseña? </a>
                                            </div>

                                            
                                            
                                            <button name="btnlogin" type="submit" class=" botones-login-register btn btn-block mt-3 " style="background-color: #b0d688; color: white; width:180px">Iniciar sesión</button>
                                        </form>
                                </div>
            					
            				</div>

                            <!-- FINAL FORMULARIO LOGIN -->
            				
            			</div>

                        <!-- INICIO FORMULARIO REGISTRO -->
            			<div class="col-lg-5 col-md-12 col-12">
            				<div class="caja-formulario-login mb-5">
                                <div class="card-body">
                                    <h3 class="text-center mb-4">Registrarse</h3>
                                        <form action="procesar-registro.php" method="post">
                                            <div class="form-group">
                                                <label for="name"> Nombre <label style="color:red" > *  </label> </label> 
                                                <input type="text" class="form-control mb-3" id="name" name="name">
                                                
                                                   
                                            </div>

                                            <div class="form-group">
                                                <label for="lastname"> Apellidos <label style="color:red" > *  </label>  </label>
                                                <input type="text" class="form-control mb-3" id="lastname" name="lastname">
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="number"> Teléfono <label style="color:red" > *  </label>  </label>
                                                <input type="text" class="form-control mb-3" id="number" name="number">  
                                            </div>
                                            <!-- VALIDACIÓN PARA EL TELÉFONO -->
                                            <script>
                                                document.getElementById('number').addEventListener('input', function () {
                                                    var numberInput = this.value;
                                                    var numberError = document.getElementById('numberError');
                                                    if (/^\d{9}$/.test(numberInput)) {
                                                        numberError.style.display = 'none';
                                                    } else {
                                                        numberError.style.display = 'block';
                                                    }
                                                });
                                            </script>

                                            <div class="form-group">
                                                <label for="adress" > Dirección <label style="color:red" > *  </label>  </label>
                                                <input type="text" class="form-control mb-3" id="adress" name="adress">    
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="email-register"> Correo electrónico <label style="color:red" > *  </label> </label> 
                                                <input type="text" class="form-control mb-3" id="email-register" name="email-register">
                                            </div>

                                            <div class="form-group">
                                                <label for="password-register"> Contraseña <label style="color:red" > *  </label>  </label>
                                                <input type="password" class="form-control mb-3" id="password-register" name="password-register">               
                                            </div>
                                            
                                            <button name="registrar" type="submit" class="botones-login-register btn  btn-block mt-3 " style="background-color: #b0d688; color:white; width:180px">Registrarse</button>
                                        </form>
                                </div>
            					
            				</div>
            				
            			</div>
                         <!-- FINAL FORMULARIO REGISTRO -->
            		</div>
            	</div>
            </section>
    <!-- FINAL FORMULARIO -->

</main>

        

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
