<?php 
include 'conn.php';

// $idE = $_POST['id']
$clase = $_POST['temaClase'];
$fecha = date('y-m-d', strtotime($_POST['fecha']));
$pago = $_POST['pago'];
$comentC = $_POST['coment'];

$upd = "update clase set temaClase ='$clase', fecha = '$fecha', pago = '$pago', comentClase = '$comentC' where temaClase = '$clase' ";
// $upd = "update estudiante set nomEstud ='$nombreE', apeEstud = '$apellidoE', correoEstud ='$correoE', telEstud = '$telefonoE', comentEstud = '$comentE', clase = '$claseE'" where id = '$id' ;

if (mysqli_query($conexion, $upd)) {
    header('location: datosClases.php');
} else {
      echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);



?>