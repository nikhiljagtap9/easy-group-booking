<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestDetail extends Model
{
    protected $fillable = [
        'title',
        'full_name',
        'nickname',
        'dummy_booking',
        'group',
        'employee_id',
        'email',
        'whatsapp_number',
        'country_born',
        'country_based',
        'tshirt_size',
        'profile_picture',
        'passport_expiry',
        'event_id',    // Added
        'user_id',     // Added
        'current_step' 
    ];

    public function flightDetail()
    {
        return $this->hasOne(FlightDetail::class);
    }

    // Optional: Relationships for event & user
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


