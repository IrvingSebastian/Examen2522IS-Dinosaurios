<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    protected $table = 'publicaciones';

    //Relación uno a muchos con la tabla de Comentarios
    public function Comentarios()
    {
        return $this->hasMany(Comentario::class, 'ID');
    }
}
