<?php

include 'conn.php';
$sql="select * from clase";
$consulta=mysqli_query($conexion, $sql);


?>
<head>
    <link rel="stylesheet" href="estilosCards.css">
    
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
                <div class="nomEstud"><?php echo $mostrar['temaClase'] ?></div>
            <?php
            }
            ?>
        </div>    
    </div>

            

</body>
</html>