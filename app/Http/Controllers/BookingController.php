<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        // التحقق من صحة البيانات المدخلة
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'adults' => 'required|integer|min:1',
            'children' => 'nullable|integer|min:0',
        ]);

        // إنشاء حجز جديد
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

        // حفظ الحجز في قاعدة البيانات
        $booking->save();
        toastr()->success('Booking saved successfully');
        // إعادة توجيه المستخدم مع رسالة نجاح
        return redirect()->back();
    }
}
