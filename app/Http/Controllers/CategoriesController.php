<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function browse(Request $request){
        $categories = Categories::select('*')->get();
        return view('categories/categories', compact('categories'));
    }

    public function create(Request $request){
        $category = new Categories();
        // Get the column names
        $columnNames = $category->getConnection()->getSchemaBuilder()->getColumnListing($category->getTable());

        return view('categories/categories_create', compact('columnNames'));
    }

    public function store(Request $request){  
        $validatedData = $request->validate([
            'nome_categoria' => 'required|string|max:255',
        ]);
        // try catch da operação no banco de dados.
        try{
            $categories = new Categories();
            $categories->nome_categoria = $validatedData["nome_categoria"];
            $categories->user_alt = session('username'); 
            $saved = $categories->save();
        }
        catch(\Exception $e){
        // do task when error
        return json_encode(array(
            'redirect' => route('categories'),
            'error' => $e->getMessage()
        ));
        }

        if(!$saved){
            // retorno ajax json
            return json_encode(array(
                'redirect' => route('categories'),
                'error' => 'Falha ao adicionar categoria. Contate um administrador'
            ));
        } else { 
            // retorno ajax json
            return json_encode(array(
                'redirect' => route('categories'),
                'success' => 'Categoria criada com sucesso'
            ));
        }
    }
}
