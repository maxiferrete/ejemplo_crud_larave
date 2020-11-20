<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
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
    return view('welcome');
});

Route::resource("productos", ProductoController::class);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
});

Route::get("saludo", function(){
    return "Hola visitante";
})->middleware(['auth']);


