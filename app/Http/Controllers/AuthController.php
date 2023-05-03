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
        $request->username = 'kaue.trevisan';
        if (User::where('username', '=', $request->username)->exists()){
            return response()->json(['success' => false, 'message' => 'Usuário já cadastrado']);
        }
        if (User::where('cpf', '=', $request->cpf)->exists()){
            return response()->json(['success' => false, 'message' => 'CPF ja cadastrado no sistema']);
        }
        dd('nao existe');
        return view('register');
    }
}
