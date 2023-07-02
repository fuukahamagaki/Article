<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles/index', compact('articles'));
    }

    public function create(Request $request)
    {
        $article = new Article();
        $data = ['article' => $article];
        return view('articles.create', $data);
    }

    public function store(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return redirect(route('articles.index'));
    }

    public function show(Article $article)
    {
        $data = ['article' => $article];
        return view('articles.show', $data);
    }

    public function edit(Article $article)
    {
        $data = ['article' => $article];
        return view('articles.edit', $data);
    }

    public function update(Request $request, Article $article)
    {
        $this->validate($request,[
            'title' => 'required|max:255',
            'body' => 'required'
        ]);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        return redirect(route('articles.show', $article));
    }
}