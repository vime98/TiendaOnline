 
<?php 
    include 'config.php';
    if (isset($_POST['inputlogin'], $_POST['inputclave'], $_POST['inputfirma']) and $_POST['inputlogin'] !="" and $_POST['inputclave']!="" and $_POST['inputfirma']!="" ){
    //traspasamos a variables locales, para evitar complicaciones con las comillas:
    $login = trim($_POST['inputlogin']); 
    $pass = trim($_POST['inputclave']);
    $certificado = trim($_POST['inputcertificado']);
    $qry = "SELECT * FROM users WHERE usuario = '$login' AND password = '$pass'";
    $resut = bd_consulta("servidor1",$qry);

    $array2=mysqli_fetch_array($resut);
    if($array2){
        echo "</br>Datos correctos";
        $persona = [
            "login" => $login,
            "pass" => $pass,
        ];
        $datosCodificados = json_encode($persona);
        $url = "http://localhost/p10/server2.php";
        $ch = curl_init($url);

        curl_setopt_array($ch, array(
            CURLOPT_CUSTOMREQUEST => "POST",                    // Indicar que vamos a hacer una petición POST
            CURLOPT_POSTFIELDS => $datosCodificados,            // Aquí se colocan los datos dentro del cuerpo
            CURLOPT_HTTPHEADER => array(                        // Encabezados
                'Content-Type: application/json',               //CURLOPT_HEADER => true,
                'Content-Length: ' . strlen($datosCodificados), // Abajo podríamos agregar más encabezados
                'Personalizado: ¡Hola mundo!',                  // Un encabezado personalizado
            ),
        # indicar que regrese los datos, no que los imprima directamente
        CURLOPT_RETURNTRANSFER => true,
        ));

        # Enviar los datos
        echo "</br><h3>Enviado datos al Servidor 2</h3>";
        $resultado = curl_exec($ch);
        print_r($resultado);
        echo "</br> sad". $certificado;
        $codigoRespuesta = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $respuestaDecodificada = json_decode($resultado);
    
        if($certificado == $respuestaDecodificada->certificado){
            echo "<h3>Datos que vienen del Servidor 2</h3>";
            echo "<strong>Nombre: </strong>" . $respuestaDecodificada->nombre;
            echo "<br><strong>Certificado: </strong>" . $respuestaDecodificada->certificado;
        }
        else{
            echo "</br>Error consultando. Código de respuesta: $codigoRespuesta";
        }
        
    }else{
        echo "</br>Contraseña o Usuario Incorrectos";
    }
}

    
?>