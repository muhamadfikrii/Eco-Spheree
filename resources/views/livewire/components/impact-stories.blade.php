<div>
    <section class="py-16 lg:py-24 bg-gradient-to-br from-slate-50 to-emerald-50/30" id="impact-stories">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12 lg:mb-16">
                <span class="inline-block bg-emerald-100 text-emerald-800 px-4 py-2 rounded-full text-sm font-semibold mb-4 shadow-sm">
                    Success Stories
                </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Impact Stories
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Discover how EcoTrack is making a difference across Indonesia through real success stories and environmental achievements.
                </p>
            </div>

            <!-- Carousel Container -->
            <div x-data="impactStories()" x-init="init()" class="relative">
                <!-- Loading State -->
                <div x-show="isLoading" class="text-center py-12">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-emerald-600 mx-auto"></div>
                    <p class="text-gray-600 mt-4">Loading impact stories...</p>
                </div>

                <!-- Carousel -->
                <div x-show="!isLoading && stories.length > 0" class="relative overflow-hidden rounded-2xl bg-white shadow-xl border border-gray-100 hover:shadow-2xl transition-shadow duration-300">
                    <!-- Stories Container -->
                    <div class="relative h-[500px] sm:h-[600px] lg:h-[500px]">
                        <template x-for="(story, index) in stories" :key="index">
                            <div 
                                x-show="activeSlide === index"
                                x-transition:enter="transition ease-out duration-500"
                                x-transition:enter-start="opacity-0" 
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0"
                                class="absolute inset-0 w-full h-full"
                                :aria-hidden="activeSlide !== index"
                                :aria-label="'Slide ' + (index + 1) + ': ' + story.title"
                            >
                                <div class="flex flex-col lg:flex-row h-full">
                                    <!-- Story Image -->
                                    <div class="lg:w-1/2 h-48 lg:h-full relative overflow-hidden">
                                        <img 
                                            :src="story.image" 
                                            :alt="story.title + ' - ' + story.location"
                                            class="w-full h-full object-cover transition-transform duration-700"
                                            :class="activeSlide === index ? 'scale-100' : 'scale-110'"
                                            loading="lazy"
                                        >
                                        <!-- Gradient Overlay -->
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent lg:bg-gradient-to-r lg:from-black/60 lg:via-black/30 lg:to-transparent"></div>
                                        
                                        <!-- Content Overlay -->
                                        <div class="absolute inset-0 flex items-end lg:items-center p-6 lg:p-8">
                                            <div class="text-white">
                                                <div class="flex items-center gap-3 mb-3">
                                                    <div class="w-12 h-12 bg-white/20 rounded-xl backdrop-blur-sm flex items-center justify-center">
                                                        <i :class="story.icon" class="text-xl text-white"></i>
                                                    </div>
                                                    <div>
                                                        <h3 class="text-xl lg:text-2xl font-bold mb-1" x-text="story.title"></h3>
                                                        <p class="text-white/90 text-sm flex items-center gap-1">
                                                            <i class="fas fa-map-marker-alt text-xs"></i>
                                                            <span x-text="story.location"></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                
                                                <!-- Image Stats -->
                                                <div class="flex flex-wrap gap-3 mt-4">
                                                    <div class="flex items-center gap-2 bg-white/20 backdrop-blur-sm px-3 py-1.5 rounded-lg">
                                                        <i class="fas fa-leaf text-white text-sm"></i>
                                                        <span class="text-white text-sm font-medium" x-text="story.stats.trees"></span>
                                                    </div>
                                                    <div class="flex items-center gap-2 bg-white/20 backdrop-blur-sm px-3 py-1.5 rounded-lg">
                                                        <i class="fas fa-users text-white text-sm"></i>
                                                        <span class="text-white text-sm font-medium" x-text="story.stats.community"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Badge for Project Status -->
                                        <div class="absolute top-4 left-4">
                                            <span class="inline-flex items-center gap-1 bg-emerald-500/90 text-white px-3 py-1 rounded-full text-xs font-medium backdrop-blur-sm">
                                                <i class="fas fa-check-circle text-xs"></i>
                                                Completed
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Story Content -->
                                    <div class="lg:w-1/2 p-6 sm:p-8 lg:pb-12 flex flex-col gap-6">
                                        <div class="flex-1 flex flex-col gap-6">
                                            <!-- Additional Stats -->
                                            <div class="flex flex-wrap gap-4">
                                                <div class="flex items-center gap-2 bg-emerald-50 px-3 py-2 rounded-lg hover:bg-emerald-100 transition-colors duration-200 cursor-help" :title="getStatDescription(story.stats.reduction)">
                                                    <i class="fas fa-chart-line text-emerald-600"></i>
                                                    <span class="text-sm font-semibold text-emerald-700" x-text="story.stats.reduction"></span>
                                                </div>
                                                <div class="flex items-center gap-2 bg-blue-50 px-3 py-2 rounded-lg hover:bg-blue-100 transition-colors duration-200">
                                                    <i class="fas fa-calendar text-blue-600"></i>
                                                    <span class="text-sm font-semibold text-blue-700" x-text="story.duration"></span>
                                                </div>
                                                <div class="flex items-center gap-2 bg-purple-50 px-3 py-2 rounded-lg hover:bg-purple-100 transition-colors duration-200">
                                                    <i class="fas fa-star text-purple-600"></i>
                                                    <span class="text-sm font-semibold text-purple-700" x-text="story.impactLevel"></span>
                                                </div>
                                            </div>

                                            <!-- Description -->
                                            <div>
                                                <p class="text-gray-700 leading-relaxed text-lg" x-text="story.description"></p>
                                            </div>

                                            <!-- Impact Highlights -->
                                            <div class="space-y-3">
                                                <h4 class="font-semibold text-gray-900 text-sm uppercase tracking-wide flex items-center gap-2">
                                                    <i class="fas fa-trophy text-emerald-500"></i>
                                                    Key Achievements
                                                </h4>
                                                <ul class="space-y-2">
                                                    <template x-for="(achievement, achIndex) in story.achievements" :key="achIndex">
                                                        <li class="flex items-start gap-3 group">
                                                            <i class="fas fa-check-circle text-emerald-500 mt-0.5 flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
                                                            <span class="text-gray-600 text-sm group-hover:text-gray-700 transition-colors duration-200" x-text="achievement"></span>
                                                        </li>
                                                    </template>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Quote & Author -->
                                        <div class="bg-gray-50 rounded-xl p-4 border-l-4 border-emerald-500 hover:border-emerald-600 transition-colors duration-300 group">
                                            <div class="flex items-start gap-3">
                                                <i class="fas fa-quote-left text-emerald-400 text-lg mt-1 group-hover:scale-110 transition-transform duration-300"></i>
                                                <div class="flex-1">
                                                    <p class="text-gray-600 text-sm italic mb-2 group-hover:text-gray-700 transition-colors duration-300" x-text="story.quote"></p>
                                                    <div class="flex items-center gap-3">
                                                        <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0 group-hover:bg-emerald-200 transition-colors duration-300">
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
                            </div>
                        </template>
                    </div>

                    <!-- Navigation Arrows -->
                    <button 
                        @click="previousSlide()"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg border border-gray-200 flex items-center justify-center text-gray-600 hover:text-emerald-600 hover:border-emerald-300 transition-all duration-300 hover:scale-110 z-10 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                        aria-label="Previous story"
                        :disabled="stories.length <= 1"
                    >
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button 
                        @click="nextSlide()"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/90 backdrop-blur-sm rounded-full shadow-lg border border-gray-200 flex items-center justify-center text-gray-600 hover:text-emerald-600 hover:border-emerald-300 transition-all duration-300 hover:scale-110 z-10 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                        aria-label="Next story"
                        :disabled="stories.length <= 1"
                    >
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <!-- Play/Pause Button -->
                    <button 
                        @click="toggleAutoplay()"
                        class="absolute bottom-4 right-4 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full shadow-lg border border-gray-200 flex items-center justify-center text-gray-600 hover:text-emerald-600 transition-all duration-300 z-10 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2"
                        :aria-label="autoplay ? 'Pause autoplay' : 'Play autoplay'"
                        :disabled="stories.length <= 1"
                    >
                        <i class="fas text-xs" :class="autoplay ? 'fa-pause' : 'fa-play'"></i>
                    </button>

                    <!-- Download Report Button -->
                    <button 
                        @click="downloadStoryReport(activeSlide)"
                        class="absolute bottom-4 left-4 w-10 h-10 bg-white/90 backdrop-blur-sm rounded-full shadow-lg border border-gray-200 flex items-center justify-center text-gray-600 hover:text-blue-600 transition-all duration-300 z-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        aria-label="Download story report"
                        title="Download detailed report"
                        :disabled="!currentStory"
                    >
                        <i class="fas fa-download text-xs"></i>
                    </button>
                </div>

                <!-- Empty State -->
                <div x-show="!isLoading && stories.length === 0" class="text-center py-12 bg-white rounded-2xl shadow-xl border border-gray-100">
                    <i class="fas fa-inbox text-4xl text-gray-400 mb-4"></i>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">No Stories Available</h3>
                    <p class="text-gray-600 mb-4">We're currently gathering impact stories. Please check back later.</p>
                    <button class="px-6 py-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-lg transition-colors duration-300">
                        Suggest a Story
                    </button>
                </div>

                <!-- Progress Bar -->
                <div x-show="!isLoading && stories.length > 0" class="mt-6">
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div 
                            class="bg-gradient-to-r from-emerald-500 to-blue-500 h-2 rounded-full transition-all duration-500 ease-out"
                            :style="`width: ${((activeSlide + 1) / stories.length) * 100}%`"
                            role="progressbar"
                            :aria-valuenow="activeSlide + 1"
                            aria-valuemin="1"
                            :aria-valuemax="stories.length"
                        ></div>
                    </div>
                </div>

                <!-- Slide Indicators -->
                <div x-show="!isLoading && stories.length > 0" class="flex justify-center mt-6 space-x-3" role="tablist" aria-label="Story slides">
                    <template x-for="(story, index) in stories" :key="index">
                        <button
                            @click="goToSlide(index)"
                            class="group relative focus:outline-none"
                            :aria-selected="activeSlide === index"
                            :aria-label="'Go to slide ' + (index + 1) + ': ' + story.title"
                            role="tab"
                        >
                            <div class="w-3 h-3 rounded-full transition-all duration-300"
                                :class="activeSlide === index ? 'bg-emerald-500 scale-125 ring-2 ring-emerald-200' : 'bg-gray-300 hover:bg-gray-400'"
                            ></div>
                            <!-- Tooltip on hover -->
                            <div class="absolute bottom-full mb-2 left-1/2 transform -translate-x-1/2 px-2 py-1 bg-gray-800 text-white text-xs rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap pointer-events-none">
                                <span x-text="story.title"></span>
                            </div>
                        </button>
                    </template>
                </div>

                <!-- Slide Counter & Social Share -->
                <div x-show="!isLoading && stories.length > 0" class="flex flex-col sm:flex-row items-center justify-between mt-4 gap-4">
                    <div class="text-center sm:text-left">
                        <span class="text-sm text-gray-500">
                            <span x-text="activeSlide + 1" class="font-semibold text-emerald-600"></span>
                            /
                            <span x-text="stories.length" class="font-semibold text-gray-900"></span>
                            - 
                            <span x-text="currentStory ? currentStory.title : ''" class="text-gray-600"></span>
                        </span>
                    </div>
                    
                    <!-- Social Share -->
                    <div class="flex items-center gap-2">
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
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center mt-12 lg:mt-16">
                <p class="text-gray-600 mb-6">Want to share your success story?</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="px-8 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                        Share Your Story
                    </button>
                    <button class="px-8 py-3 bg-white hover:bg-gray-50 text-emerald-600 font-semibold rounded-xl shadow-lg hover:shadow-xl border border-emerald-200 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2">
                        View All Stories
                    </button>
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
