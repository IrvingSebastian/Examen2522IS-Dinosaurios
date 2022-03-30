<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubordenDinos;

class SubordenDinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('America/Mexico_City');

        $ID_Orden = [2, 2, 1, 1, 1];

        $Nombres=['Terópodos', 'Sauropodomorfos', 'Tireóforos', 'Marginocéfalos', 'Ornítopodos'];

        $Descripciones=[
            // Terópodos
            'Los terópodos son un suborden de dinosaurios saurisquios caracterizado por sus huesos 
            huecos y sus extremidades con tres dedos funcionales.',

            // Sauropodomorfos
            'LLos sauropodomorfos es un clado de dinosaurios herbívoros de cuello largo, 
            pertenecientes al orden Saurischia que incluye a los saurópodos y sus antepasados. 
            Los saurópodos generalmente alcanzaron grandes dimensiones, tenían cuellos y colas 
            largas, eran cuadrúpedos y fueron los animales más grandes que hayan caminado sobre 
            la Tierra.',

            // Tireóforos
            'Los tireóforos —Thyreophora— son un suborden de dinosaurios ornitisquios. Se han 
            encontrado restos fósiles en todos los continentes, en pisos que van desde el 
            Hettangiense, en el Jurásico Inferior, al Maastrichtiense, en el Cretácico superior.',

            // Marginicéfalos
            'Marginocephalia es un clado de dinosaurios ornitisquios que vivieron desde el Jurásico 
            superior hasta el Cretácico superior, en lo que hoy es Norteamérica y Asia, significan 
            reptiles con bordes.',

            // Ornítopodos
            'Los ornitopodos ( "pie de ave", tambien llamados "pico de pato" ) son una familia de 
            dinosaurios hervivoros que vivieron en Norteamerica, Sudamerica, Asia, Africa, Europa, 
            Oceania y la Antartida desde el periodo Jurasico.'];

        for ($i=0; $i<5; $i++) { 
            $Suborden = new SubordenDinos(array(
                'ID_Orden' => $ID_Orden[$i],
                'Nombre' => $Nombres[$i],
                'Descripción' => $Descripciones[$i],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )); 
        }
        
    }
}
