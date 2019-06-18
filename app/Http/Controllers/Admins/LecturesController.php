<?php

namespace App\Http\Controllers\Admins;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LecturesController extends Controller
{
    public function index()
    {
    	$lectures = User::notAccepted()->get();

    	return view('admins.lectures .index', compact('lectures '));
    }

    public function update(User $lecture )
    {
    	$lecture->update([
    		'accepted' => true,
    	]);

    	alert()->success('Accepted','The lecture has been accepted.')->showCloseButton();

    	return back();
    }

    public function destroy(User $lecture)
    {
    	$lecture->delete();

    	return back();
    }
}
