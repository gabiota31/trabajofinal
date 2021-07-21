<?php 

include 'conn.php';
// include 'sesion.php';

session_start();
$usu = $_POST['usu'];
$pass = $_POST['pass'];

// $nom_usu = mysqli_query($conexion, "select nombre from usuario where correo = '$usu' ");
// $array = mysqli_fetch_array($nom_usu);
// $_SESSION['nombre'] = $array['nombre'];
// echo $_SESSION['nombre'] ;

if(isset($usu) && !empty($usu) && isset($pass) && !empty($pass)){
    $select = mysqli_query($conexion, "select nombre, correo, pass from usuario where correo = '$usu'");
    $sesion = mysqli_fetch_array($select);
} else {
    echo "faltan datos";
};

if($pass == $sesion['pass']){
    $_SESSION['username'] = $usu;
    $_SESSION['nombre'] = $sesion['nombre'];
    echo $_SESSION['nombre'];
    header('location: pag_principal.php');
}else {
    echo "datos erroneos, redirigiendo...";
    header('refresh:2; url= login.html');
}





?>