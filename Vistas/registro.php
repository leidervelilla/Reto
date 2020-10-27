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
        <title>Registro de productos</title>

        <link rel="stylesheet" href="http://localhost/Reto/Vistas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/Reto/estilos.css">
        <link rel="stylesheet" href="http://localhost/Reto/Vistas/bootstrap-4.5.3-dist/css/sweetalert2.min.css">
        <link rel="stylesheet" href="http://localhost/Reto/Vistas/bootstrap-4.5.3-dist/css/bootstrap-datepicker.standalone.css">
    </head>
    <body>
        <a class="botonF1 btn btn-info" href="http://localhost/Reto/home.php" role="button">Salir</a>

        <div class="container contenedor" style="margin-top:60px;">
            <div class="row justify-content-center">
                <div class="jumbotron jum">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-center">Registro de productos</h1>
                        <hr class="my-4">
                    </div>

                    <div id="login-box" class="col-md-12">
                        <form id="formLogin" class="form" style="padding-top: 20px !important;" action="" method="post">
                            
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="id_referencia" class="text-dark"><strong>ID Referencia</strong></label>
                                    <input type="text" name="id_referencia" id="id_referencia" class="form-control">
                                </div>

                                <div class="form-group col-6">
                                    <label for="nombre" class="text-dark"><strong>Nombre Referencia</strong></label>
                                    <input type="text" name="nombre" id="nombre" class="form-control">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="laboratorio" class="text-dark"><strong>Laboratorio</strong></label>
                                    <input type="text" name="laboratorio" id="laboratorio" class="form-control">
                                </div>

                                <div class="form-group col-6">
                                    <label for="f_vencimiento" class="text-dark"><strong>Fecha de vencimiento</strong></label>
                                    <input type="text" readonly="" class="form-control" id="datepicker">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="cantidad" class="text-dark"><strong>Cantidad de producto</strong></label>
                                    <input type="text" name="cantidad" id="cantidad" class="form-control">
                                </div>

                                <div class="form-group col-6">
                                    <label for="f_ingreso" class="text-dark"><strong>Fecha de ingreso</strong></label>
                                    <input type="text" name="f_ingreso" id="f_ingreso" class="form-control" readonly="">
                                </div>
                            </div>
                            <div class="form-gropu text-center" style="margin-top:30px;">
                                <input type="submit" name="submit" class="btn btn-info btn-lg btn-block" value="Registrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="http://localhost/Reto/Vistas/js/jquery-3.5.1.min.js"></script>    
        <script src="http://localhost/Reto/Vistas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>    
        <script src="http://localhost/Reto/Vistas/js/popper.min.js"></script>
        <script src="http://localhost/Reto/Vistas/js/sweetalert2.all.min.js"></script>    
        <script src="http://localhost/Reto/codigo.js"></script>
        <script src="http://localhost/Reto/Vistas/bootstrap-4.5.3-dist/js/bootstrap-datepicker.min.js"></script>
        <script src="http://localhost/Reto/Vistas/bootstrap-4.5.3-dist/js/bootstrap-datepicker.es.min.js"></script>

        <script>
            window.addEventListener("load", cargaPagina);
            function cargaPagina() {
                var f = new Date();
                var date = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
                document.getElementById("f_ingreso").value = date;
            }
        </script>

        <script>
            $('#datepicker').datepicker({
                language: "es",
                todayBtn: "linked",
                clearBtn: true,
                format: "dd/mm/yyyy",
                multidate: false,
                todayHighlight: true
            });
        </script>
    </body>
</html>