<?php

$conexion = mysqli_connect('localhost','root', '', "trabajofinal");
$sql="select * from estudiante where nomEstud='Roberto'";
$result=mysqli_query($conexion, $sql);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar datos</title>
    <link rel="stylesheet" href="estilos_muestra.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    
    <nav>
        <?php include 'nav.php' ?>    
    </nav>


    <table>
            <tr>
                <td class="nom-caterg" >Nombre</td>
                <td class="nom-caterg" >Apellido</td>
                <td class="nom-caterg" >Correo</td>
                <td class="nom-caterg" >Telefono</td>
                <td class="nom-caterg" >Comentarios</td>
                <td>Modificar</td>
            </tr>

            <?php
            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $mostrar['nomEstud'] ?></td>
                <td><?php echo $mostrar['apeEstud'] ?></td>
                <td><?php echo $mostrar['correoEstud'] ?></td>
                <!-- <td><?php //echo $mostrar['pass'] ?></td> -->
                <td><?php echo $mostrar['telEstud'] ?></td>
                <td><?php echo $mostrar['comentEstud'] ?></td>
                <td> <span id="editar" >Editar</span> </td>
            </tr>
            <?php
            }
            ?>
        </table>    

</body>
