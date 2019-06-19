<?php

namespace App\Http\Controllers\Admins;

use App\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkshopsController extends Controller
{
    public function index()
    {
    	$workshops = Workshop::notApproved()->get();

    	return view('admins.workshops.index', compact('workshops'));
    }

    public function update(Workshop $workshop)
    {
    	$workshop->update([
    		'approved' => true,
    	]);

    	alert()->success('Accepted','The workshop has been accepted.')->showCloseButton();

    	return back();
    }

    public function destroy(Workshop $workshop)
    {
    	$workshop->delete();

    	return back();
    }
}
