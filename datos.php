<?php

$conexion = mysqli_connect('localhost','root', '', "trabajofinal");

if(mysqli_connect_errno()){
    echo "error";
}else{
    echo "conecto";
};

//$consulta1 = mysqli_query($conexion, "select * from usuario");

$sql="select * from usuario";
$result=mysqli_query($conexion, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar datos</title>
</head>
<body>
    <table>
        <tr>
            <td>nombre</td>
            <td>apellido</td>
            <td>correo</td>
            <td>telefono</td>
        </tr>

        <?php
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['apellido'] ?></td>
            <td><?php echo $mostrar['correo'] ?></td>
            <!-- <td><?php //echo $mostrar['pass'] ?></td> -->
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['avatar'] ?></td>
        </tr>
        <?php
        }
        ?>

    </table>    




    


</body>
</html>