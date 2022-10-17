<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'billing_id', 'trno', 'total', 'status', 'track_id'
    ];

    function items()
    {
        return $this->hasMany(Cart::class, 'sum_id');
    }

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function billing()
    {
        return $this->belongsTo(Billing::class, 'billing_id');
    }

}
