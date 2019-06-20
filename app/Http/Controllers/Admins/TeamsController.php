<?php

namespace App\Http\Controllers\Admins;

use App\User;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamsController extends Controller
{
    public function index()
    {
    	return view('admins.teams.index');
    }

    public function create()
    {
    	$teachers = User::accepted()->doesntHaveTeam()->get();
    	
    	return view('admins.teams.create', compact('teachers'));
    }

    public function store(Request $request)
    {

    	$team = new Team;

    	$team->name = $request->name;
    	$team->theme = $request->theme;
    	$team->description = $request->description;

    	$team->save();

    	foreach ($request->members as $id) {
    		User::find($id)->update(['team_id' => $team->id]);
    	}
    	
    	return view('admins.teams.index');
    }
}
