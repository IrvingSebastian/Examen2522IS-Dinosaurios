<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubordenDinos extends Model
{
    use HasFactory;
    protected $table = 'suborden_dinos';

    //Relación uno a muchos con la tabla de Dinosaurio
    public function Dinosaurios()
    {
        return $this->hasMany(Dinosaurio::class, 'ID');
    }

    //Relación muchos a uno con la tabla de OrdenDinos
    public function Orden()
    {
        return $this->belongsTo(OrdenDinos::class, 'ID_Orden');
    }
}
