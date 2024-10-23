<?php

namespace App\Http\Controllers;

use App\Models\RoomImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class RoomImageController extends Controller
{
    public function index($roomId)
    {
        $roomImages = RoomImage::where('room_id', $roomId)->paginate(10);
        return view('admin.room_images.index', compact('roomImages', 'roomId'));
    }

    public function create($roomId)
    {
        return view('admin.room_images.create', compact('roomId'));
    }

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


        // if ($request->file('image')) {
        //     $imageName = time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('images/room_images'), $imageName);

        //     RoomImage::create([
        //         'room_id' => $validated['room_id'],
        //         'image_path' => 'images/room_images/' . $imageName,
        //     ]);

        //     return redirect()->route('room.images.index', $validated['room_id'])->with('success', 'Image uploaded successfully');
        // }

        return back()->withErrors(['image' => 'Failed to upload image']);
    }

    public function destroy(string $id)
    {
        $roomImage = RoomImage::findOrFail($id);
        if (File::exists(public_path($roomImage->image))) {
            File::delete(public_path($roomImage->image));  // delete the old image first if exists.  // إذا كانت الصورة موجودة في المجلد التي محتويها على صورة جديدة، فإننا نحذف الصورة القديمة.  // حذف الصورة القديمة الموجودة في المجلد التي محتويها على صورة جديدة.  // حذف الصورة القديمة الموجودة في المجلد التي محتويها على صورة جديدة.  // حذف الصور
        }
        $roomImage->delete();

        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
    // public function destroy(string $id)
    // {
    //     $hotel = Hotel::findOrFail($id);
    //     if (File::exists(public_path($hotel->image))) {
    //         File::delete(public_path($hotel->image));  // delete the old image first if exists.  // إذا كانت الصورة موجودة في المجلد التي محتويها على صورة جديدة، فإننا نحذف الصورة القديمة.  // حذف الصورة القديمة الموجودة في المجلد التي محتويها على صورة جديدة.  // حذف الصورة القديمة الموجودة في المجلد التي محتويها على صورة جديدة.  // حذف الصور
    //     }
    //     $hotel->delete();

    //     return response(['status' => 'success', 'message' => 'Deleted successfully']);
    // }
}
