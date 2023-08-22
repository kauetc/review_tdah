<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Categorias</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/structure.css') }}"/>       
        <link rel="stylesheet" type="text/css" href="{{ asset('../../../css/categories.css') }}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;600&family=Urbanist:wght@100;200;400;600&display=swap" rel="stylesheet">
    </head>

    <body>
        @include('_header')
        <div class="container">
            
            <div class="header-elements">
                <h1>Categorias</h1>
                
                <!-- Hiperlink sair? (canto superior direito)-->
                <!-- Menu lateral -->
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
        
            <section>
                <div class="search-add-area">
                    <div id="div-search" class="div-search">
                        <input type="text" id="searchbar" name="searchbar" placeholder="Procurar categoria..."/>
                        <button id="button-search" class="button search">Pesquisar</button>
                    </div>

                    <div id="div-newcategory" class="div-newcategory">
                        <a href="{{route('categories_create')}}">
                            <button id="button-newcategory" class="button new-category">Adicionar categoria</button>
                        </a>
                    </div>
                </div>

                <div id="table" class="table">
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
                            @foreach($categories as $category)
                                <tr>
                                    <td class="table-left category-name">{{$category->nome_categoria}}</td>
                                    <td class="table-center">{{$category->created_at}}</td>
                                    <td  class="table-center">{{$category->updated_at}}</td>
                                    <td class="table-right"><a href=""><button id="button-edit-category">Editar</button></a>
                                    <a href=""><button id="button-exclude-category">Excluir</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>



                {{-- 
                    XXCabeçalho com informação da paginaXX
                    botoes de adicionar editar deletar
                    tabela com registros
                    menu
                    footer
                --}}
                        
            </section>
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

        
        @include('./_footer')
    </body>
</html>