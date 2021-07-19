<?php

include 'conn.php';
session_start();
if(session_status()== php_session_active){
    print "existe";
};


//$consulta1 = mysqli_query($conexion, "select * from usuario");

$sql="select * from estudiante";
$result=mysqli_query($conexion, $sql);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar datos</title>
    <link rel="stylesheet" href="estilos/estilosDatos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <script src="https://kit.fontawesome.com/ea0d59954b.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav>
        <?php include 'nav.php' ?>    
    </nav>

    <main>
        <section>
            <div class="titulo">  
                <h2>TUS ESTUDIANTES</h2>
                <a class="b-nav" href="nuevEstud.php">NUEVO ESTUDIANTE</a>
            </div>

            <table>
                <tr>
                    <td class="nom-caterg" >Nombre</td>
                    <td class="nom-caterg" >Correo</td>
                    <td class="nom-caterg" >Telefono</td>
                    <!-- <td class="nom-caterg" >Comentarios</td>
                    <td class="nom-caterg" >Tema de la clase</td> -->
                </tr>

                <?php
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tbody>
                    <tr>
                        <td class="dato"><?php echo $mostrar['nomEstud'] ." " . $mostrar['apeEstud']; ?></td>
                        <!-- <td class="dato"><?php   ?></td> -->
                        <td class="dato"><?php echo $mostrar['correoEstud'] ?></td>

                        <td class="dato" id="prueba"><?php echo $mostrar['telEstud'] ?></td>

                        <!-- <td class="dato"><?php //echo $mostrar['comentEstud'] ?></td>
                        <td class="dato"><?php// echo $mostrar['clase'] ?></td> -->
                        <td class="icono" id="borde"><a id="editar" href="editarEstud.php?id=<?php echo $mostrar['nomEstud']?>"> <i class="fi-rr-edit"></i> </a></td>
                        <td class="icono"><a id="borrar" href="deleteEstud.php?id=<?php echo $mostrar['nomEstud']?>"> <i class="fi-rr-user-remove"></i> </a></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>



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
        </section>
    </main>



    <script src="js/datos.js"></script>




    


</body>
</html>