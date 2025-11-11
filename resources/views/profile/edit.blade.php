<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="mt-20 py-20 z-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
            <!-- Eco Progress Section -->
            <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-gray-800 dark:to-gray-700 rounded-xl border border-gray-200 dark:border-gray-600 overflow-hidden shadow-sm">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">🌱 Eco Progress</h3>
                        <a href="{{ route('challenge.center') }}" class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg transition-colors">
                            🎯 Go to Challenge Center
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <!-- Total Points -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 text-center shadow-sm">
                            <div class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">{{ auth()->user()->eco_points }}</div>
                            <div class="text-gray-600 dark:text-gray-400">Total Points</div>
                        </div>

                        <!-- Current Level -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 text-center shadow-sm">
                            <div class="text-4xl font-bold text-green-600 dark:text-green-400 mb-2">{{ auth()->user()->eco_level }}</div>
                            <div class="text-gray-600 dark:text-gray-400">Current Level</div>
                        </div>

                        <!-- Missions Completed -->
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 text-center shadow-sm">
                            <div class="text-4xl font-bold text-purple-600 dark:text-purple-400 mb-2">{{ auth()->user()->challenges_completed }}/6</div>
                            <div class="text-gray-600 dark:text-gray-400">Missions Completed</div>
                        </div>
                    </div>

                    <!-- Progress Bar -->
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm">
                        <div class="flex justify-between text-sm text-gray-600 dark:text-gray-400 mb-2">
                            <span>Overall Progress</span>
                            <span>{{ auth()->user()->challenges_completed }}/6 missions completed</span>
                        </div>
                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-4">
                            <div class="bg-gradient-to-r from-green-400 to-blue-500 h-4 rounded-full transition-all duration-500"
                                 style="width: {{ auth()->user()->challenges_completed > 0 ? (auth()->user()->challenges_completed / 6) * 100 : 0 }}%"></div>
                        </div>
                    </div>

                    <!-- Achievements Preview -->
                    @php
                        $achievements = auth()->user()->achievements_unlocked ?? [];
                        $totalAchievements = 5;
                        $unlockedCount = count($achievements);
                    @endphp
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm mt-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">🏆 Achievements</h4>
                            <span class="text-sm text-gray-600 dark:text-gray-400">{{ $unlockedCount }}/{{ $totalAchievements }} unlocked</span>
                        </div>
                        <div class="flex space-x-4">
                            @php
                                $achievementIcons = [
                                    'first_mission' => '🌱',
                                    'point_collector' => '🪙',
                                    'eco_warrior' => '🛡️',
                                    'eco_master' => '🏆',
                                    'community_leader' => '⭐'
                                ];
                            @endphp
                            @foreach($achievementIcons as $key => $icon)
                                <div class="text-center">
                                    <div class="text-2xl mb-1 {{ isset($achievements[$key]) ? 'opacity-100' : 'opacity-30 grayscale' }}">
                                        {{ $icon }}
                                    </div>
                                    <div class="text-xs text-gray-500 dark:text-gray-400">
                                        {{ isset($achievements[$key]) ? '✓' : '○' }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Update Profile Information -->
            <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-600 overflow-hidden shadow-sm">
                <div class="w-full mx-auto">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-600 overflow-hidden shadow-sm">
                <div class="w-full mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account -->
            <div class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-600 overflow-hidden shadow-sm">
                <div class="w-full mx-auto">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>