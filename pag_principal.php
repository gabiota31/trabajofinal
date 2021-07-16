<?php

include 'conn.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="estilosPagPrin.css">
</head>
<body>
    <nav>
        <?php include 'nav.php' ?>    
    </nav>

    <main>
        

        <div class="botones">
            <div class="boton" id="b-estud"> Estudiantes</div>
            <div class="boton" id="b-clases"> Clases</div>
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


    <script src='dinamica.js'></script>


</body>
</html>