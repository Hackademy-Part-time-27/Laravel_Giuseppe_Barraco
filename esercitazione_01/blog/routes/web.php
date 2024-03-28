<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('homepage');

Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contatti');
Route::post('/contatti/send', [ContactController::class, 'send'])->name('contatti.send');

Route::get('/chi-sono', [PageController::class, 'chi_sono'])->name('chi-sono');

Route::get('/articoli', [PageController::class, 'articles'])->name('articoli');

Route::get('/articoli/create', [ArticleController::class, 'create'])->name('articles.create');

Route::get('/articolo/{article}',[PageController::class, 'article'])->name('article');
