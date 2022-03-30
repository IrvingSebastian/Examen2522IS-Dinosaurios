<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinosaurio extends Model
{
    use HasFactory;
    protected $table = 'dinosaurios';

    public function Suborden()
    {
        return $this->belongsTo(SubordenDinos::class, 'ID_Suborden');
    }
}
