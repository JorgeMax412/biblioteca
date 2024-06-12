<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Clientes-Categorias</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categoria/lista">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cliente/lista">Clientes</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            
            @yield('content') 
            
        </div>
        <br><br><br>
        <footer class="page-footer bg-dark fixed-bottom text-white">
            <div class="footer-copyright text-center py-3">© 2024 Copyright - 
                <span> Agenda Contactos</span>
            </div>
        </footer>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>