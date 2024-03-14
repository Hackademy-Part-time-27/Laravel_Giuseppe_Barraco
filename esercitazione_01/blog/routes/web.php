<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => "L'Antro di Torbjörn"]);
})->name('homepage');

Route::get('/contatti', function (){
    return view('pages.contacts');
})->name('contatti');

Route::get('/chi-sono', function () {
    return view('pages.chi-sono', ['title' => 'Chi Sono', 'description' => 'Sezione Work In Progress']);
})->name('chi-sono');

Route::get('/articoli', function () {
    $articles=[
        ['title' => 'Ultime Novità da Sony', 'category' => '...', 'description' => '.....'],
        ['title' => 'Migliori RPG dell\'anno', 'category' => '...', 'description' => '.....']
    ];

    return view('pages.articles', ['articles' => $articles]);
})->name('articoli');

Route::get('/articolo/{article}', function ($article) {
    $index = $article;
    $articles=[
        ['title' => 'Ultime Novità da Sony', 'category' => 'Ultima ora', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet iste ab accusantium magnam alias deserunt laboriosam culpa ratione nemo possimus, soluta eligendi provident molestiae nulla! Nihil minus ea impedit blanditiis?'],
        ['title' => 'Migliori RPG dell\'anno', 'category' => 'RPG', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet iste ab accusantium magnam alias deserunt laboriosam culpa ratione nemo possimus, soluta eligendi provident molestiae nulla! Nihil minus ea impedit blanditiis?']
    ];
    if(array_key_exists($index, $articles)){
    return view('pages.article', ['article' => $articles[$index]]);
    }else{
        abort(404);
    }
})->name('article');
