<?php

include 'conn.php';

session_start();
// $usu_id = $_SESSION['userId'];
$usu_id = 2;


$sql = "select * from estudiante where estudiante.usu_id = $usu_id";
$query = mysqli_query($conexion, $sql);

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
    <title>Nuevo Estudiante</title>

    <link rel="stylesheet" href="estilos/estilosNuev.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
</head> 
<body>
    <div>
        <?php include 'nav.php' ?>    
    </div>

    <main>
        <h2>Ingresa los datos de la nueva clase</h2>
        <div class="contenedor">
            
            <form action="insertNuevClase.php" method="POST">
                <input type="hidden" name="usu_id" value="<?php echo $usu_id ?>">
                <select class="select" name="id_estud" require>
                    <option>selecione un estudiante</option>
                    <?php
                    while($array=mysqli_fetch_array($query)){
                    ?>
                    <option value="<?php echo $array['id_estud'] ?>"> <?php echo $array['nomEstud']; ?> </option>
                    <?php
                    }
                    ?>
                </select>
                <div class="caja-insert">
                    <div class="caja-1">
                        <div class="caja-input">
                            <label class="etiqueta">Tema de la clase</label>
                            <input type="text" name="tema" required>
                        </div>
                    </div>

                    <div class="caja-2">
                        <div class="caja-input dos1">
                            <label class="etiqueta">Fecha</label> 
                            <input type="date" name="fecha" required>
                        </div>

                        <div class="caja-input dos2">
                            <label class="etiqueta">Hora</label>
                            <input type="time" name="hora" required>
                        </div>
                    
                        <div class="caja-input dos3">
                            <label class="etiqueta">Precio</label>
                            <input type="number" name="precio">
                        </div>
                        <div class="caja-input">
                            <label class="etiqueta">¿Pago?</label>
                            <input type="text" name="pago">
                        </div>
                    </div>
                    <div class="caja-3">
                        <div class="caja-input">
                            <label class="etiqueta">Comentarios</label>
                            <input type="text" name="coment">
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