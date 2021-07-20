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
                    <li><a class="b-nav" href="datos.php">TODOS LOS ESTUDIANTES</a></li>
                    <li><a class="b-nav" href="nuevClase.php"> NUEVA CLASE </a></li>
                    <li><a class="b-nav" href="datosClases.php"> TODAS LAS CLASES </a></li>
                    
                </ul>
                
                <div class="label">
                    <label for="btn-menu"> <span class="usuario"> U </span> <span class="x"> X </span>  </label>

                </div>
                <input type="checkbox" id="btn-menu">

                <div class="menu-usu">
                    <ul>
                        <li class="b-menu" id="b-top"><a class="item-menu" href="usuari.php" >PERFIL</a></li>
                        <li class="b-menu"><a class="item-menu" href="cerrarSesion.php"> CERRAR SESION </a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>
    <!-- -->
</body>
</html>