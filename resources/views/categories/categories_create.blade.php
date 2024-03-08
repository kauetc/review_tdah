@extends('layouts.master')
@section('content')
        <h1>Categorias</h1>
        
        <div id="content">            
            <form method="POST" action="{{route('categories_new')}}" enctype="multipart/formdata" id='form_categories'>
                {{ csrf_field()}}
                @include('custom.fields_by_columns')
                <input type="button" id="button_confirm" class="button" value="Salvar">
            </form>
        </div>
@endsection
@section('javascript')
        <script>
            const route = "{{route('categories_new')}}";
        </script>
        <script src="{{ asset('js/categories.js') }}"></script>
@endsection
