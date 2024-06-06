<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FornecedorFisico extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'rua',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'complemento',
        'banco',
        'agencia',
        'conta',
        'tipo_conta',
        'pix',
        'telefone_fixo',
        'celular',
        'email',
    ];
}
