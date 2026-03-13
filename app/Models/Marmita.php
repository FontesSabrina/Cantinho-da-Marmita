<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marmita extends Model
{
    use HasFactory;

    protected $table = 'marmitas';

    protected $fillable = [
        'titulo',
        'descricao',
        'preco',
        'tamanho'
    ];
}
