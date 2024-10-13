<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class RoomController extends Controller
{
    public function index()
    {
        $data = Room::paginate(10);

        return view('admin.rooms.index', compact('data'));
    }  // end index

    public function newRoom()
    {
        $hotels = Hotel::get();
        return view('admin.rooms.new-room', compact('hotels'));
    } // end newHotel

    public function storeRoom(Request $request)
    {
        // dd($request);
        // Validation rules here
        $validated = $request->validate([
            'room_number' => 'required|',
            'room_type' => 'required',
            'price_per_night' => 'required',
            'room_status' => 'required',
            'hotel_id' => 'required',

        ]);

        // Create a new hotel
        $newRoom = new Room();

        $newRoom->room_number = $request->room_number;
        $newRoom->room_type = $request->room_type;
        $newRoom->price_per_night = $request->price_per_night;
        $newRoom->room_status = $request->room_status;
        $newRoom->hotel_id = $request->hotel_id;



        $newRoom->save();
        // Redirect to hotels page with success message
        return redirect()->route('admin.rooms')->with('status', 'Room created successfully');
    } //end store hotel

    public function update($id)
    {
        $data = Room::findOrFail($id);
        $hotels = Hotel::get();
        return view('admin.rooms.update', compact('data','hotels'));
    } //end update
    public function submit(Request $request)
    {
        //dd($request);
        // Validation rules here
        $validated = $request->validate([
            'room_number' => 'required|',
            'room_type' => 'required',
            'price_per_night' => 'required',
            'room_status' => 'required',
            'hotel_id' => 'required',

        ]);
        // update a new hotel
        $room = Room::findOrFail($request->id);

        $room->room_number = $request->room_number;
        $room->room_type = $request->room_type;
        $room->price_per_night = $request->price_per_night;
        $room->room_status = $request->room_status;
        $room->hotel_id = $request->hotel_id;



        $room->save();
        // Redirect to hotels page with success message
        return redirect()->route('admin.rooms')->with('status', 'Room updated successfully');
    } //end submit

    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);

        $room->delete();

        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
