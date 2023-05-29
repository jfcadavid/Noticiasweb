<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Noticias</title>
    <style>
        body{
            background: gray;
            text-align: center;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>
<body>

    <?php
    $miconexion=mysqli_connect("localhost","root","","dbnoticias");
    if(!$miconexion){
        echo "No se pudo establecer la conexión".mysqli_connect_error();
        exit();
    }
    $miconsulta="SELECT* FROM CONTENIDO ORDER BY FECHA DESC";
    if($resultado=mysqli_query($miconexion,$miconsulta)){
        while($registro=mysqli_fetch_assoc($resultado)){
             echo "<center><h3>".$registro['titulo']."</h3></center>";
             echo "<center><h4>".$registro['fecha']."</h4></center>";
             echo "<center><div style='width:400px'>".$registro['comentario']."</div></br></br></center>";

             if($registro['imagen']!=""){
                echo "<center><img src='imagenes/".$registro['imagen']."'width='300px'/></center>";
             }

        }
    }

    ?>
</body>
</html>