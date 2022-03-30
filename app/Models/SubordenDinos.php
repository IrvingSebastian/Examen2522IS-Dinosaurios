<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubordenDinos extends Model
{
    use HasFactory;
    protected $table = 'suborden_dinos';

    public function Dinosaurios()
    {
        return $this->hasMany(Dinosaurio::class, 'ID');
    }

    public function Orden()
    {
        return $this->belongsTo(OrdenDinos::class, 'ID_Orden');
    }
}
