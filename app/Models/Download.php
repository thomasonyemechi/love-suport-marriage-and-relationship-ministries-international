<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'item_id', 'others', 'sum_id'
    ];

    function cart()
    {
        return $this->belongsToThrough(Cart::class, Scart::class, 'item_id', 'sum_id');
    }
}
