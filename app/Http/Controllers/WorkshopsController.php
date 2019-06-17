<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    public function index()
    {
        return view('workshops.create');
    }

    public function create()
    {
        return view('workshops.create');
    }

    public function show(Workshop $workshop)
    {
        return view('workshops.show', compact('workshop'));
    }

    public function store()
    {
        $workshop = auth()->user()->workshops()->create(request()->all());

        return redirect()->route('workshops.show', $workshop->id);
    }
}
