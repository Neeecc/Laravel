<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/error', function () {
    return view('error');
});

route::resource('fakultas', FakultasController::class);
route::resource('periode', PeriodeController::class);
Route::get('/prodi',[ProdiController::class, 'index']);