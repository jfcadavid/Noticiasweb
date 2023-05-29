<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

    </head>
    <body>

<?php
$miconexion=mysqli_connect("localhost","root","","dbnoticias");

if(!$miconexion){
    die ("La conexion ha fallado".mysqli_connect_error());
    
}

if($_FILES['imagen']['error']){

    switch ($_FILES['imagen']['error']){
        case 1: 
            echo "El archivo excede lo permitido";
            break;
        case 2: 
            echo "El tamaño del archivo excede 2 MB";
            break;
        case 3: 
            echo "El envio se interrumpio";
            break;
        case 4: 
            echo "No se envio ningún aechivo";
            break;


    }

}

else{
    echo "Cargado con exito";
    if((isset($_FILES['imagen']['name'])&&($_FILES['imagen']['error']==UPLOAD_ERR_OK))){
       $destino_de_ruta="imagenes/";
       move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']); 
       echo "El archivo ".$_FILES['imagen']['name']." se ha copiado en el directorio imagenes";
    }
    else{
        echo "No se ha copiado";
    }
}
$eltitulo=$_POST['campo_titulo'];
$lafecha=date("y-m-d H:i:s");
$elcomentario=$_POST['area_comentarios'];
$laimagen=$_FILES['imagen']['name'];



$miconsulta="INSERT INTO CONTENIDO (titulo, fecha, comentario, imagen) VALUES('".$eltitulo."', '".$lafecha."', '".$elcomentario."', '".$laimagen."')";
$resultado=mysqli_query($miconexion,$miconsulta);

mysqli_close($miconexion);

 header("Location: Inicio.html");
?>

    </body>
</html>