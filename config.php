<?php

	//Aqui esta la funcion que recibe una query y hace la conexion

	function bd_consulta($bd,$query)
	{
		//Parte para la conexion con la BD
		$hostname="localhost";
		$user="root";
		$password="";
		$connection = mysqli_connect($hostname , $user , $password);

		if (!$connection->set_charset("utf8")) {
			printf("Error cargando el conjunto de caracteres utf8: %s\n",	$mysqli->error);
				exit();
		}
		if($connection == false){
				echo 'ha habido un error <br>'.mysqli_connect_error();
		}
		//--------------------------------------------------------------

		mysqli_select_db ($connection, $bd);

		//Aqui ponemos la query y obtenemos el resultado y cerramos la conexion
		$result = mysqli_query($connection, $query);
		mysqli_close($connection);
		
		//Esto regresa la funcion
		return $result;
	}
?>