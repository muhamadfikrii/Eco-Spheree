<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RewardRedemption extends Model
{
    protected $fillable = [
        'user_id',
        'reward_type',
        'reward_name',
        'points_spent',
        'reward_details',
        'redeemed_at',
    ];

    protected $casts = [
        'reward_details' => 'array',
        'redeemed_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
