<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function destroy($id)
{
    $booking = Booking::findOrFail($id); // البحث عن الحجز
    $booking->delete(); // حذف الحجز

    return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully.');
}
public function edit($id)
{
    $booking = Booking::findOrFail($id); // البحث عن الحجز

    return view('admin.bookings.edit', compact('booking')); // عرض صفحة التعديل
}

public function update(Request $request, $id)
{
    $request->validate([
        'checkin_date' => 'required|date',
        'checkout_date' => 'required|date|after:checkin_date',
        'adults' => 'required|integer',
        'children' => 'nullable|integer',
        'room_type' => 'required|string',
        'full_name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
    ]);

    $booking = Booking::findOrFail($id); // البحث عن الحجز
    $booking->update($request->all()); // تحديث بيانات الحجز

    return redirect()->route('bookings.index')->with('success', 'Booking updated successfully.');
}

    public function index()
    {
        $bookings = Booking::all(); // إحضار جميع الحجوزات
        return view('admin.bookings.index', compact('bookings')); // إرسال البيانات إلى العرض
    }


    public function store(Request $request)
    {
        // تحقق من البيانات المطلوبة
        $request->validate([
            'checkin_date' => 'required|date',
            'checkout_date' => 'required|date|after:checkin_date',
            'adults' => 'required|integer',
            'children' => 'required|integer',
            'room_type' => 'required|string',
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        // تخزين البيانات في قاعدة البيانات
        Booking::create($request->all());

        // إضافة رسالة نجاح إلى الجلسة
        return redirect()->back()->with('success', 'تم تسجيل الحجز بنجاح!');
    }
}
