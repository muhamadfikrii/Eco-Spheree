<?php

namespace App\Http\Controllers;

use App\Models\RewardRedemption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RewardController extends Controller
{
    /**
     * Redeem a reward using eco-points
     */
    public function redeem(Request $request)
    {
        $request->validate([
            'reward_type' => 'required|string|in:shopping_voucher_50k,concert_ticket,eco_event_ticket,workshop_ticket,planting_event_ticket,beach_cleanup_ticket,recycling_workshop_ticket,green_market_ticket,eco_film_festival_ticket,climate_action_seminar_ticket',
        ]);

        $user = Auth::user();
        $rewardType = $request->reward_type;

        $rewards = [
            'shopping_voucher_50k' => ['cost' => 50, 'name' => 'Shopping Voucher Rp 50.000'],
            'concert_ticket' => ['cost' => 100, 'name' => 'Eco-Friendly Concert Ticket'],
            'eco_event_ticket' => ['cost' => 150, 'name' => 'Environmental Event Ticket'],
            'workshop_ticket' => ['cost' => 200, 'name' => 'Sustainability Workshop Ticket'],
            'planting_event_ticket' => ['cost' => 250, 'name' => 'Tree Planting Event Ticket'],
            'beach_cleanup_ticket' => ['cost' => 300, 'name' => 'Beach Cleanup Event Ticket'],
            'recycling_workshop_ticket' => ['cost' => 350, 'name' => 'Recycling Workshop Ticket'],
            'green_market_ticket' => ['cost' => 400, 'name' => 'Green Market Event Ticket'],
            'eco_film_festival_ticket' => ['cost' => 450, 'name' => 'Eco Film Festival Ticket'],
            'climate_action_seminar_ticket' => ['cost' => 500, 'name' => 'Climate Action Seminar Ticket'],
        ];

        if (!isset($rewards[$rewardType])) {
            return response()->json(['success' => false, 'message' => 'Invalid reward type.'], 400);
        }

        $reward = $rewards[$rewardType];

        if ($user->eco_points < $reward['cost']) {
            return response()->json(['success' => false, 'message' => 'Insufficient eco-points.'], 400);
        }

        // Deduct points
        $user->eco_points -= $reward['cost'];
        $user->save();

        // Create redemption record
        RewardRedemption::create([
            'user_id' => $user->id,
            'reward_type' => $rewardType,
            'reward_name' => $reward['name'],
            'points_spent' => $reward['cost'],
            'reward_details' => [
                'description' => $this->getRewardDescription($rewardType),
                'validity' => 'Valid for 3 months from redemption date',
                'redemption_code' => 'ECO-' . strtoupper(uniqid()),
                'icon' => $this->getRewardIcon($rewardType),
            ],
            'redeemed_at' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Reward redeemed successfully! Check your redemption history below.',
            'reward_name' => $reward['name'],
            'points_deducted' => $reward['cost'],
            'remaining_points' => $user->eco_points
        ]);
    }

    /**
     * Get reward description
     */
    private function getRewardDescription(string $rewardType): string
    {
        $descriptions = [
            'shopping_voucher_50k' => 'Rp 50.000 shopping voucher for eco-friendly products',
            'concert_ticket' => 'Free ticket to eco-friendly music concert',
            'eco_event_ticket' => 'Entry ticket to environmental awareness event',
            'workshop_ticket' => 'Access to sustainability workshop session',
            'planting_event_ticket' => 'Participation ticket for community tree planting',
            'beach_cleanup_ticket' => 'Entry to organized beach cleanup activity',
            'recycling_workshop_ticket' => 'Hands-on recycling workshop participation',
            'green_market_ticket' => 'Access to eco-friendly products market',
            'eco_film_festival_ticket' => 'Entry to environmental documentary film festival',
            'climate_action_seminar_ticket' => 'Access to climate change seminar and discussion',
        ];

        return $descriptions[$rewardType] ?? 'Eco-friendly reward';
    }

    /**
     * Get reward icon
     */
    private function getRewardIcon(string $rewardType): string
    {
        $icons = [
            'shopping_voucher_50k' => '🛒',
            'concert_ticket' => '🎵',
            'eco_event_ticket' => '🌱',
            'workshop_ticket' => '🎓',
            'planting_event_ticket' => '🌳',
            'beach_cleanup_ticket' => '🏖️',
            'recycling_workshop_ticket' => '♻️',
            'green_market_ticket' => '🛍️',
            'eco_film_festival_ticket' => '🎬',
            'climate_action_seminar_ticket' => '🌍',
        ];

        return $icons[$rewardType] ?? '🎁';
    }
}
