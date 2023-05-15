<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Teste login</title>
        <link rel="stylesheet" href="login.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Jost:wght@300&display=swap" rel="stylesheet">
    </head>

    <body>                   
       <div class="center-square">
            <div class="title" >
                Área de Login
            </div>
            <form method="POST" action="{{route('auth');}}">
                {{ csrf_field()}}
                <div class="login-info">
                    <label>
                        E-mail <br/>
                        <input type="email" placeholder="Digite aqui seu e-mail"/>
                    </label>
                </div>

                <div class="login-info">
                    <label>
                        Senha <br/>
                        <input type="password" placeholder="Digite aqui sua senha"/>
                    </label>
                </div>
                
                <div class="row">
                    <div class="column1">
                        <input type="checkbox" id="remember-me"/>
                        <label for="remember-me">Lembrar de mim</label>                       
                    </div>

                    <div class="column2">
                        <a href="" target="_blank">Esqueceu sua senha?</a>
                    </div>

                    <div class="row">
                        <div class="column3">
                            <input type="submit" value="Fazer login" />
                        </div>
                        <div class="column4">
                            <input type="button" value="Cadastre-se" />
                        </div>
                    </div>
                </div>
                
             
            </form>           
       </div>     
    </body>

</html>