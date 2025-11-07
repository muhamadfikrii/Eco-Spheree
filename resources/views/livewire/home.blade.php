<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100">
    @include('livewire.components.header')
    @include('livewire.components.purpose')

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
                Explore Indonesia’s <span class="text-green-600">Environmental Dashboard</span>
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
            <!-- Main Content -->
            <section class="lg:col-span-2 space-y-6">
                @include('livewire.components.map-section')
            </section>
            <!-- Sidebar -->
            <aside class="space-y-6">
            </aside>
        </div>

        <!-- Divider -->
        <div class="bg-black mt-10 h-[1px]"></div>
    </div>

    @include('livewire.components.impact-stories')
</div>


