<?php

include 'conn.php';

//$consulta1 = mysqli_query($conexion, "select * from usuario");

$sql="select * from estudiante";
$result=mysqli_query($conexion, $sql);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar datos</title>
    <link rel="stylesheet" href="estilosDatos.css">
</head>
<body>

    <nav>
        <?php include 'nav.php' ?>    
    </nav>

    <h1>Tus estudiantes</h1>

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

        <?php
        while($mostrar=mysqli_fetch_array($result)){
        ?>
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
        <?php
        }
        ?>
    </table>    

    <div id="v-editar"></div>

<?php 



?>



    <script src="editar.js"></script>




    


</body>
</html>