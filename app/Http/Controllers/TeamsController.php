<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::with('members', 'members.articles')->get();

        return view('teams.index', compact('teams'));
    }

    public function show(Team $team)
    {
        $team->load('articles');

        return view('teams.show', compact('team'));
    }
}
