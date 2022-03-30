<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'comentarios';

    public function Publicacion()
    {
        return $this->belongsTo(Publicacion::class, 'ID_Publi');
    }
}
