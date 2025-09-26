<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverProfile extends Model
{
     protected $fillable = [
        'user_id',
        'license_number',
        'license_expiry',
        'phone',
        'driverLicenseUrl',
        'driverNicUrl',
        'driverProfileUrl',
        'address',
        'dob',
        'hiredate',
        'status',
        'ambulance_id'
    ];

     // Add this:
    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    public function ambulance() {
    return $this->belongsTo(Ambulance::class);
}
}
