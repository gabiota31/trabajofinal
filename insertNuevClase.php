<?php 
include 'conn.php';

$usuId = $_POST['usu_id'];
$temaC = $_POST['tema'];
$fecha = date('y-m-d', strtotime($_POST['fecha']));
$pago = $_POST['pago'];
$comentC = $_POST['coment'];

if(isset($_POST['id_estud'])){
    $estudId = $_POST['id_estud'];
    $sqlCuenta = "select COUNT(id_clase) from clase where clase.usu_id = $usuId AND estud_id = $estudId";
    $queryCuenta = mysqli_query($conexion, $sqlCuenta);
    $arrayCuenta = mysqli_fetch_array($queryCuenta);
    $idClase = $estudId . $arrayCuenta[0] + 1;
    echo "el tipo es: " . gettype($idClase) ."<br>";
    settype($idClase , "integer");
    echo "El id estud es: " . $estudId . "<br>";
    echo "la cuenta de clases de este estudiante es: " . $arrayCuenta[0] . "<br>";
    echo "la concatenacion de id estud y clase es: " . $idClase . "<br>";
    echo "el tipo es: " . gettype($idClase);
} else {
    echo "error tomando los id";
};

$insert = "insert into clase (id_clase, temaClase, fecha, pago, comentClase, usu_id, estud_id) values ('$idClase', '$temaC', '$fecha', '$pago', '$comentC', '$usuId', '$estudId')";


echo "<br>";
if (mysqli_query($conexion, $insert)) {
    header('location: datosClases.php');
} else {
      echo "Error: " . $insert . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);



?>