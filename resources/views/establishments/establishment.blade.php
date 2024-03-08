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
                    <h1>Estabelecimentos</h1>
                </div>
                <div class="aside-icon--area">
                    <img src='../Images/icons8-cérebro-100.png'>
                </div>
            </div>
            <div id="div-newcategory" class="div-newcategory">
                <a href="{{route('establishment_create')}}">
                    <button id="button-newcategory" class="button new-category">Adicionar Estabelecimento</button>
                </a>
            </div>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            <div>
                <p>Estabelecimento adicionad com sucesso</p>
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
                        <input type="text" id="searchbar" name="searchbar" placeholder="Procurar categoria..."/>
                        <button id="button-search" class="button search">Pesquisar</button>
                    </div>
                </div>
            </div>

            <div id="div-table" class="table">
                <table id="table">
                    <thead>
                        <tr>
                            <td>Nome do Estabelecimento</td>
                            <td>Configurações</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($establishments as $category)
                            <tr>
                                <td class="table-left category-name">{{$category->nome_categoria}}</td>
                                <td class="table-right">
                                    <a href=""><button id="button-edit">Reviews</button></a>
                                    <a href=""><button id="button-edit">Editar</button></a>
                                    <a href=""><button id="button-exclude">Excluir</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
        });
    </script>
@endsection