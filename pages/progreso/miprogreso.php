<?php
error_reporting(0);
require_once('../../classes/config.php');
$usuario = $_SESSION['userName'];
if ($_SESSION['rol'] == '') {
    session_destroy();
    header("Location:../../index.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Mi progreso</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <!-- data tables export -->
        <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"/>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    </head>
    <?php
    if ($_SESSION['rol'] == 'alumno') {
        include '../mod/headerMat.html';
    }
    if ($_SESSION['rol'] == 'docente') {
        include '../mod/headerMat_1.html';
    }
    ?>

    <body style ="background-color: #FFFFFF;">
        <div class="card text-center">
            <div class="card-body">
                <h2>Mi Progreso</h2>
            </div>
        </div>
        </br>
        <?php $user->listarProgreso($usuario) ?>

    </body>
    <script src="../../js/dataTable_spanish.js" type="text/javascript"></script>
</html>
