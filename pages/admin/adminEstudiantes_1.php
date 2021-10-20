<?php
error_reporting(0);
session_start();
$link = mysqli_connect("localhost", "root", "", "mi_db");
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}
$colegio = $_SESSION['school'];
$sql = "SELECT * FROM lecciones WHERE school = '$colegio' AND rol = 'alumno'";
$result = mysqli_query($link, $sql);


if ($_SESSION['rol'] == '') {
    session_destroy();
    header("Location:../index.php");
}
if (isset($_POST['enviar'])) {
    $count = count($_POST["id"]);
    for ($i = 0; $i < $count; $i++) {
        $sql1 = "UPDATE lecciones SET calification='" . $_POST['calification'][$i] . "', comment='" . $_POST['comment'][$i] . "' WHERE id='" . $_POST['id'][$i] . "'";
        $result1 = mysqli_query($link, $sql1);
    }
    header("Location: adminEstudiantes_1.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gestión de Estudiantes</title>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

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
        <form method="post" action="adminEstudiantes_1.php">
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
                        <th>Calificación</th>
                        <th>Comentario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($rows = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td>
                                <input name="id[]" type="text" id="id" value="<?php echo $rows['id']; ?>">
                            </td>
                            <td >
                                <input name="name[]" type="text" id="name" value="<?php echo $rows['name']; ?>">
                            </td>
                            <td >
                                <input name="lastname[]" type="text" id="lastname" value="<?php echo $rows['lastName']; ?>">
                            </td>
                            <td >
                                <input name="pregunta1[]" type="text" id="lastname" value="<?php echo $rows['p_1']; ?>">
                            </td>
                            <td >
                                <input name="pregunta2[]" type="text" id="lastname" value="<?php echo $rows['p_2']; ?>">
                            </td>
                            <td >
                                <input name="pregunta3[]" type="text" id="lastname" value="<?php echo $rows['p_3']; ?>">
                            </td>
                            <td >
                                <input name="pregunta4[]" type="text" id="lastname" value="<?php echo $rows['p_4']; ?>">
                            </td>
                            <td>
                                <input name="calification[]" type="text" id="lastname" value="<?php echo $rows['calification']; ?>">
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
            <tr>
                <td colspan="4" align="center"><input type="submit" name="enviar" value="Submit"></td>
            </tr>
        </form>
    </body>
    <script src="../../js/dataTable_spanishDocente.js" type="text/javascript"></script>
    <script src="../../js/redireccion.js" type="text/javascript"></script>
</html>
