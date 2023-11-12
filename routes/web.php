<?php

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

Route::get("/perumahan", [PerumahanController::class, "index"])->name("perumahan.home");

Route::get('/perumahan/{id}', [PerumahanController::class, 'show'])->name("perumahan.show");

// Update Route
Route::put('/perumahan/{id}', [PerumahanController::class, 'update'])->name("perumahan.update");
