<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts do google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!--CSS da aplicação-->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <ul class="nav justify-content-end" style="position: relative;">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/animes/create">Adicionar Anime</a>
            </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Meus animes</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                            Sair</a>
                    </form>
                </li>
            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Registrar</a>
                </li>
            @endguest
        </ul>
    </header>

    <main>
        <!--******************************************************************************************************************-->
        @yield('content')
        <!--******************************************************************************************************************-->
    </main>

    <footer class="footer bg-footer container-fluid">
        <div>
            <p>Animes World Online &copy; 2020</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>

</html>
