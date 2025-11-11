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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('eco_points')->default(0)->after('password');
            $table->string('eco_level')->default('Beginner')->after('eco_points');
            $table->integer('challenges_completed')->default(0)->after('eco_level');
            $table->json('challenge_progress')->nullable()->after('challenges_completed');
            $table->json('achievements_unlocked')->nullable()->after('challenge_progress');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['eco_points', 'eco_level', 'challenges_completed', 'challenge_progress', 'achievements_unlocked']);
        });
    }
};
