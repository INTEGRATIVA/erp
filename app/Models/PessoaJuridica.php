<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaJuridica extends Model
{
    use HasFactory;
    protected $fillable =['data_abertura','cnpj','insc_municipal','insc_estadual'];
    protected $table="pessoa_juridica";
}
