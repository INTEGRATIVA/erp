<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PessoaFisica extends Model
{
    use HasFactory;
    protected $fillable = ['data_nascimento', 'cpf', 'rg','rg_orgao_emissor'];

    public function pessoa():BelongsTo {

    }
}
