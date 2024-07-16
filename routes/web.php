<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index']);

Route::resource('/informasi', InformasiController::class);

Route::resource('/pendaftaran', PendaftaranController::class);