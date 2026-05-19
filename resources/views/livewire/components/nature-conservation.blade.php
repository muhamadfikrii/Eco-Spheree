<div
    class="font-inter bg-grid-pattern bg-gradient-to-br from-gray-900 to-gray-800"
>
    <section
        class="nature-pattern relative overflow-hidden py-12 sm:py-16 lg:py-20"
        x-data="natureConservation()"
    >
        
        <div class="absolute left-0 top-0 h-full w-full opacity-10">
            <div
                class="floating absolute left-10 top-10 h-40 w-40 rounded-full bg-emerald-600 opacity-20 mix-blend-multiply blur-xl filter sm:h-56 sm:w-56 lg:h-72 lg:w-72"
            ></div>
            <div
                class="floating absolute right-10 top-10 h-40 w-40 rounded-full bg-teal-600 opacity-20 mix-blend-multiply blur-xl filter sm:h-56 sm:w-56 lg:h-72 lg:w-72"
                style="animation-delay: -2s"
            ></div>
            <div
                class="floating absolute bottom-10 left-1/2 h-40 w-40 rounded-full bg-green-600 opacity-20 mix-blend-multiply blur-xl filter sm:h-56 sm:w-56 lg:h-72 lg:w-72"
                style="animation-delay: -4s"
            ></div>
        </div>

        <div class="container relative z-10 mx-auto px-4 sm:px-6">
            <div class="mb-10 text-center sm:mb-12 lg:mb-16" data-aos="fade-up">
                <div
                    class="eco-badge glow mb-4 inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold text-white sm:px-4"
                >
                    <svg class="mr-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    NATURE CONSERVATION
                </div>
                <h2
                    class="mb-4 text-3xl font-bold text-white sm:text-4xl md:text-5xl"
                >
                    Explore Our
                    <span class="text-gradient">Natural Heritage</span>
                </h2>
                <p class="mx-auto max-w-3xl px-4 text-lg text-gray-300 sm:text-xl">Discover the beauty of our planet and learn how we can work together to preserve it for future generations.</p>
            </div>

            
            <div
                class="mb-12 grid grid-cols-1 gap-6 sm:mb-16 sm:gap-8 md:grid-cols-2 lg:grid-cols-3"
            >
                
                <div
                    class="card-hover overflow-hidden rounded-2xl border border-gray-700 bg-gray-800 shadow-2xl"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    @mouseenter="animateCard(1)"
                    @mouseleave="resetCard(1)"
                >
                    <div class="p-5 sm:p-6">
                        <div
                            class="gradient-bg glow mb-4 flex h-12 w-12 items-center justify-center rounded-xl"
                        >
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3
                            class="mb-2 text-lg font-bold text-white sm:text-xl"
                        >
                            Forest Conservation
                        </h3>
                        <p class="mb-4 text-sm text-gray-400 sm:text-base">Protect vital ecosystems and biodiversity through sustainable forest management and reforestation efforts.</p>
                        <div
                            class="flex items-center font-medium text-emerald-400"
                        >
                            <span><a href="">Protect</a></span>
                            <svg class="ml-2 h-4 w-4 transform transition-transform" :class="{
                                    'translate-x-1': card1Hover,
                                }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div
                        class="h-1 bg-gradient-to-r from-emerald-400 to-emerald-600 transition-all duration-500"
                        :style="card1Width"
                    ></div>
                </div>

                
                <div
                    class="card-hover overflow-hidden rounded-2xl border border-gray-700 bg-gray-800 shadow-2xl"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    @mouseenter="animateCard(2)"
                    @mouseleave="resetCard(2)"
                >
                    <div class="p-5 sm:p-6">
                        <div
                            class="gradient-bg-teal glow mb-4 flex h-12 w-12 items-center justify-center rounded-xl"
                        >
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3
                            class="mb-2 text-lg font-bold text-white sm:text-xl"
                        >
                            Wildlife Protection
                        </h3>
                        <p class="mb-4 text-sm text-gray-400 sm:text-base">Safeguard endangered species and their habitats through conservation programs and community engagement.</p>
                        <div
                            class="flex items-center font-medium text-teal-400"
                        >
                            <span
                                ><a href="{{ route('discover') }}"
                                    >Discover</a
                                ></span
                            >
                            <svg class="ml-2 h-4 w-4 transform transition-transform" :class="{
                                    'translate-x-1': card2Hover,
                                }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div
                        class="h-1 bg-gradient-to-r from-teal-400 to-teal-600 transition-all duration-500"
                        :style="card2Width"
                    ></div>
                </div>

                
                <div
                    class="card-hover overflow-hidden rounded-2xl border border-gray-700 bg-gray-800 shadow-2xl"
                    data-aos="fade-up"
                    data-aos-delay="300"
                    @mouseenter="animateCard(3)"
                    @mouseleave="resetCard(3)"
                >
                    <div class="p-5 sm:p-6">
                        <div
                            class="gradient-bg-emerald glow mb-4 flex h-12 w-12 items-center justify-center rounded-xl"
                        >
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3
                            class="mb-2 text-lg font-bold text-white sm:text-xl"
                        >
                            Sustainable Living
                        </h3>
                        <p class="mb-4 text-sm text-gray-400 sm:text-base">Embrace eco-friendly practices that reduce your environmental footprint and promote harmony with nature.</p>
                        <div
                            class="flex items-center font-medium text-green-400"
                        >
                            <span></span>
                            <span
                                ><a href="{{ route('learnmore') }}"
                                    >Learn More</a
                                ></span
                            >
                            <svg class="ml-2 h-4 w-4 transform transition-transform" :class="{
                                    'translate-x-1': card3Hover,
                                }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                    <div
                        class="h-1 bg-gradient-to-r from-green-400 to-emerald-600 transition-all duration-500"
                        :style="card3Width"
                    ></div>
                </div>
            </div>

            
            <div
                class="mb-8 rounded-2xl border border-gray-700 bg-gray-800 p-4 shadow-2xl sm:p-6 md:mb-12"
                data-aos="fade-up"
            >
                <div
                    class="mb-6 flex flex-col items-center justify-between sm:mb-8 md:flex-row"
                >
                    <div class="mb-4 text-center md:mb-0 md:text-left">
                        <h3
                            class="mb-2 text-2xl font-bold text-white sm:text-3xl"
                        >
                            Nature Conservation Dashboard
                        </h3>
                        <p class="text-base text-gray-400 sm:text-lg">Track our progress in preserving natural habitats and promoting biodiversity</p>
                    </div>
                    <button
                        @click="resetDashboard"
                        class="flex items-center rounded-lg border border-emerald-700 bg-emerald-900 px-4 py-2.5 text-base font-medium text-emerald-300 transition-colors hover:bg-emerald-800 sm:px-5"
                    >
                        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        Reset View
                    </button>
                </div>

                
                <div
                    class="dashboard-container custom-scrollbar overflow-x-auto overflow-y-auto"
                >
                    <div
                        class="dashboard-content flex flex-col gap-6 lg:gap-8 xl:flex-row"
                    >
                        
                        <div class="space-y-4 sm:space-y-6 xl:w-1/3">
                            <div>
                                <div class="mb-2 flex justify-between">
                                    <label
                                        class="text-base font-medium text-gray-300 sm:text-lg"
                                        >Forest Cover</label
                                    >
                                    <span
                                        class="text-base font-semibold text-emerald-400 sm:text-lg"
                                        x-text="forestCover + '%'"
                                    ></span>
                                </div>
                                <input
                                    type="range"
                                    min="0"
                                    max="100"
                                    x-model="forestCover"
                                    class="[&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:h-5 [&::-webkit-slider-thumb]:w-5 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-emerald-500 h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-700"
                                />
                                <p class="mt-1 text-sm text-gray-400">Healthy forest cover supports biodiversity and regulates climate</p>
                            </div>

                            <div>
                                <div class="mb-2 flex justify-between">
                                    <label
                                        class="text-base font-medium text-gray-300 sm:text-lg"
                                        >Wildlife Population</label
                                    >
                                    <span
                                        class="text-base font-semibold text-teal-400 sm:text-lg"
                                        x-text="wildlifePopulation + '%'"
                                    ></span>
                                </div>
                                <input
                                    type="range"
                                    min="0"
                                    max="100"
                                    x-model="wildlifePopulation"
                                    class="[&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:h-5 [&::-webkit-slider-thumb]:w-5 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-teal-500 h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-700"
                                />
                                <p class="mt-1 text-sm text-gray-400">Thriving wildlife indicates healthy ecosystems</p>
                            </div>

                            <div>
                                <div class="mb-2 flex justify-between">
                                    <label
                                        class="text-base font-medium text-gray-300 sm:text-lg"
                                        >Community Engagement</label
                                    >
                                    <span
                                        class="text-base font-semibold text-green-400 sm:text-lg"
                                        x-text="communityEngagement + '%'"
                                    ></span>
                                </div>
                                <input
                                    type="range"
                                    min="0"
                                    max="100"
                                    x-model="communityEngagement"
                                    class="[&::-webkit-slider-thumb]:appearance-none [&::-webkit-slider-thumb]:h-5 [&::-webkit-slider-thumb]:w-5 [&::-webkit-slider-thumb]:rounded-full [&::-webkit-slider-thumb]:bg-green-500 h-2 w-full cursor-pointer appearance-none rounded-lg bg-gray-700"
                                />
                                <p class="mt-1 text-sm text-gray-400">Local communities are essential for conservation success</p>
                            </div>

                            
                            <div
                                class="mt-6 rounded-lg border border-gray-600 bg-gray-700 p-4"
                            >
                                <div class="mb-2 text-center">
                                    <span
                                        class="text-base font-medium text-emerald-300"
                                        >Conservation Health Score</span
                                    >
                                </div>
                                <div
                                    class="relative h-4 overflow-hidden rounded-full bg-gray-600"
                                >
                                    <div
                                        class="absolute left-0 top-0 h-full rounded-full bg-gradient-to-r from-emerald-400 to-teal-500 transition-all duration-500"
                                        :style="'width: ' +
                                        conservationScore +
                                        '%'"
                                    ></div>
                                </div>
                                <div
                                    class="mt-1 flex justify-between text-xs text-emerald-300"
                                >
                                    <span>Needs Work</span>
                                    <span>Good</span>
                                    <span>Excellent</span>
                                </div>
                                <div class="mt-2 text-center">
                                    <span
                                        class="text-xl font-bold text-emerald-400"
                                        x-text="conservationScore + '%'"
                                    ></span>
                                </div>
                            </div>
                        </div>

                        
                        <div
                            class="mb-4 overflow-hidden rounded-xl border border-gray-600 bg-gradient-to-br from-gray-700 to-gray-600 p-1 sm:p-5 xl:w-2/3"
                        >
                            <div
                                class="mb-4 flex flex-col items-start justify-between gap-2 sm:flex-row sm:items-center"
                            >
                                <h4
                                    class="text-base font-semibold text-white sm:text-lg"
                                >
                                    Ecosystem Health Visualization
                                </h4>
                                <span
                                    class="whitespace-nowrap rounded-lg border border-emerald-700/50 bg-emerald-900/80 px-3 py-1.5 text-base font-medium text-emerald-300 backdrop-blur"
                                    x-text="getConservationStatus()"
                                ></span>
                            </div>

                            
                            <div
                                class="relative h-72 overflow-hidden rounded-xl bg-gradient-to-b from-sky-300/20 via-sky-400/10 to-transparent shadow-inner sm:h-80 lg:h-96"
                            >
                                
                                <div
                                    class="absolute inset-0 rounded-t-xl bg-gradient-to-b from-sky-400/30 via-blue-300/20 to-transparent"
                                >
                                    
                                    <div
                                        class="absolute right-8 top-6 transition-all duration-700"
                                        :style="`opacity: ${0.6 + conservationScore / 250}; transform: scale(${0.7 + conservationScore / 150})`"
                                    >
                                        <div class="relative">
                                            <div
                                                class="h-16 w-16 rounded-full bg-gradient-to-br from-yellow-300 to-orange-400 shadow-lg"
                                                :style="`box-shadow: 0 0 ${20 + conservationScore / 5}px rgba(251, 191, 36, ${0.4 + conservationScore / 250})`"
                                            ></div>
                                            <div
                                                class="absolute inset-0 rounded-full bg-gradient-to-br from-yellow-200/40 to-orange-300/20 blur-md"
                                            ></div>
                                        </div>
                                    </div>

                                    
                                    <template x-for="i in 4" :key="i">
                                        <div
                                            class="absolute transition-all duration-1000"
                                            :style="`top: ${8 + i * 12}%; left: ${15 + i * 18}%; opacity: ${0.4 + forestCover / 200}; transform: translateX(${Math.sin(Date.now() / 5000 + i) * 10}px)`"
                                        >
                                            <div class="relative">
                                                <div
                                                    class="h-10 w-20 rounded-full bg-white/70 backdrop-blur-sm"
                                                ></div>
                                                <div
                                                    class="absolute -top-3 left-3 h-8 w-12 rounded-full bg-white/70 backdrop-blur-sm"
                                                ></div>
                                                <div
                                                    class="absolute -top-2 right-2 h-6 w-10 rounded-full bg-white/70 backdrop-blur-sm"
                                                ></div>
                                            </div>
                                        </div>
                                    </template>
                                </div>

                                
                                <div
                                    class="absolute bottom-0 left-0 right-0 transition-all duration-700"
                                    :style="'height: ' +
                                    forestCover * 0.65 +
                                    '%;'"
                                >
                                    
                                    <div
                                        class="absolute inset-0 rounded-t-xl bg-gradient-to-t from-emerald-800 via-emerald-700 to-emerald-600"
                                    ></div>

                                    
                                    <div
                                        class="absolute inset-0 rounded-t-xl bg-gradient-to-t from-emerald-900/50 via-transparent to-transparent"
                                    ></div>

                                    
                                    <template x-for="i in treeCount" :key="i">
                                        <div
                                            class="absolute bottom-0 transition-all duration-500"
                                            :style="`left: ${Math.random() * 90 + 5}%; z-index: ${Math.floor(Math.random() * 10)}`"
                                        >
                                            <div class="relative">
                                                
                                                <div
                                                    class="mx-auto h-12 w-3 rounded-t-sm bg-gradient-to-t from-amber-900 to-amber-700"
                                                ></div>

                                                
                                                <div
                                                    class="absolute -top-10 left-1/2 -translate-x-1/2 transform"
                                                >
                                                    <div class="relative">
                                                        
                                                        <div
                                                            class="h-14 w-14 rounded-full bg-emerald-700 opacity-80"
                                                        ></div>
                                                        
                                                        <div
                                                            class="absolute left-1 top-1 h-12 w-12 rounded-full bg-emerald-600 opacity-90"
                                                        ></div>
                                                        
                                                        <div
                                                            class="absolute left-2 top-2 h-10 w-10 rounded-full bg-gradient-to-br from-emerald-500 to-emerald-600 shadow-md"
                                                        ></div>
                                                        
                                                        <div
                                                            class="absolute left-3 top-3 h-3 w-3 rounded-full bg-emerald-400/40 blur-sm"
                                                        ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>

                                    <div
                                        class="absolute bottom-0 left-0 right-0 h-2 bg-gradient-to-t from-emerald-900/70 to-transparent"
                                    ></div>
                                </div>

                                
                                <div class="absolute inset-0 overflow-hidden">
                                    
                                    <template
                                        x-for="
                                            i in Math.ceil(wildlifeCount / 2)
                                        "
                                        :key="`bird-${i}`"
                                    >
                                        <div
                                            class="absolute transition-all duration-1000"
                                            :style="`left: ${Math.random() * 80 + 10}%; top: ${Math.random() * 30 + 10}%; opacity: ${0.7 + wildlifePopulation / 300}; transform: translateX(${Math.sin(Date.now() / 2000 + i) * 20}px)`"
                                        >
                                            <div class="relative">
                                                
                                                <div class="relative h-7 w-10">
                                                    
                                                    <div
                                                        class="absolute left-2 top-2 h-4 w-5 rounded-full bg-gray-800"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute left-6 top-1.5 h-3 w-3 rounded-full bg-gray-800"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute left-8 top-2 h-0.5 w-1 rotate-45 transform bg-orange-500"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute left-1 top-1.5 h-5 w-4 origin-right rounded-t-full bg-gray-700 transition-transform duration-200"
                                                        :style="`transform: rotate(${Math.sin(Date.now() / 200 + i) * 30}deg)`"
                                                    ></div>
                                                    <div
                                                        class="absolute left-5 top-1.5 h-5 w-4 origin-left rounded-t-full bg-gray-700 transition-transform duration-200"
                                                        :style="`transform: rotate(${Math.sin(Date.now() / 200 + i + Math.PI) * 30}deg)`"
                                                    ></div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>

                                    
                                    <template
                                        x-for="i in wildlifeCount"
                                        :key="`animal-${i}`"
                                    >
                                        <div
                                            class="absolute transition-all duration-700"
                                            :style="`left: ${Math.random() * 80 + 10}%; bottom: ${forestCover * 0.65 + 2}%; opacity: ${0.7 + wildlifePopulation / 300}`"
                                            x-show="wildlifePopulation > i * 10"
                                        >
                                            
                                            <div
                                                x-show="i % 3 === 1"
                                                class="relative"
                                            >
                                                <div class="relative h-10 w-12">
                                                    
                                                    <div
                                                        class="absolute bottom-0 left-1 h-5 w-8 rounded-lg bg-amber-700"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute bottom-4 left-7 h-4 w-4 rounded-full bg-amber-700"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute bottom-0 left-2 h-3 w-1 bg-amber-800"
                                                    ></div>
                                                    <div
                                                        class="absolute bottom-0 left-3.5 h-3 w-1 bg-amber-800"
                                                    ></div>
                                                    <div
                                                        class="absolute bottom-0 left-6 h-3 w-1 bg-amber-800"
                                                    ></div>
                                                    <div
                                                        class="left-7.5 absolute bottom-0 h-3 w-1 bg-amber-800"
                                                    ></div>
                                                    
                                                    <div
                                                        class="left-7.5 absolute bottom-7 h-2 w-1 -rotate-12 transform bg-amber-900"
                                                    ></div>
                                                    <div
                                                        class="left-8.5 absolute bottom-7 h-2 w-1 rotate-12 transform bg-amber-900"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute bottom-2 left-0 h-1.5 w-1.5 rounded-full bg-white/70"
                                                    ></div>
                                                </div>
                                            </div>

                                            
                                            <div
                                                x-show="i % 3 === 2"
                                                class="relative"
                                            >
                                                <div class="relative h-9 w-11">
                                                    
                                                    <div
                                                        class="absolute bottom-0 left-1 h-6 w-7 rounded-lg bg-amber-800"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute bottom-4 left-7 h-4 w-4 rounded-full bg-amber-800"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute bottom-6 left-7 h-1 w-1 rounded-full bg-amber-900"
                                                    ></div>
                                                    <div
                                                        class="absolute bottom-6 left-9 h-1 w-1 rounded-full bg-amber-900"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute bottom-0 left-2 h-3 w-1 rounded-b bg-amber-900"
                                                    ></div>
                                                    <div
                                                        class="absolute bottom-0 left-4 h-3 w-1 rounded-b bg-amber-900"
                                                    ></div>
                                                    <div
                                                        class="left-5.5 absolute bottom-0 h-3 w-1 rounded-b bg-amber-900"
                                                    ></div>
                                                    <div
                                                        class="absolute bottom-0 left-7 h-3 w-1 rounded-b bg-amber-900"
                                                    ></div>
                                                    
                                                    <div
                                                        class="bottom-4.5 absolute left-10 h-0.5 w-1 rounded-full bg-amber-900"
                                                    ></div>
                                                </div>
                                            </div>

                                            
                                            <div
                                                x-show="i % 3 === 0"
                                                class="relative"
                                            >
                                                <div class="relative h-10 w-10">
                                                    
                                                    <div
                                                        class="absolute bottom-0 left-2.5 h-4 w-5 rounded-lg bg-gray-400"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute bottom-3 left-4 h-4 w-4 rounded-full bg-gray-400"
                                                    ></div>
                                                    
                                                    <div
                                                        class="left-4.5 absolute bottom-6 h-4 w-1 rounded-t bg-gray-400"
                                                    ></div>
                                                    <div
                                                        class="absolute bottom-6 left-6 h-4 w-1 rounded-t bg-gray-400"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute bottom-1.5 left-1 h-2 w-2 rounded-full bg-white"
                                                    ></div>
                                                    
                                                    <div
                                                        class="absolute bottom-0 left-3 h-3 w-1 bg-gray-500"
                                                    ></div>
                                                    <div
                                                        class="left-5.5 absolute bottom-0 h-3 w-1 bg-gray-500"
                                                    ></div>
                                                    
                                                    <div
                                                        class="left-6.5 absolute bottom-4 h-1 w-1 rounded-full bg-black"
                                                    ></div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>

                                
                                <div
                                    class="absolute left-6 top-6 transition-all duration-700"
                                    x-show="communityEngagement > 50"
                                >
                                    <div
                                        class="rounded-lg border border-teal-700/50 bg-teal-900/80 px-4 py-2.5 text-base text-teal-300 shadow-lg backdrop-blur"
                                    >
                                        <div class="flex items-center">
                                            <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                            </svg>
                                            <span>Community Active</span>
                                        </div>
                                        <div
                                            class="mt-1 text-sm text-teal-200/80"
                                            x-text="
                                                `${communityEngagement}% Engagement`
                                            "
                                        ></div>
                                    </div>
                                </div>

                                
                                <div
                                    class="absolute bottom-0 left-1/4 h-12 w-1/2 overflow-hidden rounded-t-lg transition-all duration-700"
                                >
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-blue-600/80 via-blue-500/60 to-blue-400/40"
                                    ></div>

                                    
                                    <div
                                        class="absolute inset-0 overflow-hidden"
                                    >
                                        <template x-for="i in 3" :key="i">
                                            <div
                                                class="absolute rounded-full border border-blue-300/30"
                                                :style="`width: ${20 + i * 15}px; height: ${10 + i * 7}px; top: ${30 + i * 10}%; left: 50%; transform: translateX(-50%); animation: ripple ${2 + i}s infinite ease-out`"
                                            ></div>
                                        </template>
                                    </div>

                                    <div
                                        class="absolute inset-0 flex items-center justify-center"
                                    >
                                        <svg class="h-10 w-10 text-blue-300 drop-shadow-md" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1.323l3.954 1.582 1.599-.8a1 1 0 01.894 1.79l-1.233.616 1.738 5.42a1 1 0 01-.285 1.05A3.989 3.989 0 0115 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.715-5.349L11 6.477V16a1 1 0 11-2 0V6.477L6.237 7.582l1.715 5.349a1 1 0 01-.285 1.05A3.989 3.989 0 015 15a3.989 3.989 0 01-2.667-1.019 1 1 0 01-.285-1.05l1.738-5.42-1.233-.617a1 1 0 01.894-1.788l1.599.799L9 4.323V3a1 1 0 011-1z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            
                            <div
                                class="mt-4 flex flex-wrap justify-center gap-x-2 gap-y-1 text-sm text-gray-400"
                            >
                                <span
                                    class="rounded-full bg-gray-700/30 px-3 py-1"
                                >
                                    🌳 Forest:
                                    <span x-text="forestCover + '%'"></span>%
                                </span>
                                <span
                                    class="rounded-full bg-gray-700/30 px-3 py-1"
                                >
                                    🦌 Wildlife:
                                    <span
                                        x-text="wildlifePopulation + '%'"
                                    ></span
                                    >%
                                </span>
                                <span
                                    class="rounded-full bg-gray-700/30 px-3 py-1"
                                >
                                    💧 Water
                                </span>
                                <span
                                    class="rounded-full bg-gray-700/30 px-3 py-1"
                                >
                                    👥 Community:
                                    <span
                                        x-text="communityEngagement + '%'"
                                    ></span
                                    >%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="mb-12 grid gap-4 sm:mb-16 sm:gap-6 md:grid-cols-3">
                    <div
                        class="rounded-xl border border-gray-700 bg-gray-800 p-4 text-center shadow-2xl sm:p-6"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        <div
                            class="text-gradient mb-2 text-2xl font-bold sm:text-3xl"
                            x-text="animatedStats.forestsProtected"
                            x-init="
                                animateCounter(
                                    'forestsProtected',
                                    0,
                                    295000,
                                    2000,
                                )
                            "
                        ></div>
                        <div class="text-xs text-gray-400 sm:text-sm">
                            Forests Protected (km²)
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-gray-700 bg-gray-800 p-4 text-center shadow-2xl sm:p-6"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <div
                            class="text-gradient-teal mb-2 text-2xl font-bold sm:text-3xl"
                            x-text="animatedStats.speciesSaved"
                            x-init="
                                animateCounter('speciesSaved', 0, 728, 2000)
                            "
                        ></div>
                        <div class="text-xs text-gray-400 sm:text-sm">
                            Species Saved from Extinction
                        </div>
                    </div>
                    <div
                        class="rounded-xl border border-gray-700 bg-gray-800 p-4 text-center shadow-2xl sm:p-6"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >
                        <div
                            class="text-gradient mb-2 text-2xl font-bold sm:text-3xl"
                            x-text="animatedStats.treesPlanted"
                            x-init="
                                animateCounter('treesPlanted', 0, 12500, 2000)
                            "
                        ></div>
                        <div class="text-xs text-gray-400 sm:text-sm">
                            Trees Planted This Year
                        </div>
                    </div>
                </div>

                
                <div
                    class="gradient-bg glow relative overflow-hidden rounded-2xl p-6 text-center text-white sm:p-8 md:p-12"
                    data-aos="fade-up"
                >
                    
                    <div
                        class="absolute right-0 top-0 -mr-20 -mt-20 h-40 w-40 rounded-full bg-white opacity-10 sm:-mr-28 sm:-mt-28 sm:h-56 sm:w-56 lg:-mr-32 lg:-mt-32 lg:h-64 lg:w-64"
                    ></div>
                    <div
                        class="absolute bottom-0 left-0 -mb-20 -ml-20 h-40 w-40 rounded-full bg-white opacity-10 sm:-mb-28 sm:-ml-28 sm:h-56 sm:w-56 lg:-mb-32 lg:-ml-32 lg:h-64 lg:w-64"
                    ></div>

                    <div class="relative z-10">
                        <h3
                            class="mb-4 text-2xl font-bold sm:text-3xl md:text-4xl"
                        >
                            Join Our Conservation Mission
                        </h3>
                        <p class="mx-auto mb-6 max-w-2xl px-4 text-lg opacity-90 sm:mb-8 sm:text-xl">Together we can protect our natural heritage and create a sustainable future for all living beings.</p>
                        <div
                            class="flex flex-col justify-center gap-4 px-4 sm:flex-row"
                        >
                            <a
                                href=""
                                class="flex items-center justify-center rounded-lg bg-white px-6 py-3 font-semibold text-emerald-700 shadow-lg transition-colors hover:bg-gray-100 sm:px-8"
                            >
                                <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Get Involved
                            </a>
                        </div>
                        <p class="mt-6 px-4 text-sm text-emerald-100">Every action counts in preserving our planet's beauty and diversity</p>
                    </div>
                </div>
            </div>
    </section>

    @push ('styles')
        <style>
            .gradient-bg {
                background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            }

            .gradient-bg-teal {
                background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
            }

            .gradient-bg-emerald {
                background: linear-gradient(135deg, #059669 0%, #047857 100%);
            }

            .card-hover {
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            }

            .card-hover:hover {
                transform: translateY(-10px) scale(1.02);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            }

            .floating {
                animation: floating 6s ease-in-out infinite;
            }

            @keyframes floating {
                0% { transform: translate(0, 0px); }
                50% { transform: translate(0, -15px); }
                100% { transform: translate(0, 0px); }
            }

            .text-gradient {
                background: linear-gradient(135deg, #10b981 0%, #0d9488 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                color: transparent;
            }

            .text-gradient-teal {
                background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                color: transparent;
            }

            .nature-pattern {
                background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2310b981' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }

            .eco-badge {
                background: linear-gradient(135deg, #10b981 0%, #059669 100%);
                box-shadow: 0 4px 15px rgba(5, 150, 105, 0.3);
            }

            .conservation-badge {
                background: linear-gradient(135deg, #0d9488 0%, #0f766e 100%);
                box-shadow: 0 4px 15px rgba(13, 148, 136, 0.3);
            }

            .gauge {
                transition: all 0.5s ease-in-out;
            }

            .leaf-float {
                animation: leaf-float 8s ease-in-out infinite;
            }

            @keyframes leaf-float {
                0%, 100% { transform: translateY(0px) rotate(0deg); }
                50% { transform: translateY(-20px) rotate(5deg); }
            }

            .glow {
                box-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
            }

            /* Mobile scrollbar styling */
            .custom-scrollbar {
                scrollbar-width: thin;
                scrollbar-color: rgba(16, 185, 129, 0.5) rgba(255, 255, 255, 0.1);
            }

            .custom-scrollbar::-webkit-scrollbar {
                width: 6px;
                height: 6px;
            }

            .custom-scrollbar::-webkit-scrollbar-track {
                background: rgba(255, 255, 255, 0.1);
                border-radius: 3px;
            }

            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: rgba(16, 185, 129, 0.5);
                border-radius: 3px;
            }

            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: rgba(16, 185, 129, 0.7);
            }

            /* Responsive improvements */
            @media (max-width: 640px) {
                .mobile-scroll-x {
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                }

                .mobile-scroll-x::-webkit-scrollbar {
                    height: 4px;
                }

                .mobile-scroll-x::-webkit-scrollbar-track {
                    background: rgba(255, 255, 255, 0.1);
                }

                .mobile-scroll-x::-webkit-scrollbar-thumb {
                    background: rgba(16, 185, 129, 0.5);
                    border-radius: 2px;
                }

                .dashboard-container {
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                    min-width: 100%;
                }

                .dashboard-content {
                    min-width: 700px;
                }
            }

            @media (hover: none) {
                .card-hover:hover {
                    transform: none;
                }
            }

            .tree {
                position: relative;
                transition: all 0.5s ease;
            }

            .tree-trunk {
                background: linear-gradient(to right, #7d4f2a, #9c6634);
                border-radius: 0 0 2px 2px;
            }

            .tree-crown {
                background: radial-gradient(circle, #10b981, #059669);
                border-radius: 50%;
                position: relative;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .tree-crown::before {
                content: '';
                position: absolute;
                top: 20%;
                left: 20%;
                width: 60%;
                height: 60%;
                background: radial-gradient(circle, rgba(255,255,255,0.3), transparent);
                border-radius: 50%;
            }

            .water {
                background: linear-gradient(to bottom, rgba(59, 130, 246, 0.7), rgba(37, 99, 235, 0.9));
                border-radius: 50% 50% 0 0;
                position: relative;
                overflow: hidden;
            }

            .water::before {
                content: '';
                position: absolute;
                top: 0;
                left: -100%;
                width: 200%;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
                animation: water-shimmer 3s infinite;
            }

            @keyframes water-shimmer {
                0% { left: -100%; }
                100% { left: 100%; }
            }

            .sun {
                background: radial-gradient(circle, #fbbf24, #f59e0b);
                border-radius: 50%;
                position: absolute;
                box-shadow: 0 0 20px rgba(251, 191, 36, 0.5);
                transition: all 0.5s ease;
            }

            .cloud {
                background: rgba(255, 255, 255, 0.7);
                border-radius: 50%;
                position: absolute;
            }

            .cloud::before, .cloud::after {
                content: '';
                position: absolute;
                background: rgba(255, 255, 255, 0.7);
                border-radius: 50%;
            }

            .cloud::before {
                width: 50px;
                height: 50px;
                top: -25px;
                left: 10px;
            }

            .cloud::after {
                width: 60px;
                height: 60px;
                top: -15px;
                right: 10px;
            }

            .bird {
                position: absolute;
                transition: all 0.5s ease;
            }

            .bird::before {
                content: '';
                position: absolute;
                width: 20px;
                height: 2px;
                background: #333;
                transform-origin: center;
            }

            .bird::after {
                content: '';
                position: absolute;
                width: 10px;
                height: 10px;
                background: #333;
                border-radius: 50%;
                top: -4px;
                left: 5px;
            }

            .bird-wing {
                position: absolute;
                width: 15px;
                height: 2px;
                background: #333;
                top: 0;
                left: 0;
                transform-origin: center right;
                animation: flap 0.5s infinite alternate;
            }

            .bird-wing.right {
                transform-origin: center left;
                left: auto;
                right: 0;
            }

            @keyframes flap {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(30deg); }
            }
        </style>
    @endpush
</div>

@push ('scripts')
    <script>
        // Initialize AOS
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 100,
                });
            }

            // GSAP animations
            if (
                typeof gsap !== 'undefined' &&
                typeof ScrollTrigger !== 'undefined'
            ) {
                gsap.registerPlugin(ScrollTrigger);

                // Animate cards on scroll
                gsap.utils.toArray('[data-aos]').forEach((element) => {
                    gsap.from(element, {
                        scrollTrigger: {
                            trigger: element,
                            start: 'top 80%',
                            end: 'bottom 20%',
                            toggleActions: 'play none none reverse',
                        },
                        opacity: 0,
                        y: 50,
                        duration: 0.8,
                        ease: 'power2.out',
                    });
                });

                // Animate background elements
                gsap.to('.floating', {
                    y: -20,
                    duration: 2,
                    repeat: -1,
                    yoyo: true,
                    ease: 'power1.inOut',
                    stagger: 0.2,
                });
            }
        });

        // Alpine.js component
        function natureConservation() {
            return {
                // Card hover states
                card1Hover: false,
                card2Hover: false,
                card3Hover: false,
                card1Width: 'width: 0%',
                card2Width: 'width: 0%',
                card3Width: 'width: 0%',

                // Conservation controls
                forestCover: 65,
                wildlifePopulation: 70,
                communityEngagement: 75,

                // Visualization elements
                treeCount: 8,
                wildlifeCount: 5,

                // Animated stats
                animatedStats: {
                    forestsProtected: 0,
                    speciesSaved: 0,
                    treesPlanted: 0,
                    communitiesEngaged: 0,
                },

                // Computed properties
                get conservationScore() {
                    // Calculate conservation score based on factors
                    const forestScore = this.forestCover * 0.4;
                    const wildlifeScore = this.wildlifePopulation * 0.3;
                    const communityScore = this.communityEngagement * 0.3;

                    return Math.min(
                        100,
                        Math.round(
                            forestScore + wildlifeScore + communityScore,
                        ),
                    );
                },

                // Methods
                animateCard(cardNumber) {
                    this[`card${cardNumber}Hover`] = true;
                    this[`card${cardNumber}Width`] = 'width: 100%';
                },

                resetCard(cardNumber) {
                    this[`card${cardNumber}Hover`] = false;
                    this[`card${cardNumber}Width`] = 'width: 0%';
                },

                resetDashboard() {
                    this.forestCover = 65;
                    this.wildlifePopulation = 70;
                    this.communityEngagement = 75;
                },

                getConservationStatus() {
                    if (this.conservationScore >= 80) return 'Excellent';
                    if (this.conservationScore >= 60) return 'Good';
                    return 'Needs Improvement';
                },

                animateCounter(stat, start, end, duration) {
                    let startTimestamp = null;
                    const step = (timestamp) => {
                        if (!startTimestamp) startTimestamp = timestamp;
                        const progress = Math.min(
                            (timestamp - startTimestamp) / duration,
                            1,
                        );

                        this.animatedStats[stat] = Math.floor(
                            start + progress * (end - start),
                        );

                        if (progress < 1) {
                            window.requestAnimationFrame(step);
                        }
                    };
                    window.requestAnimationFrame(step);
                },
            };
        }
    </script>
@endpush
