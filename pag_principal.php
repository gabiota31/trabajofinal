<?php
include 'conn.php';
session_start();

$_SESSION['nombre']="Marilia";

?>
<?php
// if(isset($_SESSION['username'])){
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
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">

</head>
<body>
    <div>
        <?php include 'nav.php' ?>    
    </div>

    <main>
        <h1> Bienvenida <?php echo $_SESSION['nombre']  ?></h1>
        
        <div class="cont-cards-clases">
            <?php
            include 'opciones.php'
            ?>
        </div>


        <h2>Proximas Clases </h2>

        <div class="cont-cards-clases">
            <?php
            include '1cardsClases.php'
            ?>
        </div>

        <h2>Tus Estudiantes</h2>

        <div class="cont-cards-estud">
            <?php
            include '1cardsEstud.php'
            ?>
        </div>















        <!-- <div class="botones">
            <button class="boton" id="b-estud">Tus Estudiantes</button>
            <button class="boton" id="b-clases">Tus Clases</button>
        </div>
        <div class="contenedor-data">
            <div id="cardsEstud">
            <?php
            //include 'cardsEstud.php';
            ?>
            </div>

            <div id="cardsClases">
            <?php
            //include 'cardsClases.php';
            ?>
            </div>
        </div> -->

    </main>

    <?php include 'footer.php' ?>    

    <script src='js/dinamica.js'></script>


</body>
</html>
<?php // }  
// else{
//     echo "no iniciaste sesion, redirigiendo...";
//     header('refresh:3; url= login.html');
//} ?>