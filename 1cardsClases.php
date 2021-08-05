<?php

include 'conn.php';
// $usu_id = $_SESSION['userId'];
$usu_id = 2;

$sql="select * from estudiante inner join clase where estudiante.id_estud = clase.estud_id and clase.usu_id = $usu_id order by fecha,hora asc limit 5 ";
$consulta=mysqli_query($conexion, $sql);


?>
<html>
<head>
    <link rel="stylesheet" href="estilos/estilos1CardsClases.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <h2>Proximas Clases </h2>
    <section class="proximas-clases">
        <div class="cards-clase">
            <?php
            while($mostrar=mysqli_fetch_array($consulta)){
            ?>
            <a href="pag_principal.php?idCardsClases=<?php echo $mostrar['id_clase']?>">
                
                <div class="card-n " id="<?php echo $mostrar['id_clase']?>">
                    <div class="cards-cont-izq">
                        <div class="card-inicial">
                            R
                        </div>
                        <div class="card-central">
                            <div class="card-nombreEstud">
                                Clase con <?php echo $mostrar['nomEstud'] ?>
                            </div>
                            <div class="card-info">
                            <?php echo  date("H:i", strtotime($mostrar['hora'])) . " "?>   -   <?php echo " " . $mostrar['temaClase'] ?> - $<?php echo " " . $mostrar['precioClase'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-fecha">
                        <?php
                            $fNueva = date("d/m", strtotime($mostrar['fecha']));
                            echo $fNueva;
                        ?>
                    </div>
                </div> <!-- cierre "card-n"-->
            </a>
            <?php
            };
            ?>
        </div> <!--cierre "cards-clase" y del while-->

        <!-- ----------------------------- contenedor tarjetas deslizantes--------------------------- -->

        <div class="cont-desliz  animate__animated animate__fadeInRight">
            <?php 
            if(isset($_GET['idCardsClases'])){
                $idClase =  $_GET['idCardsClases'];
                $sql2="select * from estudiante inner join clase where estudiante.id_estud = clase.estud_id and clase.usu_id = $usu_id and id_clase = $idClase" ;
                $consulta2=mysqli_query($conexion, $sql2);
                while($mostrar2=mysqli_fetch_array($consulta2)){
            ?>
            <div class="desliz">
                <div class="desliz-info">
                    <div class="desliz-titulo">
                            <?php echo date("d/m", strtotime($mostrar2['fecha'])) ?> - <?php echo $mostrar2['nomEstud'] . " ". $mostrar2['apeEstud'] ?> 
                    </div>
                    <div>
                        <?php echo date("H:i", strtotime($mostrar2['hora'])) ?> - Tema: <?php echo $mostrar2['temaClase'] ?>
                    </div>
                    <div class="desliz-notas">
                        <div>
                            Notas:
                        </div>
                        <div class="desliz-coment">
                            <?php echo $mostrar2['comentClase'] ?>
                        </div>
                    </div>
                    <div class="ultimo-renglon">
                        <div class="pago">
                            <div>
                                Precio: $<?php echo $mostrar2['precioClase'] ?>
                            </div>
                            <div class="pagoBD">
                                <span> ¿paga?  </span> <span><?php echo $mostrar2['pago'] ?></span>
                            </div>
                        </div>

                        <div class="desliz-btns">
                            <div class="deliz-icono" id="borde"><a id="editar-btn" href="pag_principal.php?idEdit=<?php echo $idClase?>"> <i class="fi-rr-edit"></i> </a></div>
                            <div class="deliz-icono"><a id="borrar" href="deleteClase.php?id=<?php echo $idClase?>"><i class="fi-rr-file-delete"></i> </a></div>
                        </div>
                    </div>
                </div> <!--cierre "desliz-info" -->
            </div> <!--cierre "desliz" -->
            <div class="cruz">
                <a href="pag_principal.php">X</a>
            </div>
        <?php
        } };
        ?>
        </div> <!--cierre "cont-desliz y del while-->



        <!-- ---------------- a partir de aca el contenedor con los inputs para editar ------------------ -->

        <div class="cont-editar">
        <?php 
        if(isset($_GET['idEdit'])){
            $idClase =  $_GET['idEdit'];
            $sqlEdit = "select * from clase INNER JOIN estudiante where id_clase = $idClase and clase.usu_id= $usu_id and estudiante.id_estud=clase.estud_id";
            $queryEdit = mysqli_query($conexion, $sqlEdit);
            $arrayEdit = mysqli_fetch_array($queryEdit);
            ?>
            <div class="edit">
                <div class="editar-info">
                    <form action="updateClase.php" method="POST">
                        <input type="hidden" name="deLaPagPrin" value="deLaPagPrin">

                        <input type="hidden" name="id_clase" value="<?php echo $arrayEdit['id_clase'] ?>">

                        <div class="editar-fecha">
                            Cambie la fecha de la clase: <input type="date" name="fecha" value="<?php echo $arrayEdit['fecha'] ?>" required>
                        </div>
                        <div class="editar-nom">
                            <input type="text" name="nomEstud" value="<?php echo $arrayEdit['nomEstud'] ?>" required>
                            <input type="text" name="apeEstud" value="<?php echo $arrayEdit['apeEstud'] ?> " required>
                        </div>
                        <div>
                            Cambie la hora: <input type="time" name="hora" value="<?php echo $arrayEdit['hora'] ?>">
                        </div>
                        <div class="editar-tema">
                            Cambie el tema: <input type="text" name="temaClase" value="<?php echo $arrayEdit['temaClase'] ?>" required>
                        </div>
                        <div class="editar-notas">
                            <div>
                                Notas:
                            </div>
                            <input class="editar-coment" type="textarea" name="comentC" value="<?php echo $arrayEdit['comentClase']  ?>" autofocus>
                        </div>
                        <div class="editar-pagoBD">
                            <span class="precio"> Precio: $<input type="text" name="precioC" value="<?php echo $arrayEdit['precioClase'] ?>"> </span> <span> ¿paga?  </span> <input class="editar-pago-ipt" type="text" name="pago" value="<?php echo $arrayEdit['pago'] ?>">
                        </div>
                        <div class="caja-submit">
                            <input class="submit" type="submit" value="Listo">
                        </div>
                    </form>
                </div> <!--cierre "editar-info" -->
            </div> <!--cierre "editar" -->
            <div class="cruz">
                <a href="pag_principal.php">X</a>
            </div>
        <?php
        } ;
        ?>


        </div>







    </section>


</script>

</body>
</html>