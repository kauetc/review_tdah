<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials['username'] = $request->get('email');
        $credentials['password'] = $request->get('password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(Request $request){
        // dd($request->all());
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'username' => 'required|string|max:255|email|unique:usuarios',
            'password' => 'required|string|min:8',
            'datanascimento' => 'required',
            'cpf' => 'required|min:14'
        ]);

        $addUser = User::add($request, $validatedData);

        if($addUser){
            return redirect()->route('register')->with('success', 'Usuário registrado com sucesso');
        } else {
            return redirect()->route('register')->with('error', 'Falha ao adicionar usuário. Contate o Administrador');
        }
    }
}
