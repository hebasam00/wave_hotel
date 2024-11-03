<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //---------------------------------------- DISPLAY ROOMS LIST -------------------------------------//
    public function index()
    {
        $data = Room::paginate(10);

        return view('admin.rooms.index', compact('data'));
    }

    //---------------------------------------- SHOW NEW ROOM FORM -------------------------------------//
    public function newRoom()
    {
        $hotels = Hotel::get();
        return view('admin.rooms.new-room', compact('hotels'));
    }

    //---------------------------------------- STORE NEW ROOM -------------------------------------//
    public function storeRoom(Request $request)
    {
        $validated = $request->validate([
            'room_number' => 'required',
            'room_type' => 'required',
            'price_per_night' => 'required',
            'room_status' => 'required',
            'hotel_id' => 'required',
        ]);

        $newRoom = new Room();
        $newRoom->room_number = $request->room_number;
        $newRoom->room_type = $request->room_type;
        $newRoom->price_per_night = $request->price_per_night;
        $newRoom->room_status = $request->room_status;
        $newRoom->hotel_id = $request->hotel_id;

        $newRoom->save();

        return redirect()->route('admin.rooms')->with('status', 'Room created successfully');
    }

    //---------------------------------------- SHOW ROOM UPDATE FORM -------------------------------------//
    public function update($id)
    {
        $data = Room::findOrFail($id);
        $hotels = Hotel::get();
        return view('admin.rooms.update', compact('data', 'hotels'));
    }

    //---------------------------------------- UPDATE ROOM INFORMATION -------------------------------------//
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'room_number' => 'required',
            'room_type' => 'required',
            'price_per_night' => 'required',
            'room_status' => 'required',
            'hotel_id' => 'required',
        ]);

        $room = Room::findOrFail($request->id);
        $room->room_number = $request->room_number;
        $room->room_type = $request->room_type;
        $room->price_per_night = $request->price_per_night;
        $room->room_status = $request->room_status;
        $room->hotel_id = $request->hotel_id;

        $room->save();

        return redirect()->route('admin.rooms')->with('status', 'Room updated successfully');
    }

    //---------------------------------------- DELETE ROOM -------------------------------------//
    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }



    public function showByType($type)
    {
        // جلب الغرف المتاحة بناءً على نوع الغرفة
        $rooms = Room::where('room_type', $type)->where('available', true)->get();


        return view('rooms.showByType', compact('rooms', 'type'));
    }
    public function book($id)
    {
        $room = Room::findOrFail($id);
        $checkin = request('checkin');
        $checkout = request('checkout');
        $numberOfNights = Carbon::parse($checkout)->diffInDays(Carbon::parse($checkin));
        $totalPrice = $room->price_per_night * $numberOfNights;

        return view('frontend.book', compact('room', 'checkin', 'checkout', 'numberOfNights', 'totalPrice'));
    }

    public function confirmBooking(Request $request)
    {
        // هنا يمكنك تنفيذ عمليات الحجز (مثل تخزين المعلومات في قاعدة البيانات)

        return back()->with('success', 'Booking confirmed successfully!');
    }


}
