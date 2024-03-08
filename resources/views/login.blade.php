<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/structure.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Jost:wght@300&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

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

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="center-square">
        <form method="POST" action="{{ route('auth') }}">
            {{ csrf_field() }}
            <section class="vh-100 gradient-custom">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100" style="margin-left: 100px; !important;">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">
                                    <div class="mb-md-5 mt-md-4 pb-5">
                                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                        <p class="text-white-50 mb-5">Digite seu email e senha!</p>

                                        <div class="form-outline form-white mb-4">
                                            <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" placeholder="email" /> 
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" placeholder="password" /> 
                                        </div>

                                        <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
                                        
                                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                    </div>
                                    <div>
                                        <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <div class="login-info">
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
                </div> --}}


        </form>
    </div>
    @include('_footer')
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
</body>

</html>
