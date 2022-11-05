<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('/', [StudentController::class, 'index']);
Route::get('/Student', [StudentController::class, 'create']);
Route::post('/Student', [StudentController::class, 'store']);
Route::get('/Student/{id}', [StudentController::class, 'show']);
Route::get('/Student/{id}/edit', [StudentController::class, 'edit']);
Route::put('/Student/{id}', [StudentController::class, 'update']);
Route::delete('/{id}', [StudentController::class, 'destroy']);