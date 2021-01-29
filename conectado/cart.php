<?php
    session_start(); 
    if($_SESSION['login_user']!=true){
        header("location: ../login.php");
    }
    $nombre = $_SESSION['NOMBRE'];
    $id_user = $_SESSION['ID'];
    require '../layout/header.php';
?>
    <section class="new-arrival">   
        <div class="arrival-heading">
                <strong>Catalogo de Productos</strong>
                <p>A continuacion de lista los productos existentes </p>
            </div>

            <?PHP
                $servidor="localhost";
                $usuario="root";
                $clave="";
                $conexion = mysqli_connect($servidor, $usuario, $clave, "tienda_online_plg");
                if (!$conexion)
                    { echo "<h2>Error al establecer conexión con el servidor!!!</h2>"; exit; }
                
                $sql = "select * from catalogo";
                $resultado=mysqli_query ($conexion, $sql);
                echo "<div class='product-container'>";
                while($renglon = mysqli_fetch_array($resultado)) {
                    echo "<div class='product-box'>";
                    echo "<div class='product-img'> <a href='javascript:void(0);' class='add-cart'> <i class='fas fa-shopping-cart'> </i></a> <img title=". $renglon['nombre'] ." class='product-img-img' src='.". $renglon['foto'] . "' alt='Card image cap' data-toggle='popover' data-trigger='hover' data-content='". $renglon['descripcion'] ."' > </div>";
                    echo "<div class='product-details'> <a href='javascript:void(0);' class='p-name'>". $renglon['nombre'] . "</a>";
                    echo "<span class='p-price'>$" . $renglon['precio'] . "</span>";
                    echo "<span class='p-stock'>Quedan: " . $renglon['stock'] . "</span>";
                    echo "</div>";
                    echo "</div>";                    
                }
                echo "</div>";
                mysqli_close($conexion);
            ?>
    </section>
    <section class="container content-section">
            <div class="arrival-heading">
                    <strong>Carrito</strong>
            </div>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
                <div class="cart-items">
                    
                </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <a href="#" class="btn btn-primary btn-purchase" type="button">Pagar</a>
            <button class="btn btn-warning btn-cancel" type="button">Cancelar</button>
        </section>
    <div class="container">
        
    </div>
 <?php
 require "../layout/footer.php";
 ?>