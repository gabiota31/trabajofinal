<?php

include 'conn.php';
// $usu_id = $_SESSION['userId'];
$usu_id = 2;
$sql="select id_estud, nomEstud from estudiante where usu_id = $usu_id ";
$consulta=mysqli_query($conexion, $sql);



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
                <a class="a-card" href="datosEstud.php?id=<?php echo $mostrar['id_estud']?>"><div id="<?php echo $mostrar['nomEstud'] ?>" class="nomEstud"><?php echo $mostrar['nomEstud'] ?> </div></a>
            <?php
            };
            ?>
        </div>    
    </div>
</body>

<?php
// $array=mysqli_fetch_array($consulta);
// echo "<pre>";
// var_dump($consulta);
// echo "</pre>";
// echo "<pre>";
// var_dump($array);
// echo "</pre>";
// echo "<pre>";
// var_dump($array['nomEstud']);
// echo "</pre>";
// if($array == NULL){
//     echo "vacio";
// } else {
//     echo "no vacio";
// };


?>
