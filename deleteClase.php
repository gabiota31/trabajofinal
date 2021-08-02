<?php

include 'conn.php';

if(isset($_GET['id'])){
    $idClase = $_GET['id'];

    $sql = "delete from clase where id_clase = '$idClase' ";

    $query = mysqli_query($conexion, $sql);

    if($query){
        header('location: pag_principal.php');
    } else {
        echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
    };
} elseif(isset($_GET['idDelete'])) {
    $idClase = $_GET['idDelete'];

    $sql = "delete from clase where id_clase = '$idClase' ";

    $query = mysqli_query($conexion, $sql);

    if($query){
        header('location: datos.php');
    } else {
        echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
    };



};







?>