<html>
   <head>
    <meta charset="UTF-8">
    <title>Noticias</title>
    <link rel="stylesheet" type="text/css" href="estilos/buscar.css">
   </head>
   <body>
<?php

$con = mysqli_connect("localhost","root","","dbnoticias");

if(!$con){
    die("Error al conectar la base de datos: " .mysqli_connect_error());
}

$comentario= $_POST['Busqueda'];

if(isset($_POST['enviar'])){
$busqueda=$_POST['Busqueda'];    
$query = "SELECT * FROM contenido WHERE comentario  LIKE '%$busqueda%'  ";
$result = mysqli_query($con,$query);

while($row = $result->fetch_array()){
    echo $row['comentario']. '<br><br>';
}

}
mysqli_close($con);
?>
</body>
</html>
