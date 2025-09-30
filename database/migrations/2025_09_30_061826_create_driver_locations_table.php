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
        Schema::create('driver_locations', function (Blueprint $table) {
             $table->id();

            // 1. Driver ID (Foreign Key)
            // Ye column is location ko 'drivers' table ke kisi record se link karega.
            $table->foreignId('driver_id')
                  ->constrained('driver_profiles') // Assuming aapki drivers table ka naam 'drivers' hai
                  ->onDelete('cascade') // Agar driver delete ho to uski location bhi delete ho jaye
                  ->unique(); // Har driver ki sirf aik current location ho sakti hai, isliye unique

            // 2. Location Coordinates (Zaroori)
            // Location ki behtareen accuracy ke liye 7 decimal places use karein.
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);

            // 3. Driver Status (Availability)
            // Proximity search ke dauraan sirf 'available' drivers ko filter karne ke liye use hoga.
            $table->enum('status', ['available', 'busy', 'offline'])
                  ->default('available');

            // 4. Time Stamps (Last Update Time)
            $table->timestamps();

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_locations');
    }
};
