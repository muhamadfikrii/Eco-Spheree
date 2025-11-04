<x-app-layout>
  {{-- Blade: Dashboard UI with Alpine JS --}}
  <div class="py-10 px-6 sm:px-8 lg:px-10 bg-slate-900 min-h-screen w-full pt-28" x-data="dashboard">
    <!-- Header Section -->
    <div class="text-center mb-10">
      <h1 class="text-5xl font-extrabold text-white mb-3 tracking-tight">🌍 Eco-Sphere</h1>
      <p class="text-lg text-gray-400">The Real-Time Biodiversity Map</p>
      <p class="mt-3 text-gray-300 max-w-2xl mx-auto">
        Monitor environmental data, report issues, and take action for a sustainable future.
      </p>
    </div>

    <!-- Main Grid Layout -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8 sm:gap-10">
      <!-- Left Column (map + stories + activity) -->
      <div class="lg:col-span-2 space-y-6">
        <div class="eco-card overflow-hidden">
          <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
              <h2 class="text-xl font-semibold text-teal-400">Environmental Data Map</h2>
              <div class="flex items-center gap-3">
                <button @click="showReportModal = true" class="eco-button text-white px-4 py-2 rounded-lg flex items-center">
                  <i class="fas fa-camera mr-2" aria-hidden="true"></i>
                  Report Issue
                </button>
              </div>
            </div>

            <!-- Map Container -->
            <div id="eco-map"
                 x-init="initMap($el)"
                 class="bg-gray-700 rounded-2xl relative w-full overflow-hidden shadow-lg hover:shadow-2xl transition-shadow"
                 style="height: 450px;">
              <!-- Layer Controls -->
              <div class="absolute top-4 right-4 z-[1000] bg-gray-900/80 backdrop-blur-md p-3 rounded-xl">
                <h3 class="text-white text-sm font-semibold mb-2">Map Layers</h3>
                <template x-for="layer in layers" :key="layer.id">
                  <div class="flex items-center gap-2 mb-1">
                    <input type="checkbox"
                           :id="layer.id"
                           class="layer-checkbox"
                           x-model="layer.visible"
                           @change="toggleLayer(layer.id)">
                    <label :for="layer.id" class="text-white text-sm" x-text="layer.name"></label>
                  </div>
                </template>
              </div>

              <!-- Map Legend -->
              <div class="absolute bottom-4 left-4 bg-gray-900 bg-opacity-80 p-3 rounded-lg text-xs text-white space-y-2 z-[1000]">
                <div class="flex items-center space-x-2">
                  <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                  <span>Good Air Quality</span>
                </div>
                <div class="flex items-center space-x-2">
                  <span class="w-3 h-3 bg-yellow-500 rounded-full"></span>
                  <span>Moderate Air Quality</span>
                </div>
                <div class="flex items-center space-x-2">
                  <span class="w-3 h-3 bg-red-500 rounded-full"></span>
                  <span>Poor Air Quality</span>
                </div>
                <div class="flex items-center space-x-2">
                  <span class="w-3 h-3 bg-orange-500 rounded-full pulse-animation"></span>
                  <span>Fire Hotspot</span>
                </div>
                <div class="flex items-center space-x-2">
                  <span class="w-3 h-3 bg-blue-500 rounded-full"></span>
                  <span>Water Quality Point</span>
                </div>
                <div class="flex items-center space-x-2">
                  <i class="fas fa-recycle text-green-400"></i>
                  <span>Recycling Center</span>
                </div>
                <div class="flex items-center space-x-2">
                  <i class="fas fa-exclamation-triangle text-yellow-400"></i>
                  <span>User Report</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Impact Stories -->
        <div class="eco-card p-6">
          <h2 class="text-xl font-semibold text-teal-400 mb-4">Impact Stories</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <template x-for="story in impactStories" :key="story.id">
              <div class="impact-story rounded-lg overflow-hidden cursor-pointer group">
                <div class="relative h-40 w-full overflow-hidden">
                  <img :src="story.image" :alt="story.title" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                </div>
                <div class="p-3 bg-gray-800">
                  <h3 class="text-white font-semibold" x-text="story.title"></h3>
                  <p class="text-gray-300 text-sm mt-1" x-text="story.description"></p>
                </div>
              </div>
            </template>
          </div>
        </div>

        <!-- Recent Activity Log -->
        <div class="eco-card p-6">
          <h3 class="text-lg font-semibold text-green-400 mb-3">Recent Environmental Activities</h3>
          <ul class="space-y-3 text-sm text-gray-300">
            <template x-for="activity in activities" :key="activity.id">
              <li class="flex justify-between items-center hover:bg-gray-700 p-2 rounded transition-colors">
                <span x-text="activity.icon + ' ' + activity.description"></span>
                <span :class="activity.impactClass" x-text="activity.impact"></span>
              </li>
            </template>
          </ul>
        </div>
      </div>

      <!-- Right Column -->
      <div class="space-y-6">
        <!-- Regional Score -->
        <div class="eco-card p-6">
          <h3 class="text-lg font-semibold text-teal-400 mb-3">Regional Sustainability Score</h3>
          <div class="flex items-center justify-center my-4">
            <div class="sustainability-score text-4xl font-bold text-white" x-text="sustainabilityScore"></div>
          </div>
          <div class="text-center text-gray-300 mb-4">
            <p class="text-sm" x-text="region"></p>
            <p class="text-xs text-gray-400 mt-1">Ranked #<span x-text="rank"></span> out of <span x-text="totalCities"></span> cities</p>
          </div>
          <div class="space-y-2">
            <template x-for="metric in sustainabilityMetrics" :key="metric.id">
              <div class="flex justify-between text-sm">
                <span class="text-gray-400" x-text="metric.name"></span>
                <div class="flex items-center">
                  <div class="w-24 bg-gray-700 rounded-full h-2 mr-2">
                    <div class="bg-green-500 h-2 rounded-full" :style="`width: ${metric.percentage}%`"></div>
                  </div>
                  <span class="text-gray-300" x-text="metric.score"></span>
                </div>
              </div>
            </template>
          </div>
        </div>

        <!-- Recent Reports -->
        <div class="eco-card p-6">
          <h3 class="text-lg font-semibold text-teal-400 mb-3">Recent Community Reports</h3>
          <ul class="space-y-3">
            <template x-for="report in recentReports" :key="report.id">
              <li class="flex items-start hover:bg-gray-700 p-2 rounded transition-colors cursor-pointer">
                <i :class="report.iconClass + ' mt-1 mr-3'"></i>
                <div>
                  <p class="text-white text-sm" x-text="report.title"></p>
                  <p class="text-gray-400 text-xs" x-text="report.time + ' • ' + report.upvotes + ' upvotes'"></p>
                </div>
              </li>
            </template>
          </ul>
        </div>

        <!-- Challenges -->
        <div class="eco-card p-6">
          <h3 class="text-lg font-semibold text-blue-400 mb-3">Active Eco-Challenges</h3>
          <div class="space-y-4">
            <template x-for="challenge in challenges" :key="challenge.id">
              <div>
                <div class="flex justify-between items-center mb-1">
                  <p class="text-white text-sm font-medium" x-text="challenge.title"></p>
                  <span class="text-xs text-gray-400" x-text="challenge.timeLeft"></span>
                </div>
                <div class="w-full bg-gray-700 rounded-full h-2">
                  <div class="bg-yellow-500 h-2 rounded-full" :style="`width: ${challenge.progress}%`"></div>
                </div>
                <p class="text-xs text-gray-400 mt-1" x-text="challenge.participants + ' participants'"></p>
              </div>
            </template>
          </div>
          <button class="eco-button text-white px-4 py-2 rounded-lg w-full mt-4">
            View All Challenges
          </button>
        </div>

        <!-- Eco Tips -->
        <div class="eco-card p-6">
          <h3 class="text-lg font-semibold text-teal-400 mb-3">Eco-Tips</h3>
          <ul class="mt-4 space-y-3 text-sm text-gray-300">
            <template x-for="tip in ecoTips" :key="tip.id">
              <li class="flex items-start">
                <svg class="w-5 h-5 text-teal-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span x-text="tip.text"></span>
              </li>
            </template>
          </ul>
        </div>
      </div>
    </div>
  </div>

    <div 
      x-show="showReportModal"
      x-cloak
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="overlay"
      @click.self="showReportModal = false">
    </div>

    <!-- Report Modal -->
    <div 
      x-show="showReportModal"
      x-cloak
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 transform scale-90"
      x-transition:enter-end="opacity-100 transform scale-100"
      x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100 transform scale-100"
      x-transition:leave-end="opacity-0 transform scale-90"
      class="report-form fixed inset-0 z-[1100] flex items-center justify-center p-4">
      <div class="bg-gray-800 w-full max-w-lg rounded-2xl shadow-2xl p-6 border border-gray-700">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-xl font-semibold text-white">Report Environmental Issue</h3>
          <button class="text-gray-400 hover:text-white" @click="showReportModal = false">
            <i class="fas fa-times"></i>
          </button>
        </div>

    

      <form @submit.prevent="submitReport" x-show="showReportModal" class="space-y-4">
        <div>
          <label class="block text-gray-300 text-sm mb-2">Issue Type</label>
          <select x-model="reportForm.issueType" class="w-full bg-gray-700 text-white rounded-lg px-3 py-2">
            <option>Air Pollution</option>
            <option>Water Pollution</option>
            <option>Illegal Dumping</option>
            <option>Deforestation</option>
            <option>Wildlife Concern</option>
            <option>Other</option>
          </select>
        </div>

        <div>
          <label class="block text-gray-300 text-sm mb-2">Description</label>
          <textarea x-model="reportForm.description" class="w-full bg-gray-700 text-white rounded-lg px-3 py-2" rows="3" placeholder="Describe the issue..."></textarea>
        </div>

        <div>
          <label class="block text-gray-300 text-sm mb-2">Photo</label>
          <div class="border-2 border-dashed border-gray-600 rounded-lg p-4 text-center cursor-pointer">
            <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
            <p class="text-gray-400 text-sm">Click to upload or drag and drop</p>
          </div>
        </div>

        <div>
          <label class="block text-gray-300 text-sm mb-2">Location</label>
          <div class="flex items-center gap-2">
            <input x-model="reportForm.location" type="text" class="flex-1 bg-gray-700 text-white rounded-lg px-3 py-2" placeholder="Current location">
            <button type="button" class="eco-button text-white px-3 py-2 rounded-lg" @click="setCurrentLocation">
              <i class="fas fa-map-marker-alt"></i>
            </button>
          </div>
        </div>

        <button type="submit" class="eco-button text-white px-4 py-2 rounded-lg w-full">Submit Report</button>
      </form>
    </div>
  </div>

  <!-- Notification -->
  <div x-show="showNotification"
       x-transition:enter="transition ease-out duration-300"
       x-transition:enter-start="opacity-0 transform translate-y-full"
       x-transition:enter-end="opacity-100 transform translate-y-0"
       x-transition:leave="transition ease-in duration-200"
       x-transition:leave-start="opacity-100 transform translate-y-0"
       x-transition:leave-end="opacity-0 transform translate-y-full"
       class="notification fixed bottom-6 right-6 z-[1200]">
    <p x-text="notificationMessage"></p>
  </div>




</x-app-layout>
