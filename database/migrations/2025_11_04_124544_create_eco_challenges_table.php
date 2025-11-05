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
        Schema::create('eco_challenges', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('category'); 
            $table->integer('target_participants')->default(0);
            $table->integer('current_participants')->default(0);
            $table->decimal('target_co2_reduction', 8, 2)->nullable(); 
            $table->decimal('current_co2_reduction', 8, 2)->default(0);
            $table->integer('points_reward')->default(0);
            $table->string('badge_reward')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->enum('status', ['draft', 'active', 'completed', 'expired'])->default('draft');
            $table->string('image_url')->nullable();
            $table->json('requirements')->nullable(); // Syarat khusus untuk menyelesaikan challenge
            $table->timestamps();
            
            $table->index(['status', 'start_date', 'end_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eco_challenges');
    }
};
