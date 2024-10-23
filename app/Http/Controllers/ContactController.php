<?php

namespace App\Http\Controllers;

use App\Models\Contact; // تأكد من أن هذا هو الاستيراد الصحيح
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function index()
{
    return view('contact.index'); // تأكد من أن الملف موجود في resources/views/contact/index.blade.php
}

    public function store(Request $request)
    {
        // التحقق من صحة البيانات المدخلة مع رسائل مخصصة
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ], [
            'name.required' => 'يرجى إدخال الاسم.',
            'email.required' => 'يرجى إدخال البريد الإلكتروني.',
            'email.email' => 'يرجى إدخال بريد إلكتروني صحيح.',
            'message.required' => 'يرجى إدخال الرسالة.',
        ]);

        // تخزين البيانات في قاعدة البيانات
        Contact::create($validatedData);

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح!');
    }
}
