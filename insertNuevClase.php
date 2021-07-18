<?php 
include 'conn.php';

if(mysqli_connect_errno()){
    echo "error";
}else{
    echo "conecto";
};

$temaC = $_POST['tema'];
$fecha = date('y-m-d', strtotime($_POST['fecha']));
$pago = $_POST['pago'];
$comentC = $_POST['coment'];


$insert = "insert into clase (temaClase, fecha, pago, comentClase) values ('$temaC', '$fecha', '$pago', '$comentC')";

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