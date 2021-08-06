<?php 
include 'conn.php';

$idC = $_POST['id_clase'];
$nomEstud = $_POST['nomEstud'];
$apeEstud = $_POST['apeEstud'];
$temaClase = $_POST['temaClase'];
$fecha = date('y-m-d', strtotime($_POST['fecha']));
$hora = date("H:i:s", strtotime($_POST['hora']));
$pago = $_POST['pago'];
$precioC = $_POST['precioC'];
$comentC = $_POST['comentC'];

$upd = "update clase INNER JOIN estudiante set estudiante.nomEstud = '$nomEstud', estudiante.apeEstud='$apeEstud', clase.fecha='$fecha', clase.hora='$hora', clase.temaClase = '$temaClase', clase.comentClase='$comentC', clase.pago='$pago', clase.precioClase= $precioC where estudiante.id_estud = clase.estud_id and clase.id_clase = $idC";

if(isset($_POST['deLaPagPrin'])){
    if (mysqli_query($conexion, $upd)) {
        header('location: pag_principal.php');
    } else {
        echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
} elseif(isset($_POST['deTodasClases'])) {
    if (mysqli_query($conexion, $upd)) {
        header('location: datosClases.php');
    } else {
        echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);
};


?>