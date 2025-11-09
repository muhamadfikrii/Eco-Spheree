<div>
    <section class="py-14 sm:py-16 lg:py-24 bg-gradient-to-br from-slate-50 to-emerald-50/30" id="impact-stories">
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
                <div x-show="!isLoading && stories.length > 0" 
                    class="relative overflow-hidden rounded-2xl bg-white shadow-xl border border-gray-100">

                    <div class="relative min-h-[600px] sm:min-h-[500px] lg:min-h-[600px]">
                        <template x-for="(story, index) in stories" :key="index">
                            <div 
                                x-show="activeSlide === index"
                                x-transition:enter="transition ease-out duration-500"
                                x-transition:enter-start="opacity-0 translate-y-4" 
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0 translate-y-2"
                                class="absolute inset-0 w-full h-full"
                                :aria-hidden="activeSlide !== index"
                            >

                                <!-- Layout utama -->
                                <div class="flex flex-col xl:flex-row h-full bg-white rounded-3xl shadow-md overflow-auto">

                                    <!-- Bagian kiri: gambar -->
                                    <div class="w-full xl:w-1/2 h-80 sm:h-96 xl:h-full relative bg-gray-100">
                                        <img 
                                            :src="story.image" 
                                            :alt="story.title + ' - ' + story.location"
                                            class="w-full h-full object-cover xl:object-cover transition-transform duration-700 ease-out"
                                            :class="activeSlide === index ? 'scale-100' : 'scale-105'"
                                            loading="lazy"
                                        >
                                        
                                        <!-- Overlay teks di bawah gambar (mobile & tablet) -->
                                        <div class="absolute inset-x-0 bottom-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                                            <h3 class="text-white text-lg font-bold" x-text="story.title"></h3>
                                            <p class="text-white/90 text-sm" x-text="story.location"></p>
                                        </div>
                                    </div>

                                    <!-- Bagian kanan: konten -->
                                    <div class="w-full xl:w-1/2 p-6 xl:p-10 flex flex-col justify-between bg-white">
                                        <div class="space-y-6 overflow-y-auto max-h-[65vh] xl:max-h-none">
                                            
                                            <!-- Header judul (desktop) -->
                                            <div class="hidden xl:block mb-2">
                                                <h3 class="text-2xl font-bold text-emerald-700" x-text="story.title"></h3>
                                                <p class="text-gray-500 text-sm" x-text="story.location"></p>
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
                                            <p class="text-gray-700 leading-relaxed text-base" x-text="story.description"></p>

                                            <!-- Pencapaian -->
                                            <div>
                                                <h4 class="font-semibold text-gray-900 text-sm uppercase tracking-wide flex items-center gap-2 mb-3">
                                                    <i class="fas fa-trophy text-emerald-500"></i>
                                                    Key Achievements
                                                </h4>
                                                <ul class="space-y-2">
                                                    <template x-for="(achievement, achIndex) in story.achievements" :key="achIndex">
                                                        <li class="flex items-start gap-2">
                                                            <i class="fas fa-check-circle text-emerald-500 mt-0.5 flex-shrink-0"></i>
                                                            <span class="text-gray-600 text-sm" x-text="achievement"></span>
                                                        </li>
                                                    </template>
                                                </ul>
                                            </div>

                                            <!-- Kutipan -->
                                            <div class="bg-gray-50 rounded-xl p-4 border-l-4 border-emerald-500 mt-4">
                                                <p class="text-gray-600 text-sm italic" x-text="story.quote"></p>
                                                <div class="flex items-center gap-3 mt-2">
                                                    <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center">
                                                        <i class="fas fa-user text-emerald-600 text-sm"></i>
                                                    </div>
                                                    <div>
                                                        <p class="text-gray-500 text-xs font-semibold" x-text="story.quoteAuthor"></p>
                                                        <p class="text-gray-400 text-xs" x-text="story.quoteRole"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </template>
                    </div>
                </div>
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

               <div x-show="!isLoading && stories.length > 0" class="hidden lg:flex flex-col items-center justify-center mt-6 space-y-4">
                    <!-- Indikator -->
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

                    <!-- Tombol Navigasi -->
                    <div class="flex items-center gap-3">
                        <button 
                            @click="previousSlide()" 
                            class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                            <i class="fas fa-chevron-left text-lg"></i>
                        </button>

                        <button 
                            @click="toggleAutoplay()" 
                            class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                            <i class="fa-solid text-lg" :class="autoplay ? 'fa-pause' : 'fa-play'"></i>
                        </button>

                        <button 
                            @click="downloadCurrentStory()" 
                            class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                            <i class="fas fa-download text-lg"></i>
                        </button>

                        <button 
                            @click="nextSlide()" 
                            class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                            <i class="fas fa-chevron-right text-lg"></i>
                        </button>
                    </div>
                </div>


                <div x-show="!isLoading && stories.length > 0" class="lg:hidden mt-6 bg-white rounded-xl shadow-lg p-6">
                    <div class="flex flex-col items-center space-y-6">
                        <!-- Indikator & Counter -->
                        <div class="flex items-center gap-3">
                            <!-- Indikator Slide -->
                            <div class="flex space-x-1.5">
                                <template x-for="(story, index) in stories" :key="index">
                                    <button @click="goToSlide(index)" class="w-2.5 h-2.5 rounded-full transition-all duration-300" :class="activeSlide === index ? 'bg-emerald-500' : 'bg-gray-300'"></button>
                                </template>
                            </div>
                            <span class="text-sm text-gray-500"><span x-text="activeSlide + 1"></span> / <span x-text="stories.length"></span></span>
                        </div>
                        
                        <!-- Tombol Kontrol Navigasi -->
                        <div class="flex items-center justify-between w-full max-w-md">
                            <button @click="previousSlide()" class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                                <i class="fas fa-chevron-left text-lg"></i>
                            </button>

                            <!-- 🔁 Tombol Play/Pause Dinamis -->
                            <button 
                                @click="toggleAutoplay()" 
                                class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all"
                            >
                                <i class="fa-solid text-lg" :class="autoplay ? 'fa-pause' : 'fa-play'"></i>
                            </button>

                            <!-- Tombol Download -->
                            <button @click="downloadCurrentStory()" class="p-4 bg-white rounded-full shadow-md border border-gray-200 text-gray-600 hover:text-emerald-600 transition-all">
                                <i class="fas fa-download text-lg"></i>
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
        
        // Computed property untuk current story dengan safety check
        get currentStory() {
            return this.stories.length > 0 && this.stories[this.activeSlide] ? this.stories[this.activeSlide] : null;
        },

        async init() {
            try {
                // Simulasi loading data
                this.isLoading = true;
                
                // Tunggu sebentar untuk simulasi loading
                await new Promise(resolve => setTimeout(resolve, 1000));
                
                // Load stories data
                this.loadStories();
                
                this.isLoading = false;
                
                // Start autoplay hanya jika ada stories
                if (this.stories.length > 0) {
                    this.startAutoplay();
                }

                // Pause autoplay when user interacts with carousel
                const carousel = this.$el.querySelector('.relative');
                if (carousel) {
                    carousel.addEventListener('mouseenter', () => {
                        this.stopAutoplay();
                    });
                    carousel.addEventListener('mouseleave', () => {
                        if (this.autoplay && this.stories.length > 0) {
                            this.startAutoplay();
                        }
                    });
                }

                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.target.closest('[x-data="impactStories()"]')) {
                        if (e.key === 'ArrowLeft') {
                            this.previousSlide();
                        } else if (e.key === 'ArrowRight') {
                            this.nextSlide();
                        } else if (e.key === ' ') {
                            e.preventDefault();
                            this.toggleAutoplay();
                        }
                    }
                });

                // Intersection Observer for autoplay optimization
                if ('IntersectionObserver' in window) {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                if (this.autoplay && this.stories.length > 0) {
                                    this.startAutoplay();
                                }
                            } else {
                                this.stopAutoplay();
                            }
                        });
                    }, { threshold: 0.5 });

                    observer.observe(this.$el);
                }

            } catch (error) {
                console.error('Error initializing impact stories:', error);
                this.isLoading = false;
                this.stories = [];
            }
        },

        loadStories() {
            try {
                this.stories = [
                    {
                        title: "Forest Restoration Project",
                        location: "Kalimantan, Indonesia",
                        icon: "fas fa-tree",
                        image: "{{ asset('image/storie1.jpeg') }}",
                        description: "Through our collaborative efforts with local communities, we've successfully restored 5,000 hectares of degraded forest land, creating sustainable livelihoods while preserving biodiversity.",
                        stats: {
                            trees: "50K+ Trees",
                            community: "500+ People",
                            reduction: "85% Reduction"
                        },
                        duration: "2 Years",
                        impactLevel: "High Impact",
                        achievements: [
                            "Restored 5,000 hectares of degraded forest",
                            "Created 200+ sustainable jobs for locals",
                            "Increased biodiversity by 45% in the region",
                            "Reduced carbon emissions by 12,000 tons annually"
                        ],
                        quote: "This project has transformed our community. We're not just protecting nature; we're building a sustainable future for our children.",
                        quoteAuthor: "Budi Santoso",
                        quoteRole: "Community Leader"
                    },
                    {
                        title: "Urban Green Initiative",
                        location: "Jakarta, Indonesia",
                        icon: "fas fa-city",
                        image: "{{ asset('image/auth.jpeg') }}",
                        description: "Transforming urban spaces through green infrastructure, reducing heat island effect and improving air quality for 2 million residents in the capital city.",
                        stats: {
                            trees: "25K+ Trees",
                            community: "2M+ Residents",
                            reduction: "60% Improvement"
                        },
                        duration: "18 Months",
                        impactLevel: "Medium Impact",
                        achievements: [
                            "Planted 25,000 urban trees across Jakarta",
                            "Reduced average temperature by 2°C in project areas",
                            "Improved air quality index by 60%",
                            "Created 50+ urban green spaces"
                        ],
                        quote: "Seeing our concrete city transform into green spaces gives hope for sustainable urban living.",
                        quoteAuthor: "Sari Dewi",
                        quoteRole: "Urban Planner"
                    },
                    {
                        title: "Marine Conservation",
                        location: "Raja Ampat, Papua",
                        icon: "fas fa-water",
                        image: "{{ asset('image/storie2.jpeg') }}",
                        description: "Protecting one of the world's most biodiverse marine ecosystems through community-led conservation and sustainable tourism practices.",
                        stats: {
                            trees: "Coral Reefs",
                            community: "15 Villages",
                            reduction: "70% Protected"
                        },
                        duration: "3 Years",
                        impactLevel: "High Impact",
                        achievements: [
                            "Protected 100,000 hectares of marine area",
                            "Trained 300+ local conservation guides",
                            "Increased coral reef health by 40%",
                            "Reduced plastic pollution by 75%"
                        ],
                        quote: "Our ocean is our life. This project helps us protect it while creating opportunities for our people.",
                        quoteAuthor: "Maya Wambrauw",
                        quoteRole: "Marine Biologist"
                    }
                ];
            } catch (error) {
                console.error('Error loading stories:', error);
                this.stories = [];
            }
        },

        nextSlide() {
            if (this.stories.length <= 1) return;
            this.slideDirection = 'next';
            this.activeSlide = (this.activeSlide + 1) % this.stories.length;
        },

        previousSlide() {
            if (this.stories.length <= 1) return;
            this.slideDirection = 'prev';
            this.activeSlide = (this.activeSlide - 1 + this.stories.length) % this.stories.length;
        },

        goToSlide(index) {
            if (index >= 0 && index < this.stories.length) {
                this.activeSlide = index;
            }
        },

        toggleAutoplay() {
            if (this.stories.length <= 1) return;
            this.autoplay = !this.autoplay;
            if (this.autoplay) {
                this.startAutoplay();
            } else {
                this.stopAutoplay();
            }
        },

        startAutoplay() {
            if (this.stories.length <= 1) return;
            this.stopAutoplay();
            this.autoplayInterval = setInterval(() => {
                this.nextSlide();
            }, 6000);
        },

        stopAutoplay() {
            if (this.autoplayInterval) {
                clearInterval(this.autoplayInterval);
                this.autoplayInterval = null;
            }
        },

        getStatDescription(stat) {
            if (!stat) return "";
            const descriptions = {
                "85% Reduction": "Carbon emissions reduction compared to baseline",
                "60% Improvement": "Air quality improvement in urban areas",
                "70% Protected": "Marine ecosystem protection coverage",
                "90% Clean Energy": "Renewable energy adoption rate",
                "40% Water Saved": "Water conservation through efficient irrigation"
            };
            return descriptions[stat] || "Environmental impact metric";
        },

        downloadStoryReport(index) {
            if (!this.stories[index]) return;
            
            const story = this.stories[index];
            // Simulate download
            const link = document.createElement('a');
            link.href = '#';
            link.download = `${story.title.replace(/\s+/g, '_')}_Report.pdf`;
            link.click();
            
            // Show success message
            this.showNotification(`Downloading report for "${story.title}"`);
        },

        shareStory(platform) {
            if (!this.currentStory) return;
            
            const story = this.currentStory;
            const url = encodeURIComponent(window.location.href + '#impact-stories');
            const text = encodeURIComponent(`Check out this amazing environmental story: ${story.title} - ${story.description.substring(0, 100)}...`);
            
            const shareUrls = {
                twitter: `https://twitter.com/intent/tweet?text=${text}&url=${url}`,
                facebook: `https://www.facebook.com/sharer/sharer.php?u=${url}`,
                linkedin: `https://www.linkedin.com/sharing/share-offsite/?url=${url}`
            };
            
            if (shareUrls[platform]) {
                window.open(shareUrls[platform], '_blank', 'width=600,height=400');
            }
        },

        handleImageError(event, story) {
            // Fallback image jika gambar gagal load
            event.target.src = 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=2074&q=80';
            console.warn(`Failed to load image for story: ${story.title}`);
        },

        showNotification(message) {
            // Create temporary notification
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-emerald-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
            notification.textContent = message;
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.classList.remove('translate-x-full');
                notification.classList.add('translate-x-0');
            }, 100);
            
            // Remove after 3 seconds
            setTimeout(() => {
                notification.classList.remove('translate-x-0');
                notification.classList.add('translate-x-full');
                setTimeout(() => {
                    if (document.body.contains(notification)) {
                        document.body.removeChild(notification);
                    }
                }, 300);
            }, 3000);
        }
    }
}
</script>
