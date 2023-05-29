<?php
  include('login.html');
  
  session_start();
  
  if(isset($_SESSION['email'])){
   header("Location: Incio.html");
   exit();
  }

  if(isset($_POST['email']) && isset($_POST['contraseña'])){
   $email=$_POST['email'];
   $contraseña=$_POST['contraseña'];
  }

  if($email=== "email" && $contraseña==="contraseña" ){
   $_SESSION['email']=$email;
   header("Location: Inicio.html");
   exit();
  }
  else{
      $error="No existe la cuenta, regisrate";
      header("Location: Index.html");
  }

$conection = mysqli_connect("localhost","root","","dbnoticias");

if(!$conection){
    die("La conexión falló" .mysqli_connect_error());
   }
   $sql="SELECT * FROM registro WHERE email= '$email' AND contraseña='$contraseña' ";
   $resultado= mysqli_query($conection,$sql);

   $filas=mysqli_num_rows($resultado);
   if($filas){
      header("location: Inicio.html");
   }else{
      ?>
      <?php 
      include("login.php")
      ?>
      <a href="login.html">Inicio Sesión</a>
      <?php
   }

   mysqli_free_result($resultado);
   mysqli_close($conection);
   
   


?>