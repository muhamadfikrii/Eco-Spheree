<div id="report-section" class="relative bg-gradient-to-br from-dark-bg to-[#0f2b42] text-white font-['Inter'] overflow-hidden py-32">

  <!-- Background glowing blobs -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute top-1/4 right-1/3 w-72 h-72 rounded-full bg-sunshine-yellow opacity-5 blur-3xl md:blur-3xl sm:blur-xl"></div>
    <div class="absolute bottom-1/4 left-1/3 w-64 h-64 rounded-full bg-light-green opacity-10 blur-3xl md:blur-3xl sm:blur-xl"></div>
  </div>

  <!-- Content -->
  <div class="container mx-auto px-6 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      <!-- LEFT CONTENT -->
      <div class="opacity-0 translate-y-10" id="report-text">
        <h2 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">
          Report Environmental Issues with 
          <span class="text-sunshine-yellow">Loca-Report</span>
        </h2>
        <p class="text-base md:text-lg text-gray-300 mb-6 max-w-lg">
          Use your smartphone to document and report environmental concerns in your community. Your reports help drive local action and awareness.
        </p>

        <div class="space-y-4 mb-6">
          <div class="flex items-start space-x-3">
            <div class="bg-green-700 rounded-full p-2 mt-1 w-8 h-8 flex items-center justify-center">
              <i class="fas fa-camera text-white"></i>
            </div>
            <div>
              <h4 class="font-semibold text-sm md:text-base">Visual Documentation</h4>
              <p class="text-gray-400 text-xs md:text-sm">Take photos with auto location tagging for accuracy.</p>
            </div>
          </div>

          <div class="flex items-start space-x-3">
            <div class="bg-green-700 rounded-full p-2 mt-1 w-8 h-8 flex items-center justify-center">
              <i class="fas fa-map-marker-alt text-white"></i>
            </div>
            <div>
              <h4 class="font-semibold text-sm md:text-base">Pin on Interactive Map</h4>
              <p class="text-gray-400 text-xs md:text-sm">Each report appears as a glowing marker for visibility.</p>
            </div>
          </div>

          <div class="flex items-start space-x-3">
            <div class="bg-green-700 rounded-full p-2 mt-1 w-8 h-8 flex items-center justify-center">
              <i class="fas fa-users text-white"></i>
            </div>
            <div>
              <h4 class="font-semibold text-sm md:text-base">Community Action</h4>
              <p class="text-gray-400 text-xs md:text-sm">Collaborate with locals to resolve reported issues.</p>
            </div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
          <button class="bg-green-600 hover:bg-green-500 text-gray-900 px-6 py-3 rounded-full font-medium transition-all duration-300 flex items-center justify-center shadow-md hover:shadow-lg">
            <i class="fas fa-plus mr-2"></i>
            <a href="{{ route('report') }}">explore with the community</a>
          </button>
          <button class="bg-transparent border border-green-700 hover:bg-green-700 hover:text-gray-900 px-6 py-3 rounded-full font-medium transition-all duration-300 flex items-center justify-center shadow-md hover:shadow-lg">
            <i class="fas fa-exclamation-circle mr-2"></i> Report Issue
          </button>
        </div>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="relative opacity-0 translate-y-10 mt-12 lg:mt-0" id="report-mockup">
        <div class="bg-gray-800 rounded-[2rem] p-4 w-64 mx-auto shadow-2xl float-card">
          <div class="bg-gray-900 rounded-2xl h-80 md:h-96 overflow-hidden relative">
            <div class="absolute inset-0 bg-gradient-to-b from-dark-bg to-card-bg p-4">
              <h3 class="font-bold mb-3 flex justify-between">
                <span>New Report</span>
                <span class="opacity-60">✕</span>
              </h3>
              <div class="bg-black bg-opacity-30 rounded-lg h-40 md:h-48 mb-4 flex items-center justify-center">
                <i class="fas fa-camera text-white opacity-50 text-2xl"></i>
              </div>
              <div class="space-y-2">
                <div>
                  <label class="text-xs text-gray-300">Issue Type</label>
                  <div class="flex space-x-2 mt-1 text-xs">
                    <span class="bg-light-green bg-opacity-20 text-white px-2 py-1 rounded">Pollution</span>
                    <span class="bg-gray-700 text-gray-300 px-2 py-1 rounded">Deforestation</span>
                  </div>
                </div>
                <div>
                  <label class="text-xs text-gray-300">Description</label>
                  <div class="h-14 md:h-16 bg-black bg-opacity-20 rounded mt-1"></div>
                </div>
                <button class="w-full bg-sunshine-yellow text-gray-900 py-2 rounded-lg font-medium mt-2">Submit</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Floating info cards -->
        <div class="absolute -top-3 bg-slate-700 -right-3 glass p-3 rounded-xl w-44 float-card">
          <div class="flex items-center mb-1">
            <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
            <span class="text-sm font-medium">128 Reports Today</span>
          </div>
          <p class="text-xs text-gray-400">Community-driven action</p>
        </div>

        <div class="absolute -bottom-3 bg-slate-700 -left-3 glass p-3 rounded-xl w-44 float-card">
          <div class="flex items-center mb-1">
            <div class="w-3 h-3 bg-sunshine-yellow rounded-full mr-2"></div>
            <span class="text-sm font-medium">64% Issues Resolved</span>
          </div>
          <p class="text-xs text-gray-400">Through local efforts</p>
        </div>
      </div>
    </div>
  </div>

<!-- GSAP Animation -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);

  // Text fade in
  gsap.to("#report-text", {
    scrollTrigger: {
      trigger: "#report-section",
      start: "top 90%",
      once: true
    },
    opacity: 1,
    y: 0,
    duration: 1.2,
    ease: "power3.out",
    force3D: true,
    willChange: "transform, opacity"
  });

  // Enhanced mockup animation with smoother entrance
  gsap.to("#report-mockup", {
    scrollTrigger: {
      trigger: "#report-section",
      start: "top 85%",
      once: true
    },
    opacity: 1,
    y: 0,
    duration: 1.4,
    delay: 0.2,
    ease: "power3.out",
    force3D: true,
    willChange: "transform, opacity"
  });

  // Enhanced floating animation with better performance
  const floatCards = gsap.utils.toArray(".float-card");
  
  floatCards.forEach((card, index) => {
    // Stagger the floating animation for each card
    gsap.to(card, {
      y: 15,
      duration: 3 + (index * 0.5), // Different durations for variety
      repeat: -1,
      yoyo: true,
      ease: "sine.inOut",
      force3D: true,
      willChange: "transform",
      transformPerspective: 1000, // Add perspective for better 3D rendering
      transformOrigin: "50% 50%"
    });
  });

  // Add subtle rotation and scale animation to main phone mockup
  gsap.to("#report-mockup .bg-gray-800", {
    rotation: 2,
    scale: 1.02,
    duration: 4,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut",
    force3D: true,
    willChange: "transform",
    transformPerspective: 1000
  });
});
</script>
</div>