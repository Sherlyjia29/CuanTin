<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'outlet_choice',
        'booking_time',
        'number_of_guests',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function outlet()
    {
        return $this->hasOne(Outlet::class);
    }

    protected function casts(): array
    {
    return [
        'booking_time' => 'datetime'
    ];
    }
}
