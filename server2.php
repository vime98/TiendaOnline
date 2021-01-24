<?php 
    include 'config.php';
    $datosRecibidos = file_get_contents("php://input");
    $persona = json_decode($datosRecibidos);
    $loginDePersona = $persona->login;
    $query = "SELECT firma FROM firmas WHERE usuario = '$loginDePersona'";
    $resultado = mysqli_fetch_array(bd_consulta("servidor2",$query));
    $certificado = md5($resultado["firma"].$loginDePersona);
    $respuesta = [
        "nombre" => $loginDePersona,
        "certificado" => $certificado,
    ];
    $respuestaCodificada = json_encode($respuesta);
    echo $respuestaCodificada;
?>