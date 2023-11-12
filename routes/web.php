<?php

use App\Http\Controllers\MonthlyPaymentController;
use App\Http\Controllers\PemilikRumahController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\RecapController;
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
    return view('home');
});

// Perumahan
Route::get("/perumahan", [PerumahanController::class, "index"])->name("perumahan.home");
Route::get('/perumahan/{id}', [PerumahanController::class, 'show'])->name("perumahan.show");
Route::put('/perumahan/{id}', [PerumahanController::class, 'update'])->name("perumahan.update");

// PemilikRumah
Route::get("/pemilik_rumah", [PemilikRumahController::class, "index"])->name("pemilik_rumah.index");
Route::get("/pemilik_rumah/create", [PemilikRumahController::class, "create"])->name("pemilik_rumah.create");
Route::get("/pemilik_rumah/edit/{id}", [PemilikRumahController::class, "edit"])->name("pemilik_rumah.edit");
Route::put("/pemilik_rumah/edit/{id}", [PemilikRumahController::class, "update"])->name("pemilik_rumah.update");
Route::post("/pemilik_rumah", [PemilikRumahController::class, "store"])->name("pemilik_rumah.store");
Route::delete("/pemilik_rumah/delete/{id}", [PemilikRumahController::class,"destroy"])->name("pemilik_rumah.destroy");

// Penduduk
Route::get("/penduduk", [PendudukController::class, "index"])->name("penduduk.index");
Route::get("/penduduk/create", [PendudukController::class,"create"])->name("penduduk.create");
Route::get("/penduduk/edit/{id}", [PendudukController::class,"edit"])->name("penduduk.edit");
Route::put("/penduduk/edit/{id}", [PendudukController::class,"update"])->name("penduduk.update");
Route::post("/penduduk", [PendudukController::class,"store"])->name("penduduk.store");
Route::delete("/penduduk/delete/{id}", [PendudukController::class,"destroy"])->name("penduduk.destroy");


// Payments
Route::get("/payments", [MonthlyPaymentController::class,"index"])->name("payments.index");
Route::get("/payments/create", [MonthlyPaymentController::class,"create"])->name("payments.create");
Route::get("/payments/edit/{id}", [MonthlyPaymentController::class,"edit"])->name("payments.edit");
Route::put("/payments/edit/{id}", [MonthlyPaymentController::class,"update"])->name("payments.update");
Route::post("/payments", [MonthlyPaymentController::class, "store"])->name("payments.store");
Route::delete("/payments/delete/{id}", [MonthlyPaymentController::class, "destroy"])->name("payments.destroy");


// recap
Route::get('/recap', [RecapController::class, 'index'])->name('recap.index');