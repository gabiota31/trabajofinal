<?php 
include 'conn.php';

$idE = $_POST['id_estud'];
$nombreE = $_POST['nombre'];
$apellidoE = $_POST['apellido'];
$correoE = $_POST['correo'];
$telefonoE = $_POST['tel'];
$comentE = $_POST['coment'];

$upd = "update estudiante set nomEstud ='$nombreE', apeEstud = '$apellidoE', correoEstud ='$correoE', telEstud = '$telefonoE', comentEstud = '$comentE' where id_estud = '$idE' ";

//el if manda despues a distintas paginas dependiendo la pagina desde la que se pide la edición

if(isset($_POST['deLaPagPrin'])){
    if (mysqli_query($conexion, $upd)) {
        header('location: pag_principal.php');
    } else {
        echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
} elseif(isset($_POST['deTodosEstud'])){
    if (mysqli_query($conexion, $upd)) {
        header('location: datos.php');
    } else {
        echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
}


?>