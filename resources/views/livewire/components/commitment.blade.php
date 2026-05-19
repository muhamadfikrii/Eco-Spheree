<div>
    <section
        id="conservation"
        class="parallax-bg py-20"
        style="
            background-image: url('https://images.unsplash.com/photo-1587332278432-183b6a70a6d3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        "
    >
        <div class="container mx-auto px-4 md:px-6">
            <div class="mx-auto mb-16 max-w-3xl text-center">
                <span
                    class="mb-4 inline-block rounded-full bg-white bg-opacity-20 px-4 py-2 text-sm font-medium text-white backdrop-blur-sm"
                >
                    Our Commitment
                </span>
                <h2 class="mb-4 text-3xl font-bold text-white md:text-4xl">
                    Conservation &
                    <span class="text-primary-light">Sustainability</span>
                </h2>
                <p class="text-white text-opacity-90">We are committed to preserving Indonesia's natural beauty for future generations.</p>
            </div>

            <div
                class="flex flex-col items-center gap-10 lg:flex-row lg:gap-16"
            >
                <div class="lg:w-1/2">
                    <div
                        class="bg-dark-light border-dark-lighter rounded-2xl bg-opacity-90 p-8 shadow-lg backdrop-blur-sm"
                    >
                        <h3
                            class="mb-6 text-2xl font-semibold text-white md:text-3xl"
                        >
                            Preserving Natural Heritage of Archipelago
                        </h3>
                        <p class="mb-4 text-gray-400">Indonesia is home to 17% of world's bird species, 12% of mammals, 16% of reptiles and amphibians, and 25% of fish species. Unfortunately, much of this biodiversity is threatened by human activities.</p>
                        <p class="mb-8 text-gray-400">Through conservation and education programs, we strive to protect vulnerable ecosystems and promote sustainable tourism.</p>

                        <div class="mb-8 grid grid-cols-2 gap-4">
                            <div
                                class="stat-card hover-card rounded-xl p-4 text-center"
                            >
                                <div
                                    class="mb-1 text-2xl font-bold text-emerald-500"
                                >
                                    75%
                                </div>
                                <div class="text-sm text-gray-400">
                                    Conservation Programs
                                </div>
                            </div>
                            <div
                                class="stat-card hover-card rounded-xl p-4 text-center"
                            >
                                <div
                                    class="mb-1 text-2xl font-bold text-emerald-500"
                                >
                                    120+
                                </div>
                                <div class="text-sm text-gray-400">
                                    Local Communities
                                </div>
                            </div>
                        </div>

                        <a
                            href="#contact"
                            class="gradient-bg glow interactive-btn inline-flex transform items-center rounded-md px-5 py-3 font-medium text-white transition-all duration-300 hover:-translate-y-1 hover:opacity-90 hover:shadow-lg md:px-6"
                        >
                            <i class="fas fa-hands-helping mr-2"></i>Support
                            Conservation
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div
                        class="bg-dark-light border-dark-lighter interactive-timeline rounded-2xl bg-opacity-90 p-8 shadow-lg backdrop-blur-sm"
                    >
                        <h4 class="mb-6 text-xl font-semibold text-white">
                            Our Conservation Programs
                        </h4>

                        <div class="timeline-progress">
                            <div class="timeline-progress-bar"></div>
                        </div>

                        <div class="space-y-6">
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="flex">
                                    <div
                                        class="gradient-bg glow mr-4 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full text-white"
                                    >
                                        <i class="fas fa-tree"></i>
                                    </div>
                                    <div>
                                        <h5
                                            class="mb-1 font-semibold text-white"
                                        >
                                            Forest Reforestation
                                        </h5>
                                        <p class="text-sm text-gray-400">Replanting programs for damaged forests in various regions of Indonesia.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="flex">
                                    <div
                                        class="gradient-bg glow mr-4 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full text-white"
                                    >
                                        <i class="fas fa-fish"></i>
                                    </div>
                                    <div>
                                        <h5
                                            class="mb-1 font-semibold text-white"
                                        >
                                            Marine Conservation
                                        </h5>
                                        <p class="text-sm text-gray-400">Protecting coral reefs and marine ecosystems from damage and pollution.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="flex">
                                    <div
                                        class="gradient-bg glow mr-4 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full text-white"
                                    >
                                        <i class="fas fa-paw"></i>
                                    </div>
                                    <div>
                                        <h5
                                            class="mb-1 font-semibold text-white"
                                        >
                                            Wildlife Protection
                                        </h5>
                                        <p class="text-sm text-gray-400">Preserving habitats of rare and endangered wildlife in Indonesia.</p>
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

@push ('scrpts')
    gsap.utils.toArray('.timeline-item').forEach((item, index) => {
    gsap.from(item, { opacity: 0, x: -50, duration: 0.8, delay: index * 0.2,
    scrollTrigger: { trigger: item, start: 'top 80%', toggleActions: 'play none
    none reverse', } }); });
@endpush
