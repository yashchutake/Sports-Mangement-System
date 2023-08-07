<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\album;

class albumController extends Controller
{
    //
    



    function addphoto(Request $request)
    {
        $data = new album;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/album'), $filename);
            $data->name = $request->get('name');
            $data['image'] = $filename;
            // $request->image->move(public_path('images'), $filename);
        }
        $data->save();
         return redirect()->route('adgallery');
    }

    //View post
    public function viewImage(){
        $imageData= album::all();
        return view('admin.gallery', compact('imageData'));
 
   }

   public function deletephoto(Request $id) 
   {   
        $data=album::find($id->id);
        unlink("album/".$data->image);
        album::where("id", $data->id)->delete();
        // $data->delete();
        return redirect('adgallery');

    // $data=album::find($request->id);
    // unlink("/album".$data->image);
    // album::where("id", $data->id)->delete();
    // return redirect('adgallery');



   }

}
