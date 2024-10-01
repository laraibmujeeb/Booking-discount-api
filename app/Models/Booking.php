<?php

// app/Models/Booking.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'family_member_id',
        'total_cost',
        'discount_amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function familyMember()
    {
        return $this->belongsTo(FamilyMember::class);
    }

    public function discounts()
    {
        return $this->belongsToMany(Discount::class, 'booking_discounts')
            ->withPivot('usage_count', 'applied_amount')
            ->withTimestamps();
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class, 'booking_schedules')
            ->withTimestamps();
    }
}
