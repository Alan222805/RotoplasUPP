<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <meta name="description" content="">

    <title>Home</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    @yield('links_diseño')


</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg" id="enlaces_nav">
            <div class="container-fluid">

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <a class="navbar-brand" href="{{ route('user.index') }}">
                        <img src="/Rotoplas/Logo_de_Rotoplas.svg.png" alt="" width="250px">
                    </a>
                    <ul class="navbar-nav d-flex justify-content-center align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.index') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.mostrarCursos') }}">Capacitate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.productos') }}">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.conocenos') }}">Conocenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Log_in</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                {{-- <x-primary-button :href="url('auth.register')" class="nav-link" style="color: black">
                                    {{ __('Register') }}
                                </x-primary-button> --}}
                                <button href="{{route('register')}}" class="nav-link" type="submit">
                                    {{ __('Register') }}
                                </button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();" class="nav-link" style="text-decoration: none">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link-carrito" href="{{ route('user.carrito_usuario') }}">
                                <img src="/Rotoplas/carrito-de-compras.png" alt="">
                            </a>
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
                <a href="#"><img src="/Rotoplas/facebook.png" alt=""></a>
                <a href="#"><img src="/Rotoplas/instagram.png" alt=""></a>
                <a href="#"><img src="/Rotoplas/twitter.png" "></a>
            </div>
            <div class="footer-logo">
                <img src="/Rotoplas/Logo_de_Rotoplas.svg.png" >
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtén el botón del menú colapsado y la clase contenedor
            var btnMenu = document.querySelector('.navbar-toggler');
            var contenedor = document.querySelector('.main');

            // Agrega un evento click al botón del menú
            btnMenu.addEventListener('click', function() {
                // Hacer algo con la clase contenedor cuando se hace clic en el botón del menú
                // Por ejemplo, agregar o quitar una clase para cambiar la apariencia
                contenedor.classList.toggle('desenfocado');
            });
        });
    </script>
    <script src="/bootstrap-5.3.2-dist/js\bootstrap.bundle.min.js"></script>
    @yield('archivosJS')
</body>

</html>
