<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('home');



Route::view('/quehacemos', 'quehacemos')->name('quehacemos');

/*
Route::get('/hola/{nombre?}', function ($nombre = "Juan") {
    return "hola  $nombre conocenos: <a href='".route("nosotros")."'>nosotros</a>";
});

Route::get('/sobre-nosotros-en-la-web', function () {
    return "<h1>Toda la información</h1>";

})->name("nosotros");

Route::get('home/{nombre?}/{apellido?}', function ($nombre = "Reynaldo",$apellido = "Cerón" ) { //indicando nombre ruta forma de acceso
    $posts = ["posts1","posts2","posts3","posts4"];
    $posts2 = null;
    //return view("home")->with("nombre", $nombre)->with("apellido", $apellido);   nombre vista homa  y definir la variable nombre a nivel global
    return view("home",['nombre' => $nombre, 'apellido' => "Rodrgíuez", 'posts'=> $posts, 'posts2'=> $posts2]);
})->name("home");   //indicamos un nombre a la ruta*/


Route::resource('dashboard/post', 'dashboard\PostController');

Route::get('inicio', function () {
    return view("index");
})->name("index");

Route::get('credeciales', function () {
    return view("credeciales");
})->name("credeciales");
