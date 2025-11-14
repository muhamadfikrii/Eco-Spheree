<?php

namespace Database\Seeders;

use App\Models\EcoChallenge;
use Illuminate\Database\Seeder;

class EcoChallengeSeeder extends Seeder
{
    public function run(): void
    {
        $challenges = [
            [
                'title' => 'Clean Up Your Neighborhood',
                'description' => 'Collect plastic waste and properly dispose of it in recycling bins. Take before and after photos of the cleaned area.',
                'category' => 'waste_management',
                'target_participants' => 100,
                'points_reward' => 20,
                'badge_reward' => 'Waste Warrior',
                'start_date' => now(),
                'end_date' => now()->addMonths(3),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1605600659908-0ef719419d41?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
            [
                'title' => 'Plant a Tree',
                'description' => 'Plant at least one tree in your community or backyard. Document the planting process and share its growth progress.',
                'category' => 'reforestation',
                'target_participants' => 200,
                'points_reward' => 40,
                'badge_reward' => 'Tree Guardian',
                'start_date' => now(),
                'end_date' => now()->addMonths(6),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
            [
                'title' => 'Meat-Free Week Challenge',
                'description' => 'Go completely meat-free for 7 consecutive days. Explore plant-based recipes and share your favorite meat-free meals.',
                'category' => 'sustainable_eating',
                'target_participants' => 150,
                'points_reward' => 30,
                'badge_reward' => 'Plant Pioneer',
                'start_date' => now(),
                'end_date' => now()->addMonths(2),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1540420773420-3366772f4999?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
            [
                'title' => 'Sustainable Commute',
                'description' => 'Use public transportation, bike, or walk instead of driving for all your trips over 3 days. Track your reduced carbon footprint.',
                'category' => 'transportation',
                'target_participants' => 120,
                'points_reward' => 25,
                'badge_reward' => 'Green Commuter',
                'start_date' => now(),
                'end_date' => now()->addMonths(4),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
            [
                'title' => 'Environmental Education',
                'description' => 'Create and share educational content about environmental conservation on your social media platforms. Reach at least 50 people.',
                'category' => 'education',
                'target_participants' => 80,
                'points_reward' => 15,
                'badge_reward' => 'Eco Educator',
                'start_date' => now(),
                'end_date' => now()->addMonths(3),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
            [
                'title' => 'Water Conservation',
                'description' => 'Reduce your daily water consumption by 25% for one week. Implement water-saving habits like shorter showers and fixing leaks.',
                'category' => 'water_conservation',
                'target_participants' => 90,
                'points_reward' => 35,
                'badge_reward' => 'Water Guardian',
                'start_date' => now(),
                'end_date' => now()->addMonths(2),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
            [
                'title' => 'Zero Waste Day',
                'description' => 'Go an entire day without producing any waste. Compost food scraps, reuse containers, and avoid single-use plastics.',
                'category' => 'waste_management',
                'target_participants' => 110,
                'points_reward' => 45,
                'badge_reward' => 'Zero Hero',
                'start_date' => now(),
                'end_date' => now()->addMonths(1),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
            [
                'title' => 'Home Energy Efficiency',
                'description' => 'Conduct an energy audit of your home. Identify areas for improvement and implement at least 3 energy-saving changes.',
                'category' => 'energy_efficiency',
                'target_participants' => 70,
                'points_reward' => 28,
                'badge_reward' => 'Energy Expert',
                'start_date' => now(),
                'end_date' => now()->addMonths(3),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
            [
                'title' => 'Reduce Plastic Use',
                'description' => 'Avoid using single-use plastics for an entire week. Use reusable bags, bottles, and containers instead.',
                'category' => 'waste_management',
                'target_participants' => 130,
                'points_reward' => 25,
                'badge_reward' => 'Plastic Free',
                'start_date' => now(),
                'end_date' => now()->addMonths(2),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1605600659908-0ef719419d41?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
            [
                'title' => 'Community Garden',
                'description' => 'Start or join a community garden project. Grow vegetables and share the harvest with neighbors.',
                'category' => 'reforestation',
                'target_participants' => 60,
                'points_reward' => 50,
                'badge_reward' => 'Garden Guardian',
                'start_date' => now(),
                'end_date' => now()->addMonths(4),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
            [
                'title' => 'Office Energy Savings',
                'description' => 'Implement energy-saving measures in your workplace. Turn off unused equipment, optimize lighting, and encourage sustainable practices.',
                'category' => 'energy_efficiency',
                'target_participants' => 50,
                'points_reward' => 32,
                'badge_reward' => 'Office Eco Warrior',
                'start_date' => now(),
                'end_date' => now()->addMonths(2),
                'status' => 'active',
                'image_url' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=400',
                'requirements' => [
                    'photo_required' => true,
                    'description_required' => true,
                    'min_participants' => 1,
                ],
            ],
        ];

        foreach ($challenges as $challenge) {
            EcoChallenge::create($challenge);
        }
    }
}
