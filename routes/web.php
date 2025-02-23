<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('form', [ReportController::class, 'form']);
Route::post('report', [ReportController::class, 'generateReport'])->name('report');