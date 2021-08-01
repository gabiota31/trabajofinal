<?php 
include 'conn.php';

$idC = $_POST['id_clase'];
$fecha = date('y-m-d', strtotime($_POST['fecha']));
$nomEstud = $_POST['nomEstud'];
$apeEstud = $_POST['apeEstud'];
$hora = $_POST['hora'];
$temaClase = $_POST['temaClase'];
$comentC = $_POST['comentC'];
$pago = $_POST['pago'];
$precioC = $_POST['precioC'];

$upd = "update clase INNER JOIN estudiante set estudiante.nomEstud = '$nomEstud', estudiante.apeEstud='$apeEstud', clase.hora='$hora', clase.temaClase = '$temaClase', clase.comentClase='$comentC', clase.pago='$pago', clase.precioClase= $precioC where estudiante.id_estud = clase.estud_id and clase.id_clase = $idC; 
";


if (mysqli_query($conexion, $upd)) {
    header('location: pag_principal.php');
} else {
      echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);



?>