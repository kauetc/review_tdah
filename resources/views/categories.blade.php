<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Categorias</title>        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}"/>
    </head>

    <body>
        <div id="page-header">
            <h1>Categorias</h1>
        </div>
        <div id="content">
            {{-- 
                Cabeçalho com informação da pagina
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
    </body>
</html>