<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Establishments;
use Illuminate\Http\Request;

class EstablishmentsController extends Controller
{
    public function browse(Request $request){
        $categories = Categories::select('*')->get();
        $establishments = Establishments::select('*')->get();
        return view('establishments/establishment', compact('categories', 'establishments'));
    }

    public function create(Request $request){
        $establishments = new Establishments();
        // Get the column names
        $columnNames = $establishments->getConnection()->getSchemaBuilder()->getColumnListing($establishments->getTable());

        return view('establishments/establishments_create', compact('columnNames'));
    }

    public function store(Request $request){
        return json_encode(array(
                'redirect' => route('establishments'),
                'error' => '$e->getMessage()'
            ));
        // $validatedData = $request->validate([
        //     'nome_estabelecimento' => 'required|string|max:255',
        // ]);
        // // try catch da operação no banco de dados.
        // try{
        //     $establishment = new Establishments();
        //     $establishment->nome_estabelecimento = $validatedData["nome_estabelecimento"];
        //     $establishment->user_alt = session('username'); 
        //     $saved = $establishment->save();
        // }
        // catch(\Exception $e){
        // // do task when error
        // return json_encode(array(
        //     'redirect' => route('establishments'),
        //     'error' => $e->getMessage()
        // ));
        // }

        // if(!$saved){
        //     // retorno ajax json
        //     return json_encode(array(
        //         'redirect' => route('establishments'),
        //         'error' => 'Falha ao adicionar estabelecimento. Contate um administrador'
        //     ));
        // } else { 
        //     // retorno ajax json
        //     return json_encode(array(
        //         'redirect' => route('establishments'),
        //         'success' => 'Estabelecimento criado com sucesso'
        //     ));
        // }

        // return view('establishments/establishments_create', compact('columnNames'));
    }
}
