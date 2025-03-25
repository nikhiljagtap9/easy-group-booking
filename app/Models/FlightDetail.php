<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FlightDetail extends Model
{
    protected $fillable = [
        'guest_detail_id',
        'flight_ticket',
        'visa_required',
        'visa_status',
        'arrival_flight_number',
        'arrival_flight_date',
        'arrival_flight_time',
        'departure_flight_number',
        'departure_flight_date',
        'departure_flight_time',
    ];

    public function guestDetail()
    {
        return $this->belongsTo(GuestDetail::class);
    }
}

