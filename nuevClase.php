<?php

include 'conn.php';

session_start();
$usu_id = $_SESSION['userId'];

$sql = "select * from estudiante where estudiante.usu_id = $usu_id";
$query = mysqli_query($conexion, $sql);

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
    <title>Nueva Clase</title>

    <link rel="stylesheet" href="estilos/estilosNuev.css">
    <script src="https://kit.fontawesome.com/ea0d59954b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet"> 

</head> 
<body>
    <header>
        <?php include 'nav.php' ?>    
    </header>

    <main>
        <h2>Ingresa los datos de la nueva clase</h2>
        <div class="contenedor">
            
            <form action="insertNuevClase.php" id="form" method="POST">
                <input type="hidden" name="usu_id" value="<?php echo $usu_id ?>">
                <select class="input select" name="id_estud" id="id_estud" require>
                    <option value="0">selecione un estudiante*</option>
                    <?php
                    while($array=mysqli_fetch_array($query)){
                    ?>
                    <option value="<?php echo $array['id_estud'] ?>"> <?php echo $array['nomEstud']; ?> </option>
                    <?php
                    }
                    ?>
                </select>
                <div class="caja-insert"> <!-- caja con todos los inputs-->
                    <div class="caja-1"> <!-- primer renglon -->
                        <div class="grupo " id="grupo__tema">
                            <label class="etiqueta">Tema de la clase*</label>
                            <div class="grupo-input">
                                <input type="text" class="input" id="tema" name="tema">
                                <i class="validacion-estado far fa-times-circle"></i>
                            </div>
                            <p class="input-error">Este campo no puede estar vacio</p>
                        </div>
                    </div>

                    <div class="caja-2">
                        <div class="grupo dos1" id="grupo__fecha">
                            <label class="etiqueta">Fecha*</label>
                            <div class="grupo-input">   
                                <input type="date" class="input" id="fecha" name="fecha" require>
                                <i class="validacion-estado far fa-times-circle"></i>
                            </div>
                            <p class="input-error">Ingrese una fecha</p>
                        </div>

                        <div class="grupo dos2" id="grupo__hora">
                            <label class="etiqueta">Hora*</label>
                            <div class="grupo-input">
                                <input type="time" class="input" id="hora" name="hora" require>
                            </div>
                            <p class="input-error">Ingrese una hora válido</p>
                        </div>
                    
                        <div class="grupo dos3" id="grupo__precio">
                            <label class="etiqueta">Precio*</label>
                            <div class="grupo-input">
                                <input type="number" class="input" id="precio" name="precio">

                            </div>
                            <p class="input-error">Ingrese un numero</p>
                        </div>
                        <div class="grupo" >
                            <label class="etiqueta">¿Pago?</label>
                            <div class="grupo-input">
                                <input type="text" class="input" name="pago">
                            </div>
                        </div>
                    </div>
                    <div class="caja-3">
                        <div class="grupo" >
                            <label class="etiqueta">Comentarios</label>
                            <div class="grupo-input">
                                <input type="textarea" name="coment">
                            </div>
                        </div>
                    </div>
                    * campos obligatorios
                </div> <!-- cierre "caja-insert" -->

                <div class="msjError" id="msjError">
                    <p><i class="fas fa-exclamation-triangle"></i> <b> Error: Por favor llena el formulario correctamente </b> </p>
                </div>
                <div class="caja-submit">
                    <input class="submit" type="submit" value="Listo">
                </div>
                
            </form>
        </div>
    </main>
       
    <?php include 'footer.php' ?>    

    <!-- <script src="js/validateNuevClase.js"></script> -->
 

</body>
</html>

<?php }  
else{
    echo "no iniciaste sesion, redirigiendo...";
    header('refresh:3; url= login.html');
} ?>