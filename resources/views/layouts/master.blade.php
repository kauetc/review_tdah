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
                    <li><a href="/">Dashboard</a></li>
                    <li><a href="{{route('categories');}}" class="active_1">Categorias</a></li>
                    <li><a href="{{route('subcategories');}}" class="active_2">Subcategorias</a></li>
                    <li><a href="{{route('reviews');}}" class="active_3">Reviews</a></li>
                    <li><a href="#">Análise dos dados</a></li>
                    <li><a href="{{route('profile');}}" class="active_4">Perfil</a></li>
                    <li><a href="{{route('settings');}}" class="active_5">Configurações</a></li>
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
</body>
</html>