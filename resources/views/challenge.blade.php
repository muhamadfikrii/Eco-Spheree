<x-app-layout>
  <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white px-6 sm:px-10 pt-24 pb-16 relative" x-data="challengeCenter" style="pointer-events: auto;">
    
    <!-- Header with Navigation -->
    <div class="text-center mb-10 relative z-20">
      <h1 class="text-5xl font-extrabold text-green-400 mb-3" x-text="currentPage === 'challenges' ? '⚡ Challenge Center' : '🏆 Leaderboard'"></h1>
      <p class="text-gray-300 text-lg" x-text="currentPage === 'challenges' ? 'Complete missions, collect points, and climb to the top of the leaderboard!' : 'Check your ranking and compete with other EcoHeroes!'"></p>
      
      <!-- Navigation Tabs -->
      <div class="flex justify-center mt-6">
        <div class="inline-flex rounded-lg border border-slate-700 p-1 bg-slate-800">
          <button 
            @click="currentPage = 'challenges'" 
            class="px-4 py-2 rounded-lg text-sm font-medium transition-all"
            :class="currentPage === 'challenges' ? 'bg-green-600 text-white shadow' : 'text-gray-400 hover:text-white'"
          >
            Challenge Center
          </button>
          <button 
            @click="currentPage = 'leaderboard'" 
            class="px-4 py-2 rounded-lg text-sm font-medium transition-all"
            :class="currentPage === 'leaderboard' ? 'bg-green-600 text-white shadow' : 'text-gray-400 hover:text-white'"
          >
            Leaderboard
          </button>
        </div>
      </div>
    </div>

    <!-- Challenge Center Content -->
    <div x-show="currentPage === 'challenges'" class="relative z-10">
      <!-- User Stats -->
      <div class="flex flex-col sm:flex-row justify-between items-center mb-10 bg-slate-800 rounded-2xl p-5 border border-slate-700 shadow-lg">
        <div class="flex items-center gap-3">
          <img :src="userAvatar" class="w-12 h-12 rounded-full border border-green-500">
          <div>
            <p class="text-lg font-semibold">Hello, <span class="text-green-400" x-text="userName"></span>!</p>
            <p class="text-sm text-gray-400">Total Points: <span x-text="totalPoints"></span> 🪙</p>
            <div class="flex items-center mt-1">
              <div class="w-24 bg-slate-700 rounded-full h-2 mr-2">
                <div class="bg-gradient-to-r from-green-500 to-green-300 h-2 rounded-full" :style="'width: ' + progressPercentage + '%'"></div>
              </div>
              <span class="text-xs text-gray-400" x-text="userLevel"></span>
            </div>
          </div>
        </div>
        <div class="mt-4 sm:mt-0 flex gap-2">
          <button @click="showAchievements" class="bg-blue-600 hover:bg-blue-500 px-4 py-2 rounded-lg text-sm font-semibold flex items-center gap-1">
            <span>🏆</span> Achievements
          </button>
          <button @click="resetProgress" class="bg-red-600 hover:bg-red-500 px-4 py-2 rounded-lg text-sm font-semibold">Reset Progress</button>
        </div>
      </div>

      <!-- Progress Section -->
      <div class="bg-slate-800/50 rounded-2xl p-5 mb-8 border border-slate-700">
        <div class="flex justify-between items-center mb-3">
          <h2 class="text-xl font-bold text-green-400">Your Progress</h2>
          <span class="text-sm text-gray-400" x-text="completedMissions + '/' + totalMissions + ' Missions Completed'"></span>
        </div>
        <div class="w-full bg-slate-700 rounded-full h-3">
          <div class="bg-gradient-to-r from-green-500 to-green-300 h-3 rounded-full transition-all duration-500" :style="'width: ' + progressPercentage + '%'"></div>
        </div>
      </div>

      <!-- Mission Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <template x-for="mission in missions" :key="mission.id">
          <div class="relative bg-slate-800 border border-slate-700 rounded-2xl p-5 shadow-xl hover:shadow-green-500/20 transition-all duration-300 overflow-hidden transform hover:-translate-y-1"
               :class="{'ring-2 ring-green-500': mission.status === 'completed', 'ring-1 ring-slate-600': mission.status === 'pending'}">
            <!-- Animated border highlight -->
            <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-transparent opacity-0 hover:opacity-100 transition duration-500"></div>
            
            <!-- Badge for completed missions -->
            <div x-show="mission.status === 'completed'" class="absolute -top-2 -right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg">
              COMPLETED
            </div>
            
            <div class="relative z-10">
              <div class="flex items-center justify-between mb-3">
                <h2 class="text-xl font-semibold text-green-400" x-text="mission.title"></h2>
                <span class="text-sm text-yellow-400 font-bold" x-text="mission.points + ' pts'"></span>
              </div>
              <p class="text-gray-300 text-sm mb-4" x-text="mission.description"></p>
              
              <!-- Difficulty Indicator -->
              <div class="flex items-center mb-4">
                <span class="text-xs text-gray-400 mr-2">Difficulty Level:</span>
                <div class="flex">
                  <template x-for="i in 5" :key="i">
                    <div class="w-2 h-2 rounded-full mx-0.5" 
                         :class="i <= mission.difficulty ? 'bg-yellow-500' : 'bg-slate-600'"></div>
                  </template>
                </div>
              </div>

              <!-- Status -->
              <template x-if="mission.status === 'pending'">
                <div class="text-yellow-400 text-sm font-semibold mb-2 flex items-center">
                  <span class="w-2 h-2 bg-yellow-500 rounded-full mr-2 animate-pulse"></span>
                  Not Completed
                </div>
              </template>
              <template x-if="mission.status === 'completed'">
                <div class="text-green-400 text-sm font-semibold mb-2 flex items-center">
                  <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                  Completed on <span x-text="mission.completedDate" class="ml-1"></span>
                </div>
              </template>

              <!-- Action -->
              <div class="space-y-3">
                <template x-if="mission.status === 'pending'">
                  <div>
                    <label class="block text-gray-400 text-sm mb-1">Upload Proof:</label>
                    <input 
                      type="file" 
                      @change="completeMission(mission.id)" 
                      class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 focus:outline-none"
                      style="pointer-events: auto;"
                      accept="image/*">
                  </div>
                </template>

                <template x-if="mission.status === 'completed'">
                  <button disabled class="w-full bg-green-600/40 text-white font-semibold py-2 rounded-lg flex items-center justify-center gap-2">
                    <span>✅</span> Mission Completed
                  </button>
                </template>
              </div>
            </div>
          </div>
        </template>
      </div>
    </div>

    <!-- Leaderboard Content -->
    <div x-show="currentPage === 'leaderboard'" class="space-y-6 relative z-10">
      <!-- Filter Controls -->
      <div class="flex flex-col sm:flex-row justify-between items-center bg-slate-800 rounded-2xl p-5 border border-slate-700">
        <h2 class="text-xl font-bold text-green-400 mb-4 sm:mb-0">EcoHero Rankings</h2>
        <div class="flex gap-2">
          <select 
            x-model="selectedLocation" 
            @change="filterLeaderboard" 
            class="bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 focus:outline-none"
            style="pointer-events: auto;">
            <option value="all">All Locations</option>
            <template x-for="location in locations" :key="location">
              <option x-text="location" :value="location"></option>
            </template>
          </select>
          <button @click="refreshLeaderboard" class="bg-green-600 hover:bg-green-500 px-4 py-2 rounded-lg text-sm font-semibold">Refresh</button>
        </div>
      </div>

      <!-- Current User Rank Highlight -->
      <div class="bg-gradient-to-r from-green-600/30 to-green-400/30 rounded-2xl p-5 border border-green-500/50">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <div class="relative">
              <img :src="userAvatar" class="w-12 h-12 rounded-full border-2 border-green-500">
              <div class="absolute -bottom-1 -right-1 bg-green-500 text-white text-xs font-bold w-6 h-6 rounded-full flex items-center justify-center">
                <span x-text="currentUserRank"></span>
              </div>
            </div>
            <div>
              <p class="font-semibold text-green-300" x-text="userName"></p>
              <p class="text-sm text-gray-300">Points: <span x-text="totalPoints"></span> • <span x-text="userLocation"></span></p>
            </div>
          </div>
          <div class="text-right">
            <p class="text-2xl font-bold text-green-400" x-text="'#' + currentUserRank"></p>
            <p class="text-xs text-gray-400">Your Rank</p>
          </div>
        </div>
      </div>

      <!-- Leaderboard List -->
      <div class="bg-slate-800 rounded-2xl p-5 border border-slate-700">
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="text-left text-gray-400 border-b border-slate-700">
                <th class="pb-3 font-semibold">Rank</th>
                <th class="pb-3 font-semibold">EcoHero</th>
                <th class="pb-3 font-semibold">Location</th>
                <th class="pb-3 font-semibold text-right">Points</th>
                <th class="pb-3 font-semibold text-center">Missions</th>
              </tr>
            </thead>
            <tbody>
              <template x-for="(user, index) in filteredLeaderboard" :key="user.id">
                <tr class="border-b border-slate-700/50 last:border-0 hover:bg-slate-700/30 transition-colors"
                    :class="user.id === currentUserId ? 'bg-green-900/20' : ''">
                  <td class="py-4">
                    <div class="flex items-center">
                      <span x-text="index + 1" class="font-bold w-8 h-8 flex items-center justify-center rounded-full" 
                            :class="getRankBadgeClass(index + 1)"></span>
                    </div>
                  </td>
                  <td class="py-4">
                    <div class="flex items-center gap-3">
                      <img :src="user.avatar" class="w-10 h-10 rounded-full border" :class="user.id === currentUserId ? 'border-green-500' : 'border-slate-600'">
                      <div>
                        <p class="font-medium" :class="user.id === currentUserId ? 'text-green-400' : 'text-white'" x-text="user.name"></p>
                        <p class="text-xs text-gray-400" x-text="user.level"></p>
                      </div>
                    </div>
                  </td>
                  <td class="py-4">
                    <div class="flex items-center gap-2">
                      <span class="text-lg">📍</span>
                      <span x-text="user.location"></span>
                    </div>
                  </td>
                  <td class="py-4 text-right">
                    <span class="font-bold text-yellow-400" x-text="user.points"></span>
                    <span class="text-xs text-gray-400 block">points</span>
                  </td>
                  <td class="py-4 text-center">
                    <div class="flex flex-col items-center">
                      <span class="font-semibold" x-text="user.completedMissions + '/' + user.totalMissions"></span>
                      <div class="w-16 bg-slate-700 rounded-full h-1.5 mt-1">
                        <div class="bg-green-500 h-1.5 rounded-full" :style="'width: ' + (user.completedMissions / user.totalMissions * 100) + '%'"></div>
                      </div>
                    </div>
                  </td>
                </tr>
              </template>
            </tbody>
          </table>
        </div>
        
        <!-- Pagination -->
        <div class="flex justify-between items-center mt-6 pt-4 border-t border-slate-700">
          <div class="text-sm text-gray-400">
            Showing <span x-text="Math.min(filteredLeaderboard.length, 10)"></span> of <span x-text="filteredLeaderboard.length"></span> EcoHeroes
          </div>
          <div class="flex gap-2">
            <button @click="prevPage" :disabled="currentPageNum === 1" 
                    class="px-3 py-1 rounded-lg text-sm font-medium disabled:opacity-50 disabled:cursor-not-allowed bg-slate-700 hover:bg-slate-600">
              Previous
            </button>
            <button @click="nextPage" :disabled="currentPageNum * 10 >= filteredLeaderboard.length" 
                    class="px-3 py-1 rounded-lg text-sm font-medium disabled:opacity-50 disabled:cursor-not-allowed bg-slate-700 hover:bg-slate-600">
              Next
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Achievements Modal -->
    <template x-if="showAchievementsModal">
      <div 
        x-show="showAchievementsModal" 
        x-transition.opacity
        class="fixed inset-0 bg-black/70 flex items-center justify-center z-50 p-4" 
        @click="showAchievementsModal = false"
        style="display: none;"
        x-cloak>
        <div class="bg-slate-800 rounded-2xl p-6 max-w-md w-full border border-slate-700 max-h-[90vh] overflow-y-auto" @click.stop>
          <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold text-green-400">🏆 Your Achievements</h3>
            <button @click="showAchievementsModal = false" class="text-gray-400 hover:text-white">✕</button>
          </div>
          
          <div class="space-y-4">
            <template x-for="achievement in achievements" :key="achievement.id">
              <div class="flex items-center gap-3 p-3 bg-slate-700/50 rounded-lg"
                   :class="{'opacity-100': achievement.unlocked, 'opacity-50': !achievement.unlocked}">
                <div class="text-2xl" x-text="achievement.icon"></div>
                <div class="flex-1">
                  <h4 class="font-semibold" x-text="achievement.title"></h4>
                  <p class="text-xs text-gray-400" x-text="achievement.description"></p>
                </div>
                <div x-show="achievement.unlocked" class="text-green-400 text-lg">✓</div>
              </div>
            </template>
          </div>
        </div>
      </div>
    </template>
  </div>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('challengeCenter', () => ({
        // User data
        userName: '{{ auth()->user()->name ?? "EcoHero" }}',
        userAvatar: 'https://cdn-icons-png.flaticon.com/512/219/219983.png',
        userLocation: 'Jakarta',
        currentUserId: 1,
        
        // Navigation
        currentPage: 'challenges',
        
        // Progress tracking
        totalPoints: 0,
        completedMissions: 0,
        totalMissions: 6,
        userLevel: 'Beginner',
        progressPercentage: 0,
        
        // Leaderboard
        selectedLocation: 'all',
        locations: ['Jakarta', 'Bandung', 'Surabaya', 'Bali', 'Yogyakarta', 'Medan'],
        leaderboard: [],
        filteredLeaderboard: [],
        currentUserRank: 1,
        currentPageNum: 1,
        
        showAchievementsModal: false,
        
        missions: [
          { 
            id: 1, 
            title: 'Clean Up Your Neighborhood', 
            description: 'Collect plastic waste and properly dispose of it in recycling bins. Take before and after photos of the cleaned area.', 
            points: 20, 
            difficulty: 2,
            status: 'pending',
            completedDate: null
          },
          { 
            id: 2, 
            title: 'Plant a Tree', 
            description: 'Plant at least one tree in your community or backyard. Document the planting process and share its growth progress.', 
            points: 40, 
            difficulty: 3,
            status: 'pending',
            completedDate: null
          },
          { 
            id: 3, 
            title: 'Meat-Free Week Challenge', 
            description: 'Go completely meat-free for 7 consecutive days. Explore plant-based recipes and share your favorite meat-free meals.', 
            points: 30, 
            difficulty: 4,
            status: 'pending',
            completedDate: null
          },
          { 
            id: 4, 
            title: 'Sustainable Commute', 
            description: 'Use public transportation, bike, or walk instead of driving for all your trips over 3 days. Track your reduced carbon footprint.', 
            points: 25, 
            difficulty: 3,
            status: 'pending',
            completedDate: null
          },
          { 
            id: 5, 
            title: 'Environmental Education', 
            description: 'Create and share educational content about environmental conservation on your social media platforms. Reach at least 50 people.', 
            points: 15, 
            difficulty: 1,
            status: 'pending',
            completedDate: null
          },
          { 
            id: 6, 
            title: 'Water Conservation', 
            description: 'Reduce your daily water consumption by 25% for one week. Implement water-saving habits like shorter showers and fixing leaks.', 
            points: 35, 
            difficulty: 3,
            status: 'pending',
            completedDate: null
          },
        ],
        
        // Achievements data
        achievements: [
          { id: 1, title: 'Green Beginner', description: 'Complete your first mission', icon: '🌱', unlocked: false },
          { id: 2, title: 'Point Collector', description: 'Collect 50 points', icon: '🪙', unlocked: false },
          { id: 3, title: 'Eco Warrior', description: 'Complete 3 missions', icon: '🛡️', unlocked: false },
          { id: 4, title: 'Environmental Master', description: 'Complete all missions', icon: '🏆', unlocked: false },
          { id: 5, title: 'Community Leader', description: 'Reach top 10 in leaderboard', icon: '⭐', unlocked: false },
        ],

        // Initialize component
        init() {
          console.log('🚀 Challenge Center initialized');
          
          // Load saved data from localStorage
          const savedPoints = localStorage.getItem('ecoPoints');
          const savedMissions = localStorage.getItem('missions');
          const savedAchievements = localStorage.getItem('achievements');
          
          if (savedPoints) this.totalPoints = parseInt(savedPoints);
          
          // Force update mission texts to English while preserving status
          if (savedMissions) {
            const parsedMissions = JSON.parse(savedMissions);
            // Update mission texts while preserving status and completion data
            this.missions = this.missions.map(newMission => {
              const savedMission = parsedMissions.find(m => m.id === newMission.id);
              if (savedMission) {
                return {
                  ...savedMission,
                  title: newMission.title,
                  description: newMission.description,
                  points: newMission.points,
                  difficulty: newMission.difficulty
                };
              }
              return newMission;
            });
            
            // Save the updated missions back to localStorage
            localStorage.setItem('missions', JSON.stringify(this.missions));
          }
          
          if (savedAchievements) this.achievements = JSON.parse(savedAchievements);
          
          // Calculate progress
          this.calculateProgress();
          
          // Update achievements based on current progress
          this.updateAchievements();
          
          // Initialize leaderboard
          this.initializeLeaderboard();
          this.filterLeaderboard();

          // Force enable all inputs
          this.$nextTick(() => {
            document.querySelectorAll('input, select, button').forEach(el => {
              el.style.pointerEvents = 'auto';
              el.disabled = false;
            });
          });
        },
        
        // Initialize leaderboard with sample data
        initializeLeaderboard() {
          // Create sample leaderboard data with multiple users
          this.leaderboard = [
            // Current user
            { 
              id: this.currentUserId, 
              name: this.userName, 
              points: this.totalPoints, 
              location: this.userLocation, 
              avatar: this.userAvatar, 
              level: this.userLevel, 
              completedMissions: this.completedMissions, 
              totalMissions: this.totalMissions 
            },
            // Other users
            { id: 2, name: 'Budi Santoso', points: 145, location: 'Bandung', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', level: 'Eco Warrior', completedMissions: 4, totalMissions: 6 },
            { id: 3, name: 'Sari Indah', points: 132, location: 'Surabaya', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/6997/6997662.png', level: 'Eco Warrior', completedMissions: 4, totalMissions: 6 },
            { id: 4, name: 'Ahmad Rizki', points: 118, location: 'Jakarta', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/4333/4333609.png', level: 'Nature Lover', completedMissions: 3, totalMissions: 6 },
            { id: 5, name: 'Dewi Lestari', points: 95, location: 'Bali', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/6997/6997456.png', level: 'Nature Lover', completedMissions: 3, totalMissions: 6 },
            { id: 6, name: 'Rizky Pratama', points: 87, location: 'Yogyakarta', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/4140/4140048.png', level: 'Nature Lover', completedMissions: 2, totalMissions: 6 },
            { id: 7, name: 'Maya Sari', points: 76, location: 'Medan', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/6997/6997926.png', level: 'Beginner', completedMissions: 2, totalMissions: 6 },
            { id: 8, name: 'Fajar Nugroho', points: 65, location: 'Jakarta', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/4333/4333609.png', level: 'Beginner', completedMissions: 2, totalMissions: 6 },
            { id: 9, name: 'Citra Dewi', points: 54, location: 'Bandung', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/6997/6997662.png', level: 'Beginner', completedMissions: 1, totalMissions: 6 },
            { id: 10, name: 'Hendra Wijaya', points: 42, location: 'Surabaya', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/4140/4140048.png', level: 'Beginner', completedMissions: 1, totalMissions: 6 },
            { id: 11, name: 'John Green', points: 38, location: 'Bali', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/4333/4333609.png', level: 'Beginner', completedMissions: 1, totalMissions: 6 },
            { id: 12, name: 'Sarah Eco', points: 35, location: 'Yogyakarta', 
              avatar: 'https://cdn-icons-png.flaticon.com/512/6997/6997662.png', level: 'Beginner', completedMissions: 1, totalMissions: 6 },
          ];
          
          // Sort by points (descending)
          this.leaderboard.sort((a, b) => b.points - a.points);
        },
        
        // Filter leaderboard by location
        filterLeaderboard() {
          if (this.selectedLocation === 'all') {
            this.filteredLeaderboard = [...this.leaderboard];
          } else {
            this.filteredLeaderboard = this.leaderboard.filter(user => 
              user.location === this.selectedLocation
            );
          }
          
          // Update current user rank
          const currentUserIndex = this.filteredLeaderboard.findIndex(user => user.id === this.currentUserId);
          this.currentUserRank = currentUserIndex !== -1 ? currentUserIndex + 1 : this.filteredLeaderboard.length + 1;
          
          // Reset to first page when filtering
          this.currentPageNum = 1;
        },
        
        // Refresh leaderboard data
        refreshLeaderboard() {
          // Update current user data in leaderboard
          const currentUserIndex = this.leaderboard.findIndex(user => user.id === this.currentUserId);
          if (currentUserIndex !== -1) {
            this.leaderboard[currentUserIndex].points = this.totalPoints;
            this.leaderboard[currentUserIndex].level = this.userLevel;
            this.leaderboard[currentUserIndex].completedMissions = this.completedMissions;
          }
          
          // Re-sort leaderboard
          this.leaderboard.sort((a, b) => b.points - a.points);
          this.filterLeaderboard();
          
          this.showToast('Leaderboard updated!');
        },
        
        // Get badge class for rank
        getRankBadgeClass(rank) {
          if (rank === 1) return 'bg-yellow-500 text-yellow-900';
          if (rank === 2) return 'bg-gray-400 text-gray-900';
          if (rank === 3) return 'bg-amber-700 text-amber-100';
          return 'bg-slate-700 text-gray-300';
        },
        
        // Pagination methods
        nextPage() {
          if (this.currentPageNum * 10 < this.filteredLeaderboard.length) {
            this.currentPageNum++;
          }
        },
        
        prevPage() {
          if (this.currentPageNum > 1) {
            this.currentPageNum--;
          }
        },
        
        // Calculate user progress
        calculateProgress() {
          this.completedMissions = this.missions.filter(m => m.status === 'completed').length;
          this.totalMissions = this.missions.length;
          this.progressPercentage = (this.completedMissions / this.totalMissions) * 100;
          
          // Update user level based on points
          if (this.totalPoints >= 150) {
            this.userLevel = 'Eco Master';
          } else if (this.totalPoints >= 80) {
            this.userLevel = 'Eco Warrior';
          } else if (this.totalPoints >= 40) {
            this.userLevel = 'Nature Lover';
          } else {
            this.userLevel = 'Beginner';
          }
        },
        
        // Complete a mission
        completeMission(id) {
          const mission = this.missions.find(m => m.id === id);
          if (mission && mission.status === 'pending') {
            mission.status = 'completed';
            mission.completedDate = new Date().toLocaleDateString('en-US');
            this.totalPoints += mission.points;
            
            // Update progress
            this.calculateProgress();
            
            // Update achievements
            this.updateAchievements();

            // Save to localStorage
            localStorage.setItem('ecoPoints', this.totalPoints);
            localStorage.setItem('missions', JSON.stringify(this.missions));
            localStorage.setItem('achievements', JSON.stringify(this.achievements));

            // Update leaderboard
            this.refreshLeaderboard();

            // Show success message
            this.showToast(`🎉 Mission "${mission.title}" completed! +${mission.points} pts`);
          }
        },
        
        // Update achievements status
        updateAchievements() {
          // Achievement 1: Complete first mission
          this.achievements[0].unlocked = this.completedMissions >= 1;
          
          // Achievement 2: Collect 50 points
          this.achievements[1].unlocked = this.totalPoints >= 50;
          
          // Achievement 3: Complete 3 missions
          this.achievements[2].unlocked = this.completedMissions >= 3;
          
          // Achievement 4: Complete all missions
          this.achievements[3].unlocked = this.completedMissions === this.totalMissions;
          
          // Achievement 5: Reach top 10 in leaderboard
          this.achievements[4].unlocked = this.currentUserRank <= 10;
        },
        
        // Show achievements modal
        showAchievements() {
          this.showAchievementsModal = true;
        },
        
        // Reset all progress
        resetProgress() {
          if (confirm('Are you sure you want to reset all progress? This action cannot be undone.')) {
            this.missions.forEach(m => {
              m.status = 'pending';
              m.completedDate = null;
            });
            
            this.totalPoints = 0;
            this.completedMissions = 0;
            this.progressPercentage = 0;
            this.userLevel = 'Beginner';
            
            this.achievements.forEach(a => a.unlocked = false);
            
            localStorage.removeItem('ecoPoints');
            localStorage.removeItem('missions');
            localStorage.removeItem('achievements');
            
            // Update leaderboard
            this.refreshLeaderboard();
            
            this.showToast('Progress successfully reset');
          }
        },
        
        // Show toast notification
        showToast(msg) {
          const toast = document.createElement('div');
          toast.textContent = msg;
          toast.className = 'fixed bottom-6 right-6 bg-green-600 px-5 py-3 rounded-xl shadow-lg animate-fade-in z-50';
          document.body.appendChild(toast);
          setTimeout(() => {
            toast.classList.add('animate-fade-out');
            setTimeout(() => toast.remove(), 500);
          }, 2500);
        }
      }))
    })
  </script>

  <style>
    @keyframes fade-in { 
      from { opacity: 0; transform: translateY(10px); } 
      to { opacity: 1; transform: translateY(0); } 
    }
    
    @keyframes fade-out { 
      from { opacity: 1; transform: translateY(0); } 
      to { opacity: 0; transform: translateY(10px); } 
    }
    
    .animate-fade-in { animation: fade-in 0.5s ease-out; }
    .animate-fade-out { animation: fade-out 0.5s ease-out; }

    .relative.z-10 {
      position: relative;
      z-index: 10 !important;
    }

    .relative.z-20 {
      position: relative;
      z-index: 20 !important;
    }
ak aktif */
    .fixed[style*="display: none"] {
      display: none !important;
    }

    input, select, button, textarea {
      pointer-events: auto !important;
    }

    /* Mobile optimization */
    @media (max-width: 768px) {
      button, input, select, textarea {
        min-height: 44px;
      }
    }
  </style>
</x-app-layout>