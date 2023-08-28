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
</header>