<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use App\Models\soloparticipants;
use App\Models\Team;
use App\Models\Teams;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    //

    // function showParticipants(){
          
    //         $playersolo  =soloparticipants::all();
    //         $playerteam =Participants::all();
    //         return view('admin.seeparticipate', compact('playerteam'));


    // }

    function addParticipantSolo(Request $request){

        $data=new soloparticipants();

        $data->name=$request->get('name');
        $data->prn=$request->get('prn');
        $data->mobile=$request->get('mobile');
        $data->email=$request->get('email');
        $data->sport_name=$request->get('sport_name');
        $data->department=$request->get('department');
        $data->year=$request->get('year');

        $data->save();
      
    
         return redirect()->route('home');
    }


    function addTeam(Request $request){

        $data=new Teams;

        $player=new Participants;

        $data->team_name=$request->get('team_name');
        $data->captain_name=$request->get('captain_name');
        $data->prn=$request->get('prn');
        $data->email=$request->get('email');
        $data->mobile=$request->get('mobile');
        $data->sport=$request->get('sport');
        $data->year=$request->get('year');
        $data->department=$request->get('department');
        $data->tournament_id=$request->get('tournament');
        $data->save();

        $player->team_id=$data->id;
        $player->name1=$request->get('name1');
        $player->name2=$request->get('name2');
        $player->name3=$request->get('name3');
        $player->name4=$request->get('name4');
        $player->name5=$request->get('name5');
        $player->name6=$request->get('name6');
        $player->name7=$request->get('name7');
        $player->name8=$request->get('name8');
        $player->name9=$request->get('name9');
        $player->name10=$request->get('name10');
        $player->name11=$request->get('name11');

        $player->save();
        return redirect()->route('home');
        
    }
    

    function deleteParticipantTeam(Request $id){

        $data=Teams::find($id->id);
            Teams::where("id", $data->id)->delete();
            return redirect('adpart');
    
        }
    


    function deleteParticipantSolo(Request $id){

        $data=soloparticipants::find($id->id);
            soloparticipants::where("id", $data->id)->delete();
            return redirect('adpart');
    
        }
    


        // function viewParticipantSolo(Request $request){
        //     // dd($request->all());
        //     $data= soloparticipants::find($request->id);
        
        
        
        //     $data->sport_name=$request->sport_name;
        //     $data->prn=$request->proc_nice;
        //     $data->name = $request->name; 
        //     $data->department=$request->department;
        //     $data->year=$request->year;
        //     $data->email=$request->email;
        //     $data->mobile=$request->mobile;
            
           
        //     $data->save();
        
        //      return redirect()->route('adachievement');
        
        
        
        
        //    }


        //    function viewParticipantTeam(Request $request){
        //     // dd($request->all());
        //     $data= Teams::find($request->id);
        //     $player=Participants::find($request->team_id);
        
        
        
        //     $data->sport_name=$request->sport_name;
        //     $data->team_name=$request->Team_name;
        //     $data->captain_name = $request->captain_name; 
        //     $data->department=$request->department;
        //     $data->year=$request->year;
        //     $data->email=$request->email;
        //     $data->mobile=$request->mobile;
            
            
        
            
        
        //      return redirect()->route('adachievement');
        
        
        
        //    }

   


}

