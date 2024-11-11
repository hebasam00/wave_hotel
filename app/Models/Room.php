<?php

namespace App\Models;

use App\Http\Controllers\BookingController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['room_number', 'room_type', 'price_per_night', 'room_status', 'hotel_id'];

    public function images()
    {
        return $this->hasMany(RoomImage::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function booking()
{
    return $this->hasMany(Booking::class);
}

}

