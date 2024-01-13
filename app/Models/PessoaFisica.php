<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PessoaFisica extends Model
{
    use HasFactory;
    protected $fillable = ['cpf', 'rg','rg_orgao_emissor','data_nascimento'];
    protected $table = "pessoa_fisica";

    public function pessoa():BelongsTo {
        return $this->belongsTo(Pessoa::class);

    }
}
