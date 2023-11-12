<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <meta name="description" content="">

    <title>Home</title>
    <link rel="stylesheet" href="css/Estilos_Conocenos.css">

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">




</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <a class="navbar-brand" href="/">
                        <img src="/Rotoplas/Logo_de_Rotoplas.svg.png" alt="" width="250px">
                    </a>
                    <ul class="navbar-nav d-flex justify-content-center align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Capacitate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Conocenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main class="main">
        @yield('ContenidoPrincipal')
    </main>

    <footer class="footer">
        <div class="container-footer">
            <div class="contactanos">
                <h1 id="contactanos">CONTACTANOS</h1>
                <p class="p_contactanos"><strong>Correo: </strong> <a href="#">rotoplas@gmail.com</a></p>
                <p class="p_contactanos"><strong>Teléfono: </strong>7157948</p>
            </div>
            <div class="redes">
                <a href="#"><img src="Rotoplas/facebook.png" alt=""></a>
                <a href="#"><img src="Rotoplas/instagram.png" alt=""></a>
                <a href="#"><img src="Rotoplas/twitter.png" "></a>
            </div>
            <div class="footer-logo">
                <img src="Rotoplas/Logo_de_Rotoplas.svg.png" >
            </div>
        </div>
    </footer>


    <script src="/bootstrap-5.3.2-dist/js\bootstrap.bundle.min.js"></script>

</body>

</html>
