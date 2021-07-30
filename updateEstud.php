<?php 
include 'conn.php';

$idE = $_POST['id_estud'];
$nombreE = $_POST['nombre'];
$apellidoE = $_POST['apellido'];
$correoE = $_POST['correo'];
$telefonoE = $_POST['tel'];
$comentE = $_POST['coment'];
$claseE = $_POST['clase'];

$upd = "update estudiante set nomEstud ='$nombreE', apeEstud = '$apellidoE', correoEstud ='$correoE', telEstud = '$telefonoE', comentEstud = '$comentE', clase = '$claseE' where id_estud = '$idE' ";

if (mysqli_query($conexion, $upd)) {
    header('location: datos.php');
} else {
      echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);



?>