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
        if($team->delete()){
            $team->save();
            return json_encode([
                'status' => 'ok'
            
            ]);
        }
        return json_encode([
            'status' => 'ok'
        
        ]);
    }
    public function delete_member($id1, $id2){
        $team = Team::find($id1);
        $members = json_decode( $team->members);
        array_splice($members,$id2-1,1);
        var_dump($members);
        $members = json_encode($team->members);
        $team->members = $members;
        $team->save();
        return json_encode([
            'status' => 'ok'
        ]);
    }
    public function add_team(Request $req){
        $team = new Team();
        $team->name = $req->name;
        $team->capitain = $req->capitain;
        $team->members = $req->members;
        $team->save();
        return json_encode([
            'status' => 'ok'
        ]);
    }
    public function add_member(Request $req, $id){
        $team = Team::find($id);
        $members = json_decode($team->members);
        $member.array_push($req->member);
        $team->members = json_encode( $members);
        $team->save();
        return json_encode([
            'status' => 'ok'
        ]);
    }
}
