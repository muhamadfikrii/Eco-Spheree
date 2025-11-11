<x-app-layout>
  <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white px-6 sm:px-10 pt-24 pb-16" x-data="challengeCenter">
    
    <!-- Header -->
    <div class="text-center mb-10">
      <h1 class="text-5xl font-extrabold text-green-400 mb-3">⚡ Challenge Center</h1>
      <p class="text-gray-300 text-lg">Selesaikan misi, kumpulkan poin, dan naik ke puncak leaderboard!</p>
    </div>

    <!-- User Stats -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-10 bg-slate-800 rounded-2xl p-5 border border-slate-700 shadow-lg">
      <div class="flex items-center gap-3">
        <img :src="userAvatar" class="w-12 h-12 rounded-full border border-green-500">
        <div>
          <p class="text-lg font-semibold">Halo, <span class="text-green-400" x-text="userName"></span>!</p>
          <p class="text-sm text-gray-400">Total Poin: <span x-text="totalPoints"></span> 🪙</p>
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
          <span>🏆</span> Pencapaian
        </button>
        <button @click="resetProgress" class="bg-red-600 hover:bg-red-500 px-4 py-2 rounded-lg text-sm font-semibold">Reset Progress</button>
      </div>
    </div>

    <!-- Progress Section -->
    <div class="bg-slate-800/50 rounded-2xl p-5 mb-8 border border-slate-700">
      <div class="flex justify-between items-center mb-3">
        <h2 class="text-xl font-bold text-green-400">Progress Kamu</h2>
        <span class="text-sm text-gray-400" x-text="completedMissions + '/' + totalMissions + ' Misi Selesai'"></span>
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
            SELESAI
          </div>
          
          <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
              <h2 class="text-xl font-semibold text-green-400" x-text="mission.title"></h2>
              <span class="text-sm text-yellow-400 font-bold" x-text="mission.points + ' pts'"></span>
            </div>
            <p class="text-gray-300 text-sm mb-4" x-text="mission.description"></p>
            
            <!-- Difficulty Indicator -->
            <div class="flex items-center mb-4">
              <span class="text-xs text-gray-400 mr-2">Tingkat Kesulitan:</span>
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
                Belum Selesai
              </div>
            </template>
            <template x-if="mission.status === 'completed'">
              <div class="text-green-400 text-sm font-semibold mb-2 flex items-center">
                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                Selesai pada <span x-text="mission.completedDate" class="ml-1"></span>
              </div>
            </template>

            <!-- Action -->
            <div class="space-y-3">
              <template x-if="mission.status === 'pending'">
                <div>
                  <label class="block text-gray-400 text-sm mb-1">Upload Bukti:</label>
                  <div class="flex gap-2">
                    <input type="file" @change="completeMission(mission.id)" class="flex-1 bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm">
                    <button @click="skipMission(mission.id)" class="bg-slate-700 hover:bg-slate-600 px-3 py-2 rounded-lg text-sm">
                      Skip
                    </button>
                  </div>
                </div>
              </template>

              <template x-if="mission.status === 'completed'">
                <button disabled class="w-full bg-green-600/40 text-white font-semibold py-2 rounded-lg flex items-center justify-center gap-2">
                  <span>✅</span> Misi Terselesaikan
                </button>
              </template>
            </div>
          </div>
        </div>
      </template>
    </div>

    <!-- Achievements Modal -->
    <div x-show="showAchievementsModal" class="fixed inset-0 bg-black/70 flex items-center justify-center z-50 p-4" @click="showAchievementsModal = false">
      <div class="bg-slate-800 rounded-2xl p-6 max-w-md w-full border border-slate-700" @click.stop>
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-xl font-bold text-green-400">🏆 Pencapaian Kamu</h3>
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

    <!-- Leaderboard Button -->
    <div class="mt-12 text-center">
      <a href="/leaderboard" class="bg-green-600 hover:bg-green-500 px-6 py-3 rounded-xl font-bold text-lg transition-all duration-300 shadow-lg hover:shadow-green-500/30 inline-flex items-center gap-2">
        🏆 Lihat Leaderboard
      </a>
    </div>
  </div>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('challengeCenter', () => ({
        // User data - in a real app, this would come from your backend
        userName: '{{ auth()->user()->name ?? "EcoHero" }}',
        userAvatar: 'https://cdn-icons-png.flaticon.com/512/219/219983.png',
        
        // Progress tracking
        totalPoints: 0,
        completedMissions: 0,
        totalMissions: 5,
        userLevel: 'Pemula',
        progressPercentage: 0,
        
        // UI State
        showAchievementsModal: false,
        
        // Missions data
        missions: [
          { 
            id: 1, 
            title: 'Bersihkan Area Sekitar Rumah', 
            description: 'Kumpulkan sampah plastik dan buang ke tempat daur ulang.', 
            points: 20, 
            difficulty: 2,
            status: 'pending',
            completedDate: null
          },
          { 
            id: 2, 
            title: 'Tanam Pohon', 
            description: 'Tanam minimal 1 pohon di lingkungan rumahmu.', 
            points: 40, 
            difficulty: 3,
            status: 'pending',
            completedDate: null
          },
          { 
            id: 3, 
            title: 'Kurangi Daging Selama Seminggu', 
            description: 'Ganti menu daging dengan sayuran atau protein nabati.', 
            points: 30, 
            difficulty: 4,
            status: 'pending',
            completedDate: null
          },
          { 
            id: 4, 
            title: 'Gunakan Transportasi Umum', 
            description: 'Gunakan transportasi umum atau bersepeda selama 3 hari.', 
            points: 25, 
            difficulty: 3,
            status: 'pending',
            completedDate: null
          },
          { 
            id: 5, 
            title: 'Edukasi Teman', 
            description: 'Bagikan postingan tentang lingkungan di media sosial.', 
            points: 15, 
            difficulty: 1,
            status: 'pending',
            completedDate: null
          },
        ],
        
        // Achievements data
        achievements: [
          { id: 1, title: 'Pemula Hijau', description: 'Selesaikan misi pertama', icon: '🌱', unlocked: false },
          { id: 2, title: 'Kolektor Poin', description: 'Kumpulkan 50 poin', icon: '🪙', unlocked: false },
          { id: 3, title: 'Eco Warrior', description: 'Selesaikan 3 misi', icon: '🛡️', unlocked: false },
          { id: 4, title: 'Master Lingkungan', description: 'Selesaikan semua misi', icon: '🏆', unlocked: false },
        ],

        // Initialize component
        init() {
          // Load saved data from localStorage
          const savedPoints = localStorage.getItem('ecoPoints');
          const savedMissions = localStorage.getItem('missions');
          const savedAchievements = localStorage.getItem('achievements');
          
          if (savedPoints) this.totalPoints = parseInt(savedPoints);
          if (savedMissions) this.missions = JSON.parse(savedMissions);
          if (savedAchievements) this.achievements = JSON.parse(savedAchievements);
          
          // Calculate progress
          this.calculateProgress();
          
          // Update achievements based on current progress
          this.updateAchievements();
        },
        
        // Calculate user progress
        calculateProgress() {
          this.completedMissions = this.missions.filter(m => m.status === 'completed').length;
          this.progressPercentage = (this.completedMissions / this.totalMissions) * 100;
          
          // Update user level based on points
          if (this.totalPoints >= 100) {
            this.userLevel = 'Eco Master';
          } else if (this.totalPoints >= 60) {
            this.userLevel = 'Eco Warrior';
          } else if (this.totalPoints >= 30) {
            this.userLevel = 'Pecinta Lingkungan';
          } else {
            this.userLevel = 'Pemula';
          }
        },
        
        // Complete a mission
        completeMission(id) {
          const mission = this.missions.find(m => m.id === id);
          if (mission && mission.status === 'pending') {
            mission.status = 'completed';
            mission.completedDate = new Date().toLocaleDateString('id-ID');
            this.totalPoints += mission.points;
            
            // Update progress
            this.calculateProgress();
            
            // Update achievements
            this.updateAchievements();

            // Save to localStorage
            localStorage.setItem('ecoPoints', this.totalPoints);
            localStorage.setItem('missions', JSON.stringify(this.missions));
            localStorage.setItem('achievements', JSON.stringify(this.achievements));

            // Show success message
            this.showToast(`🎉 Misi "${mission.title}" terselesaikan! +${mission.points} pts`);
          }
        },
        
        // Skip a mission
        skipMission(id) {
          const mission = this.missions.find(m => m.id === id);
          if (mission && mission.status === 'pending') {
            if (confirm(`Yakin ingin melewatkan misi "${mission.title}"?`)) {
              this.showToast(`Misi "${mission.title}" dilewati`);
            }
          }
        },
        
        // Update achievements status
        updateAchievements() {
          // Achievement 1: Selesaikan misi pertama
          this.achievements[0].unlocked = this.completedMissions >= 1;
          
          // Achievement 2: Kumpulkan 50 poin
          this.achievements[1].unlocked = this.totalPoints >= 50;
          
          // Achievement 3: Selesaikan 3 misi
          this.achievements[2].unlocked = this.completedMissions >= 3;
          
          // Achievement 4: Selesaikan semua misi
          this.achievements[3].unlocked = this.completedMissions === this.totalMissions;
        },
        
        // Show achievements modal
        showAchievements() {
          this.showAchievementsModal = true;
        },
        
        // Reset all progress
        resetProgress() {
          if (confirm('Yakin ingin mereset semua progress? Tindakan ini tidak dapat dibatalkan.')) {
            this.missions.forEach(m => {
              m.status = 'pending';
              m.completedDate = null;
            });
            
            this.totalPoints = 0;
            this.completedMissions = 0;
            this.progressPercentage = 0;
            this.userLevel = 'Pemula';
            
            this.achievements.forEach(a => a.unlocked = false);
            
            localStorage.removeItem('ecoPoints');
            localStorage.removeItem('missions');
            localStorage.removeItem('achievements');
            
            this.showToast('Progress berhasil direset');
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
  </style>
</x-app-layout>