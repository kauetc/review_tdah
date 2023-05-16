<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Página inicial</title>
        <link rel="stylesheet" href="login.css"/>
    </head>

    <body>
        <h1>Bem vindo!</h1>               
        <div class="dashboard-columns">
            <div class="row">
                <div class="column1">
                    <div class="category-rectangle">
                        <div class="image">
                            <img> <!-- COMPLETAR -->
                        </div>
                        <div class="category-name">
                            <h1>RESTAURANTES</h1>
                        </div>
                    </div>                
                </div>
                
                <div class="column2">
                    <div class="category-rectangle">
                        <div class="image">
                            <img> <!-- COMPLETAR -->
                        </div>
                        <div class="category-name">
                            <h1>LANCHONETES</h1>
                        </div>
                    </div>                
                </div>

                <div class="column3">
                    <div class="category-rectangle">
                        <div class="image">
                            <img> <!-- COMPLETAR -->
                        </div>
                        <div class="category-name">
                            <h1>BARES</h1>
                        </div>
                    </div>                
                </div>

                <div class="column4">
                    <div class="category-rectangle">
                        <div class="image">
                            <img> <!-- COMPLETAR -->
                        </div>
                        <div class="category-name">
                            <h1>PADARIAS</h1>
                        </div>
                    </div>                
                </div>   
            </div>      
        </div>
        
        <div class="sidebar">
            <table>
                <tr><td><a href="{{route('categories');}}">Categorias</td></tr>
                <tr><td><a href="{{route('subcategories');}}">Subcategorias</td></tr>
                <tr><td><a href="{{route('reviews');}}">Reviews</td></tr>
                <tr><td>Análise dos dados</td></tr>
                <tr><td><a href="{{route('settings');}}">Configurações</td></tr>
                <tr><td><a href="{{route('profile');}}">Perfil</td></tr>
            </table>              
        </div>

    </body>
</html>