<?php

include 'conn.php';
session_start();

// $usu_id = $_SESSION['userId'];
$usu_id = 2;


$sql = "select * from usuario where id_usu = '$usu_id'";
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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet"> 
</head>
<body>
    <div>
        <?php include 'nav.php' ?>    
    </div>
    <main>
        <h2>Ingresa los datos nuevos</h2>
        <div class="contenedor">
            <form action="updateUsu.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $array['id_usu'] ?>">

                <div class="caja-insert">
                    <div class="caja-edit-usu">
                        <div class="grupo grupo-usu">
                            <label class="etiqueta">Nombre</label>
                            <input type="text" name="nombre" value="<?php echo $array['nombre'] ?>" required>
                        </div>        
                    
                        <div class="grupo grupo-usu">
                            <label class="etiqueta">Apellido</label> 
                            <input type="text" name="apellido" value="<?php echo $array['apellido'] ?>" required>
                        </div>
                        <div class="grupo grupo-usu">
                            <label class="etiqueta">Correo</label>
                            <input type="email" name="correo" value="<?php echo $array['correo'] ?>" required>
                        </div>
                    
                        <div class="grupo grupo-usu">
                            <label class="etiqueta">Telefono</label>
                            <input type="tel" name="tel" value="<?php echo $array['telefono'] ?>" required>
                        </div>
                        <div class="grupo grupo-usu">
                            <label class="etiqueta">Contraseña</label>
                            <input type="text" name="pass" value="<?php echo $array['pass'] ?>" required>
                        </div>
                    
                        <div class="grupo grupo-usu">
                            <label class="etiqueta">avatar</label>
                            <input type="text" name="avatar" value="<?php echo $array['avatar'] ?>" required>
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