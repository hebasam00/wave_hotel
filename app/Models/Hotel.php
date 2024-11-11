<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'rating', 'location', 'description'];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

}

