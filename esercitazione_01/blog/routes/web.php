<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', function (){
    return view('contacts');
});

Route::get('/chi-sono', function () {
    return view('chi-sono', ['title' => 'Chi Sono', 'description' => 'Sezione Work In Progress']);
});
