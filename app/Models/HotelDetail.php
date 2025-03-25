<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_detail_id',
        'room_type',
        'check_in_date',
        'check_out_date',
        'request_hotel',
    ];

    public function guest()
    {
        return $this->belongsTo(GuestDetail::class, 'guest_detail_id');
    }
}

