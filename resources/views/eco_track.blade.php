<x-app-layout>
  <!-- Hero Section -->
  <section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 via-emerald-900/50 to-slate-900 overflow-hidden pt-16">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 bg-pattern-hero"></div>
    
    <!-- Floating Particles -->
    <div class="absolute top-1/4 left-1/4 w-6 h-6 rounded-full bg-green-400/30 float-animation"></div>
    <div class="absolute top-1/3 right-1/4 w-10 h-10 rounded-full bg-emerald-500/20 float-animation" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-1/4 left-1/3 w-8 h-8 rounded-full bg-teal-400/25 float-animation" style="animation-delay: 2s;"></div>
    <div class="absolute top-3/4 right-1/3 w-12 h-12 rounded-full bg-green-300/15 float-animation" style="animation-delay: 1.5s;"></div>
    
    <!-- Geometric Shapes -->
    <div class="absolute top-10 right-10 w-32 h-32 border-2 border-green-500/30 rotate-45 opacity-40"></div>
    <div class="absolute bottom-20 left-10 w-24 h-24 border-2 border-emerald-400/20 rotate-12 opacity-30"></div>
    <div class="absolute top-40 left-20 w-16 h-16 border border-green-300/25 rotate-30 opacity-25"></div>

    <div class="container mx-auto px-6 sm:px-10 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Left Column - Content -->
        <div class="text-center lg:text-left space-y-8" x-data="heroSection">
          <!-- Badge -->
          <div class="inline-flex items-center gap-2 bg-slate-800/80 backdrop-blur-sm border border-emerald-500/30 rounded-full px-4 py-2 text-sm text-emerald-300">
            <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span>
            Leading Carbon Footprint Platform
          </div>

          <!-- Main Heading -->
          <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black leading-tight">
            <span class="block bg-gradient-to-r from-green-400 via-emerald-400 to-green-500 bg-clip-text text-transparent drop-shadow-lg">
              Track Your Carbon
            </span>
            <span class="block mt-2 bg-gradient-to-r from-gray-300 to-emerald-200 bg-clip-text text-transparent">
              For a Sustainable Future
            </span>
          </h1>

          <!-- Description -->
          <p class="text-lg md:text-xl text-gray-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
            Eco-Track helps you understand, manage, and reduce your carbon footprint with intelligent analysis tools and actionable recommendations for a more sustainable lifestyle.
          </p>

          <!-- Stats -->
          <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-md mx-auto lg:mx-0">
            <div class="text-center">
              <div class="text-2xl md:text-3xl font-bold text-green-400" x-text="stats.users">10K+</div>
              <div class="text-sm text-gray-400">Active Users</div>
            </div>
            <div class="text-center">
              <div class="text-2xl md:text-3xl font-bold text-emerald-400" x-text="stats.impact">500K+</div>
              <div class="text-sm text-gray-400">kg CO₂ Reduced</div>
            </div>
            <div class="text-center col-span-2 md:col-span-1">
              <div class="text-2xl md:text-3xl font-bold text-teal-400" x-text="stats.countries">50+</div>
              <div class="text-sm text-gray-400">Countries Reached</div>
            </div>
          </div>

          <!-- CTA Buttons -->
          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
            <button 
              @click="scrollToCalculator" 
              class="group bg-gradient-to-r from-green-600 to-emerald-500 hover:from-green-500 hover:to-emerald-400 text-white font-semibold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center gap-3 text-lg">
              <span class="group-hover:scale-110 transition-transform duration-300">🌱</span>
              <span>Start Calculating Now</span>
              <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
              </svg>
            </button>
            
            <button 
              @click="scrollToFeatures" 
              class="group bg-slate-800/80 backdrop-blur-sm border border-slate-600 hover:border-emerald-500/50 text-white font-semibold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-3">
              <span>✨</span>
              <span>Learn Features</span>
            </button>
          </div>
        </div>

        <!-- Right Column - Visual -->
        <div class="relative">
          <!-- Main Card Visual -->
          <div class="relative bg-slate-800/60 backdrop-blur-sm rounded-2xl p-8 shadow-2xl border border-slate-700/50 transform rotate-3 hover:rotate-0 transition-transform duration-500">
            <div class="absolute -inset-4 bg-gradient-to-r from-green-500/20 to-emerald-400/20 rounded-2xl blur-lg opacity-50"></div>
            
            <!-- Animated Earth -->
            <div class="relative z-10 flex items-center justify-center mb-6">
              <div class="w-48 h-48 rounded-full bg-gradient-to-br from-green-500/10 to-emerald-400/10 border-2 border-emerald-500/30 flex items-center justify-center relative overflow-hidden">
                <!-- Earth Continents -->
                <div class="absolute w-full h-full earth-rotate">
                  <div class="absolute top-1/4 left-1/4 w-8 h-8 bg-green-600/40 rounded-full"></div>
                  <div class="absolute bottom-1/3 right-1/4 w-12 h-12 bg-emerald-500/30 rounded-lg rotate-45"></div>
                  <div class="absolute top-1/2 left-1/3 w-10 h-10 bg-teal-400/25 rounded-full"></div>
                </div>
                
                <!-- Center Icon -->
                <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-green-400 to-emerald-300 rounded-full flex items-center justify-center shadow-lg">
                  <span class="text-3xl">🌍</span>
                </div>
              </div>
            </div>

            <!-- Data Points -->
            <div class="grid grid-cols-2 gap-4 text-center">
              <div class="bg-slate-900/50 rounded-xl p-4 border border-slate-700/50">
                <div class="text-2xl font-bold text-green-400">-25%</div>
                <div class="text-sm text-gray-400 mt-1">Average Reduction</div>
              </div>
              <div class="bg-slate-900/50 rounded-xl p-4 border border-slate-700/50">
                <div class="text-2xl font-bold text-emerald-400">30+</div>
                <div class="text-sm text-gray-400 mt-1">Sustainable Tips</div>
              </div>
            </div>
          </div>

          <!-- Floating Elements -->
          <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-br from-green-500 to-emerald-400 rounded-2xl rotate-12 opacity-80 shadow-lg"></div>
          <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-gradient-to-br from-teal-400 to-green-300 rounded-2xl -rotate-12 opacity-70 shadow-lg"></div>
        </div>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
      <button 
        @click="scrollToCalculator" 
        class="flex flex-col items-center text-gray-400 hover:text-green-400 transition-colors duration-300 group">
        <span class="text-sm mb-2">Explore Eco-Track</span>
        <div class="w-6 h-10 border-2 border-gray-400 rounded-full flex justify-center group-hover:border-green-400 transition-colors duration-300">
          <div class="w-1 h-3 bg-gray-400 rounded-full mt-2 animate-bounce group-hover:bg-green-400 transition-colors duration-300"></div>
        </div>
      </button>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-20 bg-gradient-to-b from-slate-900 to-emerald-900/20 relative overflow-hidden">
    <div class="absolute inset-0 bg-pattern-features"></div>
    
    <div class="container mx-auto px-6 sm:px-10 relative z-10">
      <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
          Why Choose <span class="bg-gradient-to-r from-green-400 to-emerald-300 bg-clip-text text-transparent">Eco-Track?</span>
        </h2>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">
          Complete platform to monitor and reduce your carbon footprint in an easy and effective way
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Feature 1 -->
        <div class="group bg-slate-800/60 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-green-500/30 transition-all duration-500 hover:transform hover:scale-105">
          <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-400 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
            <span class="text-2xl">📊</span>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">In-depth Analysis</h3>
          <p class="text-gray-300">
            Get comprehensive understanding of your carbon emission sources with detailed and easy-to-understand data analysis.
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="group bg-slate-800/60 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-emerald-500/30 transition-all duration-500 hover:transform hover:scale-105">
          <div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-green-400 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
            <span class="text-2xl">🎯</span>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Personalized Recommendations</h3>
          <p class="text-gray-300">
            Receive personalized suggestions to reduce your carbon footprint based on your lifestyle and preferences.
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="group bg-slate-800/60 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50 hover:border-teal-500/30 transition-all duration-500 hover:transform hover:scale-105">
          <div class="w-14 h-14 bg-gradient-to-br from-teal-400 to-green-300 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
            <span class="text-2xl">📈</span>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Progress Tracking</h3>
          <p class="text-gray-300">
            Monitor your progress in reducing carbon emissions with informative charts and statistics.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Enhanced Calculator Section -->
  <section id="calculator" class="min-h-screen bg-gradient-to-br from-slate-900 via-emerald-900/50 to-slate-900 py-20 px-6 sm:px-10 text-white relative overflow-hidden" x-data="enhancedEcoTrack">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 bg-pattern-calculator"></div>
    
    <!-- Floating Particles -->
    <div class="absolute top-1/4 left-1/4 w-6 h-6 rounded-full bg-green-400/30 float-animation"></div>
    <div class="absolute top-1/3 right-1/4 w-10 h-10 rounded-full bg-emerald-500/20 float-animation" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-1/4 left-1/3 w-8 h-8 rounded-full bg-teal-400/25 float-animation" style="animation-delay: 2s;"></div>
    <div class="absolute top-3/4 right-1/3 w-12 h-12 rounded-full bg-green-300/15 float-animation" style="animation-delay: 1.5s;"></div>
    
    <!-- Geometric Shapes -->
    <div class="absolute top-10 right-10 w-32 h-32 border-2 border-green-500/30 rotate-45 opacity-40"></div>
    <div class="absolute bottom-20 left-10 w-24 h-24 border-2 border-emerald-400/20 rotate-12 opacity-30"></div>
    <div class="absolute top-40 left-20 w-16 h-16 border border-green-300/25 rotate-30 opacity-25"></div>

    <div class="max-w-7xl mx-auto relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-3 bg-slate-800/80 backdrop-blur-sm border border-emerald-500/30 rounded-full px-6 py-3 text-lg text-emerald-300 mb-6">
          <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span>
          Carbon Footprint Calculator
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
          Calculate Your <span class="bg-gradient-to-r from-green-400 to-emerald-300 bg-clip-text text-transparent">Carbon Footprint</span>
        </h2>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
          Fill in the information below to get a detailed analysis of your environmental impact and personalized recommendations to reduce your carbon footprint.
        </p>
      </div>

      <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
        <!-- Left Column: Input Form -->
        <div class="xl:col-span-2 space-y-8">
          <!-- Progress Steps -->
          <div class="bg-slate-800/60 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <div class="flex items-center justify-between mb-6">
              <h3 class="text-2xl font-bold text-white">Step <span x-text="currentStep"></span> of 4</h3>
              <div class="text-green-400 font-semibold" x-text="`${Math.round((currentStep/4)*100)}% Complete`"></div>
            </div>
            <div class="w-full bg-slate-700/50 rounded-full h-3">
              <div class="bg-gradient-to-r from-green-500 to-emerald-400 h-3 rounded-full transition-all duration-500 ease-out" 
                   :style="'width: ' + ((currentStep/4)*100) + '%'"></div>
            </div>
          </div>

          <!-- Multi-step Form -->
          <div class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 shadow-2xl">
            <!-- Step 1: Transportation -->
            <div x-show="currentStep === 1" x-transition:enter="transition ease-out duration-300" 
                 x-transition:enter-start="opacity-0 transform translate-x-8" 
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 class="space-y-8">
              <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-400 rounded-2xl mb-4 shadow-lg">
                  <span class="text-3xl">🚗</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Daily Transportation</h3>
                <p class="text-gray-400">How do you commute daily?</p>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Vehicle Type</label>
                  <select x-model="inputs.transport.type" class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500">
                    <option value="" class="bg-slate-800">Select vehicle...</option>
                    <option value="motorcycle" class="bg-slate-800">🏍️ Motorcycle (Gasoline)</option>
                    <option value="car_petrol" class="bg-slate-800">🚗 Car (Gasoline)</option>
                    <option value="car_diesel" class="bg-slate-800">🚙 Car (Diesel)</option>
                    <option value="electric" class="bg-slate-800">⚡ Electric Car</option>
                    <option value="hybrid" class="bg-slate-800">🔋 Hybrid Car</option>
                    <option value="public" class="bg-slate-800">🚌 Public Transport</option>
                    <option value="bicycle" class="bg-slate-800">🚲 Bicycle</option>
                    <option value="walking" class="bg-slate-800">🚶 Walking</option>
                  </select>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Daily Travel Distance</label>
                  <div class="relative">
                    <input type="number" x-model.number="inputs.transport.distance" min="0" step="0.1"
                           class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500 pr-16 hide-number-arrows"
                           placeholder="0">
                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">km/day</span>
                  </div>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Days per Week</label>
                  <input type="number" x-model.number="inputs.transport.days" min="0" max="7"
                         class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500 hide-number-arrows">
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Fuel Efficiency</label>
                  <div class="relative">
                    <input type="number" x-model.number="inputs.transport.efficiency" min="0" step="0.1"
                           class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500 pr-16 hide-number-arrows"
                           placeholder="0"
                           x-show="['car_petrol', 'car_diesel', 'motorcycle'].includes(inputs.transport.type)">
                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400" 
                          x-text="inputs.transport.type === 'car_diesel' ? 'km/liter' : 'km/liter'"
                          x-show="['car_petrol', 'car_diesel', 'motorcycle'].includes(inputs.transport.type)"></span>
                    <div x-show="!['car_petrol', 'car_diesel', 'motorcycle'].includes(inputs.transport.type)" 
                         class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg text-gray-400">
                      Not required for this vehicle
                    </div>
                  </div>
                </div>
              </div>

              <!-- Quick Transport Tips -->
              <div class="bg-slate-900/40 rounded-xl p-6 border border-slate-700/50">
                <h4 class="text-green-400 font-semibold mb-3 flex items-center gap-2">
                  <span>💡</span>
                  Eco-Friendly Transportation Tips
                </h4>
                <ul class="text-sm text-gray-300 space-y-2">
                  <li class="flex items-center gap-3">
                    <span class="text-green-400">✓</span>
                    Use public transport to reduce emissions by up to 70%
                  </li>
                  <li class="flex items-center gap-3">
                    <span class="text-green-400">✓</span>
                    Do carpooling with coworkers or neighbors
                  </li>
                  <li class="flex items-center gap-3">
                    <span class="text-green-400">✓</span>
                    Consider cycling or walking for short distances
                  </li>
                </ul>
              </div>
            </div>

            <!-- Step 2: Energy Consumption -->
            <div x-show="currentStep === 2" x-transition:enter="transition ease-out duration-300" 
                 x-transition:enter-start="opacity-0 transform translate-x-8" 
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 class="space-y-8">
              <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-2xl mb-4 shadow-lg">
                  <span class="text-3xl">💡</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Energy Consumption</h3>
                <p class="text-gray-400">How is energy usage in your home?</p>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Electricity Consumption</label>
                  <div class="relative">
                    <input type="number" x-model.number="inputs.energy.electricity" min="0"
                           class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500 pr-16 hide-number-arrows"
                           placeholder="0">
                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">kWh/month</span>
                  </div>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Energy Source</label>
                  <select x-model="inputs.energy.source" class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500">
                    <option value="grid" class="bg-slate-800">⚡ National Grid Electricity</option>
                    <option value="solar" class="bg-slate-800">☀️ Solar Panels</option>
                    <option value="wind" class="bg-slate-800">🌬️ Wind Energy</option>
                    <option value="hydro" class="bg-slate-800">💧 Hydro Energy</option>
                    <option value="mixed" class="bg-slate-800">🔀 Mixed Sources</option>
                  </select>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Gas Consumption</label>
                  <div class="relative">
                    <input type="number" x-model.number="inputs.energy.gas" min="0" step="0.1"
                           class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500 pr-16 hide-number-arrows"
                           placeholder="0">
                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">m³/month</span>
                  </div>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">House Size</label>
                  <select x-model="inputs.energy.houseSize" class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500">
                    <option value="small" class="bg-slate-800">🏠 Small (&lt;50m²)</option>
                    <option value="medium" class="bg-slate-800">🏡 Medium (50-100m²)</option>
                    <option value="large" class="bg-slate-800">🏛️ Large (&gt;100m²)</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Step 3: Lifestyle -->
            <div x-show="currentStep === 3" x-transition:enter="transition ease-out duration-300" 
                 x-transition:enter-start="opacity-0 transform translate-x-8" 
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 class="space-y-8">
              <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-400 rounded-2xl mb-4 shadow-lg">
                  <span class="text-3xl">🍽️</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Lifestyle & Consumption</h3>
                <p class="text-gray-400">What are your eating and shopping habits?</p>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Main Diet</label>
                  <select x-model="inputs.lifestyle.diet" class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500">
                    <option value="vegan" class="bg-slate-800">🌱 Vegan</option>
                    <option value="vegetarian" class="bg-slate-800">🥬 Vegetarian</option>
                    <option value="pescatarian" class="bg-slate-800">🐟 Pescatarian</option>
                    <option value="omnivore_light" class="bg-slate-800">🍗 Omnivore (Low Meat)</option>
                    <option value="omnivore_heavy" class="bg-slate-800">🥩 Omnivore (High Meat)</option>
                  </select>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Weekly Meat Consumption</label>
                  <div class="relative">
                    <input type="number" x-model.number="inputs.lifestyle.meatConsumption" min="0"
                           class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500 pr-16 hide-number-arrows"
                           placeholder="0">
                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">servings/week</span>
                  </div>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Local & Organic Shopping</label>
                  <select x-model="inputs.lifestyle.shoppingHabits" class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500">
                    <option value="mostly_local" class="bg-slate-800">🛒 Mostly Local</option>
                    <option value="mixed" class="bg-slate-800">📦 Mixed</option>
                    <option value="mostly_imported" class="bg-slate-800">🚢 Mostly Imported</option>
                  </select>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Single-use Plastic</label>
                  <div class="relative">
                    <input type="number" x-model.number="inputs.lifestyle.plasticWaste" min="0"
                           class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500 pr-16 hide-number-arrows"
                           placeholder="0">
                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">items/week</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Step 4: Additional Factors -->
            <div x-show="currentStep === 4" x-transition:enter="transition ease-out duration-300" 
                 x-transition:enter-start="opacity-0 transform translate-x-8" 
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 class="space-y-8">
              <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-400 rounded-2xl mb-4 shadow-lg">
                  <span class="text-3xl">✈️</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Additional Factors</h3>
                <p class="text-gray-400">Other activities that affect your carbon footprint</p>
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Annual Flight Hours</label>
                  <div class="relative">
                    <input type="number" x-model.number="inputs.additional.flights" min="0"
                           class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500 pr-16 hide-number-arrows"
                           placeholder="0">
                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">hours/year</span>
                  </div>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Hotel Stays</label>
                  <div class="relative">
                    <input type="number" x-model.number="inputs.additional.hotelStays" min="0"
                           class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500 pr-16 hide-number-arrows"
                           placeholder="0">
                    <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">nights/year</span>
                  </div>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Online Shopping</label>
                  <select x-model="inputs.additional.onlineShopping" class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500">
                    <option value="low" class="bg-slate-800">📦 Rarely</option>
                    <option value="medium" class="bg-slate-800">🛍️ Occasionally</option>
                    <option value="high" class="bg-slate-800">🚚 Frequently</option>
                  </select>
                </div>

                <div class="group/input">
                  <label class="block text-gray-300 mb-3 text-lg font-medium">Recycling</label>
                  <select x-model="inputs.additional.recycling" class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-300 hover:border-slate-500">
                    <option value="excellent" class="bg-slate-800">♻️ Excellent</option>
                    <option value="good" class="bg-slate-800">✅ Good</option>
                    <option value="fair" class="bg-slate-800">⚠️ Fair</option>
                    <option value="poor" class="bg-slate-800">❌ Poor</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between pt-8 border-t border-slate-700/50">
              <button type="button" @click="previousStep" 
                      x-show="currentStep > 1"
                      class="bg-slate-700 hover:bg-slate-600 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Previous
              </button>

              <button type="button" @click="nextStep" 
                      x-show="currentStep < 4"
                      class="bg-gradient-to-r from-green-600 to-emerald-500 hover:from-green-500 hover:to-emerald-400 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 flex items-center gap-2 ml-auto">
                Next
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </button>

              <button type="button" @click="calculateFootprint" 
                      x-show="currentStep === 4"
                      class="bg-gradient-to-r from-green-600 to-emerald-500 hover:from-green-500 hover:to-emerald-400 text-white font-bold py-3 px-8 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl pulse-glow flex items-center gap-3 text-lg ml-auto">
                <span>🌱</span>
                Calculate Carbon Footprint
              </button>
            </div>
          </div>
        </div>

        <!-- Right Column: Results & Visualization -->
        <div class="space-y-8">
          <!-- Quick Summary Card -->
          <div class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <h3 class="text-xl font-bold text-white mb-4">Quick Summary</h3>
            <div class="space-y-4">
              <div class="flex justify-between items-center">
                <span class="text-gray-400">Transportation:</span>
                <span class="text-green-400 font-semibold" x-text="getTransportSummary()"></span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-400">Energy:</span>
                <span class="text-blue-400 font-semibold" x-text="getEnergySummary()"></span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-400">Lifestyle:</span>
                <span class="text-yellow-400 font-semibold" x-text="getLifestyleSummary()"></span>
              </div>
            </div>
          </div>

          <!-- Results Visualization -->
          <div class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 shadow-2xl">
            <!-- Default State -->
            <template x-if="totalCarbon === 0">
              <div class="text-center space-y-6">
                <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-slate-600 to-slate-700 rounded-3xl shadow-inner">
                  <span class="text-4xl opacity-60">🌿</span>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-gray-300 mb-3">Your Carbon Footprint Data</h3>
                  <p class="text-gray-400 leading-relaxed">
                    Fill out the form to see detailed analysis of your carbon footprint and get personalized recommendations to reduce environmental impact.
                  </p>
                </div>
                <div class="flex justify-center space-x-2">
                  <div class="w-2 h-2 bg-green-400 rounded-full animate-bounce"></div>
                  <div class="w-2 h-2 bg-emerald-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                  <div class="w-2 h-2 bg-teal-400 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                </div>
              </div>
            </template>

            <!-- Results State -->
            <template x-if="totalCarbon > 0">
              <div class="space-y-8 animate-fade-in">
                <!-- Main Carbon Footprint -->
                <div class="text-center">
                  <div class="inline-flex items-center gap-2 bg-slate-900/60 rounded-full px-4 py-2 mb-4">
                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-green-400 text-sm font-medium">Total Carbon Footprint</span>
                  </div>
                  <div class="text-5xl font-black text-green-400 mb-2" x-text="totalCarbon.toFixed(1)"></div>
                  <div class="text-gray-400">kg CO₂ per year</div>
                </div>

                <!-- Comparison Chart -->
                <div class="space-y-4">
                  <div class="flex justify-between text-sm">
                    <span class="text-gray-400">You</span>
                    <span class="text-gray-400">National Average</span>
                  </div>
                  <div class="w-full bg-slate-700/50 rounded-full h-4">
                    <div class="bg-gradient-to-r from-green-500 to-emerald-400 h-4 rounded-full transition-all duration-1000" 
                         :style="'width: ' + Math.min((totalCarbon / 12000) * 100, 100) + '%'"></div>
                  </div>
                  <div class="flex justify-between text-sm">
                    <span x-text="totalCarbon.toFixed(0)" class="text-green-400"></span>
                    <span class="text-gray-400">12,000 kg/year</span>
                  </div>
                </div>

                <!-- Breakdown -->
                <div class="space-y-4">
                  <h4 class="font-semibold text-white">Carbon Footprint Breakdown</h4>
                  <div class="space-y-3">
                    <template x-for="(category, index) in carbonBreakdown" :key="index">
                      <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                          <div class="w-3 h-3 rounded-full" :class="category.color"></div>
                          <span x-text="category.name" class="text-gray-300"></span>
                        </div>
                        <div class="text-right">
                          <span x-text="category.value.toFixed(1)" class="text-white font-semibold"></span>
                          <span class="text-gray-400 text-sm ml-1">kg</span>
                        </div>
                      </div>
                    </template>
                  </div>
                </div>

                <!-- Action Cards -->
                <div class="grid grid-cols-2 gap-4">
                  <button @click="showDetailedReport = true" 
                          class="bg-slate-700 hover:bg-slate-600 rounded-xl p-4 text-center transition-all duration-300 transform hover:scale-105 group">
                    <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">📊</div>
                    <div class="text-sm text-gray-300">Detailed Report</div>
                  </button>
                  <button @click="shareResults" 
                          class="bg-slate-700 hover:bg-slate-600 rounded-xl p-4 text-center transition-all duration-300 transform hover:scale-105 group">
                    <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">📤</div>
                    <div class="text-sm text-gray-300">Share</div>
                  </button>
                </div>
              </div>
            </template>
          </div>

          <!-- Tips Card -->
          <div class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-6 border border-slate-700/50">
            <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
              <span>💡</span>
              Today's Tip
            </h3>
            <div class="text-gray-300 text-sm leading-relaxed" x-text="dailyTip"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Fixed Detailed Report Modal -->
    <div x-show="showDetailedReport" x-cloak
         class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 flex items-center justify-center p-4 transition-opacity duration-300"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
      <div class="bg-slate-800 rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto"
           @click.outside="showDetailedReport = false">
        <div class="p-6 border-b border-slate-700 sticky top-0 bg-slate-800 rounded-t-2xl">
          <div class="flex justify-between items-center">
            <h3 class="text-2xl font-bold text-white">Detailed Carbon Footprint Report</h3>
            <button @click="showDetailedReport = false" class="text-gray-400 hover:text-white p-2 rounded-lg hover:bg-slate-700 transition-colors">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>
        <div class="p-6">
          <div class="space-y-6">
            <div class="text-center">
              <div class="text-4xl font-bold text-green-400 mb-2" x-text="totalCarbon.toFixed(1)"></div>
              <div class="text-gray-400">Total Carbon Footprint (kg CO₂/year)</div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="bg-slate-700/50 rounded-xl p-4">
                <h4 class="text-lg font-semibold text-white mb-3">Reduction Recommendations</h4>
                <ul class="text-gray-300 space-y-2 text-sm">
                  <li class="flex items-start gap-2">
                    <span class="text-green-400 mt-1">•</span>
                    <span>Reduce private vehicle usage by up to 30%</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <span class="text-green-400 mt-1">•</span>
                    <span>Switch to LED lights to save energy</span>
                  </li>
                  <li class="flex items-start gap-2">
                    <span class="text-green-400 mt-1">•</span>
                    <span>Reduce meat consumption to 2 servings per week</span>
                  </li>
                </ul>
              </div>
              
              <div class="bg-slate-700/50 rounded-xl p-4">
                <h4 class="text-lg font-semibold text-white mb-3">3-Month Target</h4>
                <div class="space-y-3">
                  <div>
                    <div class="flex justify-between text-sm text-gray-400 mb-1">
                      <span>Reduction Target</span>
                      <span>-15%</span>
                    </div>
                    <div class="w-full bg-slate-600 rounded-full h-2">
                      <div class="bg-gradient-to-r from-green-500 to-emerald-400 h-2 rounded-full" style="width: 45%"></div>
                    </div>
                  </div>
                  <div class="text-green-400 text-sm">
                    Potential savings: <span x-text="(totalCarbon * 0.15).toFixed(1)"></span> kg CO₂/year
                  </div>
                </div>
              </div>
            </div>
            
            <div class="bg-slate-700/50 rounded-xl p-4">
              <h4 class="text-lg font-semibold text-white mb-3">Detailed Analysis by Category</h4>
              <div class="space-y-4">
                <template x-for="(category, index) in carbonBreakdown" :key="index">
                  <div>
                    <div class="flex justify-between text-sm text-gray-400 mb-1">
                      <span x-text="category.name"></span>
                      <span x-text="category.value.toFixed(1) + ' kg'"></span>
                    </div>
                    <div class="w-full bg-slate-600 rounded-full h-2">
                      <div class="h-2 rounded-full transition-all duration-1000" 
                           :class="category.color"
                           :style="'width: ' + (category.value / totalCarbon * 100) + '%'"></div>
                    </div>
                  </div>
                </template>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener('alpine:init', () => {
      // Hero Section Alpine Component
      Alpine.data('heroSection', () => ({
        stats: {
          users: 0,
          impact: 0,
          countries: 0
        },
        
        init() {
          // Animate stats counting
          this.animateStats();
        },
        
        animateStats() {
          // Animate the stats counting up
          const targetStats = {
            users: 12500,
            impact: 542000,
            countries: 57
          };
          
          const duration = 2000; // 2 seconds
          const steps = 60;
          const stepDuration = duration / steps;
          
          Object.keys(targetStats).forEach(stat => {
            let current = 0;
            const increment = targetStats[stat] / steps;
            const timer = setInterval(() => {
              current += increment;
              if (current >= targetStats[stat]) {
                this.stats[stat] = targetStats[stat];
                clearInterval(timer);
              } else {
                this.stats[stat] = Math.floor(current);
              }
            }, stepDuration);
          });
        },
        
        scrollToCalculator() {
          document.getElementById('calculator').scrollIntoView({ 
            behavior: 'smooth' 
          });
        },
        
        scrollToFeatures() {
          document.getElementById('features').scrollIntoView({ 
            behavior: 'smooth' 
          });
        }
      }));

      // Enhanced EcoTrack Calculator
      Alpine.data('enhancedEcoTrack', () => ({
        currentStep: 1,
        showDetailedReport: false,
        inputs: {
          transport: {
            type: '',
            distance: 0,
            days: 0,
            efficiency: 0
          },
          energy: {
            electricity: 0,
            source: 'grid',
            gas: 0,
            houseSize: 'medium'
          },
          lifestyle: {
            diet: 'omnivore_light',
            meatConsumption: 0,
            shoppingHabits: 'mixed',
            plasticWaste: 0
          },
          additional: {
            flights: 0,
            hotelStays: 0,
            onlineShopping: 'medium',
            recycling: 'fair'
          }
        },
        totalCarbon: 0,
        carbonBreakdown: [],
        dailyTip: 'Start by reducing the use of private vehicles and switch to public transportation or cycling for short distances.',

        init() {
          console.log('🚀 Enhanced Eco-Track initialized');
          // Load saved data if exists
          this.loadSavedData();
        },

        nextStep() {
          if (this.currentStep < 4) {
            this.currentStep++;
          }
        },

        previousStep() {
          if (this.currentStep > 1) {
            this.currentStep--;
          }
        },

        calculateFootprint() {
          console.log('📊 Calculating enhanced carbon footprint...', this.inputs);
          
          // Calculate carbon for each category
          const transportCarbon = this.calculateTransportCarbon();
          const energyCarbon = this.calculateEnergyCarbon();
          const lifestyleCarbon = this.calculateLifestyleCarbon();
          const additionalCarbon = this.calculateAdditionalCarbon();

          this.totalCarbon = transportCarbon + energyCarbon + lifestyleCarbon + additionalCarbon;
          
          this.carbonBreakdown = [
            { name: 'Transportation', value: transportCarbon, color: 'bg-green-500' },
            { name: 'Energy', value: energyCarbon, color: 'bg-blue-500' },
            { name: 'Lifestyle', value: lifestyleCarbon, color: 'bg-yellow-500' },
            { name: 'Additional', value: additionalCarbon, color: 'bg-purple-500' }
          ];

          this.saveToLocalStorage();
          this.showNotification('Carbon footprint calculation successful!', 'success');
        },

        calculateTransportCarbon() {
          const { type, distance, days, efficiency } = this.inputs.transport;
          if (!type || distance === 0 || days === 0) return 0;

          const emissionFactors = {
            motorcycle: 0.12,
            car_petrol: 0.25,
            car_diesel: 0.28,
            electric: 0.05,
            hybrid: 0.15,
            public: 0.08,
            bicycle: 0,
            walking: 0
          };

          const factor = emissionFactors[type] || 0;
          return (distance * days * 52 * factor) / (efficiency > 0 ? efficiency : 1);
        },

        calculateEnergyCarbon() {
          const { electricity, source, gas, houseSize } = this.inputs.energy;
          
          const sourceFactors = {
            grid: 0.8,
            solar: 0.1,
            wind: 0.05,
            hydro: 0.02,
            mixed: 0.4
          };

          const sizeFactors = {
            small: 0.8,
            medium: 1,
            large: 1.2
          };

          const electricCarbon = electricity * (sourceFactors[source] || 0.8);
          const gasCarbon = gas * 2.0;
          const sizeMultiplier = sizeFactors[houseSize] || 1;

          return (electricCarbon + gasCarbon) * sizeMultiplier * 12;
        },

        calculateLifestyleCarbon() {
          const { diet, meatConsumption, shoppingHabits, plasticWaste } = this.inputs.lifestyle;
          
          const dietFactors = {
            vegan: 1.5,
            vegetarian: 2.0,
            pescatarian: 2.5,
            omnivore_light: 3.5,
            omnivore_heavy: 5.0
          };

          const shoppingFactors = {
            mostly_local: 0.8,
            mixed: 1.0,
            mostly_imported: 1.3
          };

          const dietCarbon = (dietFactors[diet] || 3.0) * 52;
          const meatCarbon = meatConsumption * 2.5 * 52;
          const shoppingCarbon = (shoppingFactors[shoppingHabits] || 1.0) * 100;
          const plasticCarbon = plasticWaste * 0.1 * 52;

          return dietCarbon + meatCarbon + shoppingCarbon + plasticCarbon;
        },

        calculateAdditionalCarbon() {
          const { flights, hotelStays, onlineShopping, recycling } = this.inputs.additional;
          
          const shoppingFactors = {
            low: 50,
            medium: 150,
            high: 300
          };

          const recyclingFactors = {
            excellent: 0.8,
            good: 0.9,
            fair: 1.0,
            poor: 1.2
          };

          const flightCarbon = flights * 90;
          const hotelCarbon = hotelStays * 15;
          const shoppingCarbon = shoppingFactors[onlineShopping] || 150;
          const recyclingMultiplier = recyclingFactors[recycling] || 1.0;

          return (flightCarbon + hotelCarbon + shoppingCarbon) * recyclingMultiplier;
        },

        getTransportSummary() {
          const { type, distance, days } = this.inputs.transport;
          if (!type) return 'Not filled';
          return `${distance * days} km/week`;
        },

        getEnergySummary() {
          const { electricity, source } = this.inputs.energy;
          if (electricity === 0) return 'Not filled';
          return `${electricity} kWh/month`;
        },

        getLifestyleSummary() {
          const { diet, meatConsumption } = this.inputs.lifestyle;
          if (meatConsumption === 0) return diet;
          return `${diet} (${meatConsumption} servings/week)`;
        },

        saveToLocalStorage() {
          const data = {
            inputs: this.inputs,
            totalCarbon: this.totalCarbon,
            carbonBreakdown: this.carbonBreakdown,
            timestamp: new Date().toISOString()
          };
          localStorage.setItem('enhancedEcoTrackData', JSON.stringify(data));
        },

        loadSavedData() {
          const savedData = localStorage.getItem('enhancedEcoTrackData');
          if (savedData) {
            const data = JSON.parse(savedData);
            this.inputs = data.inputs;
            this.totalCarbon = data.totalCarbon;
            this.carbonBreakdown = data.carbonBreakdown;
          }
        },

        shareResults() {
          if (this.totalCarbon === 0) {
            this.showNotification('Please calculate your carbon footprint first!', 'warning');
            return;
          }

          const shareText = `My carbon footprint is ${this.totalCarbon.toFixed(1)} kg CO₂ per year. Let's work together to reduce our environmental impact! 🌍`;
          
          if (navigator.share) {
            navigator.share({
              title: 'My Eco-Track Results',
              text: shareText,
              url: window.location.href
            });
          } else {
            navigator.clipboard.writeText(shareText);
            this.showNotification('Results copied to clipboard!', 'success');
          }
        },

        showNotification(message, type = 'info') {
          // Simple notification implementation
          const notification = document.createElement('div');
          notification.className = `fixed top-6 right-6 px-6 py-4 rounded-xl shadow-lg z-50 transform transition-all duration-300 ${
            type === 'success' ? 'bg-green-600' : 
            type === 'warning' ? 'bg-yellow-600' : 'bg-blue-600'
          }`;
          notification.textContent = message;
          document.body.appendChild(notification);
          
          setTimeout(() => {
            notification.classList.add('opacity-0', 'translate-x-full');
            setTimeout(() => notification.remove(), 300);
          }, 3000);
        }
      }));
    });
  </script>

  <style>
    /* Additional styles for the new sections */
    .bg-pattern-hero {
      background-image: 
        radial-gradient(circle at 10% 20%, rgba(34, 197, 94, 0.15) 0%, transparent 40%),
        radial-gradient(circle at 90% 80%, rgba(16, 185, 129, 0.12) 0%, transparent 40%),
        radial-gradient(circle at 50% 50%, rgba(5, 150, 105, 0.08) 0%, transparent 50%),
        linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.85) 100%);
    }
    
    .bg-pattern-features {
      background-image: 
        radial-gradient(circle at 20% 10%, rgba(34, 197, 94, 0.08) 0%, transparent 30%),
        radial-gradient(circle at 80% 90%, rgba(16, 185, 129, 0.06) 0%, transparent 30%),
        linear-gradient(180deg, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0.7) 100%);
    }

    .bg-pattern-calculator {
      background-image: 
        radial-gradient(circle at 20% 30%, rgba(34, 197, 94, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(16, 185, 129, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(5, 150, 105, 0.06) 0%, transparent 50%),
        linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0.7) 100%);
    }

    /* Custom scrollbar for modal */
    .overflow-y-auto::-webkit-scrollbar {
      width: 6px;
    }

    .overflow-y-auto::-webkit-scrollbar-track {
      background: rgba(15, 23, 42, 0.5);
      border-radius: 3px;
    }

    .overflow-y-auto::-webkit-scrollbar-thumb {
      background: linear-gradient(to bottom, #10b981, #34d399);
      border-radius: 3px;
    }

    .overflow-y-auto::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(to bottom, #34d399, #10b981);
    }

    /* Enhanced focus styles for better accessibility */
    input:focus, select:focus, button:focus {
      outline: none;
      box-shadow: 
        0 0 0 3px rgba(34, 197, 94, 0.1),
        0 0 0 1px rgba(34, 197, 94, 0.5) !important;
    }

    /* Smooth transitions for all interactive elements */
    button, input, select, .group {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Backdrop blur support */
    @supports (backdrop-filter: blur(10px)) {
      .backdrop-blur-sm {
        backdrop-filter: blur(8px);
      }
    }

    /* Print styles */
    @media print {
      .no-print {
        display: none !important;
      }
    }
    
    @keyframes earth-rotate {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    
    .earth-rotate {
      animation: earth-rotate 20s linear infinite;
    }
    
    /* Ensure all interactive elements are enabled */
    button, input, select {
      pointer-events: auto !important;
    }
    
    button:disabled {
      opacity: 0.6;
      cursor: not-allowed;
    }

    /* Hide elements with x-cloak until Alpine is loaded */
    [x-cloak] {
      display: none !important;
    }

    /* Remove number input arrows/spinners */
    .hide-number-arrows::-webkit-outer-spin-button,
    .hide-number-arrows::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    .hide-number-arrows {
      -moz-appearance: textfield;
    }

    /* Firefox */
    .hide-number-arrows {
      -moz-appearance: textfield;
    }

    /* Ensure consistent styling across browsers */
    input[type="number"].hide-number-arrows {
      appearance: textfield;
      -webkit-appearance: none;
      -moz-appearance: textfield;
    }
  </style>
</x-app-layout>