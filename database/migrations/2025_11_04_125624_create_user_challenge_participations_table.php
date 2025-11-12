<?php

use App\Models\EcoChallenge;
use App\Models\User;
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
        Schema::create('user_challenge_participations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(EcoChallenge::class);
            $table->dateTime('joined_at');
            $table->dateTime('completed_at')->nullable();
            $table->integer('progress')->default(0);
            $table->integer('earned_points')->default(0);
            $table->boolean('badge_earned')->default(false);
            $table->json('progress_data')->nullable();

            $table->unique(['user_id', 'eco_challenge_id']);
            $table->index(['user_id', 'joined_at']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_challenge_participations');
    }
};
