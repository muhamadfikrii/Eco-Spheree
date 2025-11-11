<x-app-layout>
  <div class="py-10 px-6 sm:px-8 lg:px-10 bg-slate-900 min-h-screen w-full pt-28" 
       x-data="leaderboard">
    <div class="text-center mb-10">
      <h1 class="text-5xl font-extrabold text-white mb-3 tracking-tight">🏆 Eco-Leaderboard</h1>
      <p class="text-lg text-gray-400">Compare sustainability scores among cities and users.</p>
    </div>

    <div class="max-w-4xl mx-auto eco-card p-6">
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-xl text-teal-400 font-semibold">Top Cities</h3>
        <select x-model="filterRegion" class="bg-gray-700 text-white rounded-lg px-3 py-2">
          <option value="">All Regions</option>
          <option>Jawa Barat</option>
          <option>Jawa Tengah</option>
          <option>Sumatera</option>
        </select>
      </div>

      <table class="min-w-full text-gray-300 text-sm">
        <thead class="bg-gray-800 text-gray-200 uppercase text-xs">
          <tr>
            <th class="px-4 py-3 text-left">Rank</th>
            <th class="px-4 py-3 text-left">City</th>
            <th class="px-4 py-3 text-left">Score</th>
            <th class="px-4 py-3 text-left">Region</th>
          </tr>
        </thead>
        <tbody>
          <template x-for="(city, index) in filteredLeaderboard" :key="city.id">
            <tr class="border-b border-gray-700 hover:bg-gray-800 transition">
              <td class="px-4 py-2 font-semibold text-yellow-400" x-text="index + 1"></td>
              <td class="px-4 py-2 text-white" x-text="city.name"></td>
              <td class="px-4 py-2" x-text="city.score + ' pts'"></td>
              <td class="px-4 py-2 text-gray-400" x-text="city.region"></td>
            </tr>
          </template>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('leaderboard', () => ({
        filterRegion: '',
        cities: [
          { id: 1, name: 'Bandung', score: 92, region: 'Jawa Barat' },
          { id: 2, name: 'Yogyakarta', score: 88, region: 'Jawa Tengah' },
          { id: 3, name: 'Palembang', score: 80, region: 'Sumatera' },
          { id: 4, name: 'Bogor', score: 77, region: 'Jawa Barat' },
        ],
        get filteredLeaderboard() {
          return this.cities
            .filter(c => !this.filterRegion || c.region === this.filterRegion)
            .sort((a, b) => b.score - a.score)
        }
      }))
    })
  </script>
</x-app-layout>
