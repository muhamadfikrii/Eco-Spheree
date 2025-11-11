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
  <div class="min-h-screen bg-gradient-to-br from-slate-900 via-emerald-900/50 to-slate-900 pt-24 pb-16 px-6 sm:px-10 text-white relative overflow-hidden" x-data="ecoTrack">

    <!-- Animated Background Elements -->
    <div class="absolute inset-0 bg-pattern"></div>
    
    <!-- Floating Particles -->
    <div class="absolute top-1/4 left-1/4 w-6 h-6 rounded-full bg-green-400/30 float-animation"></div>
    <div class="absolute top-1/3 right-1/4 w-10 h-10 rounded-full bg-emerald-500/20 float-animation" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-1/4 left-1/3 w-8 h-8 rounded-full bg-teal-400/25 float-animation" style="animation-delay: 2s;"></div>
    <div class="absolute top-3/4 right-1/3 w-12 h-12 rounded-full bg-green-300/15 float-animation" style="animation-delay: 1.5s;"></div>
    
    <!-- Geometric Shapes -->
    <div class="absolute top-10 right-10 w-32 h-32 border-2 border-green-500/30 rotate-45 opacity-40"></div>
    <div class="absolute bottom-20 left-10 w-24 h-24 border-2 border-emerald-400/20 rotate-12 opacity-30"></div>
    <div class="absolute top-40 left-20 w-16 h-16 border border-green-300/25 rotate-30 opacity-25"></div>

    <!-- Header Section with Enhanced Design -->
    <div class="text-center mb-16 relative z-10">
      <div class="overflow-hidden mb-4">
        <h1 class="text-6xl md:text-7xl font-black leading-tight">
          <span class="block bg-gradient-to-r from-green-400 via-emerald-400 to-green-500 bg-clip-text text-transparent drop-shadow-lg transform transition-all duration-1000">
            Eco-Track
          </span>
        </h1>
      </div>
      
      <div class="overflow-hidden max-w-3xl mx-auto">
        <p class="text-xl md:text-2xl font-light opacity-90 leading-relaxed transform transition-all duration-1000 delay-300 bg-gradient-to-r from-gray-300 to-emerald-200 bg-clip-text text-transparent">
          Calculate, understand, and reduce your carbon footprint with our intelligent environmental tracker
        </p>
      </div>

      <!-- Progress Indicator -->
      <div class="mt-8 max-w-md mx-auto">
        <div class="flex items-center justify-between text-sm text-gray-400 mb-2">
          <span>Environmental Impact</span>
          <span x-text="totalCarbon > 0 ? totalCarbon.toFixed(1) + ' kg CO₂' : 'Not Calculated'"></span>
        </div>
        <div class="w-full bg-slate-700/50 rounded-full h-2">
          <div class="bg-gradient-to-r from-green-500 to-emerald-400 h-2 rounded-full transition-all duration-1000 ease-out" 
               :style="'width: ' + Math.min((totalCarbon / 100) * 100, 100) + '%'"></div>

  <div class="min-h-screen bg-gradient-to-br from-slate-900 via-emerald-900/50 to-slate-900 pt-24 pb-16 px-6 sm:px-10 text-white relative overflow-hidden" x-data="ecoTrack">

    <!-- Animated Background Elements -->
    <div class="absolute inset-0 bg-pattern"></div>
    
    <!-- Floating Particles -->
    <div class="absolute top-1/4 left-1/4 w-6 h-6 rounded-full bg-green-400/30 float-animation"></div>
    <div class="absolute top-1/3 right-1/4 w-10 h-10 rounded-full bg-emerald-500/20 float-animation" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-1/4 left-1/3 w-8 h-8 rounded-full bg-teal-400/25 float-animation" style="animation-delay: 2s;"></div>
    <div class="absolute top-3/4 right-1/3 w-12 h-12 rounded-full bg-green-300/15 float-animation" style="animation-delay: 1.5s;"></div>
    
    <!-- Geometric Shapes -->
    <div class="absolute top-10 right-10 w-32 h-32 border-2 border-green-500/30 rotate-45 opacity-40"></div>
    <div class="absolute bottom-20 left-10 w-24 h-24 border-2 border-emerald-400/20 rotate-12 opacity-30"></div>
    <div class="absolute top-40 left-20 w-16 h-16 border border-green-300/25 rotate-30 opacity-25"></div>

    <!-- Header Section with Enhanced Design -->
    <div class="text-center mb-16 relative z-10">
      <div class="overflow-hidden mb-4">
        <h1 class="text-6xl md:text-7xl font-black leading-tight">
          <span class="block bg-gradient-to-r from-green-400 via-emerald-400 to-green-500 bg-clip-text text-transparent drop-shadow-lg transform transition-all duration-1000">
            Eco-Track
          </span>
        </h1>
      </div>
      
      <div class="overflow-hidden max-w-3xl mx-auto">
        <p class="text-xl md:text-2xl font-light opacity-90 leading-relaxed transform transition-all duration-1000 delay-300 bg-gradient-to-r from-gray-300 to-emerald-200 bg-clip-text text-transparent">
          Calculate, understand, and reduce your carbon footprint with our intelligent environmental tracker
        </p>
      </div>

      <!-- Progress Indicator -->
      <div class="mt-8 max-w-md mx-auto">
        <div class="flex items-center justify-between text-sm text-gray-400 mb-2">
          <span>Environmental Impact</span>
          <span x-text="totalCarbon > 0 ? totalCarbon.toFixed(1) + ' kg CO₂' : 'Not Calculated'"></span>
        </div>
        <div class="w-full bg-slate-700/50 rounded-full h-2">
          <div class="bg-gradient-to-r from-green-500 to-emerald-400 h-2 rounded-full transition-all duration-1000 ease-out" 
               :style="'width: ' + Math.min((totalCarbon / 100) * 100, 100) + '%'"></div>
        </div>
      </div>
    </div>

    <!-- Main Grid with Enhanced Cards -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 relative z-10">
      
      <!-- Left Section: Input Card -->
      <div class="group relative">
        <!-- Card Background with Gradient Border -->
        <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-emerald-400 rounded-2xl blur-sm opacity-20 group-hover:opacity-30 transition-opacity duration-300"></div>
        
        <div class="relative bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-2xl border border-slate-700/50 hover:border-green-500/30 transition-all duration-500 hover:shadow-green-500/10">
          <!-- Card Header -->
          <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-400 rounded-2xl mb-4 shadow-lg">
              <span class="text-2xl">💡</span>
            </div>
            <h2 class="text-3xl font-bold bg-gradient-to-r from-green-400 to-emerald-300 bg-clip-text text-transparent">
              Your Environmental Profile
            </h2>
            <p class="text-gray-400 mt-2">Fill out your daily activities to calculate your carbon impact</p>
          </div>

          <!-- Enhanced Form -->
          <form @submit.prevent="calculateFootprint" class="space-y-6">
            <!-- Transportation Input -->
            <div class="group/input">
              <label class="block text-gray-300 mb-3 text-lg font-medium">🚗 Daily Transportation</label>
              <select 
                x-model.number="inputs.transport" 
                class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:outline-none transition-all duration-300 hover:border-slate-500 group-hover/input:shadow-lg"
                x-ref="transportSelect">
                <option value="0" class="bg-slate-800">Select your transportation...</option>
                <option value="1.2" class="bg-slate-800">🏍️ Motorbike (gasoline)</option>
                <option value="2.5" class="bg-slate-800">🚗 Car (gasoline)</option>
                <option value="0.8" class="bg-slate-800">⚡ Electric car</option>
                <option value="0.3" class="bg-slate-800">🚲 Bicycle</option>
                <option value="0" class="bg-slate-800">🚶 Walking / Public transport</option>
              </select>
            </div>

            <!-- Electricity Input -->
            <div class="group/input">
              <label class="block text-gray-300 mb-3 text-lg font-medium">💡 Electricity Consumption</label>
              <div class="relative">
                <input 
                  type="number" 
                  x-model.number="inputs.electric" 
                  min="0" 
                  class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:outline-none transition-all duration-300 hover:border-slate-500 group-hover/input:shadow-lg pr-16"
                  placeholder="Enter weekly kWh"
                  x-ref="electricInput">
                <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm">kWh/week</span>
              </div>
            </div>

            <!-- Meat Consumption Input -->
            <div class="group/input">
              <label class="block text-gray-300 mb-3 text-lg font-medium">🍖 Meat Consumption</label>
              <div class="relative">
                <input 
                  type="number" 
                  x-model.number="inputs.meat" 
                  min="0" 
                  class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:outline-none transition-all duration-300 hover:border-slate-500 group-hover/input:shadow-lg pr-16"
                  placeholder="Enter weekly servings"
                  x-ref="meatInput">
                <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm">servings/week</span>
              </div>
            </div>

            <!-- Plastic Usage Input -->
            <div class="group/input">
              <label class="block text-gray-300 mb-3 text-lg font-medium">🥤 Single-use Plastic Usage</label>
              <div class="relative">
                <input 
                  type="number" 
                  x-model.number="inputs.plastic" 
                  min="0" 
                  class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:outline-none transition-all duration-300 hover:border-slate-500 group-hover/input:shadow-lg pr-16"
                  placeholder="Enter weekly items"
                  x-ref="plasticInput">
                <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm">items/week</span>
              </div>
            </div>

            <!-- Calculate Button -->
            <button 
              type="submit" 
              class="w-full bg-gradient-to-r from-green-600 to-emerald-500 hover:from-green-500 hover:to-emerald-400 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98] shadow-lg hover:shadow-xl pulse-glow flex items-center justify-center gap-3 text-lg group/btn mt-8"
              x-ref="calculateButton">
              <span class="group-hover/btn:scale-110 transition-transform duration-300">🌱</span>
              <span>Calculate Carbon Footprint</span>
              <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
              </svg>
            </button>
          </form>
        </div>
      </div>

      <!-- Right Section: Visualization Card -->
      <div class="group relative">
        <!-- Card Background with Gradient Border -->
        <div class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-green-400 rounded-2xl blur-sm opacity-20 group-hover:opacity-30 transition-opacity duration-300"></div>
        
        <div class="relative bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-2xl border border-slate-700/50 hover:border-emerald-500/30 transition-all duration-500 hover:shadow-emerald-500/10 h-full flex flex-col justify-center">
          
          <!-- Animated Background -->
          <div class="absolute inset-0 bg-gradient-to-tr from-green-500/10 via-transparent to-emerald-400/10 animate-pulse rounded-2xl"></div>

          <!-- Default State -->
          <template x-if="totalCarbon === 0">
            <div class="text-center relative z-10 space-y-8">
              <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-slate-600 to-slate-700 rounded-3xl mb-4 shadow-inner">
                <span class="text-4xl opacity-60">🌿</span>
              </div>
              <div>
                <h3 class="text-2xl font-bold text-gray-300 mb-4">Ready to Discover Your Impact?</h3>
                <p class="text-gray-400 text-lg leading-relaxed">
                  Fill out the form to see your personalized carbon footprint analysis and get actionable tips to reduce your environmental impact.
                </p>
              </div>
              <div class="flex justify-center space-x-4">
                <div class="w-3 h-3 bg-green-400 rounded-full animate-bounce"></div>
                <div class="w-3 h-3 bg-emerald-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                <div class="w-3 h-3 bg-teal-400 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
              </div>
            </div>
          </template>

          <!-- Results State -->
          <template x-if="totalCarbon > 0">
            <div class="relative z-10 space-y-8 animate-fade-in">
              <!-- Circular Progress with Enhanced Design -->
              <div class="relative flex items-center justify-center">
                <div class="absolute w-48 h-48 bg-gradient-to-br from-green-500/20 to-emerald-400/20 rounded-full blur-xl"></div>
                <svg class="w-48 h-48 transform -rotate-90 drop-shadow-2xl">
                  <circle cx="96" cy="96" r="84" stroke="rgba(255,255,255,0.1)" stroke-width="8" fill="none" />
                  <circle cx="96" cy="96" r="84" 
                          stroke="url(#grad)" 
                          stroke-width="8" fill="none" 
                          stroke-dasharray="528"
                          :stroke-dashoffset="528 - (totalCarbon / 100 * 528)" 
                          stroke-linecap="round"
                          class="transition-all duration-1000 ease-out drop-shadow-lg" />
                  <defs>
                    <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#22c55e" />
                      <stop offset="50%" stop-color="#10b981" />
                      <stop offset="100%" stop-color="#34d399" />
                    </linearGradient>
                  </defs>
                </svg>
                <div class="absolute text-center">
                  <p class="text-5xl font-black text-green-400 mb-2 drop-shadow-lg" x-text="totalCarbon.toFixed(1)"></p>
                  <p class="text-gray-400 text-sm font-medium">kg CO₂ / week</p>
                </div>
              </div>

              <!-- Text Feedback with Enhanced Design -->
              <div class="text-center">
                <p class="text-xl font-semibold text-gray-200 leading-relaxed px-4" x-text="footprintMessage"></p>
              </div>

              <!-- Breakdown Cards -->
              <div class="grid grid-cols-2 gap-4">
                <template x-for="metric in metrics" :key="metric.name">
                  <div class="bg-slate-900/60 backdrop-blur-sm rounded-xl p-4 border border-slate-700/50 hover:border-green-500/50 transition-all duration-300 hover:transform hover:scale-105 group/card">
                    <p class="text-green-400 font-bold text-2xl mb-1 text-center group-hover/card:scale-110 transition-transform duration-300" x-text="metric.value.toFixed(1)"></p>
                    <p class="text-gray-400 text-sm text-center font-medium" x-text="metric.name"></p>
                  </div>
                </template>
              </div>

              <!-- Tips Section -->
              <div class="bg-slate-900/40 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50">
                <h3 class="text-green-400 font-bold text-lg mb-4 flex items-center justify-center gap-2">
                  <span class="text-xl">💚</span>
                  Tips to Reduce Your Footprint
                </h3>
                <ul class="text-sm text-gray-300 space-y-3">
                  <template x-for="(tip, index) in ecoTips" :key="index">
                    <li class="flex items-start gap-3 p-3 bg-slate-800/30 rounded-lg hover:bg-slate-800/50 transition-colors duration-300">
                      <span class="text-green-400 mt-0.5 flex-shrink-0">🌿</span>
                      <span x-text="tip" class="leading-relaxed"></span>
                    </li>
                  </template>
                </ul>
              </div>

              <!-- Action Buttons -->
              <div class="flex gap-3">
                <button @click="resetForm" class="flex-1 bg-slate-700 hover:bg-slate-600 text-white font-medium py-3 rounded-xl transition-all duration-300 transform hover:scale-[1.02]">
                  Reset Form
                </button>
                <button @click="shareResults" class="flex-1 bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white font-medium py-3 rounded-xl transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center gap-2">
                  <span>📤</span>
                  Share Results
                </button>
              </div>
            </div>
          </template>
        </div>
      </div>
    </div>

    <!-- Main Grid with Enhanced Cards -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 relative z-10">
      
      <!-- Left Section: Input Card -->
      <div class="group relative">
        <!-- Card Background with Gradient Border -->
        <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-emerald-400 rounded-2xl blur-sm opacity-20 group-hover:opacity-30 transition-opacity duration-300"></div>
        
        <div class="relative bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-2xl border border-slate-700/50 hover:border-green-500/30 transition-all duration-500 hover:shadow-green-500/10">
          <!-- Card Header -->
          <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-400 rounded-2xl mb-4 shadow-lg">
              <span class="text-2xl">💡</span>
            </div>
            <h2 class="text-3xl font-bold bg-gradient-to-r from-green-400 to-emerald-300 bg-clip-text text-transparent">
              Your Environmental Profile
            </h2>
            <p class="text-gray-400 mt-2">Fill out your daily activities to calculate your carbon impact</p>
          </div>

          <!-- Enhanced Form -->
          <form @submit.prevent="calculateFootprint" class="space-y-6">
            <!-- Transportation Input -->
            <div class="group/input">
              <label class="block text-gray-300 mb-3 text-lg font-medium">🚗 Daily Transportation</label>
              <select 
                x-model.number="inputs.transport" 
                class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:outline-none transition-all duration-300 hover:border-slate-500 group-hover/input:shadow-lg"
                x-ref="transportSelect">
                <option value="0" class="bg-slate-800">Select your transportation...</option>
                <option value="1.2" class="bg-slate-800">🏍️ Motorbike (gasoline)</option>
                <option value="2.5" class="bg-slate-800">🚗 Car (gasoline)</option>
                <option value="0.8" class="bg-slate-800">⚡ Electric car</option>
                <option value="0.3" class="bg-slate-800">🚲 Bicycle</option>
                <option value="0" class="bg-slate-800">🚶 Walking / Public transport</option>
              </select>
            </div>

            <!-- Electricity Input -->
            <div class="group/input">
              <label class="block text-gray-300 mb-3 text-lg font-medium">💡 Electricity Consumption</label>
              <div class="relative">
                <input 
                  type="number" 
                  x-model.number="inputs.electric" 
                  min="0" 
                  class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:outline-none transition-all duration-300 hover:border-slate-500 group-hover/input:shadow-lg pr-16"
                  placeholder="Enter weekly kWh"
                  x-ref="electricInput">
                <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm">kWh/week</span>
              </div>
            </div>

            <!-- Meat Consumption Input -->
            <div class="group/input">
              <label class="block text-gray-300 mb-3 text-lg font-medium">🍖 Meat Consumption</label>
              <div class="relative">
                <input 
                  type="number" 
                  x-model.number="inputs.meat" 
                  min="0" 
                  class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:outline-none transition-all duration-300 hover:border-slate-500 group-hover/input:shadow-lg pr-16"
                  placeholder="Enter weekly servings"
                  x-ref="meatInput">
                <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm">servings/week</span>
              </div>
            </div>

            <!-- Plastic Usage Input -->
            <div class="group/input">
              <label class="block text-gray-300 mb-3 text-lg font-medium">🥤 Single-use Plastic Usage</label>
              <div class="relative">
                <input 
                  type="number" 
                  x-model.number="inputs.plastic" 
                  min="0" 
                  class="w-full bg-slate-900/50 border-2 border-slate-600 rounded-xl px-4 py-4 text-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:outline-none transition-all duration-300 hover:border-slate-500 group-hover/input:shadow-lg pr-16"
                  placeholder="Enter weekly items"
                  x-ref="plasticInput">
                <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-sm">items/week</span>
              </div>
            </div>

            <!-- Calculate Button -->
            <button 
              type="submit" 
              class="w-full bg-gradient-to-r from-green-600 to-emerald-500 hover:from-green-500 hover:to-emerald-400 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98] shadow-lg hover:shadow-xl pulse-glow flex items-center justify-center gap-3 text-lg group/btn mt-8"
              x-ref="calculateButton">
              <span class="group-hover/btn:scale-110 transition-transform duration-300">🌱</span>
              <span>Calculate Carbon Footprint</span>
              <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
              </svg>
            </button>
          </form>
        </div>
      </div>

      <!-- Right Section: Visualization Card -->
      <div class="group relative">
        <!-- Card Background with Gradient Border -->
        <div class="absolute inset-0 bg-gradient-to-r from-emerald-500 to-green-400 rounded-2xl blur-sm opacity-20 group-hover:opacity-30 transition-opacity duration-300"></div>
        
        <div class="relative bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 shadow-2xl border border-slate-700/50 hover:border-emerald-500/30 transition-all duration-500 hover:shadow-emerald-500/10 h-full flex flex-col justify-center">
          
          <!-- Animated Background -->
          <div class="absolute inset-0 bg-gradient-to-tr from-green-500/10 via-transparent to-emerald-400/10 animate-pulse rounded-2xl"></div>

          <!-- Default State -->
          <template x-if="totalCarbon === 0">
            <div class="text-center relative z-10 space-y-8">
              <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-slate-600 to-slate-700 rounded-3xl mb-4 shadow-inner">
                <span class="text-4xl opacity-60">🌿</span>
              </div>
              <div>
                <h3 class="text-2xl font-bold text-gray-300 mb-4">Ready to Discover Your Impact?</h3>
                <p class="text-gray-400 text-lg leading-relaxed">
                  Fill out the form to see your personalized carbon footprint analysis and get actionable tips to reduce your environmental impact.
                </p>
              </div>
              <div class="flex justify-center space-x-4">
                <div class="w-3 h-3 bg-green-400 rounded-full animate-bounce"></div>
                <div class="w-3 h-3 bg-emerald-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                <div class="w-3 h-3 bg-teal-400 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
              </div>
            </div>
          </template>

          <!-- Results State -->
          <template x-if="totalCarbon > 0">
            <div class="relative z-10 space-y-8 animate-fade-in">
              <!-- Circular Progress with Enhanced Design -->
              <div class="relative flex items-center justify-center">
                <div class="absolute w-48 h-48 bg-gradient-to-br from-green-500/20 to-emerald-400/20 rounded-full blur-xl"></div>
                <svg class="w-48 h-48 transform -rotate-90 drop-shadow-2xl">
                  <circle cx="96" cy="96" r="84" stroke="rgba(255,255,255,0.1)" stroke-width="8" fill="none" />
                  <circle cx="96" cy="96" r="84" 
                          stroke="url(#grad)" 
                          stroke-width="8" fill="none" 
                          stroke-dasharray="528"
                          :stroke-dashoffset="528 - (totalCarbon / 100 * 528)" 
                          stroke-linecap="round"
                          class="transition-all duration-1000 ease-out drop-shadow-lg" />
                  <defs>
                    <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#22c55e" />
                      <stop offset="50%" stop-color="#10b981" />
                      <stop offset="100%" stop-color="#34d399" />
                    </linearGradient>
                  </defs>
                </svg>
                <div class="absolute text-center">
                  <p class="text-5xl font-black text-green-400 mb-2 drop-shadow-lg" x-text="totalCarbon.toFixed(1)"></p>
                  <p class="text-gray-400 text-sm font-medium">kg CO₂ / week</p>
                </div>
              </div>

              <!-- Text Feedback with Enhanced Design -->
              <div class="text-center">
                <p class="text-xl font-semibold text-gray-200 leading-relaxed px-4" x-text="footprintMessage"></p>
              </div>

              <!-- Breakdown Cards -->
              <div class="grid grid-cols-2 gap-4">
                <template x-for="metric in metrics" :key="metric.name">
                  <div class="bg-slate-900/60 backdrop-blur-sm rounded-xl p-4 border border-slate-700/50 hover:border-green-500/50 transition-all duration-300 hover:transform hover:scale-105 group/card">
                    <p class="text-green-400 font-bold text-2xl mb-1 text-center group-hover/card:scale-110 transition-transform duration-300" x-text="metric.value.toFixed(1)"></p>
                    <p class="text-gray-400 text-sm text-center font-medium" x-text="metric.name"></p>
                  </div>
                </template>
              </div>

              <!-- Tips Section -->
              <div class="bg-slate-900/40 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50">
                <h3 class="text-green-400 font-bold text-lg mb-4 flex items-center justify-center gap-2">
                  <span class="text-xl">💚</span>
                  Tips to Reduce Your Footprint
                </h3>
                <ul class="text-sm text-gray-300 space-y-3">
                  <template x-for="(tip, index) in ecoTips" :key="index">
                    <li class="flex items-start gap-3 p-3 bg-slate-800/30 rounded-lg hover:bg-slate-800/50 transition-colors duration-300">
                      <span class="text-green-400 mt-0.5 flex-shrink-0">🌿</span>
                      <span x-text="tip" class="leading-relaxed"></span>
                    </li>
                  </template>
                </ul>
              </div>

              <!-- Action Buttons -->
              <div class="flex gap-3">
                <button @click="resetForm" class="flex-1 bg-slate-700 hover:bg-slate-600 text-white font-medium py-3 rounded-xl transition-all duration-300 transform hover:scale-[1.02]">
                  Reset Form
                </button>
                <button @click="shareResults" class="flex-1 bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-400 text-white font-medium py-3 rounded-xl transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center gap-2">
                  <span>📤</span>
                  Share Results
                </button>
              </div>
            </div>
          </template>
        </div>
      </div>
    </div>

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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
          console.log('🚀 Eco-Track Enhanced initialized');
          
          // Load saved data if exists
          const savedData = localStorage.getItem('ecoTrackData');
          if (savedData) {
            const data = JSON.parse(savedData);
            this.inputs = data.inputs;
            this.totalCarbon = data.totalCarbon;
            this.metrics = data.metrics;
            this.ecoTips = data.ecoTips;
            this.footprintMessage = data.footprintMessage;
          }

          // Force enable all interactive elements
          this.$nextTick(() => {
            const interactiveElements = document.querySelectorAll('input, select, button, textarea');
            interactiveElements.forEach(el => {
              el.style.pointerEvents = 'auto';
              el.disabled = false;
              el.readOnly = false;
            });
          });
        },

        calculateFootprint() {
          console.log('📊 Calculating enhanced footprint...', this.inputs);
<<<<<<< HEAD
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
=======
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
          
          // Calculate carbon for each category
          const transportCarbon = this.calculateTransportCarbon();
          const energyCarbon = this.calculateEnergyCarbon();
          const lifestyleCarbon = this.calculateLifestyleCarbon();
          const additionalCarbon = this.calculateAdditionalCarbon();

<<<<<<< HEAD
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
=======
          this.totalCarbon = transportCarbon + electricCarbon + meatCarbon + plasticCarbon;
          this.metrics = [
            { name: 'Transport', value: transportCarbon },
            { name: 'Electricity', value: electricCarbon },
            { name: 'Food', value: meatCarbon },
            { name: 'Waste', value: plasticCarbon },
          ];

          // Enhanced messaging with more personalized feedback
          if (this.totalCarbon < 15) {
            this.footprintMessage = 'Excellent! 🌟 Your footprint is exceptionally low. You\'re leading the way in sustainable living!';
            this.ecoTips = [
              'Consider sharing your eco-friendly habits with friends',
              'Explore renewable energy options for your home',
              'Continue your plant-based diet journey'
            ];
          } else if (this.totalCarbon < 25) {
            this.footprintMessage = 'Great job! 🌱 Your environmental impact is below average. Keep up the good work!';
            this.ecoTips = [
              'Try meat-free days each week',
              'Use public transportation more often',
              'Switch to energy-efficient appliances'
            ];
          } else if (this.totalCarbon < 40) {
            this.footprintMessage = 'Moderate impact ⚖️ – You have room for improvement. Small changes can make a big difference!';
            this.ecoTips = [
              'Reduce single-use plastic by 50%',
              'Combine errands to reduce car trips',
              'Install smart thermostats for energy savings'
            ];
          } else if (this.totalCarbon < 60) {
            this.footprintMessage = 'High footprint 🚨 – Time to take action! Your choices significantly impact the environment.';
            this.ecoTips = [
              'Switch to an electric or hybrid vehicle',
              'Reduce meat consumption by half',
              'Invest in home solar panels'
            ];
          } else {
            this.footprintMessage = 'Critical impact 🚨 – Immediate changes needed! Your footprint is well above sustainable levels.';
            this.ecoTips = [
              'Consult with a sustainability expert',
              'Implement comprehensive waste reduction',
              'Transition to 100% renewable energy'
            ];
          }
          
          // Save results to localStorage
          this.saveToLocalStorage();
          
          console.log('✅ Enhanced calculation complete:', this.totalCarbon);
<<<<<<< HEAD
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
=======
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
        },

        saveToLocalStorage() {
          const data = {
            inputs: this.inputs,
            totalCarbon: this.totalCarbon,
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
            metrics: this.metrics,
            ecoTips: this.ecoTips,
            footprintMessage: this.footprintMessage,
            timestamp: new Date().toISOString()
          };
          localStorage.setItem('ecoTrackData', JSON.stringify(data));
        },

        resetForm() {
          this.inputs = { transport: 0, electric: 0, meat: 0, plastic: 0 };
          this.totalCarbon = 0;
          this.metrics = [];
          this.ecoTips = [];
          this.footprintMessage = '';
          localStorage.removeItem('ecoTrackData');
          this.showNotification('Form reset successfully!', 'success');
<<<<<<< HEAD
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
=======
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
        },

        shareResults() {
          if (this.totalCarbon === 0) {
<<<<<<< HEAD
<<<<<<< HEAD
            this.showNotification('Please calculate your carbon footprint first!', 'warning');
            return;
          }

          const shareText = `My carbon footprint is ${this.totalCarbon.toFixed(1)} kg CO₂ per year. Let's work together to reduce our environmental impact! 🌍`;
=======
=======
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
            this.showNotification('Please calculate your footprint first!', 'warning');
            return;
          }

          const shareText = `My carbon footprint is ${this.totalCarbon.toFixed(1)} kg CO₂ per week. Calculate yours at Eco-Track! 🌍`;
<<<<<<< HEAD
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
=======
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
          
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
<<<<<<< HEAD
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

=======
    @keyframes fade-in { 
      from { opacity: 0; transform: translateY(20px) scale(0.95); } 
      to { opacity: 1; transform: translateY(0) scale(1); } 
    }
    
    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(5deg); }
    }
    
    @keyframes pulse-glow {
      0% { 
        box-shadow: 0 0 20px rgba(34, 197, 94, 0.4),
                   0 0 40px rgba(34, 197, 94, 0.2),
                   0 0 60px rgba(34, 197, 94, 0.1);
      }
      50% { 
        box-shadow: 0 0 30px rgba(34, 197, 94, 0.6),
                   0 0 60px rgba(34, 197, 94, 0.3),
                   0 0 90px rgba(34, 197, 94, 0.2);
      }
      100% { 
        box-shadow: 0 0 20px rgba(34, 197, 94, 0.4),
                   0 0 40px rgba(34, 197, 94, 0.2),
                   0 0 60px rgba(34, 197, 94, 0.1);
      }
    }

    .animate-fade-in { 
      animation: fade-in 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) both; 
    }

    .float-animation {
      animation: float 8s ease-in-out infinite;
    }

    .pulse-glow {
      animation: pulse-glow 3s ease-in-out infinite;
    }

    .bg-pattern {
      background-image: 
        radial-gradient(circle at 20% 30%, rgba(34, 197, 94, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(16, 185, 129, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 40% 80%, rgba(5, 150, 105, 0.06) 0%, transparent 50%),
        linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(15, 23, 42, 0.7) 100%);
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: rgba(15, 23, 42, 0.5);
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(to bottom, #10b981, #34d399);
      border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(to bottom, #34d399, #10b981);
    }

    /* Enhanced focus styles */
    input:focus, select:focus {
      outline: none;
      box-shadow: 
        0 0 0 3px rgba(34, 197, 94, 0.1),
        0 0 0 1px rgba(34, 197, 94, 0.5),
        inset 0 0 20px rgba(34, 197, 94, 0.05) !important;
    }

<<<<<<< HEAD
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
=======
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
    /* Smooth transitions for all interactive elements */
    button, input, select, .group {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Backdrop blur support */
<<<<<<< HEAD
<<<<<<< HEAD
    @@supports (backdrop-filter: blur(10px)) {
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
=======
    @supports (backdrop-filter: blur(10px)) {
      .backdrop-blur-sm {
        backdrop-filter: blur(8px);
      }
    }
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
=======
    @supports (backdrop-filter: blur(10px)) {
      .backdrop-blur-sm {
        backdrop-filter: blur(8px);
      }
    }
>>>>>>> 968373e (Merge pull request #34 from muhamadfikrii/update-report)
  </style>
</x-app-layout>