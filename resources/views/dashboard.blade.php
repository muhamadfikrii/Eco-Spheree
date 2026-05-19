<x-app-layout>
    <div
        class="min-h-screen w-full bg-slate-900 px-6 py-10 pt-28 sm:px-8 lg:px-10"
        x-data="dashboard"
    >
        
        <div class="mb-10 text-center">
            <h1 class="mb-3 text-5xl font-extrabold tracking-tight text-white">
                🌍 Eco-Sphere
            </h1>
            <p class="text-lg text-gray-400">The Real-Time Biodiversity Map</p>
            <p class="mx-auto mt-3 max-w-2xl text-gray-300">Monitor environmental data, report issues, and take action for a sustainable future.</p>
        </div>

        
        <div
            class="mx-auto grid max-w-7xl grid-cols-1 gap-8 sm:gap-10 lg:grid-cols-3"
        >
            
            <div class="space-y-6 lg:col-span-2">
                <div class="eco-card overflow-hidden">
                    <div class="p-6">
                        <div
                            class="mb-4 flex flex-col gap-3 md:flex-row md:items-center md:justify-between"
                        >
                            <h2 class="text-xl font-semibold text-teal-400">
                                Environmental Data Map
                            </h2>
                            <div class="flex items-center gap-3">
                                <button
                                    @click="showReportModal = true"
                                    class="eco-button flex items-center rounded-lg px-4 py-2 text-white"
                                >
                                    <i
                                        class="fas fa-camera mr-2"
                                        aria-hidden="true"
                                    ></i>
                                    Report Issue
                                </button>
                            </div>
                        </div>

                        
                        <div
                            id="eco-map"
                            x-init="initMap($el)"
                            class="relative w-full overflow-hidden rounded-2xl bg-gray-700 shadow-lg transition-shadow hover:shadow-2xl"
                            style="height: 450px"
                        >
                            
                            <div
                                class="absolute right-4 top-4 z-[1000] rounded-xl bg-gray-900/80 p-3 backdrop-blur-md"
                            >
                                <h3
                                    class="mb-2 text-sm font-semibold text-white"
                                >
                                    Map Layers
                                </h3>
                                <template
                                    x-for="layer in layers"
                                    :key="layer.id"
                                >
                                    <div class="mb-1 flex items-center gap-2">
                                        <input
                                            type="checkbox"
                                            :id="layer.id"
                                            class="layer-checkbox"
                                            x-model="layer.visible"
                                            @change="toggleLayer(layer.id)"
                                        />
                                        <label
                                            :for="layer.id"
                                            class="text-sm text-white"
                                            x-text="layer.name"
                                        ></label>
                                    </div>
                                </template>
                            </div>

                            
                            <div
                                class="absolute bottom-4 left-4 z-[1000] space-y-2 rounded-lg bg-gray-900 bg-opacity-80 p-3 text-xs text-white"
                            >
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="h-3 w-3 rounded-full bg-green-500"
                                    ></span>
                                    <span>Good Air Quality</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="h-3 w-3 rounded-full bg-yellow-500"
                                    ></span>
                                    <span>Moderate Air Quality</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="h-3 w-3 rounded-full bg-red-500"
                                    ></span>
                                    <span>Poor Air Quality</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="pulse-animation h-3 w-3 rounded-full bg-orange-500"
                                    ></span>
                                    <span>Fire Hotspot</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span
                                        class="h-3 w-3 rounded-full bg-blue-500"
                                    ></span>
                                    <span>Water Quality Point</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i
                                        class="fas fa-recycle text-green-400"
                                    ></i>
                                    <span>Recycling Center</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i
                                        class="fas fa-exclamation-triangle text-yellow-400"
                                    ></i>
                                    <span>User Report</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="eco-card p-6">
                    <h2 class="mb-4 text-xl font-semibold text-teal-400">
                        Impact Stories
                    </h2>
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                        <template
                            x-for="story in impactStories"
                            :key="story.id"
                        >
                            <div
                                class="impact-story group cursor-pointer overflow-hidden rounded-lg"
                            >
                                <div
                                    class="relative h-40 w-full overflow-hidden"
                                >
                                    <img
                                        :src="story.image"
                                        :alt="story.title"
                                        class="h-full w-full object-cover transition-transform group-hover:scale-105"
                                    />
                                </div>
                                <div class="bg-gray-800 p-3">
                                    <h3
                                        class="font-semibold text-white"
                                        x-text="story.title"
                                    ></h3>
                                    <p class="mt-1 text-sm text-gray-300" x-text="
                                            story.description
                                        "></p>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                
                <div class="eco-card p-6">
                    <h3 class="mb-3 text-lg font-semibold text-green-400">
                        Recent Environmental Activities
                    </h3>
                    <ul class="space-y-3 text-sm text-gray-300">
                        <template
                            x-for="activity in activities"
                            :key="activity.id"
                        >
                            <li
                                class="flex items-center justify-between rounded p-2 transition-colors hover:bg-gray-700"
                            >
                                <span
                                    x-text="
                                        activity.icon +
                                        ' ' +
                                        activity.description
                                    "
                                ></span>
                                <span
                                    :class="activity.impactClass"
                                    x-text="activity.impact"
                                ></span>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>

            
            <div class="space-y-6">
                
                <div class="eco-card p-6">
                    <h3 class="mb-3 text-lg font-semibold text-teal-400">
                        Regional Sustainability Score
                    </h3>
                    <div class="my-4 flex items-center justify-center">
                        <div
                            class="sustainability-score text-4xl font-bold text-white"
                            x-text="sustainabilityScore"
                        ></div>
                    </div>
                    <div class="mb-4 text-center text-gray-300">
                        <p class="text-sm" x-text="region"></p>
                        <p class="mt-1 text-xs text-gray-400">Ranked #<span x-text="rank"></span> out of <span x-text="totalCities"></span> cities</p>
                    </div>
                    <div class="space-y-2">
                        <template
                            x-for="metric in sustainabilityMetrics"
                            :key="metric.id"
                        >
                            <div class="flex justify-between text-sm">
                                <span
                                    class="text-gray-400"
                                    x-text="metric.name"
                                ></span>
                                <div class="flex items-center">
                                    <div
                                        class="mr-2 h-2 w-24 rounded-full bg-gray-700"
                                    >
                                        <div
                                            class="h-2 rounded-full bg-green-500"
                                            :style="`width: ${metric.percentage}%`"
                                        ></div>
                                    </div>
                                    <span
                                        class="text-gray-300"
                                        x-text="metric.score"
                                    ></span>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                
                <div class="eco-card p-6">
                    <h3 class="mb-3 text-lg font-semibold text-teal-400">
                        Recent Community Reports
                    </h3>
                    <ul class="space-y-3">
                        <template
                            x-for="report in recentReports"
                            :key="report.id"
                        >
                            <li
                                class="flex cursor-pointer items-start rounded p-2 transition-colors hover:bg-gray-700"
                            >
                                <i :class="report.iconClass + ' mt-1 mr-3'"></i>
                                <div>
                                    <p class="text-sm text-white" x-text="
                                            report.title
                                        "></p>
                                    <p class="text-xs text-gray-400" x-text="
                                            report.time +
                                            ' • ' +
                                            report.upvotes +
                                            ' upvotes'
                                        "></p>
                                </div>
                            </li>
                        </template>
                    </ul>
                </div>

                
                <div class="eco-card p-6">
                    <h3 class="mb-3 text-lg font-semibold text-blue-400">
                        Active Eco-Challenges
                    </h3>
                    <div class="space-y-4">
                        <template
                            x-for="challenge in challenges"
                            :key="challenge.id"
                        >
                            <div>
                                <div
                                    class="mb-1 flex items-center justify-between"
                                >
                                    <p class="text-sm font-medium text-white" x-text="
                                            challenge.title
                                        "></p>
                                    <span
                                        class="text-xs text-gray-400"
                                        x-text="challenge.timeLeft"
                                    ></span>
                                </div>
                                <div
                                    class="h-2 w-full rounded-full bg-gray-700"
                                >
                                    <div
                                        class="h-2 rounded-full bg-yellow-500"
                                        :style="`width: ${challenge.progress}%`"
                                    ></div>
                                </div>
                                <p class="mt-1 text-xs text-gray-400" x-text="
                                        challenge.participants + ' participants'
                                    "></p>
                            </div>
                        </template>
                    </div>
                    <button
                        class="eco-button mt-4 w-full rounded-lg px-4 py-2 text-white"
                    >
                        View All Challenges
                    </button>
                </div>

                
                <div class="eco-card p-6">
                    <h3 class="mb-3 text-lg font-semibold text-teal-400">
                        Eco-Tips
                    </h3>
                    <ul class="mt-4 space-y-3 text-sm text-gray-300">
                        <template x-for="tip in ecoTips" :key="tip.id">
                            <li class="flex items-start">
                                <svg class="mr-2 mt-0.5 h-5 w-5 flex-shrink-0 text-teal-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
        @click.self="showReportModal = false"
    ></div>

    
    <div
        x-show="showReportModal"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
        class="report-form fixed inset-0 z-[1100] flex items-center justify-center p-4"
    >
        <div
            class="w-full max-w-lg rounded-2xl border border-gray-700 bg-gray-800 p-6 shadow-2xl"
        >
            <div class="mb-4 flex items-center justify-between">
                <h3 class="text-xl font-semibold text-white">
                    Report Environmental Issue
                </h3>
                <button
                    class="text-gray-400 hover:text-white"
                    @click="showReportModal = false"
                >
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form
                @submit.prevent="submitReport"
                x-show="showReportModal"
                class="space-y-4"
            >
                <div>
                    <label class="mb-2 block text-sm text-gray-300"
                        >Issue Type</label
                    >
                    <select
                        x-model="reportForm.issueType"
                        class="w-full rounded-lg bg-gray-700 px-3 py-2 text-white"
                    >
                        <option>Air Pollution</option>
                        <option>Water Pollution</option>
                        <option>Illegal Dumping</option>
                        <option>Deforestation</option>
                        <option>Wildlife Concern</option>
                        <option>Other</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm text-gray-300"
                        >Description</label
                    >
                    <textarea
                        x-model="reportForm.description"
                        class="w-full rounded-lg bg-gray-700 px-3 py-2 text-white"
                        rows="3"
                        placeholder="Describe the issue..."
                    ></textarea>
                </div>

                <div>
                    <label class="mb-2 block text-sm text-gray-300"
                        >Photo</label
                    >
                    <div
                        class="cursor-pointer rounded-lg border-2 border-dashed border-gray-600 p-4 text-center"
                    >
                        <i
                            class="fas fa-cloud-upload-alt mb-2 text-3xl text-gray-400"
                        ></i>
                        <p class="text-sm text-gray-400">Click to upload or drag and drop</p>
                    </div>
                </div>

                <div>
                    <label class="mb-2 block text-sm text-gray-300"
                        >Location</label
                    >
                    <div class="flex items-center gap-2">
                        <input
                            x-model="reportForm.location"
                            type="text"
                            class="flex-1 rounded-lg bg-gray-700 px-3 py-2 text-white"
                            placeholder="Current location"
                        />
                        <button
                            type="button"
                            class="eco-button rounded-lg px-3 py-2 text-white"
                            @click="setCurrentLocation"
                        >
                            <i class="fas fa-map-marker-alt"></i>
                        </button>
                    </div>
                </div>

                <button
                    type="submit"
                    class="eco-button w-full rounded-lg px-4 py-2 text-white"
                >
                    Submit Report
                </button>
            </form>
        </div>
    </div>

    
    <div
        x-show="showNotification"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-full"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-full"
        class="notification fixed bottom-6 right-6 z-[1200]"
    >
        <p x-text="notificationMessage"></p>
    </div>
</x-app-layout>
