<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherscheduleController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teachers', [TeacherController::class , 'index']);
Route::post('/teachers', [TeacherController::class , 'store']);
Route::put('/teachers/{id}', [TeacherController::class , 'update']);
Route::delete('/teachers/{id}', [TeacherController::class , 'destroy']);
Route::get('/teachers/{id}', [TeacherController::class , 'show']);

Route::get('/teacherschedule/{id}', [TeacherscheduleController::class , 'show']);
Route::put('/teacherschedule/{id}', [TeacherscheduleController::class , 'update']);
