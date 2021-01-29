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
    include '../layout/header.php';
?>

<?php
    if($_POST){
        $total=0;
        $SID = session_id();
        $Correo = $_POST['email'];
        $Cosas = "";
        foreach($_SESSION['CARRITO'] as $indice=>$producto){
            $total = $total + ($producto['CANTIDAD']*$producto['PRECIO']);
            $Cosas = $Cosas."<br>" . $producto['NOMBRE'];
        }

        $sentencia = $pdo-> prepare("INSERT INTO `venta` (`user_id`, `Cosas`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
        VALUES (:ID, :COSAS, :ClaveTransaccion, :PaypalDatos, NOW(), :Correo, :Total, 'pendiente');");
        $sentencia->bindParam(":ID",$id_user);
        $sentencia->bindParam(":COSAS", $Cosas);
        $sentencia->bindParam(":ClaveTransaccion",$SID);
        $sentencia->bindParam(":PaypalDatos",$SID);
        $sentencia->bindParam(":Correo",$Correo);
        $sentencia->bindParam(":Total",$total);
        $sentencia->execute();

        $idVenta = $pdo -> lastInsertId();

        foreach ($_SESSION['CARRITO'] as $indice => $producto) {
         $sentencia = $pdo->prepare("INSERT INTO `detalle` (`IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARDADO`) 
         VALUES (:IDVENTA, :IDPRODUCTO, :PRECIOUNITARIO, :CANTIDAD, '0'); ");
         $sentencia->bindParam(":IDVENTA",$idVenta);
         $sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
         $sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
         $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
         $sentencia->execute();
        }
        
    unset($_SESSION['CARRITO']);
    }
?>

<div id="main">
    <div class="jumbotron text-center" id="logreg-forms">
        <h1 class="display-4">Pagado!</h1>
        <p class="lead"> Detalle de precio final para pagar:
            <h4>$<?php echo number_format($total,2) ?></h4>
        </p>
        <p>Gracias por comprar con nosotros</p>
        <a href="catalogo.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Seguir Comprando</a>  
    </div>
</div>



<?php include '../layout/footer.php';  ?>