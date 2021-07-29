<?php

include 'conn.php';
session_start();

$idEstud = $_GET['id'];

// $usu_id = $_SESSION['userId'];
$usu_id = 2;
// $sql="select * FROM estudiante INNER JOIN clase ON estudiante.id_estud = clase.estud_id where estudiante.usu_id=$usu_id AND estudiante.id_estud = $idEstud";
$sql = "select * from estudiante where estudiante.usu_id=$usu_id AND estudiante.id_estud = $idEstud";
$sqlClases = "select * from clase where estud_id = $idEstud";

$query = mysqli_query($conexion, $sql);
$queryClases = mysqli_query($conexion, $sqlClases);

$mostrar = mysqli_fetch_array($query);
$arrayClases = mysqli_fetch_array($queryClases);

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
    <title>Ficha de <?php  echo $mostrar['nomEstud']   ?></title>

    <link rel="stylesheet" href="estilos/estilosDatos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
</head>
<body>
    <div>
        <?php include 'nav.php' ?>    
    </div>
    <main>
        <section>
            <div class="titulo">
                <h2> Ficha de contacto de <?php echo $mostrar['nomEstud'] . " " . $mostrar['apeEstud']?> </h2>
            </div>
            <table>
                    <tr>
                        <td class="nom-caterg" >Correo</td>
                        <td class="nom-caterg" >Telefono</td>
                        <td class="nom-caterg" >Comentarios</td>
                    </tr>

                    <tr>
                        <td class="dato"><?php echo $mostrar['correoEstud'] ?></td>
                        <td class="dato"><?php echo $mostrar['telEstud'] ?></td>
                        <td class="dato"><?php echo $mostrar['comentEstud'] ?></td>
                        
                        <td class="icono" id="borde"><a id="editar" href="editarEstud.php?id=<?php echo $mostrar['nomEstud']?>"> <i class="fi-rr-edit"></i> </a></td>
                        <td class="icono"><a id="borrar" href="deleteEstud.php?id=<?php echo $mostrar['nomEstud']?>"> <i class="fi-rr-user-remove"></i> </a></td>

                    </tr>
                    
            </table> 
        </section>
        <section>
            <div class="titulo">
                <h2> Clases programadas con <?php echo $mostrar['nomEstud'] . " " . $mostrar['apeEstud']?> </h2>
            </div>
            <table>
                    <tr>
                        <td class="nom-caterg" >Tema de la clase</td>
                        <td class="nom-caterg" >Fecha</td>
                        <td class="nom-caterg" >¿pago?</td>
                        <td class="nom-caterg" >Cometarios sobre esta clase</td>

                    </tr>
                    <?php
                    while($arrayClases=mysqli_fetch_array($queryClases)){
                        echo "<pre>";
                        // var_dump($arrayClases);
                        echo "</pre>";

                    ?>
                    <tbody>
                        <tr>

                            <td class="dato"><?php echo $arrayClases['temaClase'] ?></td>
                            <td class="dato"><?php echo $arrayClases['fecha'] ?></td>
                            <td class="dato"><?php echo $arrayClases['pago'] ?></td>
                            <td class="dato"><?php echo $arrayClases['comentClase'] ?></td>
                            
                            <td class="icono" id="borde"><a id="editar" href="editarClases.php?id=<?php echo $mostrar['id_estud']?>"> <i class="fi-rr-edit"></i> </a></td>
                            <td class="icono"><a id="borrar" href="deleteClases.php?id=<?php echo $mostrar['id_estud']?>"> <i class="fi-rr-user-remove"></i> </a></td>

                        </tr>
                    </tbody>
                    <?php
                    }
                    ?>
            </table> 
        </section>
    </main>

    <script src="js/datos.js"></script>

    <?php include 'footer.php' ?>    

</body>
</html>

<?php //}  
// else{
//     echo "no iniciaste sesion, redirigiendo...";
//     header('refresh:3; url= login.html');
// } ?>