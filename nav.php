<head>
    <link rel="stylesheet" href="estilos/estilosNav.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> 

</head>
<body>
    <header>
        <div class="contenedor-nav">
            <div>
                <a href="pag_principal.php"> <img src="img/logo.png" alt="logo organiza tus clases" class="logo"> </a>
            </div>
            <nav>
                <ul>
                    <li><a class="b-nav" href="pag_principal.php">INICIO</a></li>
                    <li><a class="b-nav" href="nuevEstud.php"> NUEVO ESTUDIANTE </a></li>
                    <li><a class="b-nav" href="nuevClase.php"> NUEVA CLASE </a></li>
                    <li><a class="b-nav" href="datos.php">TODOS TUS ESTUDIANTES</a></li>
                    <li><a class="b-nav" href="datosClases.php"> TODAS TUS CLASES </a></li>
                    
                </ul>
                
                <div class="label">
                    <label for="btn-menu"> <span class="usuario"> U </span> <span class="x"> X </span>  </label>

                </div>
                <input type="checkbox" id="btn-menu">

                <div class="menu-usu">
                    <ul>
                        <a class="b-menu" id="b-top" href="usuari.php" ><li class="item-menu" >PERFIL</li></a>
                        <a class="b-menu" href="cerrarSesion.php"><li class="item-menu"> CERRAR SESION </li></a>
                    </ul>
                </div>

            </nav>
        </div>
    </header>
    
</body>
</html>