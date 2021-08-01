<?php

include 'conn.php';
// $usu_id = $_SESSION['userId'];
$usu_id = 2;

$sql="select * from estudiante where estudiante.usu_id = $usu_id limit 5";
$consulta=mysqli_query($conexion, $sql);


?>
<html>
<head>
    <link rel="stylesheet" href="estilos/estilos1CardsEstud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <section class="tus-estudiantes">
        <div class="cards-e">
            <?php
            while($mostrar=mysqli_fetch_array($consulta)){
            ?>
            <a href="pag_principal.php?id=<?php echo $mostrar['id_estud']?>">
                <div class="card-n-e " id="<?php echo $mostrar['id_estud']?>">
                    <div class="card-borde-l">
                        
                    </div>
                    <div class="card-central-e">
                        <div class="card-nombreEstud-e">
                            <?php echo $mostrar['nomEstud'] ?>
                        </div>
                        <div class="card-coment-e">
                        <?php echo $mostrar['comentEstud'] . " "?>
                        </div>
                    </div>
                    <div class="card-count">
                        ver mas - Todas las clases
                    </div>
                </div> <!-- cierre "card-n"-->
            </a>
            <?php
            };
            ?>
        </div> <!--cierre "cards-clase"-->


        <!-- Divs de las tarjetas que aparecen al cliquear las otras: -->

        <div class="cont-desliz-e animate__animated animate__fadeInRight">
            <?php //esto, si se hizo click en alguna de las tarjetas anteriores, trae el id y muestra la información correspondiente a ese estudiante
            if(isset($_GET['id'])){
                $idEstud =  $_GET['id'];
                $sql2="select * from estudiante where estudiante.usu_id = $usu_id and estudiante.id_estud = $idEstud " ;
                $consulta2=mysqli_query($conexion, $sql2);
                while($mostrar2=mysqli_fetch_array($consulta2)){
            ?>
            <div class="desliz-e">
                <div class="desliz-info-e">
                    <div class="desliz-titulo">
                        <?php echo $mostrar2['nomEstud'] . " ". $mostrar2['apeEstud'] ?>
                    </div>
                    <div>
                        Correo: <?php echo $mostrar2['correoEstud'] ?>
                    </div>
                    <div>
                        Telefono: <?php echo $mostrar2['telEstud'] ?>
                    </div>
                    <div class="desliz-notas-e">
                        <div class="cant-clases">
                            Clases agendadas:
                            <?php //esto cuenta la cantidad de clases totales y las pone en un numero
                            $sqlCuenta = "select count(*) FROM clase where usu_id = $usu_id and estud_id = $idEstud";
                            $queryCuenta = mysqli_query($conexion,$sqlCuenta);
                            $arrayCuenta = mysqli_fetch_array($queryCuenta);
                            $cuenta = $arrayCuenta[0];
                            echo " " . " " .$cuenta;
                            ?>
                        </div>
                        <?php //esto hace que parezcan las clases listadas dentro del contenedor 
                        $sql3 = "select * FROM estudiante INNER JOIN clase WHERE estudiante.id_estud = clase.estud_id and estudiante.usu_id = $usu_id and estudiante.id_estud = $idEstud Limit 5";
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
                                    <span> Comentarios: </span><?php echo $mostrar3['comentClase'] ?>
                                </div>
                            </div>
                            <div class="desliz-btns-e">
                                <div class="deliz-icono"><a id="borrar" href="deleteClase.php?id=<?php echo $mostrar3['id_clase'] ?>"> <i class="fi-rr-file-delete"></i> </a></div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                    
                    
                </div> <!--cierre "desliz-info" cobre el que se ejecuta el while-->
                
            </div>
            <div class="cruz-e">
                <a href="pag_principal.php">X</a>
            </div>
        <?php
        }
      };
        ?>
        </div> <!--cierre "cont-desliz-e"-->

    </section>





</script>

</body>
</html>