<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerseCsvController;
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeController::class, 'index'])->name('getCsv');
Route::get("/datacsvs", [HomeController::class, 'indexJson'])->name('getCsvJson');

Route::get("/edit", [PerseCsvController::class, 'edit'])->name('editCsv');
Route::post("/upload", [PerseCsvController::class, 'store'])->name('uploadStoreCsv');
