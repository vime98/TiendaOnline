<!-- Modal -->
<div class="modal fade" id="cerrarSesion" tabindex="-1" role="dialog" aria-labelledby="cerrarSecion" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cerrarSecionLabel">Cerrar Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1>¿Quieres cerrar sesion?</h1>
        <p>Perderas los productos de tu carrito si cierras sesion <br>
          Asegurate de haber comprado todo antes 
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="../salir.php" type="button" class="btn btn-danger">Cerrar Sesion</a>
      </div>
    </div>
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
    <script src="../js/jQuery.js"></script>

    <!-- Slider script -->
    <script src="../js/lightslider.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
</body>
</html>