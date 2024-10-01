<?php

// app/Models/BookingDiscount.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDiscount extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'discount_id',
        'usage_count',
        'applied_amount',
    ];
}
