<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();

        return view('admin.bookings.index', compact('bookings'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'adults' => 'required|integer|min:1',
            'children' => 'nullable|integer|min:0',
        ]);

        $booking = new Booking();
        $booking->full_name = $validatedData['full_name'];
        $booking->email = $validatedData['email'];
        $booking->phone = $validatedData['phone'];
        $booking->checkin_date = $validatedData['checkin'];
        $booking->checkout_date = $validatedData['checkout'];
        $booking->adults = $validatedData['adults'];
        $booking->children = $validatedData['children'];
        $booking->room_number = $request->input('room_number');
        $booking->total_price = $request->input('total_price');

        $booking->save();
        toastr()->success('Booking saved successfully');
        return redirect()->back();
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('admin.bookings.edit', compact('booking'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'adults' => 'required|integer|min:1',
            'children' => 'nullable|integer|min:0',
            'room_number' => 'nullable|string',
            'total_price' => 'nullable|numeric',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update($validatedData);

        toastr()->success('Booking updated successfully');
        return redirect()->route('admin.bookings.index');
    }
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        toastr()->success('Booking deleted successfully');
        return redirect()->route('admin.bookings.index');
    }
}
