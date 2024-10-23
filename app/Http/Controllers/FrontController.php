<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function rooms()
    {
        $data = Room::get();
        return view('frontend.rooms', compact('data'));
    }

    public function singleRooms()
    {
        $data = Room::where('room_type', 'single')->get();
        return view('frontend.single', compact('data'));
    }

    public function doubleRooms()
    {
        $data = Room::where('room_type', 'double')->get();

        return view('frontend.double', compact('data'));
    }
    public function familyRooms()
    {
        $data = Room::where('room_type', 'family')->get();

        return view('frontend.family', compact('data'));
    }
}
