<?php
    
    if(!empty($_POST["enviar"])) {
      $captcha = $_POST["captcha"];

      $captchaUser = filter_var($_POST["captcha"], FILTER_SANITIZE_STRING);

      if(empty($captcha)) {
        $captchaError = array(
          "status" => "alert-danger",
          "mensaje" => "Porfavor ingresa el captcha."
        );
      }
      else if($_SESSION['CAPTCHA_CODE'] == $captchaUser){
        $captchaError = array(
          "status" => "alert-success",
          "mensaje" => "Datos enviados Correctos ."
        );
      } else {
        $captchaError = array(
          "status" => "alert-danger",
          "mensaje" => "Captcha no valido."
        );
      }
    }  
?>