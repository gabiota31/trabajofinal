<?php 
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo usuario</title>

    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    

    <main>
        <div class="contenedor login animate__animated animate__fadeIn">
            <h2 class="title"> Cambia la contraseña </h2>
            <form action="updateContra.php" method="POST">
                <div class="usuario">
                    <div class="caja-input animate__animated animate__fadeInLeft " id="caja-input">
                        <label for="correo"> Ingresa tu correo electrónico</label>
                        <input class="correo" type="email" name="correo" required>
                    </div>

                    <div class="caja-input animate__animated animate__fadeInLeft " id="caja-input">
                        <label for=""> Ingresa la contraseña nueva</label>
                        <input type="password" name="passNueva1" required>
                    </div>

                    <div class="caja-input animate__animated animate__fadeInLeft " id="caja-input">
                        <label for=""> Ingrésala nuevamente </label>
                        <input type="password" name="passNueva2" required>
                    </div>

                </div>
                <div id="submit" class="caja-submit caja-input animate__animated animate__fadeInLeft" id="caja-input">
                    <input  class="submit" type="submit" value="Iniciar Sesión">
                </div>
            </form>
        </div>




    </main>



</body>
</html>