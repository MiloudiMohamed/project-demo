<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
    	$teachers = User::accepted()->get();

    	return view('teachers', compact('teachers'));
    }
}
