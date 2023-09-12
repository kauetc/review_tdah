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
}
