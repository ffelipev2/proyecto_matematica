<!DOCTYPE html>
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
<html>
    <head>
        <title>Lección 07 Distribución Binomial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link href="../../pages/admin/css/estrellas.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/miestiloNavbar.css" rel="stylesheet" type="text/css"/>

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
    <body style ="background-color: #FFFFFF;">
    <?php
    if ($_SESSION['rol'] == 'alumno') {
        include '../mod/headerMat.php';
    } elseif ($_SESSION['rol'] == 'docente') {
        include '../mod/headerMat_1.php';
    } else {
        include '../mod/headerMat_2.php';
    }
    ?>
        <div class="container border p-0">
            <div class="card-header collapsed border border-light" data-toggle="collapse" data-parent="#accordion" href="#collapseCuatro"  style ="background-color: #0EB8F6;">
                <a class="card-title"><img src="../../images/icono1_leccion1.png" class="img-fluid" width="70px" alt="70px"> LECCIÓN 05: <strong>Activación de Conocimientos Previos</strong></a>
            </div>
        </div>
        <div class="container border p-0">
            <div style="width: 100%;"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;">

                    <iframe frameborder="0" width="1200px" height="675px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/5f7cccf725fa930d16acf10a" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all">
                    </iframe>

                </div> 
            </div>
        </div>


        <div class="container border p-0">
            <div id="accordion" class="accordion">
                <div class="card mb-0">
                    <!-- CONTENIDO -->
                    <div class="card-header collapsed border border-light" data-toggle="collapse" data-parent="#accordion" href="#collapseContenido"  style ="background-color: #0EB8F6;">
                        <a class="card-title"><img src="../../../images/icono2_simulación.png" class="img-fluid" width="70px" alt="70px"> <strong>Conceptualización</strong> </a>
                    </div>
                    <div id="collapseContenido" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <div style="width: 100%;"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;">

                                    <iframe frameborder="0" width="1200px" height="675px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/5f7cccf095c8ab0cfe8b825a" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all">
                                    </iframe>

                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- EJERCICIO Y EXPERIMENTCACIÓN-->
                    <div  class="card-header collapsed border border-light " data-toggle="collapse" data-parent="#accordion" href="#collapseUno"  style =" background-color: #0EB8F6; ">
                        <a class="card-title"><img src="../../../images/3_actividad.png" class="img-fluid" width="70px" alt="70px">  <strong> Ejercicio y Experimentación</strong> </a>
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

                                                <iframe frameborder="0" width="1200px" height="675px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/5f7ccce94524c80d7c7a226d" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all">            
                                                </iframe>

                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header collapsed border border-light" data-toggle="collapse"  href="#collapseSimu4"  style ="background-color: #0EB8F6;">
                                    <a class="card-title"> <strong>Simulador Temperatura Fahrenheit</strong> </a>
                                </div>
                                <div id="collapseSimu4" class="collapse" data-parent="#sub-accordion" >
                                    <div class="card-body">
                                        <p>A continuación podrás acceder al software Geogebra </p>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe scrolling="no" title="Simulador 4" src="https://www.geogebra.org/material/iframe/id/wf2bxgbw/width/1280/height/593/border/888888/sfsb/true/smb/false/stb/false/stbh/false/ai/false/asb/false/sri/false/rc/false/ld/false/sdz/false/ctl/false" width="1274px" height="614px" style="border:0px;"> 
                                            </iframe>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- RESPONDE -->

                    <div class="card-header collapsed border border-light " data-toggle="collapse" data-parent="#accordion" href="#collapseTres"  style ="background-color: #0EB8F6;">
                        <a class="card-title"><img src="../../../images/4_responde.png" class="img-fluid" width="70px" alt="70px">  <strong>¡Responde! &nbsp; </strong></a>
                    </div>
                    <div id="collapseTres" class="collapse" data-parent="#accordion">
                        <div class="card-body"> 
                            <form role="form" action="" method="post">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div id="loading"></div>
                                        <div id="zoliframe">
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe class="embed-responsive-item" src="https://titanx.cl/contenidoI/wp-admin/admin-ajax.php?action=h5p_embed&id=9"></iframe>
                                                <script src="https://titanx.cl/contenidoI/wp-content/plugins/h5p/h5p-php-library/js/h5p-resizer.js" charset="UTF-8"></script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1"> <p>1.- Indique dos características de la distribución binomial</p></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="pregunta1" rows="3" required placeholder="Escribe tu respuesta aquí"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea2"> <p> 2.- Para qué tipo de variable se utiliza la distribución binomial, ¿cuántitativa o cualitativa? Y ¿de qué tipo? Justifique su respuesta.</p></label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="pregunta2" rows="3" required placeholder="Escribe tu respuesta aquí"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea3"> <p> 3.- A partir del diagrama de barras de probabilidades, ¿para qué valor de <strong>“p”</strong> la distribución es simétrica?</p></label>
                                        </br></br>
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
                                    </br>                                   
                                    <?php
                                    if ($_SESSION['userName'] != '') {
                                        echo ' <button type="submit" name ="enviar" value= "unidad2_leccion7" class="btn btn-outline-primary">Enviar</button>';
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
    </body>
    <script src="../../../assets/js/scripts.js" type="text/javascript"></script>
    <script src="../../../js/codigoNavbar.js" type="text/javascript"></script>
    <script src="https://titanx.cl/contenidoI/wp-content/plugins/h5p/h5p-php-library/js/h5p-resizer.js" charset="UTF-8"></script>
    <script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full'></script>
</html>


