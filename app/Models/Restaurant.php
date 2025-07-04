<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'restaurant_name', 
        'neighborhood', 
        'street', 
        'number'
    ];
}
