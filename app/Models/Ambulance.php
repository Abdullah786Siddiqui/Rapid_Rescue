<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
      // Mass-assignable fields
    protected $fillable = [
        'name',
        'type',
        'ambulance_image',
        'number_plate',
        'model',
        'status',
        'current_lat',
        'current_lng',
        'description'
    ];

    // Casting attributes
    protected $casts = [
        'current_lat' => 'decimal:7',
        'current_lng' => 'decimal:7',
    ];
}
