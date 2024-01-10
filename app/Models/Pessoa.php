<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email','telefone'];

    public function pessoaFisica(){
        return $this->hasOne(PessoaFisica::class);
    }
    public function pessoaJuridica(){
        return $this->hasOne(PessoaJuridica::class);
    }

}
