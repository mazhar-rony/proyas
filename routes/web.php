<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('form', [ReportController::class, 'form']);
Route::get('showdata', [ReportController::class, 'showdata'])->name('showdata');
Route::get('generate-pdf', [ReportController::class, 'generatePDF'])->name('generatePDF');
Route::post('report', [ReportController::class, 'generateReport'])->name('report');