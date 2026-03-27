<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\ProductoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

/*Route::get('/suma', function(){   
 return view('suma'); });  */

Route::get('/calculadora', [CalculadoraController::class , 'index']);

//ruta para cada operacion:
Route::post('/calculadora/sumar', [CalculadoraController::class , 'sumar']);

Route::post('/calculadora/restar', [CalculadoraController::class , 'restar']);

Route::post('/calculadora/multiplicar', [CalculadoraController::class , 'multiplicar']);

Route::post('/calculadora/dividir', [CalculadoraController::class , 'dividir']);

Route::get('/productos', [ProductoController::class , 'index']);