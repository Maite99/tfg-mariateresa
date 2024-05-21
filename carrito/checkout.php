<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['email-login'])) {
    header("Location: ../cuenta/cuenta.php");
    exit();
}

// Verificar si el carrito no está vacío
if (empty($_SESSION['carrito'])) {
    die("El carrito está vacío.");
}

$conn = mysqli_connect("localhost", "root", "", "tiendaonlinetfg");

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener los datos del usuario
$email = $_SESSION['email-login'];
$query = "SELECT nombre, apellidos, email, telefono, direccion FROM usuarios WHERE email = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_assoc($result);
} else {
    die("Error al obtener los datos del usuario: " . mysqli_error($conn));
}

// Calcular el total del carrito
$carrito = $_SESSION['carrito'];
$total_carrito = 0;

foreach ($carrito as $item) {
    $producto_id = $item['producto_id'];
    $cantidad = $item['cantidad'];

    $query = "SELECT precio FROM productos WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $producto_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $producto = mysqli_fetch_assoc($result);
        $total_producto = $producto['precio'] * $cantidad;
        $total_carrito += $total_producto;
    } else {
        die("Error al obtener los datos del producto con ID $producto_id.");
    }
}

// Calcular los gastos de envío
$gastos_envio = 0;
if ($total_carrito < 25) {
    $gastos_envio = 2.99;
}

$total_final = $total_carrito + $gastos_envio;
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
    <!-- Incluir el script de Stripe.js -->
    <script src="https://js.stripe.com/v3/"></script>
    <title>Místico</title>
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
                                <i class="bi bi-person"></i>
                            </a>
                        </li>
                        <!-- ICONO CARRITO-->
                        <li class="nav-item">
                            <a class="nav-link a-navbar active" href="../carrito/carrito.php" role="button" aria-expanded="false">
                                <i class="bi bi-cart"></i>
                            </a>
                        </li>
                        <!-- ICONO LOGOUT-->
                        <li class="nav-item">
                            <a class="nav-link a-navbar" href="../cerrarsesion.php" role="button" aria-expanded="false">
                                <i class="bi bi-box-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- FIN NAVBAR -->
    </header>
</div>

<!-- Container con flexbox para la columna izquierda y derecha -->
<div class="container mt-5">
    <div class="row">
        <!-- Columna izquierda para los datos del usuario -->
        <div class="col-md-6">
            <h2>Datos del usuario</h2>
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($usuario['nombre']); ?></p>
            <p><strong>Apellidos:</strong> <?php echo htmlspecialchars($usuario['apellidos']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($usuario['email']); ?></p>
            <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($usuario['telefono']); ?></p>
            <p><strong>Dirección:</strong> <?php echo htmlspecialchars($usuario['direccion']); ?></p>
        </div>
        <!-- Columna derecha para los productos en el carrito -->
        <div class="col-md-6">
            <h2>Productos en el carrito</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre del producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($carrito as $item) {
                    $producto_id = $item['producto_id'];
                    $cantidad = $item['cantidad'];

                    $query = "SELECT nombre, precio FROM productos WHERE id = ?";
                    $stmt = mysqli_prepare($conn, $query);
                    mysqli_stmt_bind_param($stmt, "i", $producto_id);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    if ($result && mysqli_num_rows($result) > 0) {
                        $producto = mysqli_fetch_assoc($result);
                        $total_producto = $producto['precio'] * $cantidad;
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                            <td><?php echo htmlspecialchars(number_format($producto['precio'], 2)); ?> €</td>
                            <td><?php echo htmlspecialchars($cantidad); ?></td>
                            <td><?php echo htmlspecialchars(number_format($total_producto, 2)); ?> €</td>
                        </tr>
                        <?php
                    } else {
                        die("Error al obtener los datos del producto con ID $producto_id.");
                    }
                }

                // Incluir gastos de envío si aplica
                if ($gastos_envio > 0) {
                    ?>
                    <tr>
                        <td>Gastos de envío</td>
                        <td></td>
                        <td></td>
                        <td><?php echo htmlspecialchars(number_format($gastos_envio, 2)); ?> €</td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <h3>Total final: <?php echo htmlspecialchars(number_format($total_final, 2)); ?> €</h3>

            <!-- Formulario de pago -->
            <h2>Método de pago</h2>
            <!-- Formulario para pago con tarjeta -->
            <form action="procesar-pago-tarjeta.php" method="post" id="payment-form">
                <div class="form-row">
                    <label for="card-element">Tarjeta de crédito o débito</label>
                    <div id="card-element"><!-- Elemento de Stripe para la tarjeta --></div>
                    <div id="card-errors" role="alert"></div>
                </div>
                <input type="hidden" name="total_final" value="<?php echo htmlspecialchars(number_format($total_final, 2)); ?>">
                <button class="btn btn-primary mt-3">Pagar</button>
            </form>
            <!-- Formulario para pago con PayPal -->
            <form action="procesar-pago-paypal.php" method="post">
                <button type="submit" class="btn btn-secondary mt-3">Pagar con PayPal</button>
            </form>
        </div>
    </div>
</div>

<script>
    var stripe = Stripe('sk_test_51PITZXC3U5GSv4o4AcL3ivVBfmZHWN6uMuRdlNNdQ7VaAfcL133ZSbmaZTcyt7X8z1R6FG8BRd7lo8sQisct9zo200eSbiK3Wq');
    var elements = stripe.elements();
    var card = elements.create('card');
    card.mount('#card-element');

    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Muestra el error al usuario
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Envía el token al servidor
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', result.token.id);
                form.appendChild(hiddenInput);

                form.submit();
            }
        });
    });
</script>


<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

