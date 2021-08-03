<?php

session_start();
// $usu_id = $_SESSION['userId'];
$usu_id = 2;


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
    
    <link rel="stylesheet" href="estilos/estilosValidForm.css">

    <link rel="stylesheet" href="estilos/estilosNuev.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/ea0d59954b.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
<div>   
        <?php include 'nav.php' ?>    
    </div>

    <main>
        <h2>Ingresa los datos del nuevo Estudiante</h2>
        <div class="contenedor">
            <form id="form" action="insertNuevEstud.php" method="POST">
            <input type="hidden" name="usu_id" value="<?php echo $usu_id ?>">

                <div class="caja-insert">
                    <div class="caja-1">
                        <div class="grupo " id="grupo__nombre">
                            <label class="etiqueta">Nombre</label>
                            <div class="grupo-input">
                                <input type="text" class="input" id="nombre" name="nombre" >
                                <i class="validacion-estado far fa-times-circle"></i>
                            </div>
                            <p class="input-error">El nombre no puede tener numeros o simbolos</p>
                        </div>        
                    
                        <div class="grupo" id="grupo__apellido">
                            <label class="etiqueta">Apellido</label> 
                            <div class="grupo-input">   
                                <input type="text" class="input" id="apellido" name="apellido" >
                                <i class="validacion-estado far fa-times-circle"></i>
                            </div>
                            <p class="input-error">El apellido no puede tener numeros o simbolos</p>
                        </div>
                    </div>

                    <div class="caja-1" >
                        <div class="grupo" id="grupo__correo">
                            <label class="etiqueta">Correo</label>
                            <div class="grupo-input">   
                                <input type="email" class="input" id="correo" name="correo" >
                                <i class="validacion-estado far fa-times-circle"></i>
                            </div>
                            <p class="input-error">Ingrese un correo válido</p>
                        </div>
                    
                        <div class="grupo" id="grupo__tel">
                            <label class="etiqueta">Telefono</label>
                            <div class="grupo-input">   
                                <input type="tel"  class="input" id="tel" name="tel" >
                                <i class="validacion-estado far fa-times-circle"></i>
                            </div>
                            <p class="input-error">El número de telefono tiene que tener un mínimo de 7 y un máximo de 14 cifras y no puede tener letras</p>
                        </div>
                    </div>

                    <div class="grupo coment">
                        <label class="etiqueta">Comentarios</label>
                        <input type="textarea" class="input" name="coment">
                    </div>
                </div>

                <div class="msjError" id="msjError">
                    <p><i class="fas fa-exclamation-triangle"></i> <b> Error: Por favor llena el formulario correctamente </b> </p>

                </div>


                <div class="caja-submit">
                    <!-- <button class="submit" type="submit" value="Listo">Listo</button> -->
                    <input class="submit" type="submit" value="Listo">
                </div>


                <!-- <p class="warnings" id="warnings"></p> -->
                
            </form>

        </div>


        
    </main>
       
    <?php include 'footer.php' ?>    

    <script src="js/validate.js"></script>

</body>
</html>

<?php //}  
// else{
//     echo "no iniciaste sesion, redirigiendo...";
//     header('refresh:3; url= login.html');
// } ?>