<?php

include 'conn.php';

$nomEstud = $_GET['id'];


$sql = "select * from estudiante where nomEstud = '$nomEstud'";
$query = mysqli_query($conexion, $sql);

$mostrar = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de <?php  echo $mostrar['nomEstud']   ?></title>

    <link rel="stylesheet" href="estilosDatos.css">

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
                <td class="nom-caterg" >Tema de la clase</td>
                <td></td>
            </tr>

            <tr>
                <td class="dato"><?php echo $mostrar['nomEstud'] ?></td>
                <td class="dato"><?php echo $mostrar['apeEstud'] ?></td>
                <td class="dato"><?php echo $mostrar['correoEstud'] ?></td>
                <td class="dato"><?php echo $mostrar['telEstud'] ?></td>
                <td class="dato"><?php echo $mostrar['comentEstud'] ?></td>
                <td class="dato"><?php echo $mostrar['clase'] ?></td>
                
                <td><a href="editarEstud.php?id=<?php echo $mostrar['nomEstud']?>"> <span id="editar" >Editar</span> </a></td>
                <td><a href="deleteEstud.php?id=<?php echo $mostrar['nomEstud']?>"> <span id="editar" >Eliminar</span> </a></td>

            </tr>
            
        </table> 




</body>
</html>

