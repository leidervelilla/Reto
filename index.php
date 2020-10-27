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
     <div id="login">

         <h3 class="text-center text-white display-4" style="margin-top: 40px !important;"><strong>FARMACIA CROWN</strong></h3>

         <div class="container">
             <div id="login-row" class="row justify-content-center align-items-center">
                 <div id="login-column" class="col-md-6">
                     
                     <div id="login-box" class="col-md-12 bg-light text-dark">
                         <form id="formLogin" class="form" style="padding-top: 20px !important;" action="" method="post">
                             <h3 class="text-center text-dark"><strong>Iniciar Sesión</strong></h3>

                             <div class="form-group">
                                 <label for="usuario" class="text-dark"><strong>Usuario</strong></label>
                                 <input type="text" name="usuario" id="usuario" class="form-control">
                             </div>

                             <div class="form-group">
                                 <label for="password" class="text-dark"><strong>Contraseña</strong></label>
                                 <input type="password" name="password" id="password" class="form-control">
                             </div>
                             
                             <div class="form-gropu text-center">
                                 <input type="submit" name="submit" class="btn btn-info btn-lg btn-block" value="Ingresar">
                             </div>
                         </form>
                     </div>
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