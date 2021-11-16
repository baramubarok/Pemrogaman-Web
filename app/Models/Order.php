<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'user_id',
        'invoice',
        'total_price',
        'service_date',
        'location',
        'maps_location',
        'payment_method',
        'payment_status',
        'status',
    ];
}
