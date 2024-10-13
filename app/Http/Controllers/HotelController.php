<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ProductVariant;


class HotelController extends Controller
{
    public function index()
    {
        $data = Hotel::paginate(10);

        return view('admin.hotels.index', compact('data'));
    }  // end index

    public function newHotel()
    {
        return view('admin.hotels.new-hotel');
    } // end newHotel

    public function storeHotel(Request $request)
    {
        // dd($request);
        // Validation rules here
        $validated = $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // للتحقق من الصورة
            'rating' => 'required|in:4,5,6', // التأكد أن التقييم هو 4، 5، أو 6
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
        $imageName = time() . '_' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $imageName);
        $newHotel->image = '/uploads/' . $imageName;

        $newHotel->save();
        // Redirect to hotels page with success message
        return redirect()->route('admin.hotels')->with('status', 'Hotel created successfully');
    } //end store hotel


    public function update($id)
    {
        $data = Hotel::findOrFail($id);

        return view('admin.hotels.update', compact('data'));
    } //end update

    public function submit(Request $request)
    {
        //dd($request);
        // Validation rules here
        $validated = $request->validate([
            'name' => 'required|max:255|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // للتحقق من الصورة
            'rating' => 'required|in:4,5,6', // التأكد أن التقييم هو 4، 5، أو 6
            'location' => 'required|max:255|string',
            'description' => 'required|string',
        ]);
        // update a new hotel
        $hotel = Hotel::findOrFail($request->id);

        $hotel->name = $request->name;
        $hotel->rating = $request->rating;
        $hotel->location = $request->location;
        $hotel->description = $request->description;

        // Save the image to the storage directory
        if ($request->hasFile('image')) {
            if (File::exists(public_path($hotel->image))) {
                File::delete(public_path($hotel->image));  // delete the old image first if exists.  // إذا كانت الصورة موجودة في المجلد التي محتويها على صورة جديدة، فإننا نحذف الصورة القديمة.  // حذف الصورة القديمة الموجودة في المجلد التي محتويها على صورة جديدة.  // حذف الصورة القديمة الموجودة في المجلد التي محتويها على صورة جديدة.  // حذف الصور
            }
            $imageName = time() . '_' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imageName);
            $hotel->image = '/uploads/' . $imageName;
        }

        $hotel->save();
        // Redirect to hotels page with success message
        return redirect()->route('admin.hotels')->with('status', 'Hotel updated successfully');
    } //end submit


    public function destroy(string $id)
    {
        $hotel = Hotel::findOrFail($id);
        if (File::exists(public_path($hotel->image))) {
            File::delete(public_path($hotel->image));  // delete the old image first if exists.  // إذا كانت الصورة موجودة في المجلد التي محتويها على صورة جديدة، فإننا نحذف الصورة القديمة.  // حذف الصورة القديمة الموجودة في المجلد التي محتويها على صورة جديدة.  // حذف الصورة القديمة الموجودة في المجلد التي محتويها على صورة جديدة.  // حذف الصور
        }
        $hotel->delete();

        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
