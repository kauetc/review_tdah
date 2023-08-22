<header>
    <nav>
        <ul>
            <li><a href="/">Dashboard</a></li>
            <li><a href="{{route('categories');}}">Categorias</a></li>
            <li><a href="{{route('subcategories');}}">Subcategorias</a></li>
            <li><a href="{{route('reviews');}}">Reviews</a></li>
            <li><a href="#">Análise dos dados</a></li>
            <li><a href="{{route('profile');}}">Perfil</a></li>
            <li><a href="{{route('settings');}}">Configurações</a></li>
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
</header>