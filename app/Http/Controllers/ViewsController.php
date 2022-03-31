<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelo de Dinosaurio
use App\Models\Dinosaurio;

//Modelo de Publicaciones
use App\Models\Publicacion;

//Modelo de Opiniones
use App\Models\Opinion;

//Modelo de Comentarios
use App\Models\Comentario;

class ViewsController extends Controller
{
    //Función de la vista raiz
    public function raiz()
    {
        return redirect()->route('index');
    }

    //Función del Index
    public function index()
    {
        //Dinosaurios Aleatorios Sin Repetir
        $DinoR = range(1, Dinosaurio::count());
        shuffle($DinoR);

        //Obtener 9 Dinosaurios
        for ($i=1; $i < 10; $i++) { 
            $Dinos[$i] = Dinosaurio::find($DinoR[$i]);
        }

        //Publicaciones Aleatorias Sin Repetir
        $PubR = range(1, Publicacion::count());
        shuffle($PubR);

        //Obtener 3 Publicaciones
        for ($i=1; $i < 4; $i++) { 
            $Publis[$i] = Publicacion::find($PubR[$i]);
            $ID[$i] = $Publis[$i]['ID'];
        }

        //Obtener las Opiniones
        $Opiniones = Opinion::select("*")
            ->where("Asunto", "=", "Opinión")
            ->get();

        //Retornar la vista y enviarle los datos
        return view('index', ['Dinos' => $Dinos, 'Publis' => $Publis, 'Opiniones' => $Opiniones]);
    }

    //Función del Blog
    public function blog()
    {
        //Obtener Dinosaurios Aleatorios Sin Repetir
        $DinoR = range(1, Dinosaurio::count());
        shuffle($DinoR);

        //Obtener 3 Dinosaurios
        for ($i=1; $i < 4; $i++) { 
            $Dinos[$i] = Dinosaurio::find($DinoR[$i]);
        }

        //Obtener Publicación
        $Publis = Publicacion::select("*")
            ->orderBy('ID', 'desc')
            ->get();

        //Retornar la vista y enviarle los datos
        return view('blog', ['Publis' => $Publis, 'Dinos' => $Dinos]);
    }

    //Función del Blog con Tema
    public function publicacion($ID)
    {
        //Obtener Dinosaurios Aleatorios Sin Repetir
        $DinoR = range(1, Dinosaurio::count());
        shuffle($DinoR);

        //Obtener 3 Dinosaurios
        for ($i=1; $i < 4; $i++) { 
            $Dinos[$i] = Dinosaurio::find($DinoR[$i]);
        }

        //Publicaciones Aleatorias Sin Repetir
        $PubR = range(1, Publicacion::count());
        shuffle($PubR);

        //Obtener 2 Publicaciones
        for ($i=1; $i < 3; $i++) { 
            $PublisAlternas[$i] = Publicacion::find($PubR[$i]);
            $IDPubli[$i] = $PublisAlternas[$i]['ID'];
        }

        //Obtener Publicación con el ID
        $Publi = Publicacion::find($ID);

        $Comentarios = Comentario::select("*")
            ->where("ID_Publi", "=", $ID)
            ->get();

        //Retornar la vista y enviarle los datos
        return view('publicacion', ['ID' => $ID,'Publi' => $Publi, 'Dinos' => $Dinos, 'PublisAlternas' => $PublisAlternas, 'Comentarios' => $Comentarios]);
    }

    //Función del Detalle de los Dinosaurios
    public function dinos($ID)
    {
        //Obtener Dinosaurios Aleatorios Sin Repetir
        $DinoR = range(1, Dinosaurio::count());
        shuffle($DinoR);

        //Obtener 3 Dinosaurios
        for ($i=1; $i < 4; $i++) { 
            $Dinos[$i] = Dinosaurio::find($DinoR[$i]);
        }

        //Obtener el Dinosaurio con el ID
        $Dino = Dinosaurio::find($ID);

        return view('dinos', ['ID' => $ID, 'Dino' => $Dino, 'Dinos' => $Dinos]);
    }
}
