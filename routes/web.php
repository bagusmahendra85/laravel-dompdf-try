<?php

use App\Http\Controllers\Report;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/report', [Report::class, 'index'])->name('report.index');
Route::get('/report/download', [Report::class, 'downloadPdf'])->name('report.download');