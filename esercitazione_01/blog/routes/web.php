<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('homepage');

Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contatti');
Route::post('/contatti/send', [ContactController::class, 'send'])->name('contatti.send');

Route::get('/chi-sono', [PageController::class, 'chi_sono'])->name('chi-sono');

Route::get('/articoli', [PageController::class, 'articles'])->name('articoli');

Route::get('/articolo/{article}',[PageController::class, 'article'])->name('article');

// Route::get('/account', [AccountController::class, 'index'])->name('account.index');

Route::prefix('account')->middleware('auth')->group(function () {

    Route::get('/', [AccountController::class, 'index'])->name('account.index');

    Route::resource('articles', ArticleController::class);

    /*Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');*/

    Route::resource('/categories', CategoryController::class);

});