<link rel="stylesheet" type="text/css" href="{{ asset('css/template.css') }}"/>
<header>
    <div class="header-menu">
        <nav>
            <ul>
                <li><a href="/">Dashboard</a></li>
                <li class="active_1"><a href="{{route('categories');}}">Categorias</a></li>
                <li class="active_2"><a href="{{route('subcategories');}}">Subcategorias</a></li>
                <li class="active_3"><a href="{{route('reviews');}}">Reviews</a></li>
                <li><a href="#">Análise dos dados</a></li>
                <li class="active_4"><a href="{{route('profile');}}">Perfil</a></li>
                <li class="active_5"><a href="{{route('settings');}}">Configurações</a></li>
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
</header>