<?php

include('password.php');

class User extends Password {

    private $_db;

    function __construct($db) {
        parent::__construct();

        $this->_db = $db;
    }

    private function get_user_hash($userName) {

        try {
            $stmt = $this->_db->prepare('SELECT userName, name , lastName, password, email, school, course, rol, active FROM usuarios WHERE userName = :userName AND active="Yes" ');
            $stmt->execute(array('userName' => $userName));

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo '<p class="bg-danger">' . $e->getMessage() . '</p>';
        }
    }

    public function isValidUsername($userName) {
        if (strlen($userName) < 3)
            return false;
        if (strlen($userName) > 17)
            return false;
//if (!ctype_alnum($userName)) return false;
        return true;
    }

    public function login($userName, $password) {
        if (!$this->isValidUsername($userName))
            return false;
        if (strlen($password) < 3)
            return false;

        $row = $this->get_user_hash($userName);

        if ($this->password_verify($password, $row['password']) == 1) {

            $_SESSION['loggedin'] = true;
            $_SESSION['userName'] = $row['userName'];
            $_SESSION['name1'] = $row['name1'];
            $_SESSION['lastName1'] = $row['lastName1'];
            $_SESSION['school'] = $row['codSchool'];
            $_SESSION['course'] = $row['codCourse'];
            $_SESSION['rol'] = $row['codRol'];
            return true;
        }
    }
    public function logout() {
        session_destroy();
    }

    public function is_logged_in() {
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            return true;
        }
    }

    public function guardarDatos($unidad, $leccion, $p1, $p2, $p3, $p4, $p5) {
        //echo "<script> alert(" . $_SESSION['userName'] . ");</script>";
        $usuario = $_SESSION['userName'];
        $nombre = $_SESSION['name'];
        $apellido = $_SESSION['lastName'];
        $colegio = $_SESSION['school'];
        $curso = $_SESSION['course'];
        $rol = $_SESSION['rol'];
        try {
            $stmt = $this->_db->prepare("SELECT * FROM lecciones WHERE userName = :usuario AND unit = :unidad AND lesson = :leccion AND school = :colegio AND course = :curso");
            $stmt->execute(array('usuario' => $usuario, 'unidad' => $unidad, 'leccion' => $leccion, 'colegio' => $colegio, 'curso' => $curso));
            $res = $stmt->fetch();
            if ($res > 0) {
                $stmt = $this->_db->prepare("UPDATE lecciones SET p_1 = :pregunta1 , p_2 = :pregunta2, p_3 = :pregunta3 , p_4 = :pregunta4, p_5 =:pregunta5 WHERE userName = :usuario AND unit =:unidad AND lesson = :leccion");
                $stmt->execute(array('usuario' => $usuario, 'pregunta1' => $p1, 'pregunta2' => $p2, 'pregunta3' => $p3, 'pregunta4' => $p4, 'pregunta5' => $p5, 'unidad' => $unidad, 'leccion' => $leccion));
                return 1;
            } else {
                $stmt = $this->_db->prepare("INSERT INTO lecciones(userName,name,lastName,school,course,rol,unit,lesson,p_1,p_2,p_3,p_4,p_5) VALUES (:usuario,:nombre,:apellido,:colegio,:curso,:rol,:unidad,:leccion,:p1,:p2,:p3,:p4,:p5)");
                $stmt->execute(array('usuario' => $usuario, 'nombre' => $nombre, 'apellido' => $apellido, 'colegio' => $colegio, 'curso' => $curso, 'rol' => $rol, 'leccion' => $leccion, 'unidad' => $unidad, 'p1' => $p1, 'p2' => $p2, 'p3' => $p3, 'p4' => $p4, 'p5' => $p5));
                return 2;
            }
        } catch (PDOException $e) {
            echo '<p class="bg-danger">' . $e->getMessage() . '</p>';
        }
    }

    public function calificarEstudiantes($colegio) {
        $stmt = $this->_db->prepare("SELECT * FROM lecciones WHERE school = :colegio");
        $stmt->execute(array('colegio' => $colegio));
        $consulta = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        echo'<table id="mi_tabla"  class="table table-striped table-bordered nowrap" cellspacing="0" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Pregunta 1</th>
                            <th>Pregunta 2</th>
                            <th>Pregunta 3</th>
                            <th>Pregunta 4</th>
                            <th>Unidad</th>
                            <th>Leccion</th>
                            <th>Calificación</th>
                            <th>Comentario</th>
                        </tr>
                    </thead>
            <tbody>';
        foreach ($consulta as $res) {
            echo "<tr>";
            echo '<td> <input type ="textbox" name= "id[]" value ="' . $res['id'] . '" disabled size="4"></input> </td>';
            echo '<td>' . $res['userName'] . '</td>';
            echo '<td>' . $res['name'] . '</td>';
            echo '<td>' . $res['lastName'] . '</td>';
            echo '<td>' . $res['p_1'] . '</td>';
            echo '<td>' . $res['p_2'] . '</td>';
            echo '<td>' . $res['p_3'] . '</td>';
            echo '<td>' . $res['p_4'] . '</td>';
            echo '<td>' . $res['unit'] . '</td>';
            echo '<td>' . $res['lesson'] . '</td>';
            echo '<td> <input type ="textbox" name= "nota[]" value ="' . $res['calification'] . '" size="4"> </input> </td>';
            echo '<td> <input type ="textbox" name= "comentario[]" value ="' . $res['comment'] . '"> </input> </td>';
            echo "</tr>";
        }
        echo'</tbody> </table>';
    }

    public function listarProgreso($userName) {
        $stmt = $this->_db->prepare("SELECT * FROM lecciones WHERE userName = :usuario");
        $stmt->execute(array('usuario' => $userName));
        $consulta = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        echo'<table id="mi_tabla"  class="table table-striped table-bordered nowrap" cellspacing="0" style="width:100%">
                    <thead>
                        <tr>
                            <th>Pregunta 1</th>
                            <th>Pregunta 2</th>
                            <th>Pregunta 3</th>
                            <th>Pregunta 4</th>
                            <th>Unidad</th>
                            <th>Leccion</th>
                            <th>Calificación</th>
                            <th>Comentario</th>
                        </tr>
                    </thead>
            <tbody>';
        foreach ($consulta as $res) {
            echo "<tr>";
            echo '<td>' . $res['p_1'] . '</td>';
            echo '<td>' . $res['p_2'] . '</td>';
            echo '<td>' . $res['p_3'] . '</td>';
            echo '<td>' . $res['p_4'] . '</td>';
            echo '<td>' . $res['unit'] . '</td>';
            echo '<td>' . $res['lesson'] . '</td>';
            echo '<td>' . $res['calification'] . '</td>';
            echo '<td>' . $res['comment'] . '</td>';
            echo "</tr>";
        }
        echo'</tbody> </table>';
    }

}
