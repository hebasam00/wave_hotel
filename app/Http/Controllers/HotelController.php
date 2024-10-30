<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HotelController extends Controller
{
    //---------------------------------------- DISPLAY ALL HOTELS -------------------------------------//
    public function index()
    {
        $data = Hotel::paginate(10);
        return view('admin.hotels.index', compact('data'));
    } // end index

    //---------------------------------------- SHOW NEW HOTEL FORM -------------------------------------//
    public function newHotel()
    {
        return view('admin.hotels.new-hotel');
    } // end newHotel

    //---------------------------------------- STORE NEW HOTEL -------------------------------------//
    public function storeHotel(Request $request)
    {
        // Validation rules here
        $validated = $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|in:4,5,6',
            'location' => 'required|max:255|string',
            'description' => 'required|string',
        ]);

        // Create a new hotel
        $newHotel = new Hotel();
        $newHotel->name = $request->name;
        $newHotel->rating = $request->rating;
        $newHotel->location = $request->location;
        $newHotel->description = $request->description;

        // Save the image to the storage directory
        $imageName = time() . '_' . $request->image->getClientOriginalName();
        $request->image->move(public_path('uploads'), $imageName);
        $newHotel->image = '/uploads/' . $imageName;

        $newHotel->save();
        return redirect()->route('admin.hotels')->with('status', 'Hotel created successfully');
    } // end storeHotel

    //---------------------------------------- SHOW EDIT HOTEL FORM -------------------------------------//
    public function update($id)
    {
        $data = Hotel::findOrFail($id);
        return view('admin.hotels.update', compact('data'));
    } // end update

    //---------------------------------------- UPDATE HOTEL -------------------------------------//
    public function submit(Request $request)
    {
        // Validation rules here
        $validated = $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|in:4,5,6',
            'location' => 'required|max:255|string',
            'description' => 'required|string',
        ]);

        // Update a hotel
        $hotel = Hotel::findOrFail($request->id);
        $hotel->name = $request->name;
        $hotel->rating = $request->rating;
        $hotel->location = $request->location;
        $hotel->description = $request->description;

        // Save the image to the storage directory
        if ($request->hasFile('image')) {
            if (File::exists(public_path($hotel->image))) {
                File::delete(public_path($hotel->image));
            }
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads'), $imageName);
            $hotel->image = '/uploads/' . $imageName;
        }

        $hotel->save();
        return redirect()->route('admin.hotels')->with('status', 'Hotel updated successfully');
    } // end submit

    //---------------------------------------- DELETE HOTEL -------------------------------------//
    public function destroy(string $id)
    {
        $hotel = Hotel::findOrFail($id);
        if (File::exists(public_path($hotel->image))) {
            File::delete(public_path($hotel->image));
        }
        $hotel->delete();

        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    } // end destroy
}
