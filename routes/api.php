<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\tvarkarastis;
use App\Models\treniruotes_programa;
use App\Models\zinute;
use App\Http\Controllers\tvarkarastisController;
use App\Http\Controllers\treniruotesProgramosController;
use App\Http\Controllers\darbuotojasController;
use App\Http\Controllers\zinutesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/tvarkarastis', [tvarkarastisController::class, 'index']);
Route::post('/tvarkarastis', [tvarkarastisController::class, 'store']);
Route::put('/tvarkarastis/{id}', [tvarkarastisController::class, 'update']);
Route::delete('/tvarkarastis/{delete}', [tvarkarastisController::class, 'destroy']);

Route::get('/treniruotes_programa', [treniruotesProgramosController::class, 'index']);
Route::post('/treniruotes_programa', [treniruotesProgramosController::class, 'store']);
Route::put('/treniruotes_programa/{id}', [treniruotesProgramosController::class, 'update']);
Route::delete('/treniruotes_programa/{delete}', [treniruotesProgramosController::class, 'destroy']);

Route::get('/darbuotojas', [darbuotojasController::class, 'index']);
Route::post('/darbuotojas', [darbuotojasController::class, 'store']);
Route::put('/darbuotojas/{id}', [darbuotojasController::class, 'update']);
Route::delete('/darbuotojas/{delete}', [darbuotojasController::class, 'destroy']);

Route::get('/zinute', [zinutesController::class, 'index']);
Route::post('/zinute', [zinutesController::class, 'store']);
Route::put('/zinute/{id}', [zinutesController::class, 'update']);
Route::delete('/zinute/{delete}', [zinutesController::class, 'destroy']);

Route::get('prisijungti',[autentikavimoController::class, 'index'])->vardas('prisijungti');
Route::post('post-login', [autentikavimoController::class, 'postLogin'])->vardas('login.post');
Route::get('registruotis', [autentikavimoController::class, 'registruotis'])->vardas('registruotis');
Route::post('post-registration', [autentikavimoController::class, 'postRegistration'])->vardas('register.post'); 
Route::get('atsijungti', [autentikavimoController::class, 'atsijungti'])->vardas('atsijungti');