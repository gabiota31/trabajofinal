<?php 
include 'conn.php';

if(mysqli_connect_errno()){
    echo "error";
}else{
    echo "conecto";
};

$nomEstud = $_GET['nomEstud'];
echo $nomEstud;



$usuId = $_GET['usu_id'];
$temaC = $_GET['tema'];
$fecha = date('y-m-d', strtotime($_GET['fecha']));
$pago = $_GET['pago'];
$comentC = $_GET['coment'];



// $nomEstud = $_POST['nomEstud'];
// echo $nomEstud;



// $usuId = $_POST['usu_id'];
// $temaC = $_POST['tema'];
// $fecha = date('y-m-d', strtotime($_POST['fecha']));
// $pago = $_POST['pago'];
// $comentC = $_POST['coment'];

// $idClase
// $estudId


$insert = "insert into clase (temaClase, fecha, pago, comentClase, usu_id) values ('$temaC', '$fecha', '$pago', '$comentC', '$usuId')";

// $insert = "insert into clase (id_clase, temaClase, fecha, pago, comentClase, usu_id, estud_id ) values ('$idClase', '$temaC', '$fecha', '$pago', '$comentC', '$usuId', '$estudId')";

//$sql = "INSERT INTO usuario (nombre, apellido, correo) VALUES ('Test', 'Testing', 'Testing@tesing.com')";

echo "<br>";


echo "<br>";
if (mysqli_query($conexion, $insert)) {
    header('location: datosClases.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);



?>