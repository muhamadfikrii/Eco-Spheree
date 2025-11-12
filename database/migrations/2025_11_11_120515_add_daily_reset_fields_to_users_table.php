<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('total_lifetime_points')->default(0)->after('eco_points');
            $table->integer('today_earned_points')->default(0)->after('total_lifetime_points');
            $table->integer('daily_streak')->default(0)->after('today_earned_points');
            $table->integer('daily_missions_completed')->default(0)->after('daily_streak');
            $table->date('last_mission_reset')->nullable()->after('daily_missions_completed');
            $table->json('daily_challenge_progress')->nullable()->after('last_mission_reset');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'total_lifetime_points',
                'today_earned_points',
                'daily_streak',
                'daily_missions_completed',
                'last_mission_reset',
                'daily_challenge_progress',
            ]);
        });
    }
};
