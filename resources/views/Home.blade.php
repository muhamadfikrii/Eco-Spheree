<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
        <livewire:components.header />

        <livewire:components.purpose />

        <!-- Divider -->
        <div class="bg-black mt-10 h-[1px] mx-20"></div>

        <!-- Hero Section -->
        <section 
            x-data="{ show: false }" 
            x-init="setTimeout(() => show = true, 200)" 
            class="text-center py-20 relative overflow-hidden"
        >
            <div class="absolute inset-0 bg-gradient-to-br from-green-50 via-white to-blue-50 opacity-70"></div>
            <div class="relative z-10">
                <h1 
                    x-show="show"
                    x-transition.duration.800ms
                    class="text-5xl sm:text-6xl font-extrabold text-gray-900 tracking-tight mb-4 leading-tight"
                >
                    Explore Indonesia's <span class="text-green-600">Environmental Dashboard</span>
                </h1>
                <p 
                    x-show="show"
                    x-transition.duration.1000ms.delay.300ms
                    class="max-w-2xl mx-auto text-lg sm:text-xl text-gray-600"
                >
                    Temukan data lingkungan real-time, kisah inspiratif, dan aksi nyata dari seluruh Indonesia — semuanya dalam satu dasbor interaktif untuk masa depan yang berkelanjutan.
                </p>
            </div>
        </section>

        <div class="mx-auto pb-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 lg:p-8 gap-6 lg:gap-8 bg-slate-900">
                <section class="lg:col-span-2 space-y-6">
                    <livewire:components.map-section />
                </section>

                <!-- Right Column -->
                <aside class="space-y-6">
                    <!-- Tambahkan komponen lain di sini -->

                    <div class="bg-gray-800/30 rounded-2xl p-6 border border-gray-700/50">
                        <h3 class="text-lg font-semibold text-white mb-4">Sustainability Tips</h3>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-bicycle text-green-400 mt-1"></i>
                                <p class="text-sm text-gray-300">Use bicycle for short distances to reduce carbon emissions</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class="fas fa-recycle text-blue-400 mt-1"></i>
                                <p class="text-sm text-gray-300">Recycle plastic and paper products whenever possible</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class="fas fa-leaf text-emerald-400 mt-1"></i>
                                <p class="text-sm text-gray-300">Plant trees in your community to improve air quality</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="bg-black mt-10 h-[1px]"></div>
        </div>

        <!-- Impact Stories Section -->
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Impact Stories</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Story cards here -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>