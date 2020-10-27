<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Farmacia Crown</title>

        <link rel="stylesheet" href="../Reto/Vistas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Reto/estilos.css">
        <link rel="stylesheet" href="../Reto/Vistas/bootstrap-4.5.3-dist/css/sweetalert2.min.css">            
    </head>    
    <body>
      
        <div class="container contenedor" style="margin-top:60px;">
            <div class="row justify-content-center">
                <div class="jumbotron jum">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-center">¡Bienvenido!</h1>
                        <h2 class="text-center">Usuario: <span class="badge badge-info"><?php echo $_SESSION["s_usuario"];?></span></h2>
                        <hr class="my-4">
                    </div>
                    
                    <?php         
                        if($_SESSION['s_usuario'] == 'admin'){
                        echo '<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header text-center"><strong>Registrar Producto</strong></div>
                                    <div class="card-body">Registre los nuevos productos en el inventario</div>
                                    <div class="card-footer"><a class="btn btn-info" href="http://localhost/Reto/Vistas/registro.php" role="button">Registrar</a></div>
                                </div>
                            </div>';
                        }         
                    ?>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header text-center"><strong>Inventario</strong></div>
                            <div class="card-body">Visualice  los productos registrados en el inventario</div>
                            <div class="card-footer"><a class="btn btn-info" href="http://localhost/Reto/Vistas/inventario.php" role="button">Ver</a></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <hr class="my-4">
                        <a class="btn btn-danger float-right" href="http://localhost/Reto/bd/logout.php" role="button">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>        
        <script src="../Reto/Vistas/js/jquery-3.5.1.min.js"></script>    
        <script src="../Reto/Vistas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>    
        <script src="../Reto/Vistas/js/popper.min.js"></script>
        <script src="../Reto/Vistas/js/sweetalert2.all.min.js"></script>    
        <script src="../Reto/codigo.js"></script>    
    </body>
</html>