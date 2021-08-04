<?php

include 'conn.php';
session_start();

// $usu_id = $_SESSION['userId'];
$usu_id = 2;

//$consulta1 = mysqli_query($conexion, "select * from usuario");

$sql="select * from estudiante where estudiante.usu_id = $usu_id";
$result=mysqli_query($conexion, $sql);

?>

<?php
// if(isset($_SESSION['username'])){
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar datos</title>
    <link rel="stylesheet" href="estilos/estilosDatos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <script src="https://kit.fontawesome.com/ea0d59954b.js" crossorigin="anonymous"></script>
</head>
<body>

    <div>
        <?php include 'nav.php' ?>    
    </div>
    <main>


        <section>
            <div class="titulo">  
                <h2>TUS ESTUDIANTES</h2>
            </div>
            <?php
                while($mostrar2=mysqli_fetch_array($result)){
            ?>
            <div class="desliz-titulo">
                <?php echo $mostrar2['nomEstud'] . " ". $mostrar2['apeEstud'] ?>
                <span>
                    <a href="editarEstud.php?idEstud=<?php echo $mostrar2['id_estud'] ?>"><i class="fas fa-user-edit"></i></a>
                </span>
                <span>
                    <!-- <a id="btn-borrar" href="deleteEstud.php?id=<?php //echo $mostrar2['id_estud'] ?>"><i class="fas fa-user-times"></i></a> -->
                    <a id="btn-borrar" href="datos.php?idVB=<?php echo $mostrar2['id_estud'] ?>"><i class="fas fa-user-times"></i></a>
                </span>
            </div>
                <?php
                if(isset($_GET['idVB'])){
                ?>
                <div class="alerta">
                    <p>¿seguro que quiere borrar esta entrada?</p>
                    <p><a href="deleteEstud.php?idDatos=<?php echo $_GET['idVB']?>">Si</a> <a href="datos.php">No</a></p>
                </div>
                <?php
                }
                ?>
            
            <div class="desliz-e">    
                <div class="desliz-info-e">
                    <div class="info-contacto">
                        <div>
                            Correo: <?php echo $mostrar2['correoEstud'] ?>
                        </div>
                        <div>
                            Telefono: <?php echo $mostrar2['telEstud'] ?>
                        </div>
                        <div>
                            <?php echo $mostrar2['comentEstud'] ?>
                        </div>
                    </div>
                    
                    <div class="cant-clases">
                        Clases agendadas:
                        <?php //esto cuenta la cantidad de clases totales y las pone en un numero
                        $idEstud = $mostrar2['id_estud'];
                        $sqlCuenta = "select count(*) FROM clase where usu_id = $usu_id and estud_id = $idEstud";
                        $queryCuenta = mysqli_query($conexion,$sqlCuenta);
                        $arrayCuenta = mysqli_fetch_array($queryCuenta);
                        $cuenta = $arrayCuenta[0];
                        echo " " . " " .$cuenta;
                        ?>
                    </div>
                    <div class="desliz-notas-e">
                        
                        <?php //esto hace que parezcan las clases listadas dentro del contenedor 
                        $sql3 = "select * FROM estudiante INNER JOIN clase WHERE estudiante.id_estud = clase.estud_id and estudiante.usu_id = $usu_id and estudiante.id_estud = $idEstud order by fecha asc";
                        $consulta3 = mysqli_query($conexion, $sql3);
                        while($mostrar3 = mysqli_fetch_array($consulta3)){
                        ?>
                        <div class="desliz-clases-btns-e">
                            <div class="desliz-clase">
                                <div class="desliz-clase-renglon">
                                    <span><?php echo date("d/m", strtotime($mostrar3['fecha'])) ?> - <?php echo date("H:i", strtotime($mostrar3['hora'])) ?></span> <span><?php echo $mostrar3['temaClase'] ?></span>
                                </div>
                                <div class="renglon-pago">
                                    <div class="pago-e">
                                        Precio: $<?php echo $mostrar3['precioClase'] ?>
                                    </div>
                                    <div class="pagoBD-e">
                                        ¿paga? <?php echo $mostrar3['pago'] ?>
                                    </div>
                                </div>
                                <div class="coment-clase">
                                    <span> Notas sobre la clase: </span><?php echo $mostrar3['comentClase'] ?>
                                </div>
                            </div>
                            <div class="desliz-btns-e">
                                <!-- <div class="deliz-icono"><a id="borrar" href="deleteClase.php?idDelete=<?php echo $mostrar3['id_clase'] ?>"> <i class="fi-rr-file-delete"></i> </a></div> -->
                                <div class="deliz-icono"><a id="borrar" href="datos.php?idVBC=<?php echo $mostrar3['id_clase'] ?>"> <i class="fi-rr-file-delete"></i> </a></div>
                            </div>

                            <?php
                            if(isset($_GET['idVBC'])){
                            ?>
                            <div class="alerta">
                                <p>¿seguro que quiere borrar esta entrada?</p>
                                <p><a href="deleteClase.php?idDatos=<?php echo $_GET['idVBC']?>">Si</a> <a href="datos.php">No</a></p>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <?php
                        } //cierre del while que pone todas las clases del estudiante
                        ?>
                    </div> <!-- "cierre desliz-notas-e" -->   
                </div> <!--cierre "desliz-info-e"-->
            </div> <!-- cierre "desliz-e" -->


            <?php
            } //cierre del while que pone a todos los estudiantes
            ?>
        </section>

        
    </main>

    <?php include 'footer.php' ?>    


    <script src="js/datos.js"></script>

</body>
</html>

<?php //}  
// else{
//     echo "no iniciaste sesion, redirigiendo...";
//     header('refresh:3; url= login.html');
// } ?>