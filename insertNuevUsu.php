<?php 
include 'conn.php';

if(mysqli_connect_errno()){
    echo "error";
}else{
    echo "conecto";
};
echo "<br>";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$telefono = $_POST['tel'];
$avatar = $_POST['usuario'];

// var_dump($nombre);
// var_dump($apellido);
// var_dump($correo);
// var_dump($pass);
// var_dump($telefono);
// var_dump($avatar);

$queryCorreo = "select * from usuario where correo=$correo";
// $queryTel = "select * from usuario where telefono=$telefono";
$queryAvatar = "select * from usuario where avatar=$avatar ";

$consultaCorreo=mysqli_query($conexion, $queryCorreo);
// $consultaTel=mysqli_query($conexion, $queryTel);
$consultaAvatar=mysqli_query($conexion, $queryAvatar);

echo "consulta correo";
var_dump($consultaCorreo);
echo "<br>";
// echo "consulta telefono";
// var_dump($consultaTel);
echo "<br>";
echo "consulta usuario";
var_dump($consultaAvatar);
echo "<br>";
var_dump($avatar);
echo "<br>";
echo "el usuario entrante es: ";
echo "$avatar";
echo "<br>";
echo "el usuario consultado es: ";
echo "<br>";



if ($consultaCorreo == TRUE){
    echo "<br>". "ya existe un usuario con ese correo";
} elseif($consultaAvatar == TRUE){
    echo "<br>". "ya existe un usuario con ese nombre";
} else{
    $insert = "insert into usuario (nombre, apellido, correo, pass, telefono, avatar) values ('$nombre', '$apellido', '$correo', '$pass', '$telefono', '$avatar')";
    echo "<br>";
    if (mysqli_query($conexion, $insert)) {
        echo "¡Cuenta creada!";
        header('refresh:2; url = login.html');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
}



//$sql = "INSERT INTO usuario (nombre, apellido, correo) VALUES ('Test', 'Testing', 'Testing@tesing.com')";


mysqli_close($conexion);




?>