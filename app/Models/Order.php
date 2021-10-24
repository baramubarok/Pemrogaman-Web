<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'provider_id',
        'user_id',
        'invoice',
        'total_price',
        'service_date',
    ];
}
