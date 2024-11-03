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
        $images = RoomImage::where('room_id', $roomId)->get();

        return view('admin.room_images.index', compact('images', 'roomId'));
    }



    //---------------------------------------- SHOW CREATE IMAGE FORM -------------------------------------//
    public function create($roomId)
    {
        return view('admin.room_images.create', compact('roomId'));
    }

    //---------------------------------------- STORE ROOM IMAGE -------------------------------------//
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'room_id' => 'required|exists:rooms,id', // تأكد من وجود الغرفة
        ]);

        // حفظ الصورة في المسار المحدد



        $newimage= new RoomImage();
        // Save the image to the storage directory
        $imageName = time() . '_' . $request->image->getClientOriginalName();
        $request->image->move(public_path('uploads'), $imageName);
        $newimage->image_path = '/uploads/' . $imageName;

        $newimage->room_id = $request->room_id;
        $newimage->save();

        return to_route('room.images.index', ['roomId' => $request->room_id])
            ->with('success', 'Image uploaded successfully.');
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
