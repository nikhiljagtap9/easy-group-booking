<?php

// app/Models/UserDetail.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ['user_id', 'surname', 'whatsapp_no', 'phone', 'usertype'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

