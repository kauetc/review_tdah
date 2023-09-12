<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Establishments extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'categorias';

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_categoria',
        'nome_estabelecimento',
        'pais',
        'estado',
        'cidade',
        'created_at',
        'updated_at',
        'user_alt'
    ];
}
