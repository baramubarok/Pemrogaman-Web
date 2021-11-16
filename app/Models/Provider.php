<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'category',
        'service',
        'description',
        'location',
        'maps_link',
        'service_area',
        'price',
        'identity_type',
        'identity_number',
        'identity_photo',
        'identity_selfie_photo',
        'status',
    ];
}
