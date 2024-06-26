<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index() {
        return view('articles.index', ['articles' => Article::all()]);
    }

    public function create() {
        return view('articles.create', ['categories' => Category::all()]);
    }

    public function store(StoreArticleRequest $request) {
        $article = Article::create($request->all());

        $article->categories()->attach($request->categories);

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $extension = $request->file('image')->extension();

            $fileName = 'image.' . $extension;

            $fileName = $request->file('image')->getClientOriginalName();

            $fileName = uniqid('image_') . '.' . $extension;

            $article->image = $request->file('image')->storeAs('public/images/' . $article->id, $fileName);

            $article->save();

        }

        return redirect()->route('articles.index')->with(['success' => 'Articolo creato correttamente!']);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article, 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        $article->categories()->detach();
        $article->categories()->attach($request->categories);

        return redirect()->back()->with(['success' => 'Articolo modificato correttamente.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->categories()->detach();

        $article->delete();

        return redirect()->route('articles.index')->with(['success' => 'Articolo cancellato correttamente.']);
    }

    public function search()
    {
        return view('articles.search');
    }
}

