<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\tvarkarastis;
use App\Models\treniruotes_programa;
use App\Models\zinute;
use App\Http\Controllers\tvarkarastisController;
use App\Http\Controllers\treniruotesProgramaController;
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
Route::delete('/tvarkarastis/{id}', [tvarkarastisController::class, 'destroy']);

Route::get('/treniruotes_programa', [treniruotesProgramosController::class, 'index']);
Route::post('/treniruotes_programa', [treniruotesProgramosController::class, 'store']);
Route::put('/treniruotes_programa/{id}', [treniruotesProgramosController::class, 'update']);
Route::delete('/treniruotes_programa/{id}', [treniruotesProgramosController::class, 'destroy']);

Route::get('/zinute', [zinutesController::class, 'index']);
Route::post('/zinute', [zinutesController::class, 'store']);
Route::put('/zinute/{id}', [zinutesController::class, 'update']);
Route::delete('/zinute/{id}', [zinutesController::class, 'destroy']);