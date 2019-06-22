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
        $teams = Team::with('members', 'members.articles')->get()->all();

    	return view('admins.teams.index', compact('teams'));
    }

    public function create()
    {
    	$teachers = User::accepted()->doesntHaveTeam()->get();
        $leaders = User::accepted()->doesntHaveTeam()->where('level', 'A')->get();

    	return view('admins.teams.create', compact('teachers', 'leaders'));
    }

    public function store(Request $request)
    {
    	$team = new Team;

    	$team->name = $request->name;
    	$team->theme = $request->theme;
    	$team->description = $request->description;

    	$team->save();

        $this->assignTeamMember($request, $team);

        $this->assignTeamLeader($request, $team);

    	return redirect()->route('admins.teams.index');
    }

    public function edit(Team $team)
    {
        $teachers = User::accepted()->doesntHaveTeam()->get();

        $leaders = User::accepted()->where('level', 'A')->where('team_id', $team->id)->orWhere('team_id', null)->get();

        return view('admins.teams.edit', compact('team', 'teachers', 'leaders'));
    }

    public function update(Request $request, Team $team)
    {
        $team->name = $request->name;
        $team->theme = $request->theme;
        $team->description = $request->description;
        $team->save();

        $this->resetTeamMember($team);

        $this->assignTeamMember($request, $team);

        $this->assignTeamLeader($request, $team);

        return redirect()->route('admins.teams.index');
    }

    protected function assignTeamLeader(Request $request)
    {
        User::findOrFail($request->leader)->update(['leader' => true]);
    }

    protected function assignTeamMember(Request $request, Team $team)
    {
        foreach (array_merge($request->members, [$request->leader]) as $id) {
            User::findOrFail($id)->update(['team_id' => $team->id]);
        }
    }

    protected function resetTeamMember(Team $team)
    {
        $team->members()->update([
            'team_id' => null,
            'leader' => false
        ]);
    }
}
