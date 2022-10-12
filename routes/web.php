<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\MyvaccineController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetController;

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
// Vista Principal
Route::get('/', function () {
    return view('welcome');
});

// Lista de Modulos
Route::get('principal', [PetController::class, 'principal']);


// Usuarios
Route::resource('usuario', UserController::class);
Route::post('login',[UserController::class,'login'])->name('login');
Route::get('formuser', [UserController::class, 'create']);

//Adopcion
Route::resource('adoption', AdoptionController::class);
Route::get('formadop', [AdoptionController::class, 'create']);


//Peludos
Route::resource('pet', PetController::class);
Route::get('formpet', [PetController::class, 'create']);


//Vacunas
Route::get('formvac', [VaccineController::class, 'create']);
Route::resource('vaccine', VaccineController::class);


//Mis Vacunas
Route::get('formmyvac', [MyvaccineController::class, 'create']);
Route::resource('myvaccine', MyvaccineController::class);


?>