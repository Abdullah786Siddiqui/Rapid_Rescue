<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driverlocation extends Model
{
    protected $table = 'driver_locations';

    // Mass assignment ke liye zaroori columns
    protected $fillable = [
        'driver_id',
        'latitude',
        'longitude',
        'status', // available, busy, offline
    ];

    // Data types ko theek se cast karna
    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'updated_at' => 'datetime',
    ];

    
    public function driver()
    {
        return $this->belongsTo(DriverProfile::class, 'driver_id', 'id');
    }
}
