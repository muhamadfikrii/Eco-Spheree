<div>
     <section id="conservation" class="py-20 parallax-bg" style="background-image: url('https://images.unsplash.com/photo-1587332278432-183b6a70a6d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')">
            <div class="container mx-auto px-4 md:px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="inline-block bg-white bg-opacity-20 backdrop-blur-sm text-white text-sm font-medium py-2 px-4 rounded-full mb-4">
                        Our Commitment
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Conservation & <span class="text-primary-light">Sustainability</span></h2>
                    <p class="text-white text-opacity-90">We are committed to preserving Indonesia's natural beauty for future generations.</p>
                </div>
                
                <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16">
                    <div class="lg:w-1/2">
                        <div class="bg-dark-light bg-opacity-90 backdrop-blur-sm rounded-2xl p-8 shadow-lg border-dark-lighter">
                            <h3 class="text-2xl md:text-3xl font-semibold text-white mb-6">Preserving Natural Heritage of Archipelago</h3>
                            <p class="text-gray-400 mb-4">Indonesia is home to 17% of world's bird species, 12% of mammals, 16% of reptiles and amphibians, and 25% of fish species. Unfortunately, much of this biodiversity is threatened by human activities.</p>
                            <p class="text-gray-400 mb-8">Through conservation and education programs, we strive to protect vulnerable ecosystems and promote sustainable tourism.</p>
                            
                            <div class="grid grid-cols-2 gap-4 mb-8">
                                <div class="stat-card p-4 rounded-xl text-center hover-card">
                                    <div class="text-2xl font-bold text-emerald-500 mb-1">75%</div>
                                    <div class="text-sm text-gray-400">Conservation Programs</div>
                                </div>
                                <div class="stat-card p-4 rounded-xl text-center hover-card">
                                    <div class="text-2xl font-bold text-emerald-500 mb-1">120+</div>
                                    <div class="text-sm text-gray-400">Local Communities</div>
                                </div>
                            </div>
                            
                            <a href="#contact" class="inline-flex items-center gradient-bg hover:opacity-90 text-white font-medium py-3 md:px-6 px-5 rounded-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg glow interactive-btn">
                                <i class="fas fa-hands-helping mr-2"></i>Support Conservation
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <div class="bg-dark-light bg-opacity-90 backdrop-blur-sm rounded-2xl p-8 shadow-lg border-dark-lighter interactive-timeline">
                            <h4 class="text-xl font-semibold text-white mb-6">Our Conservation Programs</h4>
                            
                            <div class="timeline-progress">
                                <div class="timeline-progress-bar"></div>
                            </div>
                            
                            <div class="space-y-6">
                                <div class="timeline-item">
                                    <div class="timeline-dot"></div>
                                    <div class="flex">
                                        <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-full flex items-center justify-center text-white mr-4 glow">
                                            <i class="fas fa-tree"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-semibold text-white mb-1">Forest Reforestation</h5>
                                            <p class="text-gray-400 text-sm">Replanting programs for damaged forests in various regions of Indonesia.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="timeline-item">
                                    <div class="timeline-dot"></div>
                                    <div class="flex">
                                        <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-full flex items-center justify-center text-white mr-4 glow">
                                            <i class="fas fa-fish"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-semibold text-white mb-1">Marine Conservation</h5>
                                            <p class="text-gray-400 text-sm">Protecting coral reefs and marine ecosystems from damage and pollution.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="timeline-item">
                                    <div class="timeline-dot"></div>
                                    <div class="flex">
                                        <div class="flex-shrink-0 w-12 h-12 gradient-bg rounded-full flex items-center justify-center text-white mr-4 glow">
                                            <i class="fas fa-paw"></i>
                                        </div>
                                        <div>
                                            <h5 class="font-semibold text-white mb-1">Wildlife Protection</h5>
                                            <p class="text-gray-400 text-sm">Preserving habitats of rare and endangered wildlife in Indonesia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </section>
</div>

@push('scrpts')
gsap.utils.toArray('.timeline-item').forEach((item, index) => {
                gsap.from(item, {
                    opacity: 0,
                    x: -50,
                    duration: 0.8,
                    delay: index * 0.2,
                    scrollTrigger: {
                        trigger: item,
                        start: 'top 80%',
                        toggleActions: 'play none none reverse',
                    }
                });
            });
                
@endpush
