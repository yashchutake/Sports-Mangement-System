<?php

namespace App\Http\Controllers;

use App\Models\achievements;

use Illuminate\Http\Request;

class achievementController extends Controller
{
   //
   function viewAchievement(){

    $imageData= achievements::all();
        return view('admin.achievements', compact('imageData'));
   }

   function editAchievement(Request $request){
    // dd($request->all());
    $data= achievements::find($request->id);



    $data->event_name=$request->event_name;
    $data->subtitle=$request->subtitle;
    $data->author = $request->author; 
    $data->date=$request->date;
    $data->description=$request->description;

    if ($request->file('image')) {
        $file = $request->file('image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('/events'), $filename);
        
        $data['image'] = $filename;
        
    }
    $data->save();

     return redirect()->route('adachievement');



   }

    function addAchievement(Request $request){

        $data = new achievements;

        
        $data->event_name=$request->get('event_name');
        $data->subtitle=$request->get('subtitle');
        $data->author = $request->get('author'); 
        $data->date=$request->get('date');
        $data->description=$request->get('description');

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/events'), $filename);
            
            $data['image'] = $filename;
            
        }
        $data->save();
    
         return redirect()->route('adachievement');
    }

    function deleteAchievement(Request $id){

        $data=achievements::find($id->id);
        unlink("events/".$data->image);
        achievements::where("id", $data->id)->delete();
        // $data->delete();
        return redirect('adachievement');
    }



}
