<?php

include 'conn.php';

$idClase = $_GET['id'];

$sql = "delete from clase where id_clase = '$idClase' ";

$query = mysqli_query($conexion, $sql);

if($query){
    header('location: datosClases.php');
} else {
    echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
};

?>