<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('driver_profiles', function (Blueprint $table) {
            $table->id();

            // Link to user account (login + role)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->foreignId('ambulance_id')->nullable()->constrained('ambulances')->onDelete('set null');

            // Driver-specific info
            $table->string('license_number')->unique(); // Driver license
            $table->date('license_expiry')->nullable();
            $table->string('driverLicenseUrl')->nullable();
            $table->string('driverNicUrl')->nullable();
            $table->string('driverProfileUrl')->nullable();
            $table->string('phone')->nullable();        // optional separate contact
            $table->string('address')->nullable();      // Home address
            $table->date('dob')->nullable();
            $table->date('hiredate')->nullable();
              $table->enum('status', [
                'OFF_DUTY',
                'AVAILABLE',
                'ASSIGNED',
                'IN_TRANSIT',
                'UNAVAILABLE'
            ])->default('OFF_DUTY');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_profiles');
    }
};
