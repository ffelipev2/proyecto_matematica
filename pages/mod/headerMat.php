<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Lecciones</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Unidad I
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../unidadI/leccion1.php">Lección 01: Funciones</a>
                    <a class="dropdown-item" href="../unidadI/leccion2.php">Lección 02: Función Potencia </a>
                    <a class="dropdown-item" href="../unidadI/leccion3.php">Lección 03: Relación entre grados y radianes </a>
                    <a class="dropdown-item " href="../unidadI/leccion4.php">Lección 04: Razones Trigonométricas </a>
                    <a class="dropdown-item" href="../unidadI/leccion5.php">Lección 05: Funciones Trigonométricas </a>
                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Unidad II
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../unidadII/leccion6.php">Lección 06: Valor esperado y varianza de una variable aleatoria</a>
                    <a class="dropdown-item" href="../unidadII/leccion7.php">Lección 07: Distribución binomial</a>
                </div>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Unidad III
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item disabled" href="#">Pendiente</a>
                    <a class="dropdown-item disabled" href="#">Pendiente</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../progreso/miprogreso.php"> Mi Progreso<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <span class="navbar-text">
            <?php echo $_SESSION['name'] . " " . $_SESSION['lastName'] ?>
            &nbsp;&nbsp;&nbsp;&nbsp; 
        </span>
        </br>
        <span class="navbar-text">
            <a class="btn btn-outline-danger" href="../../classes/salir.php?sal=si" role="button">Cerrar Sesión</a>
        </span>
    </div>
</nav>
