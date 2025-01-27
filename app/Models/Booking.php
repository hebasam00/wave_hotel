<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'checkin_date',
        'checkout_date',
        'adults',
        'children',
        'room_number',
        'total_price',
    ];
    public function room()
{
    return $this->belongsTo(Room::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}


}
