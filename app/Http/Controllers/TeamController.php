<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team; 

class TeamController extends Controller
{
    //
    public function index() {

    	$average = [
	    	'intelligence' => Team::avg('intelligence'),
	    	'strength' => Team::avg('strength'),
	    	'speed' => Team::avg('speed'),
	    	'durability' => Team::avg('durability'),
	    	'power' => Team::avg('power'),
	    	'combat' => Team::avg('combat'),
    	];

    	$team_entries = json_decode(\App\Team::all());

    	return view('team',['heros' => $team_entries, 'average' => $average]);

    }


    public function insert(Request $request) {

        $team = new Team;

	        $team->name = $request->input('name');
	        $team->image = $request->input('image');
	        $team->intelligence = $request->input('intelligence');
	        $team->strength = $request->input('strength');
	        $team->speed = $request->input('speed');
	        $team->durability = $request->input('durability');
	        $team->power = $request->input('power');
	        $team->combat = $request->input('combat');

        $team->save();

        return self::index();
    }


    public function delete(Request $hero) {

    	Team::where('name', $hero->input('name'))->delete();

    	return self::index();

    }

}