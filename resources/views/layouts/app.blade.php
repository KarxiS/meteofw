<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meteo Centrum s.r.o.</title>

    <head>


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nastaveniaFarieb.css') }}">


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Scripts -->

    </head>
    <header class="py-3 mb-4 border-bottom header">
        <div class="container-fluid">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                <a href="/index.html" class="d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
                    <img src="images/meteoLogo.png" alt="meteoLogo" width="40" height="40" class="me-2">
                </a>

                <nav class="my-2 my-md-0 me-md-3">
                    <a class="p-2 link-body-emphasis" href="/index.html">Domov</a>
                    <a class="p-2 link-secondary" href="/zariadenia.html">Zariadenia</a>
                    <a class="p-2 link-body-emphasis" href="/grafPred.html">Grafická predpoveď</a>
                    <a class="p-2 link-body-emphasis" href="/txtPred.html">Textová predpoveď</a>
                    <a class="p-2 link-body-emphasis" href="/contact.html">Kontakt</a>
                </nav>

                <form class="d-flex me-md-3" role="search">
                    <input type="search" class="form-control" placeholder="Vyhľadať..." aria-label="Search">
                </form>

                <div class="dropdown">
                    <a href="#" class="d-block text-dark text-decoration-none dropdown-toggle" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-small" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/vlozenieData.html">Vlož dáta</a></li>
                        <li><a class="dropdown-item" href="#">Nastavenia</a></li>
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Odhlásenie</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

<body>







    <body>
        <div id="app">


            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</body>

</html>