<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'comentarios';

    //Relación mucho a uno con la tabla de Publicaciones
    public function Publica()
    {
        return $this->belongsTo(Publicacion::class, 'ID_Publi');
    }

    //Hacer editables los campos de la tabla
    protected $fillable = ['ID_Publi', 'Nombre', 'Email', 'Comentario'];
}
