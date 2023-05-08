<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request){
        dd($request);
    }

    public function register(Request $request){
        // dd($request->all());
        $validateData = $request->validate([
            'nome' => 'required|string|max:255',
            'username' => 'required|string|max:255|email|unique:usuarios',
            'password' => 'required|string|min:8',
            'cpf' => 'required',
            'datanascimento' => 'required'
        ]);
        return view('register');
    }
}
