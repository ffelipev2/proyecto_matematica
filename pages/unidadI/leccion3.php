<?php
error_reporting(0);
require_once('../../classes/config.php');
/*
  if ($_SESSION['rol'] == '') {
  session_destroy();
  header("Location:../index.php");
  }
 */
if (isset($_POST['enviar'])) {
    $variableUL = $_POST['enviar'];
    $p1 = $_POST['pregunta1'];
    $p2 = $_POST['pregunta2'];
    $p3 = $_POST['pregunta3'];
    $p4 = $_POST['pregunta4'];
    $p5 = $_POST['pregunta5'];
    $variable = explode("_", $variableUL);
    $unidad = $variable[0];
    $leccion = $variable[1];
    if ($user->guardarDatos($unidad, $leccion, $p1, $p2, $p3, $p4, $p5) == 1) {
        echo '<script> alert("Se han actualizado las respuestas"); </script>';
    } else {
        echo '<script> alert("Se han ingresado las respuestas"); </script>';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lección 03 Grados y Gradiantes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link href="../../style/estrellas.css" rel="stylesheet" type="text/css"/>
        <link href="../../style/miestiloNavbar.css" rel="stylesheet" type="text/css"/>

        <style>
            .bs-example{
                margin: 20px;
            }
            .accordion .fa{
                margin-right: 0.5rem;
            }
            .accordion .card-header:after {
                font-family: 'FontAwesome';  
                content: "\f068";
                float: right; 
            }
            .accordion .card-header.collapsed:after {
                /* symbol for "collapsed" panels */
                content: "\f067"; 
            }
        </style>
        <script type="text/javascript">
            function preloader() {
                document.getElementById("loading").style.display = "none";
                document.getElementById("zoliframe").style.display = "block";
            }//preloader
            window.onload = preloader;
        </script>
        <style>
            div#zoliframe {
                display: none;
            }
            div#loading {
                top: 200 px;
                margin: auto;
                position: inherit;
                z-index: 1000;
                width: 128px;
                height: 128px;
                background: url(../../images/loading.gif) no-repeat;
                cursor: wait;
            }
        </style>

    </head>
    <?php
    if ($_SESSION['rol'] == 'alumno') {
        include '../mod/headerMat.html';
    } elseif ($_SESSION['rol'] == 'docente') {
        include '../mod/headerMat_1.html';
    } else {
        include '../mod/headerMat_2.html';
    }
    ?>
    <body style ="background-color: #FFFFFF;">
        <div class="container border p-0">
            <div class="card-header collapsed border border-light" data-toggle="collapse" data-parent="#accordion" href="#collapseCuatro"  style ="background-color: #0EB8F6;">
                <a class="card-title"><img src="../../img/icono1_leccion1.png" class="img-fluid" width="70px" alt="70px"> LECCIÓN 03: <strong>Activación de Conocimientos Previos</strong></a>
            </div>
        </div>
        <div class="container border p-0">
            <div style="width: 100%;"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;">

                    <iframe frameborder="0" width="1200px" height="675px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/5f594761ce300a0d91132397" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all">
                    </iframe>

                </div> 
            </div>
        </div>


        <div class="container border p-0">
            <div id="accordion" class="accordion">
                <div class="card mb-0">
                    <!-- CONTENIDO -->
                    <div class="card-header collapsed border border-light" data-toggle="collapse" data-parent="#accordion" href="#collapseContenido"  style ="background-color: #0EB8F6;">
                        <a class="card-title"><img src="../../img/icono2_simulación.png" class="img-fluid" width="70px" alt="70px"> <strong>Conceptualización</strong> </a>
                    </div>
                    <div id="collapseContenido" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <div style="width: 100%;"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;">

                                    <iframe frameborder="0" width="1200px" height="675px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/5f59478a60ac360d7b3fb78b" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all">
                                    </iframe>

                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- EJERCICIO Y EXPERIMENTCACIÓN-->
                    <div  class="card-header collapsed border border-light " data-toggle="collapse" data-parent="#accordion" href="#collapseUno"  style =" background-color: #0EB8F6; ">
                        <a class="card-title"><img src="../../img/3_actividad.png" class="img-fluid" width="70px" alt="70px">  <strong> Ejercicio y Experimentación</strong> </a>
                    </div>                                            
                    <div id="collapseUno" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <div class="panel-group" id="sub-accordion" role="tablist" aria-multiselectable="true">
                                <div class="card-header collapsed border border-light" data-toggle="collapse"  href="#ejercicio1"  style ="background-color: #0EB8F6;">
                                    <a class="card-title"><strong>Resolución de problemas</strong></a>
                                </div>
                                <div id="ejercicio1" class="collapse" data-parent="#sub-accordion">
                                    <div class="card-body">
                                        <div style="width: 100%;">
                                            <div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;">

                                                <iframe frameborder="0" width="1200px" height="675px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/5f59477560ac360d7b3fb786" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all">            
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RESPONDE -->
                <div class="card mb-0">
                    <div class="card-header collapsed border border-light " data-toggle="collapse" data-parent="#accordion" href="#collapseTres"  style ="background-color: #0EB8F6;">
                        <a class="card-title"><img src="../../img/4_responde.png" class="img-fluid" width="70px" alt="70px">  <strong>¡Responde! &nbsp; </strong></a>
                    </div>
                    <div id="collapseTres" class="collapse" data-parent="#accordion">
                        <div class="card-body"> 
                            <form role="form" action="" method="post">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div id="loading"></div>
                                        <div id="zoliframe">
                                            <iframe src="https://titanx.cl/contenidoI/wp-admin/admin-ajax.php?action=h5p_embed&id=5" width="958" height="291" frameborder="0" allowfullscreen="allowfullscreen">                                      
                                            </iframe>
                                            <script src="https://titanx.cl/contenidoI/wp-content/plugins/h5p/h5p-php-library/js/h5p-resizer.js" charset="UTF-8"></script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1"> <p>1.- ¿Prefiere medir ángulos en grados o radianes? Justifique su respuesta.</p></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="pregunta1" rows="3" required placeholder="Escribe tu respuesta aquí"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea2"> <p> 2.- ¿Qué ángulo es más grande: 1 grado o 1 radián? ¿o son iguales?</p></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="pregunta2" rows="3" required placeholder="Escribe tu respuesta aquí"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea3"> <p> 3.- Calcule la longitud del arco abarcado por un ángulo central de 2 radianes en un círculo de radio 3.</p></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="pregunta3" rows="3" required placeholder="Escribe tu respuesta aquí"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea3"> Comentarios y/o dudas sobre la clase</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="pregunta4" rows="3" required placeholder="Escribe tu respuesta aquí"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea4"> ¿Cuántas estrellas le pondrías a esta lección ?</label>
                                        <!--<textarea class="form-control" id="exampleFormControlTextarea1" name="pregunta4" rows="3" required></textarea> -->
                                        </br>

                                        <div class="rating">
                                            <input type="radio" id="star5" name="pregunta5" value="5"  required /><label for="star5" title="Genial" value="5">5 estrellas</label>
                                            <input type="radio" id="star4" name="pregunta5" value="4" /><label for="star4" title="Bien" value="4">4 estrellas</label>
                                            <input type="radio" id="star3" name="pregunta5" value="3" /><label for="star3" title="Mas o menos" value="3">3 estrellas</label>
                                            <input type="radio" id="star2" name="pregunta5" value="2" /><label for="star2" title="Mal" value="2">2 estrellas</label>
                                            <input type="radio" id="star1" name="pregunta5" value="1" /><label for="star1" title="Pésimo" value="1">1 estrellas</label>
                                        </div>
                                    </div>
                                    </br> </br>
                                </div>
                                <?php
                                if ($_SESSION['userName'] != '') {
                                    echo ' <button type="submit" name ="enviar" value= "unidad1_leccion3" class="btn btn-outline-primary">Enviar</button>';
                                } else {
                                    echo ' <a href="../../login.php" class="btn btn-outline-primary">Enviar</a>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </br>
    </body>
    <script src="../../js/codigoNavbar.js" type="text/javascript"></script>
    <script src="https://titanx.cl/contenidoI/wp-content/plugins/h5p/h5p-php-library/js/h5p-resizer.js" charset="UTF-8"></script>
    <script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full'></script>
    <script src="../../js/redireccion.js" type="text/javascript"></script>
</html>


