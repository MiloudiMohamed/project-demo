<?php

namespace App\Http\Controllers\Admins;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    public function index()
    {
    	$teachers = User::notAccepted()->get();

    	return view('admins.teachers.index', compact('teachers'));
    }

    public function update(User $teacher)
    {
    	$teacher->update([
    		'accepted' => true,
    	]);

    	alert()->success('Accepted','The teacher has been accepted.')->showCloseButton();

    	return back();
    }

    public function destroy(User $teacher)
    {
    	$teacher->delete();

    	return back();
    }
}
