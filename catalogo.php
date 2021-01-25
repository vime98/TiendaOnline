<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="plantas, vivero, jardineria" /> 
	<meta name="description" content="Página para la venta de plantas y jardineria" />
    <meta name="author" content="Ernesto Vieyra" />
    <title>Plant Life Green</title>
    <!-- Hojas de estilo  CSS-->    
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <!-- Hojas de estilo  slider-->    
     <link rel="stylesheet" href="css/lightslider.css" type="text/css">
     <!-- Hojas de estilo  bootsrap-->  
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <!--jQuery------------------------------------------>
    <script src="js/jQuery.js"></script>
    <!--Slider script ------------------------------------------>
    <script src="js/lightslider.js"></script>
    <!-- fav-icon-->
    <link href="img/logo_size.jpg" rel="shorcut icon">
    <!--Usando fontAwesome -->
    <script src="https://kit.fontawesome.com/7af17d5460.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- barra de navegacion ---------------------------------------------------------------->
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

    <!--menu bar----------------------------------------------------------------------------->
        <div class="navigation">
            <!--logo-->
            <a href="#" class="logo">
                <img src="img/logo_invert.jpg">
            </a>
            <!--Icono menu-->
            <div class="toggle"></div>
            <!--Menu-->
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="/">Catalogo</a>
                    <!--etiqueta-venta-->
                        <span class="sale-lable">Ofertas</span>
                </li>
                <li><a href="#">Venta</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Acerca de</a></li>
            </ul>
            <!--Menu - Derecha-->
            <div class="right-menu">
                <!--Buscador-->
                <a href="javascript:void(0);" class="search">
                    <i class="fas fa-search"></i>
                </a>
                <!--Usuario-->
                <a href="javascript:void(0);" class="user">
                    <i class="fas fa-user"></i>
                </a>
                <!--Carrito de Compras-->
                <a href="#">
                    <i class="fas fa-shopping-cart">
                    <!--numero de productos en el carrito-->
                    <span class="num-cart-productos">0</span>
                    </i>
                </a>

            </div>
        </div>
    </nav>
    <div class="search-bar">
        <!--Input busqueda-->
        <div class="search-input">
            <!--input-->
            <input type="text" placeholder="Busca un producto">
            <!--Boton cancelar-->
            <a href="javascript:void(0);" class="search-cancel">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>
    <!--login y registro de usuarios ------------------------------------------->
    <div class="form">
        <!--login-->
        <div class="login-form">
            <!--boton cancelar-------------------------------------------------->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!--Cabecera-->
            <strong>Log In</strong>
            <!--inputs-->
            <form action="">
                <input type="email" placeholder="Ejemplo@gmial.com" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <!--Boton de logeo-->
                <input type="submit" value="Iniciar Sesion">
            </form>
            <!--contraseña olvidada-->
            <div class="form-btns">
                <a href="#" class="forget">Olvide mi Contraseña?</a>
                <a href="javascript:void(0);" class="sign-up-btn">Crear Cuenta</a>
            </div>
        </div>

        <!--Registrarse-->
        <div class="sign-up-form">
            <!--boton cancelar-------------------------------------------------->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!--Cabecera-->
            <strong>Crear Cuenta</strong>
            <!--inputs-->
            <form action="">
                <input type="text" placeholder="Nombre Completo" name="fullname" required>
                <input type="email" placeholder="Ejemplo@gmial.com" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <!--Boton de logeo-->
                <input type="submit" value="Registrarse">
            </form>
            <!--contraseña olvidada-->
            <div class="form-btns">
                <a href="javascript:void(0);" class="already-account">Tienes Cuenta?</a>
            </div>
        </div>
    </div>



<!--Banner de promocion--------------------------------------------->
    <!-- caja -------------->
    <div class="banner-slider-box f-slide-3">
        <!--contenedor de texto del carrouser-->
        <div class="banner-text-container">
            <div class="banner-text">
                <span>Oferta limitada</span>
                <strong>10% de descuento para <font>ti</font> <br> con <font> PLANTA1VEZ </font> en primera la compra</strong>
                <a href="#" class="banner-btn">Comprar Ahora</a>
            </div>
        </div>
    </div>

<!--services------------------------->
    <section class="services">
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-shipping-fast"></i>
            <span>Envios Nacionales</span>
            <p>Envios a Toda la Republica</p>
        </div>
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-headphones-alt"></i>
            <span>Servicio 24/7</span>
            <p>Trabajamos 24h al dia para ti</p>
        </div>
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-sync"></i>
            <span>Reembolsos 100%</span>
            <p>30 Dias para Devoluciones para ti</p>
        </div>
        
    </section>

<!--footer---------------------------->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Plant Life Green</h3>
            <p>Proporcionar herramientas para que el comienzo de la vida dentro de los viveros caseros se una experiencia muy agradable.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links Utiles</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Catalogo</a></li>
              <li><a href="#">Ventas</a></li>
              <li><a href="#">Terminos y Condiciones</a></li>
              <li><a href="#">Politica de Privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactenos</h4>
            <p>
              Paso de Caoba #85<br>
              Michoacan, Morelia 58110<br>
              Mexico <br>
              <strong>Tel:</strong> +52 443 123 4567<br>
              <strong>Email:</strong> pgl@enterprise.com<br>
            </p>

          </div>
          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Mantenerte Informado</h4>
            <p>Registrate para obtener informacion de los temas y recibe la informacion desde antes que se publique en la pagina.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Suscribirse">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Plant Life Green</span></strong>. Todos los Derechos Reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
        Designed by <a href="#main">Ernesto Vieyra</a>
      </div>
    </div>
  </footer><!-- End Footer -->

    <!--Script-->
    <script type="text/javascript">
    
    /*-------Barra de busqueda--------------------------*/
    $(document).on('click', '.search',function(){
        $('.search-bar').addClass('search-bar-active')
    })
    
    $(document).on('click', '.search-cancel',function(){
        $('.search-bar').removeClass('search-bar-active')
    })

    /* logica para cambiar entre log in y registro form*/
    $(document).on('click', '.user,.already-account',function(){
        $('.form').addClass('login-active').removeClass('sign-up-active')
    })

    $(document).on('click', '.sign-up-btn',function(){
        $('.form').addClass('sign-up-active').removeClass('login-active')
    })

    $(document).on('click', '.form-cancel',function(){
        $('.form').removeClass('login-active').removeClass('sign-up-active')
    })



    /*nav bar estatica*/
    $(Window).scroll(function(){
        if( $(document).scrollTop() > 50){
            $('.navigation').addClass('fix-nav');
        }
        else{
            $('.navigation').removeClass('fix-nav');
        } 
    })
    /*--para ser responsivo menu----------------------------*/
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.toggle').toggleClass('active')
            $('.navigation').toggleClass('active')
        })
    })
    </script>
</body>
</html>