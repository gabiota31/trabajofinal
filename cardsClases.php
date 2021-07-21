<?php

include 'conn.php';
$sql="select * from clase order by fecha asc";
//para que aparezca el nombre de le estudiante en la clase
// $sql2="select nomEstud from clase order by fecha asc";

$consulta=mysqli_query($conexion, $sql);
// $consultEstud=mysqli_query($conexion, $sql2);
$mostrar=mysqli_fetch_array($consulta);
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
            while($mostrar=mysqli_fetch_array($consulta)/* && $arrayEstud=mysqli_fetch_array($consultEstud)*/){
            ?>
                <div class="temaClase" id="temaClase">
                    <div><?php echo $mostrar['temaClase']; ?></div>

                    <div class="fecha">
                    <?php
                    $fNueva = date("d/m/Y", strtotime($mostrar['fecha']));
                    echo $fNueva;
                    ?>
                    </div>

                    <!-- <div> <?php //echo $arrayEstud['nomEstud']; ?> </div> -->
                    
                </div>
                

            <?php
            }
            ?>
        </div>    
    </div>

    

</body>
</html>