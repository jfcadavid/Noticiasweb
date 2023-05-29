<?php
  $conexion = mysqli_connect("localhost","root","","dbnoticias");
   
     if(!$conexion){
      die("La conexión falló" .mysqli_connect_error());
     }
       if($_POST){
          
       $nombre= isset($_POST['nombre'])? $_POST['nombre'] : false;
       $apellido= isset($_POST['apellido'])? $_POST['apellido'] : false;
       $email= isset($_POST['email'])? $_POST['email'] : false;
       $contraseña= isset($_POST['contraseña'])? $_POST['contraseña'] : false;
     
     $sql= "INSERT INTO registro(nombre,apellido,email,contraseña) 
     VALUES ('$nombre','$apellido','$email','$contraseña') ";
     
     if($sql){
      $_SESSION['usuario.php']="complete";
     }else{
        $_SESSION['usuario.php']="failed";
     }
      header("localtion: login.html" );

    }

     if(mysqli_query($conexion,$sql)){
      echo "El registro se ha completado correctamente";
     }else{
      echo "Error al registrar el usuario ".mysqli_error($conexion);
     }

     mysqli_close($conexion);
     header("Location: login.html");
?>
