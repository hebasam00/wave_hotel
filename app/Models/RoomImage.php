<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'image_path',
    ];

    // إذا كنت تريد تحديد العلاقة مع نموذج الغرفة
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
