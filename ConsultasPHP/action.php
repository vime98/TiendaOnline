
<?php
  include('config.php');
  if(isset($_POST['username']) && isset($_POST['password']))
  {
        $username=mysqli_real_escape_string($db,$_POST['username']); 
        //Here converting passsword into MD5 encryption. 
        $password=mysqli_real_escape_string($db,$_POST['password']);
        $result=mysqli_query($db,"SELECT id FROM users WHERE login='$username' and password='$password'");
        $count=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        // If result matched $username and $password, table row  must be 1 row
        if($count==1){
          $_SESSION['login_user']=$row['id']; //Storing user session value.
          echo $row['id'];
        }
  }
?>