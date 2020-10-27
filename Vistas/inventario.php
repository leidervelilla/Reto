<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Inventario</title>

        <link rel="stylesheet" href="http://localhost/Reto/Vistas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/Reto/estilos.css">
        <link rel="stylesheet" href="http://localhost/Reto/Vistas/bootstrap-4.5.3-dist/css/sweetalert2.min.css"> 
    </head>
    <body>

        <div class="container contenedor" style="margin-top:60px;">
            <div class="row justify-content-center">
                <div class="jumbotron jum">

                </div>
            </div>
        </div>

        <script src="http://localhost/Reto/Vistas/js/jquery-3.5.1.min.js"></script>    
        <script src="http://localhost/Reto/Vistas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>    
        <script src="http://localhost/Reto/Vistas/js/popper.min.js"></script>
        <script src="http://localhost/Reto/Vistas/js/sweetalert2.all.min.js"></script>    
        <script src="http://localhost/Reto/codigo.js"></script>
    </body>
</html>