<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'service_name',
        'price',
        'image',
        'warranty',
        'warranty_type',
        'details'
    ];
}
