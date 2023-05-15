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

        $user = new User;
        $user->nome = $validatedData['nome'];
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        $user->data_nasc = $validatedData['datanascimento'];
        $user->cpf = $validatedData['cpf'];
        $user->cep = $request->cep;
        $user->rua = $request->logradouro;
        $user->complemento = $request->complemento;
        $user->numero = $request->numero;
        $user->bairro = $request->bairro;
        $user->cidade = $request->cidade;
        $user->estado = $request->uf;
        $user->pais = $request->pais;
        $user->save();

        return redirect()->route('register')->with('success', 'Usuário registrado com sucesso');
    }
}
