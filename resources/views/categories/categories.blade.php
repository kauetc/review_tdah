@extends('layouts.master')
@section('import')
<link rel="stylesheet" type="text/css" href="{{ asset('../../../css/categories.css') }}"/>
@endsection
@section('content')
        <div class="container">
            <div class="side-detail--border"></div>                
            <div class="title-page--area">
                <div class="title-icon--area">
                    <div class="title-page">
                        <h1>Categorias</h1>
                        <!--<span>Categorias</span> VAI VIRAR EFEITO-->
                    </div>
                    <div class="aside-icon--area">
                        <img src='../Images/icons8-cérebro-100.png'>
                    </div>
                </div>
                <div id="div-newcategory" class="div-newcategory">
                    <a href="{{route('categories_create')}}">
                        <button id="button-newcategory" class="button new-category">Adicionar categoria</button>
                    </a>
                </div>
            </div>

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                <div>
                    <p>Categoria Adicionada com sucesso</p>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-success">
                    {{ session('error') }}
                </div>
            @endif
        
            <section>
                <div class="category-section">
                    <div class="search-area">
                        <div id="div-search" class="div-search">
                            <input type="text" id="searchbar" name="searchbar" placeholder="Procurar categoria..." onkeyup="filterFunction()"/>
                            <button id="button-search" class="button search">Pesquisar</button>
                        </div>
                    </div>
                </div>

                <div id="div-table" class="table">
                    <table id="table">
                        <thead>
                            <tr>
                                <td class="category-name">Nome da categoria</td>
                                <td>Criado em</td>
                                <td>Atualizado em</td>
                                <td>Configurar categoria</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td id="td_1" class="table-left category-name"><span id="span_td">{{$category->nome_categoria}}</span><input type="text" id="input_hidden" hidden></td>
                                    <td class="table-center">{{$category->created_at}}</td>
                                    <td  class="table-center">{{$category->updated_at}}</td>
                                    <td class="table-right">
                                        <a href=""><button id="button-edit">Editar</button></a>
                                        <a href=""><button id="button-exclude">Excluir</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- 
                    XXCabeçalho com informação da paginaXX
                    botoes de adicionar editar deletar
                    tabela com registros
                    menu
                    footer
                --}}
                       
            </section>
        </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function() {
            $("#searchbar").on("keyup", function() {
                var input, filter, table, tr, td, i, txtValue;
                input = $(this).val().toUpperCase();
                table = $("#table");
                tr = table.find("tr");
                tr.each(function(index,val) {
                    if (index === 0) {
                        return true;
                    }
                    td = $(this).find("td").eq(0);
                    if (td.length) {
                        txtValue = td.text();
                        if (txtValue.toUpperCase().indexOf(input) > -1) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    }
                });
            });

            $('#button-edit').on('click', function(e){
                e.preventDefault();
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
            });
        });
    </script>
@endsection