<x-app-layout>
  <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 pt-24 pb-16 px-6 sm:px-10 text-white" x-data="ecoTrack">
    <!-- Header -->
    <div class="text-center mb-10">
      <h1 class="text-5xl font-extrabold text-green-400 mb-3 tracking-tight">🌎 Eco-Track</h1>
      <p class="text-gray-300 text-lg">Hitung, pahami, dan kurangi jejak karbonmu</p>
    </div>

    <!-- Main Grid -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10">
      
      <!-- Left Section: Input -->
      <div class="bg-slate-800 rounded-2xl p-6 shadow-xl border border-slate-700 space-y-6">
        <h2 class="text-2xl font-semibold text-green-400">💡 Aktivitas Harianmu</h2>
        <p class="text-gray-400 text-sm">Isi untuk melihat dampak karbonmu</p>

        <!-- Form -->
        <form @submit.prevent="calculateFootprint" class="space-y-5">
          <div>
            <label class="block text-gray-300 mb-2">Transportasi Harian</label>
            <select x-model.number="inputs.transport" class="w-full bg-slate-900 rounded-lg border border-slate-700 px-3 py-2 focus:ring-2 focus:ring-green-500">
              <option value="0">Pilih jenis...</option>
              <option value="1.2">Motor (bensin)</option>
              <option value="2.5">Mobil (bensin)</option>
              <option value="0.8">Mobil listrik</option>
              <option value="0.3">Sepeda</option>
              <option value="0">Jalan kaki / Transport publik</option>
            </select>
          </div>

          <div>
            <label class="block text-gray-300 mb-2">Konsumsi Listrik (kWh / minggu)</label>
            <input type="number" x-model.number="inputs.electric" min="0" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500">
          </div>

          <div>
            <label class="block text-gray-300 mb-2">Konsumsi Daging (porsi / minggu)</label>
            <input type="number" x-model.number="inputs.meat" min="0" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500">
          </div>

          <div>
            <label class="block text-gray-300 mb-2">Penggunaan Plastik Sekali Pakai (jumlah / minggu)</label>
            <input type="number" x-model.number="inputs.plastic" min="0" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500">
          </div>

          <button type="submit" class="w-full bg-green-600 hover:bg-green-500 rounded-lg px-4 py-3 font-semibold transition-all duration-300">
            Hitung Jejak Karbon 🌱
          </button>
        </form>
      </div>

      <!-- Right Section: Visualization -->
      <div class="bg-slate-800 rounded-2xl p-6 shadow-xl border border-slate-700 flex flex-col items-center justify-center text-center relative overflow-hidden">
        
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-tr from-green-500/10 via-transparent to-green-400/10 animate-pulse"></div>

        <template x-if="totalCarbon === 0">
          <div class="text-gray-400">
            <p class="text-lg">Isi data di sebelah kiri untuk melihat hasil 🌿</p>
          </div>
        </template>

        <template x-if="totalCarbon > 0">
          <div class="relative z-10 space-y-6 animate-fade-in">
            <!-- Circular Progress -->
            <div class="relative flex items-center justify-center">
              <svg class="w-40 h-40 transform -rotate-90">
                <circle cx="80" cy="80" r="70" stroke="gray" stroke-width="10" fill="none" />
                <circle cx="80" cy="80" r="70" 
                        stroke="url(#grad)" 
                        stroke-width="10" fill="none" 
                        stroke-dasharray="440"
                        :stroke-dashoffset="440 - (totalCarbon / 10 * 440)" 
                        stroke-linecap="round"
                        class="transition-all duration-700 ease-out" />
                <defs>
                  <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#22c55e" />
                    <stop offset="100%" stop-color="#84cc16" />
                  </linearGradient>
                </defs>
              </svg>
              <div class="absolute text-center">
                <p class="text-4xl font-bold text-green-400" x-text="totalCarbon.toFixed(1)"></p>
                <p class="text-gray-400 text-sm">kg CO₂ / minggu</p>
              </div>
            </div>

            <!-- Text Feedback -->
            <p class="text-lg font-semibold text-gray-300" x-text="footprintMessage"></p>

            <!-- Breakdown -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-sm text-gray-400 mt-6">
              <template x-for="metric in metrics" :key="metric.name">
                <div class="bg-slate-900 rounded-lg py-3 px-2 border border-slate-700 hover:border-green-500 transition">
                  <p class="text-green-400 font-bold" x-text="metric.value.toFixed(1)"></p>
                  <p x-text="metric.name"></p>
                </div>
              </template>
            </div>

            <!-- Tips -->
            <div class="mt-8 space-y-2">
              <h3 class="text-green-400 font-semibold">Tips Mengurangi Jejakmu 💚</h3>
              <ul class="text-sm text-gray-300 space-y-1">
                <template x-for="tip in ecoTips" :key="tip">
                  <li>🌿 <span x-text="tip"></span></li>
                </template>
              </ul>
            </div>
          </div>
        </template>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('ecoTrack', () => ({
        inputs: { transport: 0, electric: 0, meat: 0, plastic: 0 },
        totalCarbon: 0,
        metrics: [],
        ecoTips: [],
        footprintMessage: '',

        calculateFootprint() {
          const { transport, electric, meat, plastic } = this.inputs;
          const transportCarbon = transport * 7; // weekly usage
          const electricCarbon = electric * 0.8;
          const meatCarbon = meat * 2.5;
          const plasticCarbon = plastic * 0.1;

          this.totalCarbon = transportCarbon + electricCarbon + meatCarbon + plasticCarbon;
          this.metrics = [
            { name: 'Transport', value: transportCarbon },
            { name: 'Listrik', value: electricCarbon },
            { name: 'Daging', value: meatCarbon },
            { name: 'Plastik', value: plasticCarbon },
          ];

          if (this.totalCarbon < 20) {
            this.footprintMessage = 'Jejakmu sangat kecil 🌱 – Kamu sudah ramah lingkungan!';
            this.ecoTips = ['Gunakan transportasi umum', 'Kurangi konsumsi daging', 'Matikan alat listrik jika tidak digunakan'];
          } else if (this.totalCarbon < 50) {
            this.footprintMessage = 'Jejak karbonmu sedang ⚖️ – Masih bisa lebih hijau!';
            this.ecoTips = ['Gunakan LED', 'Kurangi penggunaan plastik', 'Tanam pohon di sekitar rumah'];
          } else {
            this.footprintMessage = 'Jejak karbon tinggi 🚨 – Ayo mulai perubahan kecil!';
            this.ecoTips = ['Coba bersepeda lebih sering', 'Kurangi daging merah', 'Gunakan energi terbarukan jika bisa'];
          }
        }
      }))
    })
  </script>

  <style>
    @keyframes fade-in { from {opacity:0; transform: translateY(10px);} to {opacity:1; transform: translateY(0);} }
    .animate-fade-in { animation: fade-in 0.6s ease-out; }
  </style>
</x-app-layout>
