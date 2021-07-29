<?php 
include 'conn.php';

$idC = $_POST['id_clase'];
$clase = $_POST['temaClase'];
$fecha = date('y-m-d', strtotime($_POST['fecha']));
$pago = $_POST['pago'];
$comentC = $_POST['coment'];

$upd = "update clase set temaClase ='$clase', fecha = '$fecha', pago = '$pago', comentClase = '$comentC' where id_clase = $idC ";


if (mysqli_query($conexion, $upd)) {
    header('location: datosClases.php');
} else {
      echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);



?>