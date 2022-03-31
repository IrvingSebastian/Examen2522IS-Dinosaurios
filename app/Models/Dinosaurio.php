<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinosaurio extends Model
{
    use HasFactory;
    protected $table = 'dinosaurios';

    //Relación muchos a uno con la tabla de SubordenDinos
    public function Suborden()
    {
        return $this->belongsTo(SubordenDinos::class, 'ID_Suborden');
    }
}
