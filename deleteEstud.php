<?php

include 'conn.php';

$nomEstud = $_GET['id'];

$sql = "delete from estudiante where nomEstud = '$nomEstud' ";

$query = mysqli_query($conexion, $sql);

if($query){
    header('location: datos.php');
} else {
    echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
};

?>