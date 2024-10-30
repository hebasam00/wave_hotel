<?php

namespace App\Http\Controllers;

use App\Models\RoomImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RoomImageController extends Controller
{
    //---------------------------------------- DISPLAY ROOM IMAGES -------------------------------------//
    public function index($roomId)
    {
        $roomImages = RoomImage::where('room_id', $roomId)->paginate(10);
        return view('admin.room_images.index', compact('roomImages', 'roomId'));
    }

    //---------------------------------------- SHOW CREATE IMAGE FORM -------------------------------------//
    public function create($roomId)
    {
        return view('admin.room_images.create', compact('roomId'));
    }

    //---------------------------------------- STORE ROOM IMAGE -------------------------------------//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'room_id' => 'required|exists:rooms,id',
        ]);

        $new = new RoomImage();

        // Save the image to the storage directory
        $imageName = time() . '_' . $request->image->getClientOriginalName();
        $request->image->move(public_path('uploads'), $imageName);
        $new->image_path = '/uploads/' . $imageName;
        $new->room_id = $request->room_id;
        $new->save();

        return back()->withErrors(['image' => 'Failed to upload image']);
    }

    //---------------------------------------- DELETE ROOM IMAGE -------------------------------------//
    public function destroy(string $id)
    {
        $roomImage = RoomImage::findOrFail($id);
        if (File::exists(public_path($roomImage->image_path))) {
            File::delete(public_path($roomImage->image_path));  // Delete the old image if it exists
        }
        $roomImage->delete();

        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}
