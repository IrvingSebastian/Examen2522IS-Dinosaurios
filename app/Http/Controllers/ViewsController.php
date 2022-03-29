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
}
