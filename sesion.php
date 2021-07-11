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

$sql = "insert into usuario (nombre, apellido, correo, pass, telefono, avatar) values ('$nombre', '$apellido', '$correo', '$pass', '$telefono', '$avatar')";

if(mysqli_query($conexion,$sql)) {
    echo "<br>" . "se mando la info";
}else{
    echo "error";
};




?>