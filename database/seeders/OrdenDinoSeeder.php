<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrdenDinos;

class OrdenDinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Mexico_City');

        $Ornis = new OrdenDinos(array(
            'Nombre' => 'Ornitisquios',
            'Descripción' => 'Los Ornitisquios (Ornithischia), que en griego significan «caderas de ave», 
            son dinosaurios pertenecientes a uno de los dos órdenes de dinosaurios que vivieron desde el Triásico 
            Superior hasta el Cretácico superior, estos dinosaurios tenían la pelvis de forma similar a la de las aves.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        )); 
        $Ornis->save();

        $Sauris = new OrdenDinos(array(
            'Nombre' => 'Saurisquios',
            'Descripción' => 'Los saurisquios (Saurischia), que en griego significa «cadera de lagarto», era uno 
            de los dos órdenes de dinosaurios que vivieron desde el Triásico superior hace 228 millones de años, 
            produciéndose una enorme diversificación entre el Jurásico y el Cretácico.
            Su característica principal son las caderas similares a las de los lagartos.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ));
        $Sauris->save();
    }
}
