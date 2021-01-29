<?php 

	require_once "bd.php";
	
	$login=(isset($_POST['login']) ? $_POST['login']:null);
	$fullname=(isset($_POST['fullname']) ? $_POST['fullname']:null);
	$email=(isset($_POST['email']) ? $_POST['email']:null);
	$curp=(isset($_POST['curp']) ? $_POST['curp']:null);
	$rfc=(isset($_POST['rfc']) ? $_POST['rfc']:null);
	$direccion=(isset($_POST['direccion']) ? $_POST['direccion']:null);
	$password=(isset($_POST['password']) ? md5($_POST['password']):null);

	$sql="INSERT into users (login,fullname,curp,rfc,direccion, email, password) values ('$login',upper('$fullname'),'$curp','$rfc','$direccion','$email','$password')";
	
	$result = bd_consulta($sql);

	if($result==1){
		session_start();
		$sql="SELECT id, fullname from users where login='$usuario' && Password='$password'";
		$result = bd_consulta($sql);
		$array=mysqli_fetch_array($result);

			$_SESSION['ID']=$array['id'];
			$_SESSION['NOMBRE']=$array['fullname'];
			$_SESSION['login_user']=true;
			$_SESSION['PORTAL']="";
			header("location: ../conectado/index.php");
	}
	else{
		$_SESSION['PORTAL']="Revise los campos";
		echo'<script type="text/javascript">
    	alert("Ha ocurrido un error");
    	window.location.href="../login.php";
    	</script>';
	}
 ?>