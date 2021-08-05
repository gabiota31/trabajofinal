<?php

include 'conn.php';
session_start();

// $usu_id = $_SESSION['userId'];
$usu_id = 2;

$idClase = $_GET['id'];

$sql = "select * from clase INNER JOIN estudiante where estudiante.id_estud = clase.estud_id and clase.usu_id = $usu_id and id_clase = $idClase";
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
    <title>Editar Clase</title>

    <link rel="stylesheet" href="estilos/estilosNuev.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet"> 
</head>
<body>
    <div>
        <?php include 'nav.php' ?>    
    </div>
    <main>
        <h2>Ingresa los datos nuevos</h2>
        <div class="contenedor">
            <form action="updateClase.php" method="POST">
                <input type="hidden" name="deTodasClases" value="deTodasClases">
                <div class="caja-insert">
                    <input type="hidden" name="id_clase" value="<?php echo $array['id_clase'] ?>">
                    <!-- <div class="caja-1">
                        

                    </div> -->

                    <div class="caja-1edit">
                        <div class="nomsedit">
                            <div class="grupo">
                                <input type="text" name="nomEstud" value="<?php echo $array['nomEstud'] ?>" required>
                            </div>
                            <div class="grupo">
                                <input type="text" name="apeEstud" value="<?php echo $array['apeEstud'] ?>" required>
                            </div>
                        </div>
                        <div class="grupo">
                            <label class="etiqueta">Tema de la clase</label>
                            <div class="grupo-input">
                                <input type="text" name="temaClase" value="<?php echo $array['temaClase'] ?>" required>
                            </div>
                        </div>        
                    </div>
                    <div class="caja-2">
                        <div class="grupo dos1">
                            <label class="etiqueta">Fecha</label>
                            <div class="grupo-input">
                                <input type="date" name="fecha" value="<?php echo $array['fecha'] ?>" required>
                            </div>
                        </div>
                        <div class="grupo dos2">
                            <label class="etiqueta">Hora</label>
                            <div class="grupo-input">
                                <input type="time" name="hora" value="<?php echo date("H:i", strtotime($array['hora'])) ?>" required>
                            </div>
                        </div>
                        <div class="grupo dos3">
                            <label class="etiqueta">Precio</label>
                            <div class="grupo-input">
                                <input type="text" name="precioC" value="<?php echo $array['precioClase'] ?>">
                            </div>
                        </div>
                        <div class="grupo caja dos4">
                            <label class="etiqueta">¿Pago?</label>
                            <div class="grupo-input">
                                <input type="text" name="pago" value="<?php echo $array['pago'] ?>">
                            </div>
                        </div>                        
                    </div>
                    <div class="caja-3">
                        <div class="grupo">
                            <label class="etiqueta">Comentarios</label>
                            <div class="grupo-input">
                                <input type="text" name="comentC" value="<?php echo $array['comentClase'] ?>">
                            </div>
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