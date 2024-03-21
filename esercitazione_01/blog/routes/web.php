<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('homepage');

Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contatti');
Route::post('/contatti/send', [ContactController::class, 'send'])->name('contatti.send');

Route::get('/chi-sono', [PageController::class, 'chi_sono'])->name('chi-sono');

Route::get('/articoli', [PageController::class, 'articles'])->name('articoli');

Route::get('/articolo/{article}',[PageController::class, 'article'])->name('article');
