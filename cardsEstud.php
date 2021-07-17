<?php

include 'conn.php';
$sql="select * from estudiante";
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
                <a class="a-card" href="datosEstud.php?id=<?php echo $mostrar['nomEstud']?>"><div id="<?php echo $mostrar['nomEstud'] ?>" class="nomEstud"><?php echo $mostrar['nomEstud'] ?> </div></a>
            <?php
            }
            ?>
        </div>    
    </div>
    



</body>
</html>