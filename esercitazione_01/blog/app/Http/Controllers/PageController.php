<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public $articles;

    public function __construct()
    {
        $this->articles = [
            ['title' => 'Ultime Novità da Sony', 'category' => '...', 'description' => '.....', 'visible' => true],
            ['title' => 'Migliori RPG dell\'anno', 'category' => '...', 'description' => '.....', 'visible' => true]
        ];
    }

    public function welcome() {
        $title = config('app.name');
        return view('welcome', compact('title'));
    }

    public function contacts() {
        return view('pages.contacts');
    }

    public function chi_sono() {
        return view('pages.chi-sono', ['title' => 'Chi Sono', 'description' => 'Sezione Work In Progress']);
    }

    public function articles() {
        //dd($this->articles);
        return view('pages.articles', ['articles' => $this->articles]);
    }

    public  function article($article) {
        $article = $this->articles[$article];

        if(! $article['visible']) {
            // se l'articolo non è visibile, verrà eseguito il codice seguente
            abort(404);
        }

        return view('pages.article', ['article' => $article]);
    }
}
