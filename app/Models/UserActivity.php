<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $table = 'user_activities';

    protected $guarded = [];

    protected $casts = [
        'co2_impact' => 'decimal:2',
        'energy_saved' => 'decimal:2',
        'water_saved' => 'decimal:2',
        'metadata' => 'array',
        'activity_date' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Cek apakah aktivitas mengurangi CO2
    public function isEcoFriendly()
    {
        return $this->co2_impact < 0;
    }

    // Format CO2 impact untuk display
    public function getFormattedCo2Impact(): string|int|float
    {
        $impact = abs($this->co2_impact);
        $prefix = $this->co2_impact < 0 ? '-' : '+';

        return $prefix.$impact.' kg CO₂e';
    }

    // Scope untuk aktivitas pengurangan CO2
    public function scopeEcoFriendly($query)
    {
        return $query->where('co2_impact', '<', 0);
    }

    // Scope untuk aktivitas berdasarkan tanggal
    public function scopeDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('activity_date', [$startDate, $endDate]);
    }

    // Scope untuk aktivitas hari ini
    public function scopeToday($query)
    {
        return $query->whereDate('activity_date', today());
    }

    // Scope untuk aktivitas minggu ini
    public function scopeThisWeek($query)
    {
        return $query->whereBetween('activity_date', [
            now()->startOfWeek(),
            now()->endOfWeek(),
        ]);
    }

    // Scope untuk aktivitas bulan ini
    public function scopeThisMonth($query)
    {
        return $query->whereBetween('activity_date', [
            now()->startOfMonth(),
            now()->endOfMonth(),
        ]);
    }
}
