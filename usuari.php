<?php

include 'conn.php';
session_start();

$usu_id = $_SESSION['userId'];

$sql="select * from usuario where id_usu ='$usu_id' ";

$query=mysqli_query($conexion, $sql);
$array=mysqli_fetch_array($query);


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
    
    <title>Perfil de <?php echo $array['nombre'] ?></title>
    
    <link rel="stylesheet" href="estilos/estilosUsu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <script src="https://kit.fontawesome.com/ea0d59954b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <?php include 'nav.php' ?>    
    </div>

    <main>
        <section class="contenedor-usu">
            <div class="contenedor-data-usu">
                <div class="dato">
                    <h3>Nombre de Usuario: </h3>
                    <div><?php echo $array['nombre'] . " " . $array['apellido'] ?></div>
                </div>
                <div class="dato">
                    <h3>Correo electronico: </h3>

                    <div> <?php echo $array['correo'] ?></div>
                </div>
                <div class="dato">
                    <h3>Contraseña:</h3>
                    <div><?php echo $array['pass'] ?></div>
                </div>
                <div class="dato">
                    <h3>Telefono: </h3>
                    <div><?php echo $array['telefono'] ?></div>
                </div>
                <div class="dato">
                    <h3>Nombre de Usuario: </h3>
                    <div><?php echo $array['avatar'] ?></div>
                </div>
            </div>
            <div class="contenedor-btn">
                <div class="icono" id="borde"><a id="editar" href="editarUsu.php?id=<?php echo $array['nombre']?>"> <i class="fi-rr-edit"></i> </a></div>
                <!-- <div class="icono"><a id="borrar" href="deleteUsu.php?id=<?php echo $array['nombre']?>"> <i class="fi-rr-user-remove"></i> </a></div> -->
            </div>
        </section> 
        

    </main>

    
    <?php include 'footer.php' ?>    

</body>
</html>
<?php }  
else{
    echo "no iniciaste sesion, redirigiendo...";
    header('refresh:3; url= login.html');
} ?>