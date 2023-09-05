<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//hacemos cambio para que funcione bien con las migraciones
class Nivel extends Model
{
    //use HasFactory;
    protected $table = 'niveles';
}
