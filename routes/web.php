<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Http\Request;
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

Route::get('contactos', function () {
    return view('contactos');
})->name('contacto');

Route::get('destrezas', function () {
    return view('destrezas');
})->name('destreza');


Route::get('nosotros/{name?}', [ContactoController::class, 'dataContact'])->name('nosotros');

Route::get('home/{name?}',function()
{
    // ES VÁLIDO PERO SE DEBE RECORDAR QUE PARA TRAER DATOS O PROCESAR
    // PETICIONES DE LA BDD SE UTILIZA UN CONTROLADOR
    $backe =
    [
        "Java"=>'80%',
        "PHP"=>'60%',
        "C++"=>'70%',
        
    ];
        
    $fron =
    [
        "Html"=>'90%',
        "Css"=>'60%',
        "JavaScrip"=>'50%',
        
    ];

    $nombre = "andy";
    return view('home',compact('backe','fron','nombre'));
})->name('home');



