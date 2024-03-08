<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Master</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/template.css') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
        @yield('import')
    </head>
</head>

<body>
    <header>
        <div class="header-menu">
            <nav>
                <ul>
                    <li id="dashboard" onclick="location.href='/'"><a>Dashboard</a></li>
                    <li id="categories" onclick="location.href='{{ route('categories') }}'"><a>Categorias</a></li>
                    <li id="establishment" onclick="location.href='{{ route('establishment') }}'">
                        <a>Estabelecimentos</a>
                    </li>
                    <li id="reviews" onclick="location.href='{{ route('reviews') }}'"><a>Reviews</a></li>
                    <li id="data_analytics" onclick="location.href='#'"><a>Análise dos dados</a></li>
                    <li id="profile" onclick="location.href='{{ route('profile') }}'"><a>Perfil</a></li>
                    <li id="settings" onclick="location.href='{{ route('settings') }}'"><a>Configurações</a></li>
                </ul>
            </nav>
            <div>
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
        @yield('header')
    </header>
    @yield('content')
    <footer>
        <p>&copy; {{ date('Y') }} Review TDAH Website. All rights reserved.</p>
        @yield('footer')
    </footer>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            var url = window.location.href;
            url = url.split('/')
            url = url[url.length - 1];
            console.log(url)
            if (url === '') {
                url = 'dashboard';
            }
            $('#' + url).addClass('active');
        })
    </script>
    @yield('javascript')
</body>

</html>
