<?php 
$conexion = mysqli_connect('localhost','root', '', "trabajofinal");

if(mysqli_connect_errno()){
    echo "error";
}else{
    echo "conecto";
};

$nombreE = $_POST['nombre'];
$apellidoE = $_POST['apellido'];
$correoE = $_POST['correo'];
$telefonoE = $_POST['tel'];
$comentE = $_POST['coment'];
$claseE = $_POST['clase'];

var_dump($nombreE);
var_dump($apellidoE);
var_dump($correoE);
var_dump($telefonoE);
var_dump($comentE);
var_dump($claseE);


$insert = "insert into estudiante (nomEstud, apeEstud, correoEstud, telEstud, comentEstud, clase) values ('$nombreE', '$apellidoE', '$correoE', '$telefonoE', '$comentE', '$claseE')";

//$sql = "INSERT INTO usuario (nombre, apellido, correo) VALUES ('Test', 'Testing', 'Testing@tesing.com')";

echo "<br>";


echo "<br>";
if (mysqli_query($conexion, $insert)) {
    header('location: pag_principal.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);



?>