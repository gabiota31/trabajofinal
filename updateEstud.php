<?php 
include 'conn.php';

// $idE = $_POST['id']
$nombreE = $_POST['nombre'];
$apellidoE = $_POST['apellido'];
$correoE = $_POST['correo'];
$telefonoE = $_POST['tel'];
$comentE = $_POST['coment'];
$claseE = $_POST['clase'];

$upd = "update estudiante set nomEstud ='$nombreE', apeEstud = '$apellidoE', correoEstud ='$correoE', telEstud = '$telefonoE', comentEstud = '$comentE', clase = '$claseE' where nomEstud = '$nombreE' ";

// $upd = "update estudiante set nomEstud ='$nombreE', apeEstud = '$apellidoE', correoEstud ='$correoE', telEstud = '$telefonoE', comentEstud = '$comentE', clase = '$claseE'" where id = '$id' ;

if (mysqli_query($conexion, $upd)) {
    header('location: datos.php');
} else {
      echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);



?>