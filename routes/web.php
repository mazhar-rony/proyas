<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [ReportController::class, 'form']);
Route::get('/showdata', [ReportController::class, 'showdata'])->name('showdata');
Route::get('/generate-pdf', [ReportController::class, 'generatePDF'])->name('generatePDF');
// Route::post('/report', [ReportController::class, 'generateReport'])->name('report');
Route::get('/report', [ReportController::class, 'generateReport'])->name('report');
Route::get('/print', [ReportController::class, 'printDocument'])->name('print.document');
Route::get('/export-excel', [ReportController::class, 'exportExcel'])->name('export.excel');
Route::get('/view', [ReportController::class, 'view'])->name('view');
Route::resource('programs', ProgramController::class);