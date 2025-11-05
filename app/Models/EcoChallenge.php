<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EcoChallenge extends Model
{
    protected $table = 'eco_challenges';

    protected $guarded = [];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'requirements' => 'array',
        'target_co2_reduction' => 'decimal:2',
        'current_co2_reduction' => 'decimal:2',
    ];

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_challenge_participations')
            ->withPivot('joined_at', 'completed_at', 'progress', 'earned_points')
            ->withTimestamps();
    }

    public function isActive(): bool
    {
        return $this->status === 'active' && 
               $this->start_date->isPast() && 
               $this->end_date->isFuture();
    }

    public function isExpired(): bool
    {
        return $this->end_date->isPast();
    }

    public function getProgressPercentage(): float|int
    {
        if ($this->target_participants == 0) return 0;
        return min(100, ($this->current_participants / $this->target_participants) * 100);
    }

    public function getCo2ProgressPercentage(): float|int
    {
        if ($this->target_co2_reduction == 0) return 0;
        return min(100, ($this->current_co2_reduction / $this->target_co2_reduction) * 100);
    }
    
    public function getTimeLeft(): string
    {
        if ($this->isExpired()) {
            return 'Expired';
        }
        
        return $this->end_date->diffForHumans();
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active')
                    ->where('start_date', '<=', now())
                    ->where('end_date', '>=', now());
    }
    
    public function scopeUpcoming($query)
    {
        return $query->where('start_date', '>', now())
                    ->where('status', 'active');
    }
}
