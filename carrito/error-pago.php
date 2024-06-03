<?php
session_start();



?>

<!DOCTYPE html>
<html lang="es">
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
    
    <title>Error pago</title>
    <style>
        .cantidad-cell {
            display: flex;
            align-items: center;
        }

        .cantidad-cell button {
            margin-right: 5px; /* Espacio entre los botones y el número */
        }
    </style>
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
        </nav>
        <!-- FIN NAVBAR -->
    </header>
</div>


<h2 class="text-center mt-5">ERROR PAGO</h2>