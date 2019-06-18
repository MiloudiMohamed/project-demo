<?php

namespace App\Http\Controllers\Admins;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = User::notAccepted()->get();

    	return view('admins.articles.index', compact('articles'));
    }

    public function update(User $article)
    {
    	$article->update([
    		'accepted' => true,
    	]);

    	alert()->success('Accepted','The article has been accepted.')->showCloseButton();

    	return back();
    }

    public function destroy(User $article)
    {
    	$articel->delete();

    	return back();
    }
}
