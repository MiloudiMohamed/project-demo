<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;

class LecturesController extends Controller
{
    public function index()
    {
        return view('lectures.create');
    }

    public function create()
    {
        return view('lectures.create');
    }

    public function show(Lecture $lecture)
    {
        return view('lectures.show', compact('lecture'));
    }

    public function store()
    {
        $lecture = auth()->user()->lectures()->create(request()->all());

        return redirect()->route('lectures.show', $lecture->id);
    }
}
