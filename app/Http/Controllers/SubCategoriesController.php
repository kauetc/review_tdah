<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    public function browse(Request $request){
        return view('subcategories');
    }
}
