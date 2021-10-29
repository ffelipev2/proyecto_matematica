<?php
error_reporting(0);
require_once('../../classes/config.php');

if ($_SESSION['rol'] == '') {
    session_destroy();
    header("Location:../index.php");
}
$colegio = $_SESSION['school'];

echo $colegio . $rol;
$stmt = $db->prepare("SELECT * FROM lecciones WHERE school = :colegio AND rol = :rol");
$stmt->execute(array('colegio' => $colegio, 'rol' => "alumno"));
//$data = $stmt->fetchAll();

if (isset($_POST['enviar'])) {
    $count = count($_POST["id"]);
    $comentario = $_POST['comment'];
    echo 'La variable es: '.$count;

    for ($i = 0; $i < $count; $i++) {
        $stmt = $db->prepare("UPDATE lecciones SET calification=:calificacion , comment = :comentario WHERE id = :id");
        $stmt->execute(array('calificacion' => $_POST['calification'][$i], 'comentario' => $_POST['comment'][$i], 'id' => $_POST['id'][$i]));
    }
    //header("Location: adminEstudiantes.php");


}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gestión de Estudiantes</title>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <!-- data tables export -->
        <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
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
    <div class="card text-center">
        <div class="card-body">
            <h2>Calificaciones de Estudiantes</h2>
        </div>
    </div>
    </br>

    <body style ="background-color: #FFFFFF;">      
        <form method="post" action="adminEstudiantes.php">
            <table id="mi_tabla"  class="table table-striped table-bordered nowrap" cellspacing="0" style="width:100%">
                <thead>             
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Pregunta 1</th>
                        <th>Pregunta 2</th>
                        <th>Pregunta 3</th>
                        <th>Pregunta 4</th>
                        <th>Unidad</th>
                        <th>Lección</th>
                        <th>Calificación</th>
                        <th>Comentario</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    while($rows = $stmt->fetch(PDO::FETCH_BOTH)){
                        ?>
                        <tr>
                            <td>
                                <input name="id[]" type="text" id="id" value="<?php echo $rows['id']; ?>" disabled size="3">
                            </td>
                            <td >
                                <?php echo $rows['name']; ?>
                            </td>
                            <td >
                                <?php echo $rows['lastName']; ?>
                            </td>
                            <td >
                                <?php echo $rows['p_1']; ?>
                            </td>
                            <td >
                                <?php echo $rows['p_2']; ?>
                            </td>
                            <td >
                                <?php echo $rows['p_3']; ?>
                            </td>
                            <td >
                                <?php echo $rows['p_4']; ?>
                            </td>
                            <td >
                                <?php echo $rows['unit']; ?>
                            </td>
                            <td >
                                <?php echo $rows['lesson']; ?>
                            </td>
                            <td>
                                <input name="calification[]" type="text" id="lastname" value="<?php echo $rows['calification']; ?>" size="3">
                            </td>
                            <td>
                                <input name="comment[]" type="text" id="lastname" value="<?php echo $rows['comment']; ?>">
                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody> 
            </table>
            <div class="text-center">
                <tr align="center">
                    <td colspan="4" align="center"><input type="submit" name="enviar" value="Actualizar Planilla"></td>
                </tr>
            </div>
        </form>
    </body>
    <script src="../../js/dataTable_spanishDocente.js" type="text/javascript"></script>
</html>
