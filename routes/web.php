<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontEndController::class, 'index'])->name('dashboard');

Route::get('/download', [DocumentController::class, 'download'])->name('download.resume');
