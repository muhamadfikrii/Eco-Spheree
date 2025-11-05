<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserChallengeParticipation extends Model
{
    protected $table = 'user_challenge_participations';

    protected $guarded = [];

    protected $casts = [
        'joined_at' => 'datetime',
        'completed_at' => 'datetime',
        'progress_data' => 'array',
    ];

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke challenge
    public function challenge()
    {
        return $this->belongsTo(EcoChallenge::class, 'eco_challenge_id');
    }

    // Cek apakah sudah selesai
    public function isCompleted()
    {
        return ! is_null($this->completed_at);
    }

    // Update progress
    public function updateProgress($newProgress)
    {
        $this->progress = min(100, max(0, $newProgress));

        if ($this->progress >= 100 && ! $this->isCompleted()) {
            $this->completed_at = now();
            $this->earned_points = $this->challenge->points_reward;
            $this->badge_earned = ! is_null($this->challenge->badge_reward);
        }

        $this->save();
    }
}
