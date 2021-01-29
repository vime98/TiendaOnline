<?php 
	session_start();

require_once "bd.php";

$usuario=(isset($_POST['login_login']) ? $_POST['login_login']:null);
$password=(isset($_POST['login_password']) ? md5($_POST['login_password']):null);


$sql="SELECT count(*) as contar from users where login='$usuario' && Password='$password'";
$result = bd_consulta($sql);
$array=mysqli_fetch_array($result);


if($array['contar']>0){
	$sql="SELECT id, fullname from users where login='$usuario' && Password='$password'";
	$result = bd_consulta($sql);
	$array=mysqli_fetch_array($result);
	
	$_SESSION['ID']=$array['id'];
	$_SESSION['NOMBRE']=$array['fullname'];
	$_SESSION['PORTAL']="";
	$_SESSION['login_user']=True;
	echo $_SESSION['ID'];
	echo $_SESSION['NOMBRE'];
	header("location: ../conectado/index.php");
}
else{
	$_SESSION['PORTAL']="Usuario o contraseña incorrecta";
	header("location: ../login.php");
}

?>