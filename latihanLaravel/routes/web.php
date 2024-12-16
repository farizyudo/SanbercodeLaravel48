<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| endpoint
*/

Route::get('/', [HomeController::class, 'utama']);
Route::get('/daftar', [AuthController::class, 'daftar']);

Route::post('/home', [AuthController::class, 'home']);

Route::get('/data-table', function(){
    return view('page.data-table');
});

Route::get('/table', function(){
    return view('page.table');
});

// CRUD Categories
// C => Create
// Router yang mengarah kehalaman tambah data
Route::get('/cast/create', [CastController::class, 'create']);
// Menyimpan data inputan ke database & validasi
Route::post('/cast', [CastController::class, 'inputCast']);

// Read
//
Route::get('/cast', [CastController::class, 'index']);
// Route detail data
Route::get('/cast/{id}', [CastController::class, 'show']);

// Update
Route::get('/cast/{id}/edit', [CastController::class, 'edit']);
// Update berdasarkan id
Route::put('/cast/{id}', [CastController::class, 'update']);

// Delete
Route::Delete('/cast/{id}', [CastController::class, 'destroy']);