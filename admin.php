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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
    <title>ADMINISTRADOR</title>
</head>
<body class="row bg-success justify-content-center aling-items-center vh-100" >
    <pre>
        Hola <?php echo $_SESSION["usuario"]["usuario"]."[".
        $_SESSION["usuario"]["nivel"]
        ."]"  ?> | <a href='logeo.php?cerrar=true'> Cerrar Sesión</a>
    </pre>

    <div class="col-sm-5">
    
    <h3>ROLES DE ADMINISTRADOR</h3>
    
    </div>


        <div class="col-sm-6">
        <a href="#" class="btn btn-warning">CONFIGURACIONES</a>
        <a href="#" class="btn btn-warning">ACTIVIDADES</a>
        <a href="#" class="btn btn-warning">REPORTES</a>
        <a href="#" class="btn btn-warning">ENLACES</a>


        </div>


</body>
</html>