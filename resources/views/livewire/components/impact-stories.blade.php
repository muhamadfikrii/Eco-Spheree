<div>
    <section class="py-14 sm:py-16 lg:py-24" id="impact-stories">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-10 lg:mb-16">
                <span class="inline-block bg-emerald-100 text-emerald-800 px-4 py-1.5 rounded-full text-sm font-semibold mb-4">
                    Success Stories
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                    Impact Stories
                </h2>
                <p class="text-base sm:text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover how EcoTrack is making a difference across Indonesia through real success stories and environmental achievements.
                </p>
            </div>

            <!-- Carousel Container -->
            <div x-data="impactStories()" x-init="init()" class="relative">
                <!-- Loading State -->
                <div x-show="isLoading" class="text-center py-20">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-emerald-600 mx-auto"></div>
                    <p class="text-gray-600 mt-4">Loading impact stories...</p>
                </div>

                <!-- Carousel -->
                <div 
                    x-show="!isLoading && stories.length > 0" 
                    class="relative overflow-hidden rounded-2xl bg-white shadow-xl border border-gray-100"
                >
                    <div class="relative h-auto md:h-[600px] lg:h-[600px] min-h-[400px]">
                        <div 
                            class="flex h-full transition-transform duration-700 ease-in-out"
                            :style="`transform: translateX(-${activeSlide * 100}%)`"
                        >
                            <template x-for="(story, index) in stories" :key="index">
                                <div class="w-full flex-shrink-0 h-auto md:h-full">
                                    <div class="flex flex-col md:flex-row h-auto md:h-full bg-white rounded-3xl overflow-hidden">

                                        <!-- Gambar -->
                                        <div class="w-full md:w-1/2 h-60 md:h-full relative bg-gray-100 flex-shrink-0">
                                            <img 
                                                :src="story.image" 
                                                class="w-full h-full object-cover"
                                                :alt="story.title"
                                            >
                                            <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/60 to-transparent p-4 md:hidden">
                                                <h3 class="text-white font-bold text-lg" x-text="story.title"></h3>
                                                <p class="text-gray-200 text-sm" x-text="story.location"></p>
                                            </div>
                                        </div>

                                        <!-- Konten -->
                                        <div class="w-full md:w-1/2 p-6 md:p-10 flex flex-col justify-between overflow-y-auto max-h-[400px] md:max-h-none">
                                            <div class="space-y-5">
                                                <div class="hidden md:block">
                                                    <h3 class="text-2xl font-bold text-emerald-700" x-text="story.title"></h3>
                                                    <p class="text-sm text-gray-500" x-text="story.location"></p>
                                                </div>

                                                <!-- Statistik -->
                                                <div class="flex flex-wrap gap-3">
                                                    <div class="flex items-center gap-2 bg-emerald-50 px-3 py-2 rounded-lg">
                                                        <i class="fas fa-leaf text-emerald-600"></i>
                                                        <span class="text-sm font-semibold text-emerald-700" x-text="story.stats.trees"></span>
                                                    </div>
                                                    <div class="flex items-center gap-2 bg-blue-50 px-3 py-2 rounded-lg">
                                                        <i class="fas fa-users text-blue-600"></i>
                                                        <span class="text-sm font-semibold text-blue-700" x-text="story.stats.community"></span>
                                                    </div>
                                                </div>

                                                <!-- Deskripsi -->
                                                <p class="text-gray-700 text-base leading-relaxed line-clamp-5" x-text="story.description"></p>

                                                <!-- Achievements -->
                                                <div>
                                                    <h4 class="font-semibold text-sm text-gray-900 uppercase tracking-wide mb-3 flex items-center gap-2">
                                                        <i class="fas fa-trophy text-emerald-500"></i>
                                                        Key Achievements
                                                    </h4>
                                                    <ul class="space-y-1">
                                                        <template x-for="(ach, i) in story.achievements" :key="i">
                                                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                                                <i class="fas fa-check-circle text-emerald-500 mt-0.5"></i>
                                                                <span x-text="ach"></span>
                                                            </li>
                                                        </template>
                                                    </ul>
                                                </div>
                                            </div>

                                            <!-- Quote -->
                                            <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-emerald-500 mt-5">
                                                <p class="text-sm italic text-gray-600" x-text="story.quote"></p>
                                                <div class="flex items-center gap-3 mt-2">
                                                    <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                                        <i class="fas fa-user text-emerald-600 text-sm"></i>
                                                    </div>
                                                    <div>
                                                        <p class="text-xs font-semibold text-gray-500" x-text="story.quoteAuthor"></p>
                                                        <p class="text-xs text-gray-400" x-text="story.quoteRole"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Share buttons -->
                <div class="flex items-center gap-2 my-8">
                    <span class="text-xs text-gray-500">Share this story:</span>
                    <div class="flex gap-1">
                        <button @click="shareStory('twitter')" class="w-8 h-8 rounded-full bg-blue-50 hover:bg-blue-100 flex items-center justify-center text-blue-500 transition-colors duration-200" aria-label="Share on Twitter" :disabled="!currentStory">
                            <i class="fab fa-twitter text-xs"></i>
                        </button>
                        <button @click="shareStory('facebook')" class="w-8 h-8 rounded-full bg-blue-50 hover:bg-blue-100 flex items-center justify-center text-blue-600 transition-colors duration-200" aria-label="Share on Facebook" :disabled="!currentStory">
                            <i class="fab fa-facebook-f text-xs"></i>
                        </button>
                        <button @click="shareStory('linkedin')" class="w-8 h-8 rounded-full bg-blue-50 hover:bg-blue-100 flex items-center justify-center text-blue-700 transition-colors duration-200" aria-label="Share on LinkedIn" :disabled="!currentStory">
                            <i class="fab fa-linkedin-in text-xs"></i>
                        </button>
                    </div>
                </div>

                <!-- Desktop Controls -->
                <div x-show="!isLoading && stories.length > 0" class="hidden lg:flex flex-col items-center justify-center mt-6 space-y-4">
                    <div class="flex flex-col items-center gap-2">
                        <div class="flex space-x-1.5">
                            <template x-for="(story, index) in stories" :key="index">
                                <button 
                                    @click="goToSlide(index)" 
                                    class="w-2.5 h-2.5 rounded-full transition-all duration-300" 
                                    :class="activeSlide === index ? 'bg-emerald-500' : 'bg-gray-300'"
                                ></button>
                            </template>
                        </div>
                        <span class="text-sm text-gray-500">
                            <span x-text="activeSlide + 1"></span> / 
                            <span x-text="stories.length"></span>
                        </span>
                    </div>

                    <div class="flex items-center gap-3">
                        <button @click="previousSlide()" class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                            <i class="fas fa-chevron-left text-lg"></i>
                        </button>
                        <button @click="toggleAutoplay()" class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                            <i class="fa-solid text-lg" :class="autoplay ? 'fa-pause' : 'fa-play'"></i>
                        </button>
                        <button @click="nextSlide()" class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                            <i class="fas fa-chevron-right text-lg"></i>
                        </button>
                    </div>
                </div>

                <!-- Mobile Controls -->
                <div x-show="!isLoading && stories.length > 0" class="lg:hidden mt-6 bg-white rounded-xl shadow-lg p-6">
                    <div class="flex flex-col items-center space-y-6">
                        <div class="flex items-center gap-3">
                            <div class="flex space-x-1.5">
                                <template x-for="(story, index) in stories" :key="index">
                                    <button @click="goToSlide(index)" class="w-2.5 h-2.5 rounded-full transition-all duration-300" :class="activeSlide === index ? 'bg-emerald-500' : 'bg-gray-300'"></button>
                                </template>
                            </div>
                            <span class="text-sm text-gray-500"><span x-text="activeSlide + 1"></span> / <span x-text="stories.length"></span></span>
                        </div>
                        <div class="flex items-center justify-between w-full max-w-md">
                            <button @click="previousSlide()" class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                                <i class="fas fa-chevron-left text-lg"></i>
                            </button>
                            <button @click="toggleAutoplay()" class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                                <i class="fa-solid text-lg" :class="autoplay ? 'fa-pause' : 'fa-play'"></i>
                            </button>
                            <button @click="nextSlide()" class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                                <i class="fas fa-chevron-right text-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function impactStories() {
    return {
        activeSlide: 0,
        autoplay: true,
        autoplayInterval: null,
        isLoading: true,
        slideDirection: 'next',
        stories: [],
        get currentStory() {
            return this.stories.length > 0 && this.stories[this.activeSlide] ? this.stories[this.activeSlide] : null;
        },
        async init() {
            this.isLoading = true;
            await new Promise(resolve => setTimeout(resolve, 1000));
            this.loadStories();
            this.isLoading = false;
            if (this.stories.length > 0) this.startAutoplay();
        },
        loadStories() {
            this.stories = [
                {
                    title: "Forest Restoration Project",
                    location: "Kalimantan, Indonesia",
                    image: "{{ asset('image/storie1.jpeg') }}",
                    description: "Through our collaborative efforts with local communities, we've successfully restored 5,000 hectares of degraded forest land, creating sustainable livelihoods while preserving biodiversity.",
                    stats: { trees: "50K+ Trees", community: "500+ People" },
                    achievements: [
                        "Restored 5,000 hectares of degraded forest",
                        "Created 200+ sustainable jobs for locals",
                        "Increased biodiversity by 45%",
                        "Reduced carbon emissions by 12,000 tons annually"
                    ],
                    quote: "This project has transformed our community.",
                    quoteAuthor: "Budi Santoso",
                    quoteRole: "Community Leader"
                },
                {
                    title: "Urban Green Initiative",
                    location: "Jakarta, Indonesia",
                    image: "{{ asset('image/auth.jpeg') }}",
                    description: "Transforming urban spaces through green infrastructure, reducing heat island effect and improving air quality for 2 million residents.",
                    stats: { trees: "25K+ Trees", community: "2M+ Residents" },
                    achievements: [
                        "Planted 25,000 trees across Jakarta",
                        "Reduced temperature by 2°C",
                        "Improved air quality by 60%",
                        "Created 50+ green spaces"
                    ],
                    quote: "Seeing our city turn green gives hope for sustainable living.",
                    quoteAuthor: "Sari Dewi",
                    quoteRole: "Urban Planner"
                },
                {
                    title: "Marine Conservation",
                    location: "Raja Ampat, Papua",
                    image: "{{ asset('image/storie2.jpeg') }}",
                    description: "Protecting marine biodiversity through community-led conservation and sustainable tourism.",
                    stats: { trees: "Coral Reefs", community: "15 Villages" },
                    achievements: [
                        "Protected 100,000 hectares of marine area",
                        "Trained 300+ conservation guides",
                        "Increased coral reef health by 40%",
                        "Reduced plastic pollution by 75%"
                    ],
                    quote: "Our ocean is our life. This project helps us protect it.",
                    quoteAuthor: "Maya Wambrauw",
                    quoteRole: "Marine Biologist"
                }
            ];
        },
        nextSlide() {
            if (this.stories.length <= 1) return;
            this.activeSlide = (this.activeSlide + 1) % this.stories.length;
        },
        previousSlide() {
            if (this.stories.length <= 1) return;
            this.activeSlide = (this.activeSlide - 1 + this.stories.length) % this.stories.length;
        },
        goToSlide(index) {
            if (index >= 0 && index < this.stories.length) this.activeSlide = index;
        },
        toggleAutoplay() {
            this.autoplay = !this.autoplay;
            if (this.autoplay) this.startAutoplay();
            else this.stopAutoplay();
        },
        startAutoplay() {
            this.stopAutoplay();
            this.autoplayInterval = setInterval(() => this.nextSlide(), 6000);
        },
        stopAutoplay() {
            if (this.autoplayInterval) clearInterval(this.autoplayInterval);
        },
        shareStory(platform) {
            if (!this.currentStory) return;
            const story = this.currentStory;
            const url = encodeURIComponent(window.location.href + '#impact-stories');
            const text = encodeURIComponent(`Check out this story: ${story.title}`);
            const shareUrls = {
                twitter: `https://twitter.com/intent/tweet?text=${text}&url=${url}`,
                facebook: `https://www.facebook.com/sharer/sharer.php?u=${url}`,
                linkedin: `https://www.linkedin.com/sharing/share-offsite/?url=${url}`
            };
            if (shareUrls[platform]) window.open(shareUrls[platform], '_blank', 'width=600,height=400');
        }
    }
}
</script>
