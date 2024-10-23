<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // الحقول القابلة للتعبئة بشكل جماعي
    protected $fillable = ['name', 'email', 'message'];

    // إذا كنت لا تحتاج لتواريخ الإنشاء والتحديث، يمكنك تعطيلها هكذا:
    // public $timestamps = false;
}
