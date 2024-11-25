<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/Sobre', 'sobre');
    Route::get('/Servicos', 'servicos');
    Route::get('/Assistencia', 'assistencia');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
