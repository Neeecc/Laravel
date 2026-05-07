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

Route::get('/main', function () {
    return view('main');
});

route::resource('fakultas', FakultasController::class);
route::resource('periode', PeriodeController::class);
Route::resource('/prodi',ProdiController::class);