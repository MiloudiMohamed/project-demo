<?php

namespace App\Http\Controllers\Admins;

use App\Lecture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LecturesController extends Controller
{
    public function index()
    {
    	$lectures = Lecture::notApproved()->get();

    	return view('admins.lectures.index', compact('lectures'));
    }

    public function update(Lecture $lecture)
    {
    	$lecture->update([
    		'approved' => true,
    	]);

    	alert()->success('Accepted','The lecture has been accepted.')->showCloseButton();

    	return back();
    }

    public function destroy(Lecture $lecture)
    {
    	$lecture->delete();

    	return back();
    }
}
