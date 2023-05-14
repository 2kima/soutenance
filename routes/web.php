<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\GestionnaireController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::controller(EtudiantController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/etudiant/create', 'create');
    Route::get('/etudiant/{id}', 'show');
    Route::get('/etudiant/{id}/edit', 'edit');


    Route::post('/etudiant', 'store');
    Route::patch('/etudiant/{id}', 'update');
    Route::delete('/etudiant/{id}', 'destroy');

});


Route::controller(GestionnaireController::class)->group(function () {

    Route::post('/', 'index');
    Route::post('/gestionnaire/create', 'create');
    Route::post('/gestionnaire/{id}', 'show');
    Route::post('/gestionnaire/{id}/edit', 'edit');


    Route::post('/gestionnaire', 'store');
    Route::patch('/gestionnaire/{id}', 'update');
    Route::delete('/gestionnaire/{id}', 'destroy');

});
