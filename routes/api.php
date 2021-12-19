<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Router::get('/tvarkarastis', [tvarkarastisController::class, 'index']);
Router::post('/tvarkarastis', [tvarkarastisController::class, 'store']);
Router::put('/tvarkarastis/{id}', [tvarkarastisController::class, 'update']);
Router::delete('/tvarkarastis/{id}', [tvarkarastisController::class, 'destroy']);

Router::get('/treniruotes_programa', [treniruotesProgramosController::class, 'index']);
Router::post('/treniruotes_programa', [treniruotesProgramosController::class, 'store']);
Router::put('/treniruotes_programa/{id}', [treniruotesProgramosController::class, 'update']);
Router::delete('/treniruotes_programa/{id}', [treniruotesProgramosController::class, 'destroy']);

Router::get('/zinute', [zinutesController::class, 'index']);
Router::post('/zinute', [zinutesController::class, 'store']);
Router::put('/zinute/{id}', [zinutesController::class, 'update']);
Router::delete('/zinute/{id}', [zinutesController::class, 'destroy']);