<?php

include 'conn.php';

$nomEstud = $_GET['id'];

$sql = "select * from estudiante where nomEstud = '$nomEstud'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);

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
</head>
<body>
    <nav>
        <?php include 'nav.php' ?>    
    </nav>
    <main>
        <h1>Ingresa los datos nuevos</h1>
        <div class="contenedor">
            <form action="updateEstud.php" method="POST">
                <div class="caja-insert">
                    <div class="caja-1">
                        <!-- ESTO PARA CUANDO PONGA EL ID EN LA <BASE></BASE> -->
                        <!-- <input type="hidden" name="id" value="<?php //echo $row['id'] ?>"> -->
                        <div class="caja-input">
                            <label>Nombre</label>
                            <input type="text" name="nombre" value="<?php echo $row['nomEstud'] ?>" required>
                        </div>        
                    
                        <div class="caja-input">
                            <label>Apellido</label> 
                            <input type="text" name="apellido" value="<?php echo $row['apeEstud'] ?>" required>
                        </div>
                    </div>

                    <div class="caja-1">
                        <div class="caja-input">
                            <label>Correo</label>
                            <input type="email" name="correo" value="<?php echo $row['correoEstud'] ?>" required>
                        </div>
                    
                        <div class="caja-input">
                            <label>Telefono</label>
                            <input type="tel" name="tel" value="<?php echo $row['telEstud'] ?>" required>
                        </div>
                    </div>

                    <div class="caja-2">
                        <div class="caja-input">
                            <label>Comentarios</label>
                            <input type="text" name="coment" value="<?php echo $row['comentEstud'] ?>">
                        </div>
                    
                        <div class="caja-input">
                            <label >Tema de la clase</label>
                            <input type="text" name="clase" value="<?php echo $row['clase'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="caja-submit">
                    <input class="submit" type="submit" value="Listo">
                </div>
                
            </form>
        </div>
    </main>
       


</body>
</html>