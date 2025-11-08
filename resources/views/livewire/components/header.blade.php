<div>
    <section 
        x-data="{ showText: false, statsVisible: false }" 
        x-init="setTimeout(() => showText = true, 400); setTimeout(() => statsVisible = true, 1200)"
        style="background-image: url('{{ asset('image/hero.jpg') }}');"
        class="relative flex items-center justify-center bg-cover bg-center px-6 py-24 md:py-32 overflow-hidden h-[85vh]">

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-green-900/20 via-emerald-900/40 to-green-950/80"></div>

        <!-- Organic Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-56 h-56 bg-green-400/5 rounded-full filter blur-3xl animate-gentle-float"></div>
            <div class="absolute bottom-24 right-10 w-72 h-72 bg-emerald-400/5 rounded-full filter blur-3xl animate-gentle-float"></div>
            <div class="absolute top-1/2 left-1/3 w-96 h-96 bg-teal-400/3 rounded-full filter blur-3xl animate-gentle-float"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <h2 
                x-show="showText" 
                x-transition:enter="transition ease-out duration-1000"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                class="text-3xl md:text-4xl font-light text-white mb-6 leading-relaxed">
                Protecting Our Planet Through
                <span class="block font-normal text-green-300 mt-2">Data-Driven Conservation</span>
            </h2>

            <p 
                x-show="showText" 
                x-transition:enter="transition ease-out duration-1000"
                x-transition:enter-start="opacity-0 transform translate-y-8"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:enter-delay="100"
                class="text-lg text-gray-200 mb-16 leading-relaxed">
                Join thousands of environmental advocates monitoring ecosystems, tracking biodiversity, and taking action for a sustainable future.
            </p>
        </div>

        <!-- Floating CTA Card -->
        


    </section>
</div>
