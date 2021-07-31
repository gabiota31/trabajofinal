<?php

include 'conn.php';
session_start();

// $usu_id = $_SESSION['userId'];
$usu_id = 2;

$idClase = $_GET['id'];

$sql = "select * from clase where id_clase = $idClase";
$query = mysqli_query($conexion, $sql);

$array = mysqli_fetch_array($query);

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
    <title>Editar Estudiante</title>

    <link rel="stylesheet" href="estilos/estilosNuev.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    <div>
        <?php include 'nav.php' ?>    
    </div>
    <main>
        <h1>Ingresa los datos nuevos</h1>
        <div class="contenedor">
            <form action="updateClase.php" method="POST">
                <div class="caja-insert">
                    <div class="caja-1">
                        <input type="hidden" name="id_clase" value="<?php echo $array['id_clase'] ?>">
                        <div class="caja-input">
                            <label class="etiqueta">Tema de la clase</label>
                            <input type="text" name="temaClase" value="<?php echo $array['temaClase'] ?>" required>
                        </div>        
                    
                        <div class="caja-input">
                            <label class="etiqueta">Fecha</label> 
                            <input type="date" name="fecha" value="<?php echo $array['fecha'] ?>" required>
                        </div>
                    </div>

                    <div class="caja-1">
                        <div class="caja-input">
                            <label class="etiqueta">¿Pago?</label>
                            <input type="text" name="pago" value="<?php echo $array['pago'] ?>">
                        </div>
                    
                        <div class="caja-input">
                            <label class="etiqueta">Comentarios</label>
                            <input type="text" name="coment" value="<?php echo $array['comentClase'] ?>">
                        </div>
                    </div>

                   
                </div>
                <div class="caja-submit">
                    <input class="submit" type="submit" value="Listo">
                </div>
                
            </form>
        </div>
    </main>
       
    <?php include 'footer.php' ?>    


</body>
</html>

<?php //}  
// else{
//     echo "no iniciaste sesion, redirigiendo...";
//     header('refresh:3; url= login.html');
// } ?>