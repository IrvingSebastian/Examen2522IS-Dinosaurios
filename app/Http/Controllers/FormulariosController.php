<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelo de Opiniones
use App\Models\Opinion;

//Request de Opiniones
use App\Http\Requests\OpinionRequest;

//Modelo de Comentarios
use App\Models\Comentario;

//Request de Comentarios
use App\Http\Requests\ComentarioRequest;

date_default_timezone_set('America/Mexico_City');

class FormulariosController extends Controller
{
    //Función de Registro de Opiniones
    public function opinion(OpinionRequest $request){
        //Obtener los datos del formulario
        $Nombre = $request->get('nombre_O');
        $Email = $request->get('email_O');
        $Asunto = $request->get('asunto_O');
        $Mensaje = $request->get('mensaje_O');

        //Guardar los datos en la base de datos
        $Opinion = new Opinion(array(
            'Nombre' => $Nombre,
            'Email' => $Email,
            'Asunto' => $Asunto,
            'Mensaje' => $Mensaje,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ));
        $Opinion->save(); 

        //Consumir la API de Nationalize.IO
        $url = 'https://api.nationalize.io/?name='.$Nombre;
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', $url);
        $Countries = json_decode($response->getBody()->getContents(), true);
        $Paises = [];

        foreach ($Countries['country'] as $Country) {
            $Paises[] = [
                'ID'=> $Country['country_id'],
                'Probabilidad'=> $Country['probability'],
            ];
        }

        //Redireccionar a la vista de la Inicio
        return redirect()->route('index#footer')->with('status', 'Mensaje Enviado')->with('Paises', $Paises);
    }

    //Función de Registro de Comentarios
    public function comentario(ComentarioRequest $request){
        //Obtener los datos del formulario
        $ID_Publi = $request->get('id_C');
        $Nombre = $request->get('nombre_C');
        $Email = $request->get('email_C');
        $Comentario = $request->get('comentario_C');

        //Guardar los datos en la base de datos
        $Comentario = new Comentario(array(
            'ID_Publi' => $ID_Publi,
            'Nombre' => $Nombre,
            'Email' => $Email,
            'Comentario' => $Comentario,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ));
        $Comentario->save(); 

        //Consumir la API de Nationalize.IO
        $url = 'https://api.nationalize.io/?name='.$Nombre;
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', $url);
        $Countries = json_decode($response->getBody()->getContents(), true);
        $Paises = [];

        foreach ($Countries['country'] as $Country) {
            $Paises[] = [
                'ID'=> $Country['country_id'],
                'Probabilidad'=> $Country['probability'],
            ];
        }

        //Redireccionar a la vista de la Publicación
        return redirect()->route('publicacion', [$ID_Publi])->with('status', 'Mensaje Enviado')->with('Paises', $Paises);
    }
}
