<?php

include 'conn.php';
session_start();

// $usu_id = $_SESSION['userId'];
$usu_id = 2;

$sql = "select * FROM clase INNER JOIN estudiante ON clase.estud_id = estudiante.id_estud where estudiante.usu_id=$usu_id order by fecha,hora asc";

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
    <link rel="stylesheet" href="estilos/estilosDatosClases.css">

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
            </div>
            <div class="contenedor-clases">
                <?php
                    while($mostrar2=mysqli_fetch_array($result)){
                ?>
                <div class="desliz">
                    <div class="desliz-info">
                        <div class="desliz-titulo">
                                <?php echo date("d/m", strtotime($mostrar2['fecha'])) ?> - <?php echo $mostrar2['nomEstud'] . " ". $mostrar2['apeEstud'] ?> 
                        </div>
                        <div>
                            <?php echo date("H:i", strtotime($mostrar2['hora'])) ?> - Tema: <?php echo $mostrar2['temaClase'] ?>
                        </div>
                        <div class="desliz-notas">
                            <div>
                                Notas:
                            </div>
                            <div class="desliz-coment">
                                <?php echo $mostrar2['comentClase'] ?>
                            </div>
                        </div>
                        <div class="ultimo-renglon">
                            <div class="pago">
                                <div>
                                    Precio: $<?php echo $mostrar2['precioClase'] ?>
                                </div>
                                <div class="pagoBD">
                                    <span> ¿paga?  </span> <span><?php echo $mostrar2['pago'] ?></span>
                                </div>
                            </div>

                            <div class="desliz-btns">
                                <div class="deliz-icono"><a id="editar-btn" href="editarClase.php?id=<?php echo $mostrar2['id_clase']?>"> <i class="fi-rr-edit"></i> </a></div>
                                <div class="deliz-icono"><a id="borrar" href="deleteClase.php?idDatosClase=<?php echo $mostrar2['id_clase']?>"><i class="fi-rr-file-delete"></i> </a></div>
                            </div>
                        </div>
                    </div> <!--cierre "desliz-info" -->
                </div> <!--cierre "desliz" -->
                <?php
                } //cierre while que muestra todas las tarjetas
                ?>
            </div> <!-- cierre contenedor todas las clases-->
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