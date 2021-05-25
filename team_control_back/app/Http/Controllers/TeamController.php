<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function get_all(){
        $all_teams = Team::all();
        return json_encode($all_teams);
    }
    public function get_team($id){
        $team = Team::find($id);
        return json_encode($team);
    }
    public function delete_team($id){
        $team = Team::find($id);
        $team->delete();
        Team::save();
        return json([
            'status' => 'ok'
        ]);
    }
    public function delete_member($id1, $id2){
        $team = Team::find($id);
        $team->members = json_decode( $team->members);
        array_slice($team->members,$id2);
        $team->members = json_encode($team->members);
        $team->save();
        return json([
            'status' => 'ok'
        ]);
    }
    public function add_team(Request $req){
        $team = new Team();
        $team->name = $req->name;
        $team->capitain = $req->capitain;
        $team->members = $req->members;
        $team->save();
        return json([
            'status' => 'ok'
        ]);
    }
    public function add_member(Request $req, $id){
        $team = Team::find($id);
        $members = json_decode($team->members);
        $member.array_push($req->member);
        $team->members = json_encode( $members);
        $team->save();
        return json([
            'status' => 'ok'
        ]);
    }
}
