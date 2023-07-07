<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tb_crud extends Model
{
    protected $table = 'tb_crud';
    protected $fillable = [
        'id',
        'nome',
        'sobrenome',
        'email',
        'data_nascimento',
        'celular',
        'cep',
        'endereco',
        'numero',
        'cidade',
        'bairro',
        'uf'
    ];
    public $timestamps = false;
}

