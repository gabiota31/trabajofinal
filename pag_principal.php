<?php
include 'conn.php';
session_start();

?>
<?php
if(isset($_SESSION['userId'])){
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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">


</head>
<body>
    <header>
        <?php include 'nav.php' ?>    
    </header>

    <main>
        <h1> Bienvenidx <?php echo $_SESSION['nombre']  ?></h1>
        
        <div class="cont-cards-clases">
            <?php
            include 'opciones.php'
            ?>
        </div>

        <section class="cont-ambas-cards">

            <div class="cont-cards-clases">
                <?php
                include 'cardsClases.php'
                ?>
            </div>


            <div class="cont-cards-estud">
                <?php
                include 'cardsEstud.php'
                ?>
            </div>
        </section>


    </main>

    <?php include 'footer.php' ?>    

</body>
</html>
<?php  }  
else{
    echo "no iniciaste sesion, redirigiendo...";
    header('refresh:3; url= login.html');
} ?>