<?php

use App\Http\Controllers\AnimeController;
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

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}/destroy', [ArticleController::class, 'destroy'])->name('articles.destroy');

    Route::resource('/categories', CategoryController::class);


});

Route::get('anime/genres', [AnimeController::class, 'genres'])->name('anime.genres');
Route::get('anime/genres/{genre_id}', [AnimeController::class, 'anime'])->name('anime');
Route::get('anime/{anime_id}', [AnimeController::class, 'animeShow'])->name('anime.show');

Route::get('/counter', App\Livewire\Counter::class);

Route::get('/cerca-utenti', [PageController::class, 'searchUsers'])->name('users.search');
Route::get('/cerca-articoli', [ArticleController::class, 'search'])->name('articles.search');