<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="plantas, vivero, jardineria" /> 
	<meta name="description" content="Página para la venta de plantas y jardineria" />
    <meta name="author" content="Ernesto Vieyra" />
    <title>Plant Life Green</title>
    
    <!-- Hojas de estilo  bootsrap -->  
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Hojas de estilo  CSS -->    
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <!-- Hojas de estilo  slider -->    
    <link rel="stylesheet" href="../css/lightslider.css" type="text/css">
    <!-- fav-icon-->
    <link href="../img/logo_size.jpg" rel="shorcut icon">
    <!-- Usando fontAwesome -->
    <script src="https://kit.fontawesome.com/7af17d5460.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- barra de navegacion -->
    <nav>
        <!-- redes sociales y numero de telefono-->
        <div class="redes-sociales">
            <!-- redes sociales-->
            <div class="social">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- numero telefono-->
            <div class="telefono">
                <span>Contactame: +52 4432613510</span>
            </div>
        </div>

    <!-- menu bar-->
        <div class="navigation">
            <!-- logo-->
            <a href="#" class="logo">
                <img src="../img/logo_invert.jpg" alt="logo de la pagina">
            </a>
            <!-- Icono menu-->
            <div class="toggle"></div>
            <!-- Menu-->
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="catalogo.php">Catalogo</a>
                    <!-- etiqueta-venta-->
                        <span class="sale-lable">Ofertas</span>
                </li>
                <li><a href="#">Venta</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Acerca de</a></li>
            </ul>
            <!-- Menu - Derecha-->
            <div class="right-menu">
                <!-- Buscador-->
                <a href="javascript:void(0);" class="search">
                    <i class="fas fa-search"></i>
                </a>
                <!-- Usuario-->
                
                <a href="#cerrarSesion" class="user-out" data-toggle="modal" style="color: tomato" title="Log-out">
                    <i class="fas fa-user-times"></i>
                </a>
                </button>
                <!-- Carrito de Compras-->
                <!-- <a href="cart.php"> -->
                <a href="../conectado/MostrarCarrito.php">
                    <i class="fas fa-shopping-cart">
                    <!-- numero de productos en el carrito-->
                    <span class="num-cart-productos"><?php
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?></span>
                    </i>
                </a>

            </div>
        </div>
    </nav>
    <div class="search-bar">
        <!-- Input busqueda-->
        <div class="search-input">
            <!-- input-->
            <input type="text" placeholder="Busca un producto">
            <!-- Boton cancelar-->
            <a href="javascript:void(0);" class="search-cancel">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>

    <div class="arrival-heading">
            <strong><?php echo $_SESSION['NOMBRE'];?></strong>
            <p>Bienvenido de Regreso, Te estabamos esperando</p>
        </div>
<!--Silder completo carrouser -->   

