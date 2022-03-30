<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//Modelo de Dinosaurio
use App\Models\Dinosaurio;

//Modelo de Publicaciones
use App\Models\Publicacion;

//Modelo de Comentarios
use App\Models\Comentario;

//Modelo de Opiniones
use App\Models\Opinion;

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

        //Publicaciones Aleatorias Sin Repetir
        $PubR = range(1, Publicacion::count());
        shuffle($PubR);

        //Obtener 9 Dinosaurios
        for ($i=1; $i < 10; $i++) { 
            $Dinos[$i] = Dinosaurio::find($DinoR[$i]);
        }

        //Obtener 3 Publicaciones
        for ($i=1; $i < 4; $i++) { 
            $Publis[$i] = Publicacion::find($PubR[$i]);
            $ID[$i] = $Publis[$i]['ID'];

            //Obtener Comentarios
            $Comentarios[$i] = Comentario::select("*")
            ->where("ID_Publi", "=", $ID[$i])
            ->get();

            //Contar Comentarios    
            $NumeroC = $Comentarios[$i]->count();
        }

        //Obtener las Opiniones
        $Opiniones = Opinion::select("*")
            ->where("Asunto", "=", "Opinión")
            ->get();

        //Retornar la vista y enviarle los datos
        return view('index', ['Dinos' => $Dinos, 'Publis' => $Publis, 'NumeroC' => $NumeroC, 'Opiniones' => $Opiniones]);
    }

    //Función del Blog
    public function blog()
    {
        //Obtener Dinosaurios Aleatorios Sin Repetir
        $DinoR = range(1, Dinosaurio::count());
        shuffle($DinoR);

        //Obtener Publicación
        $Publis = Publicacion::select("*")
            ->orderBy('ID', 'desc')
            ->get();

        //Obtener los Comentarios
        foreach ($Publis as $Publi) {
            //Guardar ID de Publicacion
            $ID = $Publi['ID'];

            //Obtener Comentarios
            $Comentarios = Comentario::select("*")
            ->where("ID_Publi", "=", $ID)
            ->get();

            //Contar Comentarios
            $NumeroC = $Comentarios->count();
        }

        //Obtener 3 Dinosaurios
        for ($i=1; $i < 4; $i++) { 
            $Dinos[$i] = Dinosaurio::find($DinoR[$i]);
        }

        //Retornar la vista y enviarle los datos
        return view('blog', ['Publis' => $Publis, 'NumeroC' => $NumeroC, 'Dinos' => $Dinos]);
    }

    //Función del Blog con Tema
    public function publicacion($ID)
    {
        //Obtener Dinosaurios Aleatorios Sin Repetir
        $DinoR = range(1, Dinosaurio::count());
        shuffle($DinoR);

        //Publicaciones Aleatorias Sin Repetir
        $PubR = range(1, Publicacion::count());
        shuffle($PubR);

        //Obtener Publicación con el ID
        $Publi = Publicacion::find($ID);

        //Obtener los Comentarios con el ID
        $Comentarios = Comentario::select("*")
            ->where("ID_Publi", "=", $ID)
            ->get();

        //Obtener 3 Dinosaurios
        for ($i=1; $i < 4; $i++) { 
            $Dinos[$i] = Dinosaurio::find($DinoR[$i]);
        }

        //Obtener 2 Publicaciones
        for ($i=1; $i < 3; $i++) { 
            $PublisAlternas[$i] = Publicacion::find($PubR[$i]);
            $IDPubli[$i] = $PublisAlternas[$i]['ID'];

            //Obtener Comentarios
            $ComentariosAlternos[$i] = Comentario::select("*")
            ->where("ID_Publi", "=", $IDPubli[$i])
            ->get();

            //Contar Comentarios    
            $NumeroC = $ComentariosAlternos[$i]->count();
        }

        //Retornar la vista y enviarle los datos
        return view('publicacion', ['ID' => $ID,'Publi' => $Publi, 'Dinos' => $Dinos, 'Comentarios' => $Comentarios, 'NumeroC' => $NumeroC, 'PublisAlternas' => $PublisAlternas]);
    }

    //Función del Detalle de los Dinosaurios
    public function dinos($ID)
    {
        return view('dinos', ['ID' => $ID]);
    }
}
