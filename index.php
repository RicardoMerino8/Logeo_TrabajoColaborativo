<?php
    session_start();
    //validacion para verificar que la sesion exista
    //caso contrario no deja ver index
    if(!isset($_SESSION["usuario"])){
        header("Location:logeo.php");
    } 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <pre>
        Hola <?php echo $_SESSION["usuario"]["usuario"]."[".
        $_SESSION["usuario"]["nivel"]
        ."]"  ?> | <a href='logeo.php?cerrar=true'> Cerrar Sesión</a>
    </pre>
</body>
</html>
