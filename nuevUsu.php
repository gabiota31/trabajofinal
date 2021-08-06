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
    <script src="https://kit.fontawesome.com/ea0d59954b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
</head>
<body>
    

    <main>
        <div class="contenedor login animate__animated animate__fadeIn">
            <h2 class="title"> Crea un nuevo usuario </h2>
            <form id="form" action="insertNuevUsu.php" method="POST">
                <div class="usuario">
                    <div class="grupo caja-input animate__animated animate__fadeInLeft" id="grupo__usuario">
                        <div class="grupo-input">
                            <input type="text" class="input" id="usuario" placeholder="Usuario" name="usuario">
                            <!-- <i class="validacion-estado far fa-times-circle"></i> -->
                        </div>
                        <p class="input-error">El nombre de usuario tiene que tener mínimo 4 letras, números, guión y guión bajo</p>
                    </div>

                    <div class="grupo caja-input animate__animated animate__fadeInLeft" id="grupo__nombre">
                        <div class="grupo-input">
                            <input type="text" class="input" id="nombre" placeholder="Nombre" name="nombre">
                            <!-- <i class="validacion-estado far fa-times-circle"></i> -->
                        </div>
                        <p class="input-error">El nombre no puede tener numeros o simbolos</p>
                    </div>

                    <div class="grupo caja-input animate__animated animate__fadeInLeft" id="grupo__apellido">
                        <div class="grupo-input">
                            <input type="text" class="input" id="apellido" placeholder="Apellido" name="apellido">
                            <!-- <i class="validacion-estado far fa-times-circle"></i> -->
                        </div>
                        <p class="input-error">El apellido no puede tener numeros o simbolos</p>
                    </div>

                    <div class="grupo caja-input animate__animated animate__fadeInLeft" id="grupo__correo">
                        <div class="grupo-input">    
                            <input type="email" class="input" id="correo" placeholder="Correo electrónico" name="correo">
                            <!-- <i class="validacion-estado far fa-times-circle"></i> -->
                        </div>
                        <p class="input-error">Ingrese un correo válido</p>
                    </div>

                    <div class="grupo caja-input animate__animated animate__fadeInLeft" id="grupo__pass">
                        <div class="grupo-input">    
                            <input type="password" class="input" id="pass" placeholder="Contraseña" name="pass">
                            <!-- <i class="validacion-estado far fa-times-circle"></i> -->
                        </div>
                        <p class="input-error">La contraseña tiene que tener mínimo 4 y máximo 12 caracteres</p>
                    </div>

                    <div class="grupo caja-input animate__animated animate__fadeInLeft" id="grupo__tel">
                        <div class="grupo-input">
                            <input type="tel" class="input" id="tel" placeholder="Telefono" name="tel">
                            <!-- <i class="validacion-estado far fa-times-circle"></i> -->
                        </div>
                        <p class="input-error">El número de telefono tiene que tener un mínimo de 7 y un máximo de 14 cifras y no puede tener letras</p>
                    </div>

                </div>

                <div class="msjError" id="msjError">
                    <p><i class="fas fa-exclamation-triangle"></i> Error: Llene el formulario correctamente </p>
                </div>
                <div id="submit" class="caja-submit caja-input animate__animated animate__fadeInLeft">
                    <input  class="submit" type="submit" value="Iniciar Sesión">
                </div>
            </form>
        </div>




    </main>


    <script src="js/validateNuevUsu.js"></script>

</body>
</html>