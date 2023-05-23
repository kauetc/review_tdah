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
            
            <form method="POST" action="{{route('categories_new')}}" enctype="multipart/formdata">
                @foreach($columnNames as $key => $columnName)
                    @if($columnName != 'id' && $columnName != 'updated_at' && $columnName != 'user_alt' && $columnName != 'created_at')
                        <label for="{{$columnName}}">{{ucwords(str_replace('_', ' ', $columnName))}}</label>
                        <input type="text" name="{{$columnName}}" id="{{$columnName}}" placeholder="{{$columnName}}">
                        <button type="submit" name="submit" id="submit_button">SALVAR </button>
                    @endif
                @endforeach
            </form>
        </div>
    </body>
</html>