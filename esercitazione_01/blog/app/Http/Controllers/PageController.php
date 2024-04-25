<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
   
    public function welcome() {
        $title = config('app.name');
        $articles = Article::orderBy('created_at', 'DESC')->take(10)->get();
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
        $articles = Article::where('visible', true)->get();
        return view('pages.articles', ['articles' => $articles]);
    }

    public  function article($article) {
        $article = $this->articles[$article];

        if(! $article['visible']) {
            abort(404);
        }

        return view('pages.article', ['article' => $article]);
    }

    public function searchUsers()
    {
        return view('search-users');
    }
}
