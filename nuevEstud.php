<?php

session_start();

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
        <h2>Ingresa los datos del nuevo Estudiante</h2>
        <div class="contenedor">
            <form action="insertNuevEstud.php" method="POST">
                <div class="caja-insert">
                    <div class="caja-1">
                        <div class="caja-input">
                            <label>Nombre</label>
                            <input type="text" name="nombre" required="required">
                        </div>        
                    
                        <div class="caja-input">
                            <label>Apellido</label> 
                            <input type="text" name="apellido" required>
                        </div>
                    </div>

                    <div class="caja-1">
                        <div class="caja-input">
                            <label>Correo</label>
                            <input type="email" name="correo" required>
                        </div>
                    
                        <div class="caja-input">
                            <label>Telefono</label>
                            <input type="tel" name="tel" required>
                        </div>
                    </div>

                    <div class="caja-2">
                        <div class="caja-input">
                            <label>Comentarios</label>
                            <input type="text" name="coment">
                        </div>
                    
                        <div class="caja-input">
                            <label >Tema de la clase</label>
                            <input type="text" name="clase" required>
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