<?php
function bd_consulta($query)
{
	$hostname="localhost";
	$user="root";
	$password="";
	$bd="tienda_online_plg";
	$connection = mysqli_connect($hostname , $user , $password);

	if (!$connection->set_charset("utf8")) {
		 printf("Error cargando el conjunto de caracteres utf8: %s\n",
			$mysqli->error);
		 exit();
	}
	if($connection == false){
			echo 'ha habido un error <br>'.mysqli_connect_error();}

	mysqli_select_db ($connection, $bd);
	$result = mysqli_query($connection, $query);
	mysqli_close($connection);

	return $result;
}
?>