<?php
    session_start(); 
    if($_SESSION['login_user']!=true){
        header("location: ../login.php");
    }
    $nombre = $_SESSION['NOMBRE'];
    $id_user = $_SESSION['ID'];

    include '../ConsultasPHP/config.php';
    include '../ConsultasPHP/conexion.php';
    include '../ConsultasPHP/agregarCarrito.php';
    include '../layout/header.php'
?>

    <section class="new-arrival">   
        <div class="arrival-heading">
                <strong>Catalogo de Productos</strong>
                <p>A continuacion de lista los productos existentes </p>
            </div>
            <?php if ($mensaje!=""){?>
                <div class="alert alert-success">
                <?php echo $mensaje;?>
                <a href="../conectado/MostrarCarrito.php" class="badge bagde-success"> Ver carrito</a>
                </div>
            <?php } ?>
            <div class="product-container">
                <?php 
                    $sentencia = $pdo-> prepare("select * from catalogo");
                    $sentencia->execute();
                    $lista = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <?php foreach( $lista  as $producto) {?>
                    <!--producto- caja - 1-->
                    <div class="product-box">
                        <!--img -->
                        <div class="product-img">
                            <!--Agraga al carrito-->
                            <form action="" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>">
                                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['nombre'],COD,KEY);?>">
                                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['precio'],COD,KEY);?>">
                                <input type="hidden" name="stock" id="stock" value="<?php echo openssl_encrypt($producto['stock'],COD,KEY);?>">
                                <button name="btnAccion" class="add-cart" type="submit" value="Agregar">
                                    <i class="fas fa-shopping-cart"></i>
                                </button>
                            </form>
                            <img title="<?php echo $producto['nombre'];?>" src="<?php echo ".".$producto['foto'];?>" alt="Foto de producto" data-toggle='popover' data-trigger='hover' data-content="<?php echo ".".$producto['descripcion'];?>">
                        </div>
                        <!--detalles-->
                        <div class="product-details">
                            <a href="#" class="p-name"><?php echo $producto['nombre'];?></a>
                            <span class="p-price">$<?php echo $producto['precio'];?></span>
                            <span class="p-stock">Quedan: <?php echo $producto['stock'];?></span>
                        </div>
                    </div>
                <?php }?>                
            </div>
    </section>


<!--Banner de promocion-->
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

<!--services-->
    <section class="services">
        <!--services-box-->
        <div class="services-box">
            <i class="fas fa-shipping-fast"></i>
            <span>Envios Nacionales</span>
            <p>Envios a Toda la Republica</p>
        </div>
        <!--services-box-->
        <div class="services-box">
            <i class="fas fa-headphones-alt"></i>
            <span>Servicio 24/7</span>
            <p>Trabajamos 24h al dia para ti</p>
        </div>
        <!--services-box-->
        <div class="services-box">
            <i class="fas fa-sync"></i>
            <span>Reembolsos 100%</span>
            <p>30 Dias para Devoluciones para ti</p>
        </div>
        
    </section>

<?php 
    require '../layout/footer.php';
?>