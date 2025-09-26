<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.drivers.drivers');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.drivers.addDrivers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate all fields
        $request->validate([
            // Users table fields
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            // Driver profile fields
            'license_number'   => 'required|string|max:50',
            'license_expiry'   => 'required|date|after:today',
            'driverLicenseUrl' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            'driverNicUrl'     => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            'driverProfileUrl'     => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            'phone'            => 'required|string|max:20',
            'address'          => 'required|string|max:255',
           'dob' => 'required|date|before_or_equal:' . now()->subYears(18)->toDateString(),
            'hiredate'         => 'required|date',
            'status'           => 'required|in:OFF_DUTY,AVAILABLE,ASSIGNED,IN_TRANSIT,UNAVAILABLE',
        ]);

        $licensePath = $request->hasFile('driverLicenseUrl')
            ? $request->file('driverLicenseUrl')->store('drivers/licenses', 'public')
            : null;

        $nicPath = $request->hasFile('driverNicUrl')
            ? $request->file('driverNicUrl')->store('drivers/nics', 'public')
            : null;
            $ProfilePath = $request->hasFile('driverProfileUrl')
            ? $request->file('driverProfileUrl')->store('drivers/profile', 'public')
            : null;


        // Create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'driver'
        ]);

        // Create driver profile linked to user
        $user->driverProfile()->create([
            'license_number'   => $request->license_number,
            'license_expiry'   => $request->license_expiry,
            'driverLicenseUrl' => $licensePath,
            'driverNicUrl'     => $nicPath,
            'driverProfileUrl'     => $ProfilePath,
            'phone'            => $request->phone,
            'address'          => $request->address,
            'dob'              => $request->dob,
            'hiredate'         => $request->hiredate,
            'status'           => $request->status,
        ]);


        return redirect()->back()->with('driver', 'Driver created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
