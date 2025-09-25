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
        Schema::create('ambulances', function (Blueprint $table) {
             $table->id();

            // Basic info
            $table->string('name')->unique();
            $table->enum('type', ['BLS', 'ALS', "ICU"]);
            $table->string('ambulance_image')->nullable();
            $table->string('number_plate')->unique();
            $table->string('description')->nullable();
            $table->string('model');

            // Status & location
            $table->enum('status', ['AVAILABLE', 'BUSY', 'MAINTENANCE'])->default('AVAILABLE');
            $table->decimal('current_lat', 10, 7)->nullable();
            $table->decimal('current_lng', 10, 7)->nullable();

            $table->timestamps();

            // Optional: indexing for performance
            $table->index('status');
            $table->index(['current_lat', 'current_lng']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambulances');
    }
};
