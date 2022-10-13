<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="Expressc Motoboy" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Rapidoc Express Motoboy</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-warning text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#atualizacoes">Atualizações</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#depoimentos">Depoimentos</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>aaa
        <a href="https://wa.me/5511975892648?text=Ol%C3%A1%2C%20estou%20entrando%20em%20contato." target="_blank" rel="noopener noreferrer">
        <img class="whats" src="assets/img/whats.png" alt="whats" width="50px" srcset="">
        </a>
        <a href="https://www.google.com/maps/dir//Rapidoc+Express+Motoboy/data=!4m8!4m7!1m0!1m5!1m1!1s0x94ce67113e8fb6b3:0x8fab1dd263e7acf1!2m2!1d-46.5730526!2d-23.5473073" target="_blank" rel="noopener noreferrer">
        <img class="rota" src="assets/img/rota-logo.png" alt="rota" width="50px" srcset="">
        </a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        @yield('content')
    </body>
</html>
