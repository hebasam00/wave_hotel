<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    //---------------------------------------- DISPLAY ALL ROOMS -------------------------------------//
    public function rooms()
    {
        $data = Room::get();
        return view('frontend.rooms', compact('data'));
    }

    //---------------------------------------- DISPLAY SINGLE ROOMS -------------------------------------//
    public function singleRooms()
    {
        $data = Room::where('room_type', 'single')->get();
        return view('frontend.single', compact('data'));
    }

    //---------------------------------------- DISPLAY DOUBLE ROOMS -------------------------------------//
    public function doubleRooms()
    {
        $data = Room::where('room_type', 'double')->get();
        return view('frontend.double', compact('data'));
    }

    //---------------------------------------- DISPLAY FAMILY ROOMS -------------------------------------//
    public function familyRooms()
    {
        $data = Room::where('room_type', 'family')->get();
        return view('frontend.family', compact('data'));
    }
}
