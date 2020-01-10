<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="navbar-toggler logoPequeño">
        <a class="navbar-brand" href="index.php"><img class="logo" src="images/iconos/Momazos_Logo_Completo.png"></a>
    </div>
    <button class="navbar-toggler btn btn-primary" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand d-none d-md-block" href="index.php"><img class="logo" src="images/iconos/Momazos_Logo_Completo.png"></a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="subirMeme.php">Añadir contenido</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="categorias.php">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aleatorio.php">Aleatorio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Más
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="herramientasYTutoriales.php">Herramientas y tutoriales</a>
                    <a class="dropdown-item" href="NoticiasMemables.php">Noticias "memables"</a>
                    <a class="dropdown-item" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Juegos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <a class="dropdown-item" href="juegoPedro.php">"Nombre del juego"</a>
                        <a class="dropdown-item" href="juegoAlberto.php">"Nombre del juego"</a>
                        <a class="dropdown-item" href="juegoJavi.php">3 en raya</a>
                        <a class="dropdown-item" href="juegoAntonio.php">Pong</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Información
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="contacta.php">Contacta con nosotros</a>
                    <a class="dropdown-item" href="quienessomos.php">Quienes somos</a>
                    <a class="dropdown-item" href="terminos.php">Terminos legales</a>
                </div>
            </li>
        </ul>
        <form action="login.php" class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-primary my-2 my-sm-0 login" type="submit">Log in</button>
        </form>
    </div>
</nav>