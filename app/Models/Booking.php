<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'checkin_date',
        'checkout_date',
        'adults',
        'children',
        'room_type',
        'full_name',
        'email',
        'phone',
    ];
}
