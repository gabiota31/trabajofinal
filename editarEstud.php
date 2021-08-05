<?php

include 'conn.php';
session_start();

// $usu_id = $_SESSION['userId'];
$usu_id = 2;

if(isset($_GET['id'])){
    $idEstud = $_GET['id'];
} elseif(isset($_GET['idEstud'])){
    $idEstud = $_GET['idEstud'];
}

$sql = "select * from estudiante where id_estud = '$idEstud'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);

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
            <form action="updateEstud.php" method="POST">
                <?php
                if(isset($_GET['id'])){ ?>
                    <input type="hidden" name="deLaPagPrin" value="deLaPagPrin">
                <?php } elseif(isset($_GET['idEstud'])){ ?>
                    <input type="hidden" name="deTodosEstud" value="deTodosEstud">
                <?php
                }
                ?>
                <div class="caja-insert">
                    <div class="caja-1">
                        <input type="hidden" name="id_estud" value="<?php echo $row['id_estud'] ?>"> 
                        <div class="grupo">
                            <label class="etiqueta">Nombre</label>
                            <input type="text" name="nombre" value="<?php echo $row['nomEstud'] ?>" required>
                        </div>        
                    
                        <div class="grupo">
                            <label class="etiqueta">Apellido</label> 
                            <input type="text" name="apellido" value="<?php echo $row['apeEstud'] ?>" required>
                        </div>
                    </div>

                    <div class="caja-1">
                        <div class="grupo">
                            <label class="etiqueta">Correo</label>
                            <input type="email" name="correo" value="<?php echo $row['correoEstud'] ?>" required>
                        </div>
                    
                        <div class="grupo">
                            <label class="etiqueta">Telefono</label>
                            <input type="tel" name="tel" value="<?php echo $row['telEstud'] ?>" required>
                        </div>
                    </div>

                    <div class="caja-3">
                        <div class="grupo">
                            <label class="etiqueta">Comentarios</label>
                            <input type="text" name="coment" value="<?php echo $row['comentEstud'] ?>">
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