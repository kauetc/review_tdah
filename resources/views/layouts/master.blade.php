<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Master</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/template.css') }}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200&display=swap" rel="stylesheet">
        @yield('import')
    </head>
</head>
<body>
    <header>
        <div class="header-menu">
            <nav>
                <ul>
                    <li id="dashboard"><a href="/">Dashboard</a></li>
                    <li id="categories"><a href="{{route('categories');}}" >Categorias</a></li>
                    <li id="establishment"><a href="{{route('establishment');}}">Estabelecimentos</a></li>
                    <li id="reviews"><a href="{{route('reviews');}}">Reviews</a></li>
                    <li id="data_analytics"><a href="#">Análise dos dados</a></li>
                    <li id="profile"><a href="{{route('profile');}}">Perfil</a></li>
                    <li id="settings"><a href="{{route('settings');}}">Configurações</a></li>
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
        <p>&copy; {{ date('Y') }} Your Website. All rights reserved.</p>
        @yield('footer')
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function(){
            var url = window.location.href;
            url = url.split('/')
            url = url[url.length - 1];
            console.log(url)
            if(url === ''){
                url= 'dashboard';
            }
            $('#'+url).addClass('active');
        })
    </script>
    @yield('javascript')
</body>
</html>