<?php

namespace App\Http\Controllers;

use App\Workshop;
use Illuminate\Http\Request;

class WorkshopsController extends Controller
{
    public function index()
    {
        $workshops = Workshop::latest()->get();

        return view('workshops.index', compact('workshops'));
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
