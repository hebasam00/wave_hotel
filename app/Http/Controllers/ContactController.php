<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //---------------------------------------- DISPLAY CONTACT LIST -------------------------------------//
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    //---------------------------------------- STORE CONTACT DATA -------------------------------------//
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ], [
            'name.required' => 'Please enter your name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'message.required' => 'Please enter your message.',
        ]);

        Contact::create($validatedData);
        toastr()->success('Your message has been sent successfully!');

        return redirect()->back();
    }

    //---------------------------------------- DELETE CONTACT RECORD -------------------------------------//
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        toastr()->success('The message has been deleted successfully!');

        return redirect()->back();
    }
}
