<?php
    session_start(); 
    if($_SESSION['login_user']!=true){
        header("location: ../login.php");
    }
    $nombre = $_SESSION['NOMBRE'];
    $id_user = $_SESSION['ID'];

    include '../layout/header.php'
?>
    

    <ul id="adaptive" class="cs-hidden">
        <!-- caja 0-->
        <li class="item-a">
            <!-- caja -->
            <div class="full-slider-box f-slide-4">
                <!--contenedor de texto del carrouser-->
                <div class="slider-text-container">
                    <div class="f-slider-text ">
                        <span>Ayudate</span>
                        <strong>No dejes que tus <br> plantas se mueran</strong>
                        <a href="#" class="f-slider-btn">Compra Hoy</a>
                    </div>
                </div>
            </div>
        </li>
        <!-- caja 1-->
        <li class="item-a">
            <!-- caja -->
            <div class="full-slider-box f-slide-1">
                <!--contenedor de texto del carrouser-->
                <div class="slider-text-container">
                    <div class="f-slider-text">
                        <span>Oferta limitada</span>
                        <strong>30% de descuento <br> usando</strong>
                        <a href="#" class="f-slider-btn">PLANTA2</a>
                    </div>
                </div>
            </div>
        </li>

        <!-- caja 2-->
        <li class="item-a">
            <!-- caja -->
            <div class="full-slider-box f-slide-2">
                <!--contenedor de texto del carrouser-->
                <div class="slider-text-container">
                    <div class="f-slider-text">
                        <span>Oferta limitada</span>
                        <strong>50% de descuento <br> usando</strong>
                        <a href="#" class="f-slider-btn">PLANTA5</a>
                    </div>
                </div>
            </div>
        </li>
        <!-- caja 3-->
        <li class="item-a">
            <!-- caja -->
            <div class="full-slider-box f-slide-3">
                <!--contenedor de texto del carrouser-->
                <div class="slider-text-container">
                    <div class="f-slider-text ">
                        <span>Oferta limitada</span>
                        <strong>10% de descuento <br> usando</strong>
                        <a href="#" class="f-slider-btn">PLANTA1</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
<!--Destacados - Categorias-->
    <div class="feature-heading">
        <h2>Categorias Destacadas</h2>
    </div>


    <ul id="autoWidth" class="cs-hidden">
        <!--1-->
        <li class="item">
            <!--caja de destacados-->
            <div class="feature-box">
                <a href="#">
                    <img src="../img/feature_1.png" alt="Foto de producto">
                </a>
            </div>
        <!--texto-->

        <span>Plantas</span>
        </li>

        <!--2-->
        <li class="item">
            <!--caja de destacados-->
            <div class="feature-box">
                <a href="#">
                    <img src="../img/feature_2_2.jpg" alt="Foto de producto">
                </a>
            </div>
        <!--texto-->
        <span>Herramientas</span>
        </li>

        <!--3-->
        <li class="item">
            <!--caja de destacados-->
            <div class="feature-box">
                <a href="#">
                    <img src="../img/feature_3.png" alt="Foto de producto">
                </a>
            </div>
<!--texto-->
        <span>Macetas</span>
        </li>

        <!--4-->
        <li class="item">
            <!--caja de destacados-->
            <div class="feature-box">
                <a href="#">
                    <img src="../img/feature_4.jpg" alt="Foto de producto">
                </a>
            </div>
<!--texto-->
        <span>Frutas</span>
        </li>

        <!--5-->
        <li class="item">
            <!--caja de destacados-->
            <div class="feature-box">
                <a href="#">
                    <img src="../img/feature_5.jpg" alt="Foto de producto">
                </a>
            </div>
<!--texto-->
        <span>Verduras</span>
        </li>
    </ul>

<!--Productos en camino-->
    <section class="new-arrival">
        <h2>-
        </h2>
        <!--heading-->
        <div class="arrival-heading">
            <strong>Cursos en Camino</strong>
            <p>Obteniendo Nuevos y Facinantes Cursos Sobre las Plantas </p>
        </div>
        <!--Productos contenedor-->
        <div class="product-container">
            <!--producto- caja - 1-->
            <div class="product-box">
                <!--img -->
                <div class="product-img">
                    <!--Agraga al carrito-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

                    <img src="../img/p-1.jpg" alt="Foto de producto">
                </div>
                <!--detalles-->
                <div class="product-details">
                    <a href="#" class="p-name">Jardineria Pricipiantes</a>
                    <span class="p-price">$150.00</span>
                </div>
            </div>

            <!--producto- caja - 2-->
            <div class="product-box">
                <!--img -->
                <div class="product-img">
                    <!--Agraga al carrito-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

                    <img src="../img/p-2.jpg" alt="Foto de producto" >
                </div>
                <!--detalles-->
                <div class="product-details">
                    <a href="#" class="p-name">Cuidado de Plantas</a>
                    <span class="p-price">$99.00</span>
                </div>
            </div>

            <!--producto- caja - 3-->
            <div class="product-box">
                <!--img -->
                <div class="product-img">
                    <!--Agraga al carrito-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

                    <img src="../img/p-3.jpg" alt="Foto de producto">
                </div>
                <!--detalles-->
                <div class="product-details">
                    <a href="#" class="p-name">Movimiento de Plantas</a>
                    <span class="p-price">$109.00</span>
                </div>
            </div>
            
            <!--producto- caja - 4-->
            <div class="product-box">
                <!--img -->
                <div class="product-img">
                    <!--Agraga al carrito-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

                    <img src="../img/p-4.jpeg" alt="Foto de producto">
                </div>
                <!--detalles-->
                <div class="product-details">
                    <a href="#" class="p-name">Curso de Botanica</a>
                    <span class="p-price">$202.00</span>
                </div>
            </div>

        </div>
    </section>
    

    <!--venta-->
    <section class="sale">
        <h2>
            Promos:
         </h2>
        <!--Caja de venta 1-->
        <div class="sale-box">
            <!--Img-->
            <img src="../img/Promo2-2.jpg" alt="Foto de promo">
            <!--etiqueta-promocion-->
            <span class="sale-lable-promo">Solo Hoy!</span>
            <a href="#">
                <div class="sale-text drop-shadow">
                    <strong>Curso Frutas</strong>
                    <span>Descuento 10%</span>
                </div>
            </a>
        </div>

        <!--Caja de venta 2-->
        <div class="sale-box">
            <!--Img-->
            <img src="../img/Promo1-2.jpg" alt="Foto de promo">
            <!--etiqueta-promocion-->
            <span class="sale-lable-promo">Solo Hoy!</span>
            <a href="#">
                <div class="sale-text drop-shadow">
                    <strong>Curso Botanica</strong>
                    <span>Descuento 50%</span>
                </div>
            </a>
        </div>

        <!--Caja de venta 3-->
        <div class="sale-box">
            <!--Img-->
            <img src="../img/Promo3-2.jpg" alt="Foto de promo">            
            <!--etiqueta-promocion-->
            <span class="sale-lable-promo">Solo Hoy!</span>
            <a href="#">
                <div class="sale-text drop-shadow">
                    <strong>Curso Composta</strong>
                    <span>Descuento 15%</span>
                </div>
            </a>
        </div>

    </section>

<!--Banner de promocion-->
    <!-- caja -->
    <div class="banner-slider-box f-slide-3">
        <!--contenedor de texto del carrouser-->
        <div class="banner-text-container">
            <div class="banner-text">
                <span>Oferta limitada</span>
                <strong>10% de descuento para ti <br> usando</strong>
                <a href="#" class="banner-btn">PLANTA1VEZ</a>
            </div>
        </div>
    </div>

<!--services-->
    <section class="services">
        <h2>
            Seccion:
         </h2>
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
        include '../layout/footer.php';
    ?>