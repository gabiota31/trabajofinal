<?php

include 'conn.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilos/estilosPagPrin.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    <nav>
        <?php include 'nav.php' ?>    
    </nav>

    <main>
        <div class="botones">
            <button class="boton" id="b-estud">Tus Estudiantes</button>
            <button class="boton" id="b-clases">Tus Clases</button>
        </div>
        <div class="contenedor-data">
            <div id="cardsEstud">
            <?php
            include 'cardsEstud.php';
            ?>
            </div>

            <div id="cardsClases">
            <?php
            include 'cardsClases.php';
            ?>
            </div>
        </div>

    </main>

    <script src='js/dinamica.js'></script>


</body>
</html>