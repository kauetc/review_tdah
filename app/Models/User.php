<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as Authenticatable;
use Illuminate\Database\QueryException;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Model implements Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'username',
        'password',
        'data_nasc',
        'cpf',
        'cep',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'pais',
        'foto_perfil',
        'created_at',
        'updated_at',
        'user_alt'
    ];
    protected $hidden = [
        'password'
    ];

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public static function add($request, $validatedData)
    {
        try 
        {
            // Create a new User instance
            $user = new self;

            // Set the attributes from the validated data
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

            // Save the user
            $user->save();

            return true;
        } 
        catch(QueryException $exception){
            // Handle the duplicate key violation
            // You can redirect back with an error message
            // or handle it in a way that suits your application

            // Example: Redirect back with an error message
            return false;
        }
        
        
    }
}
