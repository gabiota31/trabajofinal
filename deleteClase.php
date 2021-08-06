<?php

include 'conn.php';

if(isset($_GET['idIndex'])){
    $idClase = $_GET['idIndex'];

    $sql = "delete from clase where id_clase = '$idClase' ";

    $query = mysqli_query($conexion, $sql);

    if($query){
        header('location: pag_principal.php');
    } else {
        echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
    };
} elseif(isset($_GET['idDatos'])) {
    $idClase = $_GET['idDatos'];

    $sql = "delete from clase where id_clase = '$idClase' ";

    $query = mysqli_query($conexion, $sql);

    if($query){
        header('location: datos.php');
    } else {
        echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
    };
} elseif(isset($_GET['idDatosClase'])){
    $idClase = $_GET['idDatosClase'];

    $sql = "delete from clase where id_clase = '$idClase' ";

    $query = mysqli_query($conexion, $sql);

    if($query){
        header('location: datosClases.php');
    } else {
        echo "Error: " . $upd . "<br>" . mysqli_error($conexion);
    };
};







?>