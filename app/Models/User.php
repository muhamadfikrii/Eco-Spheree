<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'onboarding_data',
        'eco_points',
        'eco_level',
        'challenges_completed',
        'challenge_progress',
        'achievements_unlocked',
        'eco_impact',
        'profile_photo',
        'today_earned_points',
        'daily_streak',
        'daily_missions_completed',
        'last_mission_reset',
        'daily_challenge_progress',
        'completed_all_challenges_today',
        'completed_all_challenges_yesterday',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'challenge_progress' => 'array',
        'achievements_unlocked' => 'array',
        'daily_challenge_progress' => 'array',
        'completed_all_challenges_today' => 'boolean',
        'completed_all_challenges_yesterday' => 'boolean',
        'eco_impact' => 'decimal:2',
    ];

    public function getProfilePhotoUrlAttribute()
    {
        return $this->profile_photo
            ? asset('storage/profile-photos/'.$this->profile_photo)
            : '';
    }

    // Relasi ke challenge participations
    public function challengeParticipations(): HasMany
    {
        return $this->hasMany(UserChallengeParticipation::class);
    }

    // Relasi ke challenges yang diikuti user
    public function challenges()
    {
        return $this->belongsToMany(EcoChallenge::class, 'user_challenge_participations')
            ->withPivot('joined_at', 'completed_at', 'progress', 'earned_points')
            ->withTimestamps();
    }

    // Get total CO2 impact
    public function getTotalCo2Impact($startDate = null, $endDate = null)
    {
        $query = $this->activities();

        if ($startDate && $endDate) {
            $query->whereBetween('activity_date', [$startDate, $endDate]);
        }

        return $query->sum('co2_impact');
    }

    // Get total points earned
    public function getTotalPoints()
    {
        return $this->eco_points;
    }

    // Get eco level based on points
    public function getEcoLevel()
    {
        $points = $this->eco_points;

        if ($points >= 150) {
            return 'Eco Master';
        }
        if ($points >= 80) {
            return 'Eco Warrior';
        }
        if ($points >= 40) {
            return 'Nature Lover';
        }

        return 'Beginner';
    }

    // Update eco progress
    public function updateEcoProgress($missionId, $points, $completedDate = null)
    {
        // Update points
        $this->eco_points += $points;

        // Update challenge progress
        $progress = $this->challenge_progress ?? [];
        $progress[$missionId] = [
            'completed' => true,
            'points_earned' => $points,
            'completed_at' => $completedDate ?? now()->toDateString(),
        ];
        $this->challenge_progress = $progress;

        // Update challenges completed count
        $this->challenges_completed = count(array_filter($progress, fn ($p) => $p['completed'] ?? false));

        // Update level
        $this->eco_level = $this->getEcoLevel();

        // Update eco impact (composite score based on points and challenges)
        $this->eco_impact = $this->calculateEcoImpact();

        // Check achievements
        $this->updateAchievements();

        $this->save();
    }

    // Calculate eco impact score (CO2 emissions reduced in kg)
    public function calculateEcoImpact()
    {
        $points = $this->eco_points;
        $challenges = $this->challenges_completed;
        $streak = $this->daily_streak ?? 0;

        // CO2 impact from points earned (assuming each point represents ~0.1kg CO2 saved)
        $pointsImpact = $points * 0.1; // 0.1kg CO2 per point

        // CO2 impact from completed challenges (each challenge saves ~2kg CO2)
        $challengeImpact = $challenges * 2.0; // 2kg CO2 per challenge

        // CO2 impact from daily streak (consistent behavior saves additional CO2)
        $streakImpact = min($streak * 0.5, 5.0); // Up to 5kg CO2 for long streaks

        // Total CO2 emissions reduced in kg
        return round($pointsImpact + $challengeImpact + $streakImpact, 2);
    }

    public function updateAchievements($currentRank = null)
    {
        $achievements = $this->achievements_unlocked ?? [];

        // Achievement 1: Complete first mission
        if ($this->challenges_completed >= 1 && ! isset($achievements['first_mission'])) {
            $achievements['first_mission'] = ['unlocked_at' => now()->toDateTimeString()];
        }

        // Achievement 2: Collect 50 points
        if ($this->eco_points >= 50 && ! isset($achievements['point_collector'])) {
            $achievements['point_collector'] = ['unlocked_at' => now()->toDateTimeString()];
        }

        // Achievement 3: Complete 3 missions
        if ($this->challenges_completed >= 3 && ! isset($achievements['eco_warrior'])) {
            $achievements['eco_warrior'] = ['unlocked_at' => now()->toDateTimeString()];
        }

        // Achievement 4: Complete all missions (11 missions)
        if ($this->challenges_completed >= 11 && ! isset($achievements['eco_master'])) {
            $achievements['eco_master'] = ['unlocked_at' => now()->toDateTimeString()];
        }

        // Achievement 5: Reach top 10 in leaderboard
        if ($currentRank !== null && $currentRank <= 10 && ! isset($achievements['community_leader'])) {
            $achievements['community_leader'] = ['unlocked_at' => now()->toDateTimeString()];
        }

        $this->achievements_unlocked = $achievements;
        $this->save();
    }

    // Get challenge progress for a specific mission
    public function getChallengeProgress($missionId)
    {
        return $this->challenge_progress[$missionId] ?? null;
    }

    // Check if achievement is unlocked
    public function hasAchievement($achievementKey)
    {
        return isset($this->achievements_unlocked[$achievementKey]);
    }

    // Join a challenge
    public function joinChallenge(EcoChallenge $challenge)
    {
        if ($this->challenges()->where('eco_challenge_id', $challenge->id)->exists()) {
            return false;
        }

        // Tambahkan partisipasi
        $participation = $this->challengeParticipations()->create([
            'eco_challenge_id' => $challenge->id,
            'joined_at' => now(),
            'progress' => 0,
        ]);

        // Increment current_participants on the challenge
        $challenge->increment('current_participants');

        return $participation;
    }

    // Update daily eco progress
    public function updateDailyEcoProgress($missionId, $points, $completedDate)
    {
        $progress = $this->daily_challenge_progress ?? [];
        $progress[$missionId] = [
            'completed' => true,
            'points_earned' => $points,
            'completed_at' => $completedDate,
        ];
        $this->daily_challenge_progress = $progress;
        $this->save();
    }

    // Log activity
    public function logActivity($data)
    {
        return $this->activities()->create([
            'activity_type' => $data['type'],
            'description' => $data['description'],
            'icon' => $data['icon'] ?? null,
            'co2_impact' => $data['co2_impact'] ?? 0,
            'energy_saved' => $data['energy_saved'] ?? null,
            'water_saved' => $data['water_saved'] ?? null,
            'points_earned' => $data['points_earned'] ?? 0,
            'metadata' => $data['metadata'] ?? [],
            'activity_date' => $data['activity_date'] ?? now(),
        ]);
    }
}
