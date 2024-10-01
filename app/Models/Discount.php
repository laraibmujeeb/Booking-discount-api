<?php

// app/Models/Discount.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'value',
        'max_discount_amount',
        'uses',
        'max_uses',
        'rule',
    ];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_discounts')
            ->withPivot('usage_count', 'applied_amount')
            ->withTimestamps();
    }
}
