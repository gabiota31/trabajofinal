<?php

include 'conn.php';
session_start();

// $usu_id = $_SESSION['userId'];
$usu_id = 2;

$sql = "select * FROM clase INNER JOIN estudiante ON clase.estud_id = estudiante.id_estud where estudiante.usu_id=$usu_id order by fecha asc";

// $sql1="select * from clase where clase.usu_id= $usu_id";
$result=mysqli_query($conexion, $sql);

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
    <title>mostrar datos</title>
    <link rel="stylesheet" href="estilos/estilosDatos.css">

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
        <section>
            <div class="titulo">  
                <h2>TUS CLASES</h2>
                <a class="b-nav" href="nuevClase.php">NUEVA CLASE</a>
            </div>

            <table>
                <tr>
                    <td class="nom-caterg" >Tema de la clase</td>
                    <td class="nom-caterg" >Fecha</td>
                    <td class="nom-caterg" >¿pago?</td>
                    <td class="nom-caterg" >Comentarios sobre la clase</td>
                    <td class="nom-caterg" >Estudiante</td>


                    <!-- <td class="nom-caterg" >Comentarios</td>
                    <td class="nom-caterg" >Tema de la clase</td> -->
                </tr>

                <?php
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tbody>
                    <tr>
                        <td class="dato"><?php echo $mostrar['temaClase'] ?></td>
                        <!-- <td class="dato"><?php   ?></td> -->
                        <td class="dato"><?php $fNueva = date("d/m/Y", strtotime($mostrar['fecha']));
                        echo $fNueva;?></td>
                        <td class="dato" id="prueba"><?php echo $mostrar['pago'] ?></td>
                        <td class="dato"><?php echo $mostrar['comentClase'] ?></td>
                        <td class="dato"><?php echo $mostrar['nomEstud'] ?></td>

                                             
                        <td class="icono" id="borde"><a id="editar" href="editarClases.php?id=<?php echo $mostrar['id_clase']?>"> <i class="fi-rr-edit"></i> </a></td>
                        <td class="icono"><a id="borrar" href="deleteClase.php?id=<?php echo $mostrar['id_clase']?>"> <i class="fi-rr-file-delete"></i> </a></td> 
                    </tr>
                </tbody>
                <?php
                }
                ?>
            </table>



            <!-- <div class="contenedor">
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
            </div> -->
        </section>
    </main>
    <?php include 'footer.php' ?>    



    <script src="js/datos.js"></script>

</body>
</html>

<?php //}  
// else{
//     echo "no iniciaste sesion, redirigiendo...";
//     header('refresh:3; url= login.html');
// } ?>