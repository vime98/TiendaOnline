<?php 
session_start();
 ?>

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
    <!-- Hojas de estilo  CSS -->    
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Hojas de estilo  slider -->    
    <link rel="stylesheet" href="css/lightslider.css" type="text/css">
    <!-- Hojas de estilo  bootsrap -->  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fav-icon-->
    <link href="img/logo_size.jpg" rel="shorcut icon">
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
                <img src="img/logo_invert.jpg" alt="logo de la pagina">
            </a>
            <!-- Icono menu-->
            <div class="toggle"></div>
            <!-- Menu-->
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
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
                <a href="javascript:void(0);" class="user">
                    <i class="fas fa-user"></i>
                </a>
                <!-- Carrito de Compras-->
                <a href="#">
                    <i class="fas fa-shopping-cart">
                    <!-- numero de productos en el carrito-->
                    <span class="num-cart-productos">0</span>
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
    
    <div id="main">
      <div id="logreg-forms">
          <strong>Log In</strong>
          <!-- inputs-->
          <div id="error"></div> 
          <form method="post" id="form-login" action="ConsultasPHP/login.php" enctype="multipart/form-data">
              <input type="text" placeholder="Login" name="login_login" id ="login_login" required>
              <input type="password" placeholder="Password" name="login_password" id="login_password" required>
              <!--Boton de logeo-->
              <input type="submit" id="btn-submit" value="Iniciar Sesion">
              <span id="footer_form_error">
              <?php echo isset($_SESSION['PORTAL']);?>
              </span>
          </form>
          <!--contraseña olvidada-->
          <div class="form-btns">
              <a href="#" class="forget">Olvide mi Contraseña?</a>
              <a href="#" id="sign-up-btn">Crear Cuenta</a>
          </div>
      </div>
      <div id="logreg-forms2">
          <!--Cabecera-->
          <strong>Crear Cuenta</strong>

          <!--inputs-->
          <form method="post" id="form2-login" name="contactForm" action="ConsultasPHP/sign-in.php" enctype="multipart/form-data">
              
              <input type="text" placeholder="Login" name="login" id ="login" pattern="[a-zA-Z1-9]*" required>
              <input type="text" placeholder="Nombre Completo" name="fullname" id ="fullname" pattern="[a-zA-Z ]*" required>
              <input type="email" placeholder="Ejemplo@gmial.com" name="email" id ="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
              <input type="text" placeholder="CURP" name="curp" id="curp" pattern="^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$" required>
              <input type="text" placeholder="RFC" name="rfc" id="rfc" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$" required>
              <input type="text" placeholder="Direccion" name="direccion" id="direccion" required>
              
              <input type="password" placeholder="Password" name="password" id ="password" required>
              <input type="text" name="captcha" placeholder="Ingresa Captcha" id="captcha" required>
              <img src="ConsultasPHP/captcha.php" alt="PHP Captcha">
              
              <!--Boton de logeo-->
              <input type="submit" name="enviar" id="enviar" value="Registrarse">
              <span id="footer_form_error">
              </span>
          </form>
          <!--contraseña olvidada-->
          <div class="form-btns">
              <a href="#" id="already-account">Tienes Cuenta?</a>
          </div>
          <strong id="Redireccion"></strong>
      </div>
    </div>
    

<!--footer-->
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
            <form action="#" method="post">
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
    
    <!-- jQuery -->
    <script src="js/jQuery.js"></script>
    <script src="js/index.js"></script>    
    <script src="js/lightslider.js"></script>
</body>
</html>