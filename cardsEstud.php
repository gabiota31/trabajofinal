<?php

include 'conn.php';
$sql="select * from estudiante";
$consulta=mysqli_query($conexion, $sql);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="estilosCards.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">  
</head>
<body>
    <main>
        <div class="nom-caterg">Tus estudiantes</div>
        <div class="contenedor-data">
            <?php
            while($mostrar=mysqli_fetch_array($consulta)){
            ?>
                <div id="<?php echo $mostrar['nomEstud'] ?>" class="nomEstud"><?php echo $mostrar['nomEstud'] ?></div>
            <?php
            }
            ?>
        </div>    
    </main>
    
    <script src="">
        //ACA LO QUE PODRIA HACER (NO SE COMO) ES HACER UN LISTENER PARA QUE TOME EL ID DEL DIV EN VEZ DE HACERLO CON PHP
        var estu = document.getElementById('<?php echo $mostrar['nomEstud'] ?>')

        function ancla(){
            alert('deberia ser un ancla')
        }

        estu.addEventListener('click', ancla)
    </script>



</body>
</html>