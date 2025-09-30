<?php

namespace App\Http\Controllers;

use App\Models\Driverlocation;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function  dashboard()
    {
        return view('driver.dashboard');
    }
    public function nearbyDrivers(Request $request)
    {
        $request->validate([
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
            'radius' => 'nullable|numeric'
        ]);

        $lat = $request->lat;
        $lng = $request->lng;
        $radius = $request->radius ?? 1000; // default 1km

        $drivers = Driverlocation::selectRaw(
            "driver_locations.*, 
            (6371000 * acos(cos(radians(?)) * cos(radians(latitude)) 
            * cos(radians(longitude) - radians(?)) + sin(radians(?)) 
            * sin(radians(latitude)))) AS distance",
            [$lat, $lng, $lat]
        )
            ->with('driver.user') // driver + user relation
            ->where('status', 'available')
            ->having("distance", "<=", $radius)
            ->orderBy('distance', 'asc')
            ->get();

        return response()->json($drivers);
    }
}
