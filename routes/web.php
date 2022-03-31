<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\FormulariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rutas Iniciales
Route::get('/', [ViewsController::class, 'raiz'])->name('raiz');
Route::get('/index', [ViewsController::class, 'index'])->name('index');

//Rutas del Blog
Route::get('/blog', [ViewsController::class, 'blog'])->name('blog');
Route::get('/publicacion/{id}', [ViewsController::class, 'publicacion'])->name('publicacion');

//Rutas de los Dinosaurios
Route::get('/dinos/{id}', [ViewsController::class, 'dinos'])->name('dinos');

//Rutas de los Formularios
Route::post('/opinion', [FormulariosController::class, 'opinion'])->name('opinion');
Route::post('/comentario', [FormulariosController::class, 'comentario'])->name('comentario');

