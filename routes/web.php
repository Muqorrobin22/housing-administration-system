<?php

use App\Http\Controllers\PemilikRumahController;
use App\Http\Controllers\PerumahanController;
use Illuminate\Support\Facades\Route;

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

// Perumahan
Route::get("/perumahan", [PerumahanController::class, "index"])->name("perumahan.home");
Route::get('/perumahan/{id}', [PerumahanController::class, 'show'])->name("perumahan.show");
Route::put('/perumahan/{id}', [PerumahanController::class, 'update'])->name("perumahan.update");

// PemilikRumah
Route::get("/pemilik_rumah", [PemilikRumahController::class, "index"])->name("pemilik_rumah.index");
Route::get("/pemilik_rumah/create", [PemilikRumahController::class, "create"])->name("pemilik_rumah.create");
Route::post("/pemilik_rumah", [PemilikRumahController::class, "store"])->name("pemilik_rumah.store");


