<?php

namespace App\Http\Controllers\Admins;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::notApproved()->get();

    	return view('admins.articles.index', compact('articles'));
    }

    public function update(Article $article)
    {
    	$article->update([
    		'approved' => true,
    	]);

    	alert()->success('Accepted','The article has been accepted.')->showCloseButton();

    	return back();
    }

    public function destroy(Article $article)
    {
    	$articel->delete();

    	return back();
    }
}
