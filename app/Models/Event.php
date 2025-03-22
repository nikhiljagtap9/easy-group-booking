<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'start_date',
        'end_date',
        'hotel_name',
        'client_pay_form',
        'client_pay_to',
        'room_rate',
        'extra_guest_rate',
        'early_check_in_fee',
        'late_check_out_fee',
        'check_in_date',
        'check_out_date',
        'check_out_time',
        'check_in_time',
        'cut_off_cost',
        'early_departure_cost',
        'deadline_first',
        'deadline_second',
        'group',
        'created_by',
        'updated_by',
        'is_active',
    ];

    // Relationships (Optional, adjust as per your actual table relationships)
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_name');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_name');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function formatDate($date, $format = 'd-M Y')
    {
        if (!$date) {
            return null;
        }
        return Carbon::parse($date)->format($format);
    }
}

