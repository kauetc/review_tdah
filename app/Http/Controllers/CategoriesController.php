<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function browse(Request $request){
        $categories = Categories::select('*')->get();
        return view('categories', compact('categories'));
    }

    public function create(Request $request){
        $category = new Categories();
        // Get the column names
        $columnNames = $category->getConnection()->getSchemaBuilder()->getColumnListing($category->getTable());

        return view('categories/categories_create', compact('columnNames'));
    }

    public function save(Request $request){
        $validatedData = $request->validate([
            'nome_categoria' => 'required|string|max:255',
        ]);

        $categories = new Categories();
        $categories->nome_categoria = $validatedData['nome_categoria'];
        $saved = $categories->save();

        if(!$saved){
            return redirect()->route('categories')->with('error', 'Falha ao adicionar categoria. Contate o Administrador');
        } else {
            return redirect()->route('categories')->with('success', 'Usuário registrado com sucesso');
        }
    }
}
