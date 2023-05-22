<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function browse(Request $request){

        $categories = Categories::select('*')->get();

        // foreach ($categories as $category){
        //     dd($category->id);
        // }
        return view('categories', compact('categories'));
    }
}
