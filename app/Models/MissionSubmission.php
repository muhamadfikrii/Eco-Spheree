<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MissionSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'eco_challenge_id',
        'photo_path',
        'description',
        'status',
        'review_notes',
        'rating',
        'submitted_at',
        'reviewed_at',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
        'reviewed_at' => 'datetime',
    ];

    // Relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ecoChallenge(): BelongsTo
    {
        return $this->belongsTo(EcoChallenge::class);
    }

    // Scopes
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }

    // Helper methods
    public function approve($notes = null)
    {
        $this->update([
            'status' => 'approved',
            'review_notes' => $notes,
            'reviewed_at' => now(),
        ]);

        // Award points to user
        $this->awardPoints();
    }

    public function reject($notes = null)
    {
        $this->update([
            'status' => 'rejected',
            'review_notes' => $notes,
            'reviewed_at' => now(),
        ]);
    }

    private function awardPoints()
    {
        $user = $this->user;
        $challenge = $this->ecoChallenge;

        // Create or update user challenge participation
        $participation = $user->challengeParticipations()->updateOrCreate(
            ['eco_challenge_id' => $challenge->id],
            [
                'joined_at' => now(),
                'completed_at' => now(),
                'progress' => 100,
                'earned_points' => $challenge->points_reward,
            ]
        );

        // Update user eco progress
        $user->updateEcoProgress($challenge->id, $challenge->points_reward, now()->toDateString());
    }

    public function getPhotoUrlAttribute()
    {
        return $this->photo_path ? asset('storage/' . $this->photo_path) : null;
    }
}
