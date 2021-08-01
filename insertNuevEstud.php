<?php 
include 'conn.php';

$usuId = $_POST['usu_id'];
$nombreE = $_POST['nombre'];
$apellidoE = $_POST['apellido'];
$correoE = $_POST['correo'];
$telefonoE = $_POST['tel'];
$comentE = $_POST['coment'];

if(isset($_POST['usu_id'])){
    $sqlCuenta = "select COUNT(id_estud) from estudiante where estudiante.usu_id = $usuId";
    $queryCuenta = mysqli_query($conexion, $sqlCuenta);
    $arrayCuenta = mysqli_fetch_array($queryCuenta);
    $idEstud = $usuId . $arrayCuenta[0] + 1;
    echo "el tipo es: " . gettype($idEstud) ."<br>";
    settype($idEstud , "integer");
    echo "la cuenta de estudiantes es: " . $arrayCuenta[0] . "<br>";
    echo "la concatenacion de id estud y usu es: " . $idEstud . "<br>";
    echo "el tipo es: " . gettype($idEstud);
} else {
    echo "error tomando los id";
};


$insert = "insert into estudiante (id_estud, nomEstud, apeEstud, correoEstud, telEstud, comentEstud, usu_id) values ( $idEstud, '$nombreE', '$apellidoE', '$correoE', $telefonoE, '$comentE', $usuId)";


echo "<br>";


echo "<br>";
if (mysqli_query($conexion, $insert)) {
    echo "se inserto";
    header('location: datos.php');
} else {
      echo "Error: " . $insert . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);



?>