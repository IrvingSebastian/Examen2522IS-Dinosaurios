<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDinos extends Model
{
    use HasFactory;
    protected $table = 'orden_dinos';

    public function Subordenes()
    {
        return $this->hasMany(SubordenDinos::class, 'ID');
    }
}
