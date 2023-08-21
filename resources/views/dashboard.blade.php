<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Página inicial</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@200&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
            <div class="top-section">
                <h1>Olá <!-- Nome do usuário logado -->!</h1>
                <!-- <a href="[página de configurações]">Configurações</a> -->
                <!-- <a href="[redirecionamento para saída]">Sair</a> -->
            </div>

        <h1>Bem vindo!</h1>   
        </header>
        
        <div class="dashboard-columns">
            <div class="row">

                <a href="https://www.google.com.br/" target=”_blank”>
                    <div class="column" id="restaurante">
                        <div class="image">                            
                            <img src="https://a.cdn-hotels.com/gdcs/production156/d1067/98b5cb4d-ea36-43fd-b3ca-21ae04c7c770.jpg" width="100%" height="100%"/>
                        </div>
                        <h1 id="rest">RESTAURANTES</h1>                  
                    </div>
                </a>
                
                <a href="https://www.google.com.br/" target=”_blank”>
                    <div class="column">
                        <div class="image">
                            <img src="https://nox.com.br/wp-content/uploads/2022/12/como-montar-uma-lanchonete-nox-automacao-blog-scaled-e1670341533976-1024x684.jpg"  width="100%" height="100%"/> 
                        </div>
                        <h1>LANCHONETES</h1> 
                    </div>
                </a>

                <a href="https://www.google.com.br/" target=”_blank”>
                    <div class="column" >
                    <div class="image">                       
                        <img src="https://f.i.uol.com.br/fotografia/2018/07/26/15326332335b5a209143c97_1532633233_3x2_md.jpg" width="100%" height="100%"/>                        
                    </div>                    
                    <h1>BARES</h1>
                    
                                   
                    </div>
                </a>

                <a href="https://www.google.com.br/" target=”_blank”>
                    <div class="column">
                        <div class="image">
                            <img src="https://www.farofamagazine.com.br/wp-content/uploads/2022/05/unnamed-12.jpg" width="100%" height="100%"/>  
                        </div>                        
                        <h1>PADARIAS</h1>                                                                
                    </div>
                </a>   
            </div>      
        </div>
        
        <div class="sidebar">
            <div id="expand-container">
                <div id="expand-contract" class="expanded">
                    <table>
                        <tr><td><a href="{{route('categories');}}">Categorias</a></td></tr>
                        <tr><td><a href="{{route('subcategories');}}">Subcategorias</a></td></tr>
                        <tr><td><a href="{{route('reviews');}}">Reviews</a></td></tr>
                        <tr><td>Análise dos dados</td></tr>
                        <tr><td><a href="{{route('settings');}}">Configurações</a></td></tr>
                        <tr><td><a href="{{route('profile');}}">Perfil</a></td></tr>
                    </table>
                </div>
            </div>
        </div>

        <footer>
            <div class="bottom-section">

            </div>
        </footer>

    </body>
</html>