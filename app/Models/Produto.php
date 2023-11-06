<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //fillable: informa a nossa model que esses campos que estão dentro do array serão preenchidos ou editados por nosso código em algum momento
    //SoftDeletes, fillable, 
    protected $fillable = ['nome', 'custo', 'preco'];
}
