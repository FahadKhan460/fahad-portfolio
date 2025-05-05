<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', FrontEndController::class)->name('dashboard');

Route::get('/download', [FrontEndController::class, 'download'])->name('download.cv');
