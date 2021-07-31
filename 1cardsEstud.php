<?php

include 'conn.php';
// $usu_id = $_SESSION['userId'];
$usu_id = 2;

$sql="select * from estudiante inner join clase where estudiante.id_estud = clase.estud_id and clase.usu_id = $usu_id";
$consulta=mysqli_query($conexion, $sql);


?>
<html>
<head>
    <link rel="stylesheet" href="estilos/estilos1CardsEstud.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <section class="proximas-clases">
        <div class="cards-clase">
            <?php
            while($mostrar=mysqli_fetch_array($consulta)){
            ?>
            <a href="pag_principal.php?id=<?php echo $mostrar['estud_id']?>">
                <div class="card-n-e " id="<?php echo $mostrar['id_clase']?>">
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
                        <?php
                            $estudId = $mostrar['estud_id'];
                            $sqlCuenta = "select count(*) FROM clase where usu_id = $usu_id and estud_id = $estudId";
                            $queryCuenta = mysqli_query($conexion,$sqlCuenta);
                            $arrayCuenta = mysqli_fetch_array($queryCuenta);
                            $cuenta = $arrayCuenta[0];
                            echo "Cantidad de clases: " . $cuenta;
                        ?>
                    </div>
                </div> <!-- cierre "card-n"-->
            </a>
            <?php
            };
            ?>
        </div> <!--cierre "cards-clase"-->

        <div class="cont-desliz">
            <?php 
            if(isset($_GET['id'])){
                $idEstud =  $_GET['id'];
                $sql2="select * from estudiante inner join clase where estudiante.id_estud = clase.estud_id and clase.usu_id = $usu_id and id_clase = $idClase" ;
                $consulta2=mysqli_query($conexion, $sql2);
                while($mostrar2=mysqli_fetch_array($consulta2)){
            ?>
            <div class="desliz animate__animated animate__fadeInRight ">
                <div class="desliz-info">
                    <div class="desliz-titulo">
                            <?php echo date("d/m", strtotime($mostrar2['fecha'])) ?> - Clase con <?php echo $mostrar2['nomEstud'] . " ". $mostrar2['apeEstud'] ?> 
                    </div>
                    <div>
                        <?php echo $mostrar2['hora'] ?> - <?php echo $mostrar2['temaClase'] ?>
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
                            ¿pagó?
                        </div>
                        <div class="pagoBD">
                            <?php echo $mostrar2['pago'] ?>
                        </div>
                    </div>
                </div> <!--cierre "desliz-info" cobre el que se ejecuta el while-->
                <div class="cruz">
                    <a href="pag_principal.php">X</a>
                </div>
            </div>
        <?php
        } };
        ?>
        </div> <!--cierre "cont-desliz-->

    </section>


<script src="js/dinam1Cards.js">
var cardClases = document.getElementById('')




</script>

</body>
</html>