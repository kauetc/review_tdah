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
            <form method="POST" action="{{route('categories_new')}}" enctype="multipart/formdata" id='form_categories'>
                {{ csrf_field()}}
                @include('custom.fields_by_columns')
                <input type="button" id="button_confirm" class="button" value="Salvar">
            </form>
        </div>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script>

            const route = "{{route('categories_new')}}";
        </script>
        <script src="{{ asset('js/categories.js') }}"></script>
    </body>
    
</html>

