 
  <?php 

    include 'config.php';

    if (isset($_POST['user-name'], $_POST['user-email'], $_POST['user-pass']) and $_POST['user-name'] !="" and $_POST['user-email']!="" and $_POST['user-pass']!="" ){
      //traspasamos a variables locales, para evitar complicaciones con las comillas:
      $nombre = trim($_POST['user-name']);   
      $email = trim($_POST['user-email']);   
      $pass = trim($_POST['user-pass']);
      $certificado = trim($_POST['user-certificado']);
      $qry = "INSERT INTO users (usuario,password) VALUES ('$nombre','$pass')";;
      $resut = bd_consulta('servidor1',$qry);
      if($resut){
        echo "Registro Exitoso";
        //regresa a la ruta que se coloque aqui
        header("Location: login.html");
        exit();
      }
      else{
        echo "Algo salio mal";
      }
    }
  
  
  ?>
  
