<?php 
include 'conn.php';


// $idE = $_POST['id']
$correo = $_POST['correo'];
$passNueva1 = $_POST['passNueva1'];
$passNueva2 = $_POST['passNueva2'];

$sql = "select correo, pass from usuario where correo = '$correo'";
$query = mysqli_query($conexion, $sql);

if($array = mysqli_fetch_array($query)){
    if($array['correo'] == $correo){
        if(isset($passNueva1) && isset($passNueva2) && $passNueva1 == $passNueva2){
            $upd = "update usuario set pass ='$passNueva1' where correo = '$correo'";
            if (mysqli_query($conexion, $upd)) {
                echo "contraseña cambiada satifactoriamente" . "<br>";
                echo "redirigiendo..." ;
                header('refresh:2; url = login.html');
            }else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }
        }else {
            echo "las contraseñas no son iguales" . "<br>";
            echo "redirigiendo..." ;
            header('refresh:2; url = editarContra.php');

        };
    }
}else{
    echo "No hay ninguna cuenta con ese correo" . "<br>";
    echo "redirigiendo..." ;
    header('refresh:2; url = editarContra.php');
    mysqli_close($conexion);

};

echo "<br>";



// if(isset())
// $upd = "update usuario set nombre ='$nombre', apellido = '$apellido', correo ='$correo', telefono = '$telefono', pass = '$pass', avatar = '$avatar' where nombre = '$nombre' ";

// $upd = "update estudiante set nomEstud ='$nombreE', apeEstud = '$apellidoE', correoEstud ='$correoE', telEstud = '$telefonoE', comentEstud = '$comentE', clase = '$claseE'" where id = '$id' ;

// if (mysqli_query($conexion, $upd)) {
//     header('location: usuari.php');
// } else {
//       echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
// }
// mysqli_close($conexion);



?>