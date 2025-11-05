<!-- Report Modal -->
<div x-show="showReportModal"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 bg-black bg-opacity-60 z-50 flex items-center justify-center p-4"
    @click.self="showReportModal = false">
    <div class="bg-gray-800 w-full max-w-lg rounded-2xl shadow-2xl p-6 border border-gray-700 transform transition-all"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold text-white flex items-center">
                <i class="fas fa-exclamation-triangle text-yellow-400 mr-2"></i>
                Report Environmental Issue
            </h3>
            <button class="text-gray-400 hover:text-white transition-colors" @click="showReportModal = false">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <form wire:submit.prevent="submitReport" class="space-y-4">
            <div>
                <label class="block text-gray-300 text-sm mb-2">Issue Type</label>
                <select wire:model="reportForm.issueType" class="w-full bg-gray-700 text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none">
                    <option>Air Pollution</option>
                    <option>Water Pollution</option>
                    <option>Illegal Dumping</option>
                    <option>Deforestation</option>
                    <option>Wildlife Concern</option>
                    <option>Other</option>
                </select>
                @error('reportForm.issueType') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-300 text-sm mb-2">Description</label>
                <textarea wire:model="reportForm.description" class="w-full bg-gray-700 text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" rows="3" placeholder="Describe the issue..."></textarea>
                @error('reportForm.description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-300 text-sm mb-2">Location</label>
                <div class="flex items-center gap-2">
                    <input wire:model="reportForm.location" type="text" class="flex-1 bg-gray-700 text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" placeholder="Current location">
                    <button type="button" class="bg-green-600 hover:bg-green-700 text-white px-3 py-2 rounded-lg transition-colors transform hover:scale-105" @click="getCurrentLocation">
                        <i class="fas fa-map-marker-alt"></i>
                    </button>
                </div>
                @error('reportForm.location') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-4 py-2 rounded-lg w-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                <span wire:loading.remove>Submit Report</span>
                <span wire:loading class="flex items-center justify-center">
                    <i class="fas fa-spinner fa-spin mr-2"></i> Submitting...
                </span>
            </button>
        </form>
    </div>
</div>

<!-- Activity Modal -->
<div x-show="showActivityModal"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 bg-black bg-opacity-60 z-50 flex items-center justify-center p-4"
    @click.self="showActivityModal = false">
    <div class="bg-gray-800 w-full max-w-lg rounded-2xl shadow-2xl p-6 border border-gray-700 transform transition-all"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold text-white flex items-center">
                <i class="fas fa-leaf text-green-400 mr-2"></i>
                Log Environmental Activity
            </h3>
            <button class="text-gray-400 hover:text-white transition-colors" @click="showActivityModal = false">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <form wire:submit.prevent="submitActivity" class="space-y-4">
            <div>
                <label class="block text-gray-300 text-sm mb-2">Activity Type</label>
                <div class="grid grid-cols-3 gap-2">
                    <button type="button"
                        @click="activityForm.type = 'transport'"
                        :class="activityForm.type === 'transport' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                        class="p-2 rounded-lg text-sm transition-all">
                        🚶 Transport
                    </button>
                    <button type="button"
                        @click="activityForm.type = 'food'"
                        :class="activityForm.type === 'food' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                        class="p-2 rounded-lg text-sm transition-all">
                        🍛 Food
                    </button>
                    <button type="button"
                        @click="activityForm.type = 'energy'"
                        :class="activityForm.type === 'energy' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                        class="p-2 rounded-lg text-sm transition-all">
                        💡 Energy
                    </button>
                    <button type="button"
                        @click="activityForm.type = 'waste'"
                        :class="activityForm.type === 'waste' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                        class="p-2 rounded-lg text-sm transition-all">
                        ♻️ Waste
                    </button>
                    <button type="button"
                        @click="activityForm.type = 'water'"
                        :class="activityForm.type === 'water' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                        class="p-2 rounded-lg text-sm transition-all">
                        💧 Water
                    </button>
                    <button type="button"
                        @click="activityForm.type = 'other'"
                        :class="activityForm.type === 'other' ? 'bg-green-600 text-white' : 'bg-gray-700 text-gray-300'"
                        class="p-2 rounded-lg text-sm transition-all">
                        🌱 Other
                    </button>
                </div>
                @error('activityForm.type') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-300 text-sm mb-2">Description</label>
                <textarea wire:model="activityForm.description" class="w-full bg-gray-700 text-white rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 focus:outline-none" rows="3" placeholder="Describe your activity..."></textarea>
                @error('activityForm.description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-gray-300 text-sm mb-2">CO₂ Impact (kg)</label>
                <div class="flex items-center">
                    <input wire:model="activityForm.co2_impact" type="range" min="-10" max="10" step="0.1" class="flex-1">
                    <span class="ml-3 text-white w-12 text-right" x-text="activityForm.co2_impact"></span>
                </div>
                <p class="text-xs text-gray-400 mt-1">Negative values = CO₂ saved, Positive values = CO₂ emitted</p>
            </div>

            <button type="submit" class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-4 py-2 rounded-lg w-full transition-all duration-300 transform hover:scale-105 shadow-lg">
                <span wire:loading.remove>Log Activity</span>
                <span wire:loading class="flex items-center justify-center">
                    <i class="fas fa-spinner fa-spin mr-2"></i> Logging...
                </span>
            </button>
        </form>
    </div>
</div>

<!-- Challenge Details Modal -->
<div x-show="showChallengeModal"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 bg-black bg-opacity-60 z-50 flex items-center justify-center p-4"
    @click.self="showChallengeModal = false">
    <div class="bg-gray-800 w-full max-w-2xl rounded-2xl shadow-2xl p-6 border border-gray-700 transform transition-all"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold text-white flex items-center">
                <i class="fas fa-trophy text-blue-400 mr-2"></i>
                Challenge Details
            </h3>
            <button class="text-gray-400 hover:text-white transition-colors" @click="showChallengeModal = false">
                <i class="fas fa-times"></i>
            </button>
        </div>

        @if($selectedChallenge)
        <div class="space-y-4">
            <div class="relative h-48 w-full overflow-hidden rounded-lg">
                <img src="{{ $selectedChallenge['image_url'] }}" alt="{{ $selectedChallenge['title'] }}"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-4">
                    <h4 class="text-2xl font-bold text-white">{{ $selectedChallenge['title'] }}</h4>
                    <div class="flex items-center mt-2">
                        <span class="text-xs px-2 py-1 rounded-full"
                            :class="{
                                'bg-green-900/30 text-green-400': '{{ $selectedChallenge['difficulty'] }}' === 'easy',
                                'bg-yellow-900/30 text-yellow-400': '{{ $selectedChallenge['difficulty'] }}' === 'medium',
                                'bg-red-900/30 text-red-400': '{{ $selectedChallenge['difficulty'] }}' === 'hard'
                            }">
                            {{ $selectedChallenge['difficulty'] }}
                        </span>
                        <span class="text-xs text-gray-300 ml-2">{{ $selectedChallenge['category'] }}</span>
                    </div>
                </div>
            </div>

            <div>
                <p class="text-gray-300">{{ $selectedChallenge['description'] }}</p>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-700/30 p-3 rounded-lg">
                    <div class="flex items-center text-gray-400 text-sm mb-1">
                        <i class="fas fa-users mr-2"></i>
                        Participants
                    </div>
                    <div class="text-xl font-semibold text-white">{{ $selectedChallenge['participants_count'] }} / {{ $selectedChallenge['target_participants'] }}</div>
                </div>
                <div class="bg-gray-700/30 p-3 rounded-lg">
                    <div class="flex items-center text-gray-400 text-sm mb-1">
                        <i class="fas fa-clock mr-2"></i>
                        Time Left
                    </div>
                    <div class="text-xl font-semibold text-white">{{ $selectedChallenge['time_left'] }}</div>
                </div>
                <div class="bg-gray-700/30 p-3 rounded-lg">
                    <div class="flex items-center text-gray-400 text-sm mb-1">
                        <i class="fas fa-coins mr-2"></i>
                        Reward
                    </div>
                    <div class="text-xl font-semibold text-white">{{ $selectedChallenge['points_reward'] }} pts</div>
                </div>
                <div class="bg-gray-700/30 p-3 rounded-lg">
                    <div class="flex items-center text-gray-400 text-sm mb-1">
                        <i class="fas fa-medal mr-2"></i>
                        Badge
                    </div>
                    <div class="text-xl font-semibold text-white">{{ $selectedChallenge['badge_reward'] }}</div>
                </div>
            </div>

            @if($selectedChallenge['is_joined'])
            <div>
                <div class="flex justify-between items-center mb-1">
                    <span class="text-sm text-gray-400">Your Progress</span>
                    <span class="text-sm text-white">{{ $selectedChallenge['user_progress'] }}%</span>
                </div>
                <div class="w-full bg-gray-700 rounded-full h-2">
                    <div class="bg-green-500 h-2 rounded-full transition-all duration-500"
                        style="width: {{ $selectedChallenge['user_progress'] }}%"></div>
                </div>
            </div>
            @endif

            <div class="flex justify-end space-x-3">
                <button class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg transition-colors" @click="showChallengeModal = false">
                    Close
                </button>
                @if(!$selectedChallenge['is_joined'])
                <button wire:click="joinChallenge({{ $selectedChallenge['id'] }})"
                    class="bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    Join Challenge
                </button>
                @endif
            </div>
        </div>
        @endif
    </div>
</div>

<!-- Notification -->
<div x-show="showNotification"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-y-full"
    x-transition:enter-end="opacity-100 transform translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 transform translate-y-0"
    x-transition:leave-end="opacity-0 transform translate-y-full"
    class="fixed bottom-6 right-6 z-[1200]">
    <div class="flex items-center p-4 bg-gray-800 rounded-lg shadow-lg border-l-4 transform transition-all duration-300 hover:scale-105"
        :class="{
        'border-green-500': notificationType === 'success',
        'border-yellow-500': notificationType === 'warning',
        'border-red-500': notificationType === 'error',
        'border-blue-500': notificationType === 'info'
        }">
        <div class="flex-shrink-0">
            <i class="fas fa-check-circle text-green-400" x-show="notificationType === 'success'"></i>
            <i class="fas fa-exclamation-triangle text-yellow-400" x-show="notificationType === 'warning'"></i>
            <i class="fas fa-times-circle text-red-400" x-show="notificationType === 'error'"></i>
            <i class="fas fa-info-circle text-blue-400" x-show="notificationType === 'info'"></i>
        </div>
        <div class="ml-3">
            <p class="text-sm text-white" x-text="notificationMessage"></p>
        </div>
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button type="button" @click="showNotification = false" class="inline-flex text-gray-400 hover:text-gray-300 rounded-md p-1.5 focus:outline-none">
                    <span class="sr-only">Dismiss</span>
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
</div>
