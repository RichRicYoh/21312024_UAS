<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [UasController::class,'index']);
 Route::get('/mahasiswa/create', [UasController::class,'create']);
 Route::post('/mahasiswa', [UasController::class,'store']);

 Route::get('/mahasiswa/{id}/edit', [UasController::class,'edit']);
 Route::put('/mahasiswa/{id}', [UasController::class,'update']);

 Route::delete('/mahasiswa/{id}', [UasController::class,'destroy']);
