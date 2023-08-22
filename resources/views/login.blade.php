<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Login</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/structure.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Jost:wght@300&display=swap" rel="stylesheet">
    </head>

    <body>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                           
       <div class="center-square">
            <div class="title" >
                Área de Login
            </div>
            <form method="POST" action="{{route('auth');}}">
                {{ csrf_field()}}
                <div class="login-info">
                    <label>
                        E-mail <br/>
                        <input type="email" name="email" id="email" placeholder="Digite aqui seu e-mail"/>
                    </label>
                </div>

                <div class="login-info">
                    <label>
                        Senha <br/>
                        <input type="password" name="password" id="password" placeholder="Digite aqui sua senha"/>
                    </label>
                </div>
                
                <div class="row">
                    <div class="column1">
                        <input type="checkbox" name="remember-me" id="remember-me"/>
                        <label for="remember-me">Lembrar de mim</label>                       
                    </div>

                    <div class="column2">
                        <a href="" target="_blank">Esqueceu sua senha?</a>
                    </div>

                    <div class="row">
                        <div class="column3">
                            <input type="submit" name="submit" id="submit" value="Fazer login" />
                        </div>
                        <div class="column4">
                            <p>Ainda não tem conta?</p>
                            <input type="button" name="register" id="register" value="Cadastre-se" />
                        </div>
                    </div>
                </div>
                
             
            </form>           
       </div>     
       @include('_footer')
    </body>

</html>