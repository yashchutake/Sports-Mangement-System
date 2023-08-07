<?php

namespace App\Http\Controllers;

use App\Models\achievements;
use App\Models\album;
use App\Models\Participants;
use App\Models\soloparticipants;
use App\Models\Teams;
use App\Models\Tournaments;
use Illuminate\Http\Request;

class routeController extends Controller
{
    //

    public function loadHome()
    {
        $imageData=Tournaments::all();
        return view('welcome', compact('imageData'));
    }

    public function loadFacilities()
    {
        return view('facilities');
    }

    public function loadAchievements()
    {
       $events=achievements::all();
       
        return view('achievements',compact('events'));
    }

    public function loadContact()
    {
        return view('contact');
    }

    public function loadGallery()
    {
        $imageData=album::all();
        return view('gallery',compact('imageData'));
    }

    public function login()
    {
        return view('auth/login');
    }

    // public function regsolo($id)
    // {
    //     $info=Tournaments::find($id);
    //     return view('registrationsolo', compact('info'));
        
    
    // }

    // public function regform($id){

    //     $info=Tournaments::find($id);
    //     return view('registration',compact('info'));
    // }
    

    public function register()
    {
        return view('auth/register');
    }

    public function admin()
    {
        return view('admin/dashboard');
    }


    // public function adtournament()
    // {
    //     return view('admin/tournament');
    // }


    // public function adgallery()
    // {
    //     return view('admin/gallery');
    // }


    public function adfaq()
    {
        return view('admin/faq');
    }


    public function adpart()
    {

        $playersolo  =soloparticipants::all();
        $playerteam =Teams::all();
        return view('admin/seeparticipate', compact('playersolo','playerteam'));
    }

    // public function adachievement()
    // {
    //     return view('admin/achivements');
    // }



}
