<?php

$conexion = mysqli_connect('localhost','root', '', "trabajofinal");
$sql="select * from clase";
$consulta=mysqli_query($conexion, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="estilosPagPrin.css">
</head>
<body>
    <main>
        <div class="nom-caterg">Tus Clases</div>
        <div class="contenedor-data">
            <?php
            while($mostrar=mysqli_fetch_array($consulta)){
            ?>
                <div class="nomEstud"><?php echo $mostrar['temaClase'] ?></div>
            <?php
            }
            ?>
        </div>    
    </main>



</body>
</html>