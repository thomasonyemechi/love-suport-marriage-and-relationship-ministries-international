<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'item', 'price', 'description', 'more', 'type', 'photo', 'url', 'main_url', 'on_del', 'status', 'snippet', 'slug'
    ];
}
