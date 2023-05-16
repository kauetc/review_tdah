<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function add(Request $request, $validatedData){
        $user = new User();
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
        $saved = $user->save();

        if(!$saved){
            return false;
        } else {
            return true;
        }
    }

    public function profile(Request $request){
        return view('profile');
    }
}
