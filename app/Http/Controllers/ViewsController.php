<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('index');
    }

    //Función del Blog
    public function blog()
    {
        return view('blog');
    }

    //Función del Blog con Tema
    public function publicacion($tema)
    {
        return view('publicacion', ['Tema' => $tema]);
    }

    //Función del Detalle de los Dinosaurios
    public function dinos($id)
    {
        return view('dinos', ['ID' => $id]);
    }
}
