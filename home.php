<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

?>
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Farmacia Crown</title>

        <link rel="stylesheet" href="../Reto/Vistas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Reto/estilos.css">
        <link rel="stylesheet" href="../Reto/Vistas/bootstrap-4.5.3-dist/css/sweetalert2.min.css">            
    </head>    
    <body>
      
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        
                        <h1 class="display-4 text-center">¡Bienvenido!</h1>
                      <h2 class="text-center">Usuario: <span class="badge badge-primary"><?php echo $_SESSION["s_usuario"];?></span></h2>    
                      <p class="lead text-center">Esta es la página de inicio, luego de un LOGIN correcto.</p>
                      <hr class="my-4">          
                      <a class="btn btn-danger btn-lg" href="../bd/logout.php" role="button">Cerrar Sesión</a>
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