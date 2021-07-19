<?php 

include 'conn.php';
// include 'sesion.php';

session_start();
$usu = $_POST['usu'];
$pass = $_POST['pass'];

if(isset($usu) && !empty($usu) && isset($pass) && !empty($pass)){
    $select = mysqli_query($conexion, "select correo, pass from usuario where correo = '$usu'");
    $sesion = mysqli_fetch_array($select);
} else {
    echo "faltan datos";
};

if($pass == $sesion['pass']){
    $_SESSION['username'] = $usu;
    echo "sesion exitosa";
    header('location: pag_principal.php');
}else {
    echo "datos erroneos, redirigiendo...";
    header('refresh:2; url= login.html');
}





?>