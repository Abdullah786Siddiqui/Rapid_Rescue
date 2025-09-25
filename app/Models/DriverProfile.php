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
        'address',
        'dob',
        'hiredate',
        'status',
        'ambulance_id'
    ];

     // Add this:
    public function user()
    {
        return $this->belongsTo(User::class); // assumes your User model is App\Models\User
    }

    public function ambulance() {
    return $this->belongsTo(Ambulance::class);
}
}
