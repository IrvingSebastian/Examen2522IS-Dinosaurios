<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;
    protected $table = 'opiniones';

    //Hacer editables los campos de la tabla
    protected $fillable = ['Nombre', 'Email', 'Asunto', 'Mensaje'];
}
