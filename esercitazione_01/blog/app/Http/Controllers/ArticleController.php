<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function create(){
        Article::create([
            ['title' => 'Ultime Novità da Sony', 'category' => '...', 'description' => '.....', 'visible' => true],
        ]);
    }
}
