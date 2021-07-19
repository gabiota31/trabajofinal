<?php

session_start();


session_destroy();
echo "Haz cerrado sesion, redirigiendo...";
header("refresh:3; url= login.html");


?>