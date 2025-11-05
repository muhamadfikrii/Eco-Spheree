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
        Schema::create('user_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('activity_type'); 
            $table->string('description');
            $table->string('icon')->nullable(); 
            $table->decimal('co2_impact', 8, 2); // bisa positif atau negatif
            $table->decimal('energy_saved', 8, 2)->nullable(); 
            $table->decimal('water_saved', 8, 2)->nullable(); // dalam liter
            $table->integer('points_earned')->default(0);
            $table->json('metadata')->nullable(); // data tambahan (jarak, <du></du>rasi, dll)
            $table->dateTime('activity_date');
            
            $table->index(['user_id', 'activity_date']);
            $table->index(['activity_type', 'activity_date']);
            $table->timestamps();
        });
    }
// dalam kWh
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_activities');
    }
};
