<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Categorias</title>        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="page-header">
            <header>
                <h1>Categorias</h1>
                <a class="top-bar-settings" href="{{route('settings');}}">Configurações</a>
                <!-- Hiperlink sair? (canto superior direito)-->
            </header>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            <div>
                <p>Categoria Adicionada com sucesso</p>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
        
        <div id="content">
            <div class="div-header">
                <div id="div-search" class="div-search">
                    <input type="text" id="searchbar" placeholder="Procurar categoria..."/>
                    <button id="button-search"> Pesquisar</button>
                </div>

                <div id="div-newcategory" class="div-newcategory">
                    <a href="{{route('categories_create')}}"><button id="button-newcategory">Adicionar categoria</button></a>
                </div>
            </div>

            <div id="table">
                <table>
                    <thead>
                        <tr>
                            <td>Nome da categoria</td>
                            <td>Created at</td>
                            <td>Updated at</td>
                            <td>Alteração por usuário</td>
                        </tr>
                    </thead>
                    <tbody>
                        <button id="button-edit-category">Editar</button>






            {{-- 
                XXCabeçalho com informação da paginaXX
                botoes de adicionar editar deletar
                tabela com registros
                menu
                footer
            --}}


            
            
            @foreach($categories as $category)
                <a href="{{route('categories_detail', $category->id)}}" target=”_blank”>
                    <div class="column">
                        <div class="image">
                            <img src="https://nox.com.br/wp-content/uploads/2022/12/como-montar-uma-lanchonete-nox-automacao-blog-scaled-e1670341533976-1024x684.jpg"  width="100%" height="100%"/> 
                        </div>
                        <h1>{{$category->nome_categoria}}</h1> 

                    </div>
                </a>
            @endforeach
                    
        </div>

        
        

        <!-- É isso mesmo?
        <button onclick="adicionarDiv()">Adicionar Div</button> 
        <script>
            function adicionarDiv() {
            var novaDiv = document.createElement("div");
            novaDiv.className = "column";
            novaDiv.innerHTML = "Nova Div";

            var colunas = document.querySelector(".row");
            colunas.appendChild(novaDiv);
            }
        </script>
        -->

        <div class="page-footer">
            <footer>

            </footer>
        </div>

    </body>
</html>