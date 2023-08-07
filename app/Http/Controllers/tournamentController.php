<?php

namespace App\Http\Controllers;

use App\Models\Tournaments;
use Illuminate\Http\Request;

class tournamentController extends Controller
{

    function viewTournament(){
        $tournament=Tournaments::all();
        return view('admin.tournament',compact('tournament'));
    }
    //

    function addTournament(Request $request)
    {
        $data = new Tournaments;

        
        $data->sport_name=$request->get('sport');
        $data->event_date=$request->get('event_date');
        $data->is_team=$request->get('is_team');
        
        
        $data->event_date=$request->get('event_date');
        $data->description=$request->get('description');

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/events/sports'), $filename);
            
            $data['image'] = $filename;
            
        }
        $data->save();
       
    
         return redirect()->route('adtournament');


    }

    function deletetournament(Request $id){

        $data=Tournaments::find($id->id);
        unlink("events/sports/".$data->image);
        Tournaments::where("id", $data->id)->delete();
        return redirect('adtournament');

    }


    function registrationform(Request $id){
        
        $value=Tournaments::find($id->id);     
   


    if($value->is_team == 1){
       return view('registration',$id);

    }
    else{
        return view('registrationsolo',$id);
    }

    }
}
