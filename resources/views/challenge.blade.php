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
        <img src="https://cdn-icons-png.flaticon.com/512/219/219983.png" class="w-12 h-12 rounded-full border border-green-500">
        <div>
          <p class="text-lg font-semibold">Halo, <span class="text-green-400">EcoHero</span>!</p>
          <p class="text-sm text-gray-400">Total Poin: <span x-text="totalPoints"></span> 🪙</p>
        </div>
      </div>
      <div class="mt-4 sm:mt-0">
        <button @click="resetProgress" class="bg-red-600 hover:bg-red-500 px-4 py-2 rounded-lg text-sm font-semibold">Reset Progress</button>
      </div>
    </div>

    <!-- Mission Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <template x-for="mission in missions" :key="mission.id">
        <div class="relative bg-slate-800 border border-slate-700 rounded-2xl p-5 shadow-xl hover:shadow-green-500/20 transition-all duration-300 overflow-hidden">
          <!-- Animated border highlight -->
          <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-transparent opacity-0 hover:opacity-100 transition duration-500"></div>
          
          <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
              <h2 class="text-xl font-semibold text-green-400" x-text="mission.title"></h2>
              <span class="text-sm text-gray-400" x-text="mission.points + ' pts'"></span>
            </div>
            <p class="text-gray-300 text-sm mb-4" x-text="mission.description"></p>

            <!-- Status -->
            <template x-if="mission.status === 'pending'">
              <div class="text-yellow-400 text-sm font-semibold mb-2">🔸 Belum Selesai</div>
            </template>
            <template x-if="mission.status === 'completed'">
              <div class="text-green-400 text-sm font-semibold mb-2">✅ Selesai</div>
            </template>

            <!-- Action -->
            <div class="space-y-3">
              <template x-if="mission.status === 'pending'">
                <div>
                  <label class="block text-gray-400 text-sm mb-1">Upload Bukti:</label>
                  <input type="file" @change="completeMission(mission.id)" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm">
                </div>
              </template>

              <template x-if="mission.status === 'completed'">
                <button disabled class="w-full bg-green-600/40 text-white font-semibold py-2 rounded-lg">
                  Misi Terselesaikan 🎉
                </button>
              </template>
            </div>
          </div>
        </div>
      </template>
    </div>

    <!-- Leaderboard Button -->
    <div class="mt-12 text-center">
      <a href="/leaderboard" class="bg-green-600 hover:bg-green-500 px-6 py-3 rounded-xl font-bold text-lg transition-all duration-300 shadow-lg">
        🏆 Lihat Leaderboard
      </a>
    </div>
  </div>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('challengeCenter', () => ({
        totalPoints: 0,
        missions: [
          { id: 1, title: 'Bersihkan Area Sekitar Rumah', description: 'Kumpulkan sampah plastik dan buang ke tempat daur ulang.', points: 20, status: 'pending' },
          { id: 2, title: 'Tanam Pohon', description: 'Tanam minimal 1 pohon di lingkungan rumahmu.', points: 40, status: 'pending' },
          { id: 3, title: 'Kurangi Daging Selama Seminggu', description: 'Ganti menu daging dengan sayuran atau protein nabati.', points: 30, status: 'pending' },
          { id: 4, title: 'Gunakan Transportasi Umum', description: 'Gunakan transportasi umum atau bersepeda selama 3 hari.', points: 25, status: 'pending' },
          { id: 5, title: 'Edukasi Teman', description: 'Bagikan postingan tentang lingkungan di media sosial.', points: 15, status: 'pending' },
        ],

        completeMission(id) {
          const mission = this.missions.find(m => m.id === id);
          if (mission && mission.status === 'pending') {
            mission.status = 'completed';
            this.totalPoints += mission.points;

            // Optional: Simpan progress ke localStorage
            localStorage.setItem('ecoPoints', this.totalPoints);
            localStorage.setItem('missions', JSON.stringify(this.missions));

            // Efek animasi mini
            this.showToast(`🎉 Misi "${mission.title}" terselesaikan! +${mission.points} pts`);
          }
        },

        showToast(msg) {
          const toast = document.createElement('div');
          toast.textContent = msg;
          toast.className = 'fixed bottom-6 right-6 bg-green-600 px-5 py-3 rounded-xl shadow-lg animate-fade-in';
          document.body.appendChild(toast);
          setTimeout(() => toast.remove(), 3000);
        },

        resetProgress() {
          this.missions.forEach(m => m.status = 'pending');
          this.totalPoints = 0;
          localStorage.removeItem('ecoPoints');
          localStorage.removeItem('missions');
        },

        init() {
          const savedPoints = localStorage.getItem('ecoPoints');
          const savedMissions = localStorage.getItem('missions');
          if (savedPoints) this.totalPoints = parseInt(savedPoints);
          if (savedMissions) this.missions = JSON.parse(savedMissions);
        }
      }))
    })
  </script>

  <style>
    @keyframes fade-in { from {opacity:0; transform: translateY(10px);} to {opacity:1; transform: translateY(0);} }
    .animate-fade-in { animation: fade-in 0.5s ease-out; }
  </style>
</x-app-layout>
