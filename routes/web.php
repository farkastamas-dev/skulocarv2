<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('welcome');
Route::get('/szerviz', [PagesController::class, 'szerviz'])->name('szerviz');
Route::get('/szakszerviz', [PagesController::class, 'szakszerviz'])->name('szakszerviz');
Route::get('/hanggenerator', [PagesController::class, 'hanggenerator'])->name('hanggenerator');
Route::get('/referenciaink', [PagesController::class, 'referenciaink'])->name('referenciaink');
Route::get('/autokozmetika', [PagesController::class, 'autokozmetika'])->name('autokozmetika');
Route::get('/arajanlat', [PagesController::class, 'arajanlat'])->name('arajanlat');
Route::get('/kapcsolat', [PagesController::class, 'kapcsolat'])->name('kapcsolat');
