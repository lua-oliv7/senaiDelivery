<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory, SoftDeletes; 

    protected $fillable = [
        'nome', 
        'descricao',
        'ativo',
        'ordem_exibicao'
    ];

    protected function casts(){
        return [
            'ativo' => 'boolean',
            'ordem_exibicao' => 'integer'
        ];
    }
}
