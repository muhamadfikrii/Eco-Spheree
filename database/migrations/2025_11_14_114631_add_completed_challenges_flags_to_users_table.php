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
            if (! Schema::hasColumn('users', 'completed_all_challenges_today')) {
                $table->boolean('completed_all_challenges_today')->default(false)->after('daily_challenge_progress');
            }
            if (! Schema::hasColumn('users', 'completed_all_challenges_yesterday')) {
                $table->boolean('completed_all_challenges_yesterday')->default(false)->after('completed_all_challenges_today');
            }
            if (Schema::hasColumn('users', 'total_lifetime_points')) {
                $table->dropColumn('total_lifetime_points');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'completed_all_challenges_today')) {
                $table->dropColumn('completed_all_challenges_today');
            }
            if (Schema::hasColumn('users', 'completed_all_challenges_yesterday')) {
                $table->dropColumn('completed_all_challenges_yesterday');
            }
            if (! Schema::hasColumn('users', 'total_lifetime_points')) {
                $table->integer('total_lifetime_points')->default(0)->after('eco_points');
            }
        });
    }
};
