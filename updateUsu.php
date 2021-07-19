<?php 
include 'conn.php';
session_start();

$usu =$_SESSION['username'];

// $idE = $_POST['id']
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['tel'];
$pass = $_POST['pass'];
$avatar = $_POST['avatar'];

$upd = "update usuario set nombre ='$nombre', apellido = '$apellido', correo ='$correo', telefono = '$telefono', pass = '$pass', avatar = '$avatar' where nombre = '$nombre' ";

// $upd = "update estudiante set nomEstud ='$nombreE', apeEstud = '$apellidoE', correoEstud ='$correoE', telEstud = '$telefonoE', comentEstud = '$comentE', clase = '$claseE'" where id = '$id' ;

if (mysqli_query($conexion, $upd)) {
    header('location: usuari.php');
} else {
      echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);



?>