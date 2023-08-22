<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sub-Categorias</title>
        <link rel="stylesheet" href="login.css"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/structure.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}"/>
    </head>

    <body>
        @include('_header')
            <h1>Sub-Categorias</h1>
        @include('_footer')
    </body>
</html>