<?php 
	$mensaje="";
	if(isset($_POST['btnAccion'])){

		switch ($_POST['btnAccion']) {
			case 'Agregar':
				if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
					$ID = openssl_decrypt($_POST['id'],COD,KEY);
					$mensaje .= "OK id correcto".$ID."<br/>";
				}
				else{
					$mensaje .= "UPSSS ... datos incorrectos"."<br/>";
					break;
				}
				if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
					$nombre = openssl_decrypt($_POST['nombre'],COD,KEY);
					$mensaje .= "OK nombre correcto".$nombre ."<br/>";
				}
				else{
					$mensaje .= "UPSSS ... algo mal con nombre incorrectos" ."<br/>";
					break;
					}
				if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
					$precio = openssl_decrypt($_POST['precio'],COD,KEY);
					$mensaje .= "OK precio correcto".$precio ."<br/>";
				}
				else{
					$mensaje .= "UPSSS ... algo mal con precio incorrectos" ."<br/>";
					break;
					}
				if(is_numeric(openssl_decrypt($_POST['stock'],COD,KEY))){
					$stock = openssl_decrypt($_POST['stock'],COD,KEY) ;
					$mensaje .= "OK stock correcto".$stock."<br/>";
				}
				else{
					$mensaje .= "UPSSS ... algo mal con stock incorrectos"."<br>";
					break;
				}
				
				if($stock >= 1){
					if (!isset($_SESSION['CARRITO'])) {
						$producto = array(
							'ID' => $ID,
							'NOMBRE' => $nombre,
							'CANTIDAD' => 1,
							'PRECIO' => $precio,
						);
						$_SESSION['CARRITO'][0] = $producto;
						$mensaje = "Producto Agregado al Carrito";
					}else{
							$id_productos = array_column($_SESSION['CARRITO'],"ID");
							if (in_array($ID, $id_productos)) {
								echo "<script>alert( 'Ya yienes este producto en tu carrito') </script>";
								$mensaje="";
							}else{					
								$numeroProductos = count($_SESSION['CARRITO']);
								$producto = array(
									'ID' => $ID,
									'NOMBRE' => $nombre,
									'CANTIDAD' => 1,
									'PRECIO' => $precio,
								);
								$_SESSION['CARRITO'][$numeroProductos] = $producto;						
								$sentencia = $pdo->prepare("UPDATE `catalogo` SET stock = stock-1 WHERE `id` = :IDPRODUCTO;");
								$sentencia->bindParam(":IDPRODUCTO",$ID);
								$sentencia->execute();
								$mensaje = "Producto Agregado al Carrito";
							}
					}
				}else{
					$mensaje="Lo lamentamos , ya no hay en strock";
				}
			break;
			case 'Eliminar':
				
				if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
					$ID = openssl_decrypt($_POST['id'],COD,KEY);
					
					foreach($_SESSION['CARRITO'] as $indice=>$producto){
						if ($producto['ID'] == $ID) {
							unset($_SESSION['CARRITO'][$indice]);
							echo "<script>alert('Producto Elimnidado ....');</script>";
						}
					}


				}
				else{
					$mensaje .= "UPSSS ... datos incorrectos"."<br/>";
					break;
				}

				break;
				case 'Cancelar':

					include '../ConsultasPHP/config.php';
					include '../ConsultasPHP/conexion.php';
					foreach($_SESSION['CARRITO'] as $indice=>$producto){
						$sentencia = $pdo->prepare("UPDATE `catalogo` SET stock = stock+1 WHERE `id` = :IDPRODUCTO;");
						$sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
						$sentencia->execute();
					}				
					
    				unset($_SESSION['CARRITO']);
					$mensaje = "Compra Cancelada productos regresados";
					header("location: ../conectado/catalogo.php");
					break;
		}
		
	}

?>