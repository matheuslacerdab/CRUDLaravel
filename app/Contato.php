<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = ['primeiro_nome', 'ultimo_nome', 'email', 'cidade', 'pais', 'titulo_trabalho'];
}
