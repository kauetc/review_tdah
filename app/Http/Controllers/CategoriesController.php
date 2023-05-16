<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function browse(Request $request){
        return view('categories');
    }
}
