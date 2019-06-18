<?php

namespace App\Http\Controllers\Admins;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkshopsController extends Controller
{
    public function index()
    {
    	$workshops = User::notAccepted()->get();

    	return view('admins.workshops .index', compact('workshops '));
    }

    public function update(User $workshop )
    {
    	$workshop->update([
    		'accepted' => true,
    	]);

    	alert()->success('Accepted','The workshop has been accepted.')->showCloseButton();

    	return back();
    }

    public function destroy(User $workshop)
    {
    	$workshop->delete();

    	return back();
    }
}
