<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AsignaturaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/alumno')->controller(AlumnoController::class)->group(function () {
    Route::get('','getAll');
    Route::middleware('validate.id')->get('{id}','getId');
    Route::post('','create');
    Route::middleware('validate.id')->delete('{id}','delete');
    Route::middleware('validate.id')->patch('{id}','update');
    Route::middleware('validate.id')->get('{id}/nota','getCalification');
});

Route::prefix('/login')->controller(LoginController::class)->group(function () {
    Route::post('','login');
    Route::middleware('auth:sanctum')->get('','whoAmI');
});

Route::middleware('auth:sanctum')->get('/logout',[LoginController::class, 'logout']);
Route::get('/test',[LoginController::class, 'test']);

Route::middleware('validate.id')->get('/asignatura/{id}/nota',[AsignaturaController::class, 'getDate']);