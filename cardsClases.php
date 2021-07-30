<?php

include 'conn.php';

// $usu_id = $_SESSION['userId'];
$usu_id = 2;
$sqlJoin="select * FROM estudiante INNER JOIN clase ON estudiante.id_estud = clase.estud_id where estudiante.usu_id=$usu_id order by fecha asc";

$consulta=mysqli_query($conexion, $sqlJoin);

?>
<head>
    <link rel="stylesheet" href="estilos/estilosCards.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    <div>
        <div class="contenedor-cards">
            <?php
            while($mostrar=mysqli_fetch_array($consulta)){
            ?>
                <div class="temaClase" id="temaClase">
                    <div><?php echo $mostrar['temaClase']; ?></div>

                    <div class="fechaYnom">
                        <div>
                        <?php
                        $fNueva = date("d/m/Y", strtotime($mostrar['fecha']));
                        echo $fNueva;
                        ?>
                        </div>

                        <div>
                            (con <?php echo $mostrar['nomEstud']; ?>)
                        </div> 
                    </div>
                </div>
                

            <?php
            }
            ?>
        </div>    
    </div>

    

</body>
</html>