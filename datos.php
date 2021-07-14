<?php

$conexion = mysqli_connect('localhost','root', '', "trabajofinal");

if(mysqli_connect_errno()){
    echo "error";
}else{
    echo "conecto";
};

//$consulta1 = mysqli_query($conexion, "select * from usuario");

$sql="select * from estudiante";
$result=mysqli_query($conexion, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar datos</title>
    <link rel="stylesheet" href="estilos_muestra.css">
</head>
<body>
    <h1>Estudiantes</h1>

    <div>
        agregar
    </div>

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

    <div id="v-editar"></div>

<?php 



?>



    <script src="editar.js"></script>




    


</body>
</html>