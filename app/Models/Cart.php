<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'sum_id', 'item_id', 'item', 'price' ,'quantity', 'total'
    ];

    function item()
    {
        return $this->belongsTo(Store::class, 'item_id');
    }

    function sum()
    {
        return $this->belongsTo(Scart::class, 'sum_id');
    }
}
