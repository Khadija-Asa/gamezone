<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'title'=>'required',
          'content'=>'required'
      ]);


      $article = new Article([
          'title' => $request->get('title'),
          'content' => $request->get('content')
      ]);
      $article->save();

      return redirect()->route('home', ['#news'])->with('message', 'La news a bien été créé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article, $id)
    {
      $article = Article::all()->find($id);
      return view('Article.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $article = Article::find($id);
      $article->fill($request->all());
      $article->save();
      return redirect()->route('home', ['#news'])->with('message', 'La news a bien été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $article = Article::find($id);
      $article->delete();

      return redirect()->route('home', ['#news'])->with('message', 'La news a bien été supprimé !');
    }
}
