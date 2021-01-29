<?php
session_start(); 
if($_SESSION['login_user']!=true){
    header("location: ../login.php");
}
$nombre = $_SESSION['NOMBRE'];
$id_user = $_SESSION['ID'];
include '../ConsultasPHP/config.php';
include '../ConsultasPHP/agregarCarrito.php';
include '../layout/header.php';
?>

<div class="container">
    <h1>Carrito de Compras</h1>
    <?php if(!empty($_SESSION['CARRITO'])){ ?>
    <table class="table table-dark table-bordered">
        <tbody>
            <tr>
                <th width="40%">Descripcion</th>
                <th width="15%">Cantidad</th>
                <th width="20%">Precio</th>
                <th width="40%">Total</th>
                <th width="5%">--</th>
            </tr>
            <?php
            $total=0; 
            foreach( $_SESSION['CARRITO']  as $indice=>$producto) {?>
                <tr>
                    <td width="40%"><?php echo $producto['NOMBRE'] ?></th>
                    <td width="15%"><?php echo $producto['CANTIDAD'] ?></th>
                    <td width="20%">$<?php echo $producto['PRECIO'] ?></th>
                    <td width="40%">$<?php echo number_format($producto['CANTIDAD']*$producto['PRECIO'],2); ?></th>
                    <td width="5%">
                    <form action="" method="POST">
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                        <button class="btn btn-danger"
                     type="submit"
                     name="btnAccion"
                     value="Eliminar"
                     >Eliminar</button>
                    </form>
                    </td>
                </tr>
                
            <?php $total = $total + ($producto['CANTIDAD']*$producto['PRECIO']);?>
            <?php }?>   
            <tr>
                <td colspan="3" align="right"><h3>Total</h3></td>
                <td align="right"><h3><?php echo number_format($total,2); ?></h3></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="5">
                    <form action="pagar.php" method="post">
                        <div class="alert alert-success">
                        <div class="form-group">
                        <label for="my-inout">Correo de contracto:</label>
                        <input type="email" name="email" id="email"
                        class = "form-control"
                        type="email"
                        placeholder="Por Favor Escribe tu Correo" required>
                        </div>
                        <small id="emailHelp"
                        class="form-text text-muted">
                        Los productos se enviaran a este correo
                        </small>
                    </div>

                    <button class="btn btn-primary btn-long btn-block" type = "Submit" name="btnAccion" value="proceder">Proceder a pagar </button>  
                    </form>
                    <form action="" method="POST">
                        <button class="btn btn-danger btn-cancel"
                     type="submit"
                     name="btnAccion"
                     value="Cancelar"
                     >Cancelar</button>
                     </form>
                </td>
            </tr>
        </tbody>
    </table>
    <?php } else{?>
      <div class="alert alert-danger">
          No tienes producto en tu carrito te invitamos a adquirir alguno
      </div>  
        <?php } ?>
</div>

<?php include '../layout/footer.php'?>
