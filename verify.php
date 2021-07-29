<?php 

//conexion a la base de datos
include 'conn.php';
// include 'sesion.php';

//método para iniciar la sesion y poder usar los métodos SESSION
session_start();

// correo y contraseña ingredados en login.html
$usu = $_POST['usu'];
$pass = $_POST['pass'];

// $nom_usu = mysqli_query($conexion, "select nombre from usuario where correo = '$usu' ");
// $array = mysqli_fetch_array($nom_usu);
// $_SESSION['nombre'] = $array['nombre'];
// echo $_SESSION['nombre'] ;

//verifica que $usu y $pass existan y no estén vacios, si se cumple, busca coincidencias en la BD, 
if(isset($usu) && !empty($usu) && isset($pass) && !empty($pass)){
    $select = mysqli_query($conexion, "select id_usu, nombre, correo, pass from usuario where correo = '$usu'");
    $sesion = mysqli_fetch_array($select);
    // si el correo es correcto, se hace la consulta en la BD entonces $sesion existe
    if($sesion){
        //si la contraseña ingresada es correcta:
        if($pass == $sesion['pass']){
            $_SESSION['correo'] = $usu;
            $_SESSION['nombre'] = $sesion['nombre'];
            $_SESSION['userId'] = $sesion['id_usu'];
            header('location: pag_principal.php');
        } else {
            echo "datos erroneos, redirigiendo...";
            header('refresh:2; url= login.html');
        }
    } else {
        echo "datos erroneos, redirigiendo...";
        header('refresh:2; url= login.html');
    }
};




?>