<?php 
$conexion = mysqli_connect('localhost','root', '', "trabajofinal");

if(mysqli_connect_errno()){
    echo "error";
}else{
    echo "conecto";
};

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$telefono = $_POST['tel'];
$avatar = $_POST['avatar'];

var_dump($nombre);
var_dump($apellido);
var_dump($correo);
var_dump($pass);
var_dump($telefono);
var_dump($avatar);


$sql = "insert into usuario (nombre, apellido, correo, pass, telefono, avatar) values ('$nombre', '$apellido', '$correo', '$pass', '$telefono', '$avatar')";

//$sql = "INSERT INTO usuario (nombre, apellido, correo) VALUES ('Test', 'Testing', 'Testing@tesing.com')";

echo "<br>";
if (mysqli_query($conexion, $sql)) {
      echo "se grabo la entrada";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);




?>