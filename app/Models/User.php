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
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function activities(): HasMany
    {
        return $this->hasMany(UserActivity::class);
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
        return $this->challengeParticipations()->sum('earned_points') +
               $this->activities()->sum('points_earned');
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

        $challenge->increment('current_participants');

        return $participation;
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
