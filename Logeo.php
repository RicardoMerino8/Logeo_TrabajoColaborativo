<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Login</title>    
</head>
<body>
    <h4>Login</h4> <hr>
    <br>
    <div class="form-control" style="width:500px; position: relative; left:35%;" >
        <fieldset>
            <legend>Login</legend>
            <form action="logeo.php" method="post">
                <input type="text" name="txtUsuario" placeholder="Nombre de usuario" class="form-control"><br>
                <input type="password" name="txtPass" placeholder="Contraseña" class="form-control"><br>
                <input type="submit" name="btnLogin" value="Ingresar"
                class="btn btn-success">        
            </form>
        </fieldset>    
    </div>
    <p>usuario: admon.    Rol = Administrador</p>
    <p>usuario: secre.    Rol = Secretaria</p>
    <p>pass: Itca123</p>
    
    <?php

        if($_POST){
            $usuario = $_POST["txtUsuario"];
            $contra = $_POST["txtPass"];

            if($usuario == 'admon' && $contra == 'Itca123'){                
                $nivel = 'Administrador';
            }else if($usuario == 'secre' && $contra == 'Itca123'){                
                $nivel = 'Secretaria';
            }else{
                $nivel = "";
                echo "<script>
                        alert('Usuario o Contraseña Incorrectos');
                        window.location = 'logeo.php'
                    </script>";
            }
            
            if($nivel != ""){
                $_SESSION["usuario"]["nivel"]=$nivel;
                $_SESSION["usuario"]["usuario"]=$usuario;
                header("Location:index.php");
            }else{
                echo "<script>
                        alert('Usuario o Contraseña Incorrectos');
                        window.location = 'logeo.php'
                    </script>";
            }
        }

        if(isset($_REQUEST["cerrar"])){
            session_destroy();
            header("Location:logeo.php");
        }
    ?>    
</body>
</html>