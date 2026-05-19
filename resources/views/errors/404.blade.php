@extends ('layouts.app')
{{-- atau x-app-layout --}}
@section ('content')
    <div
        class="flex min-h-screen items-center justify-center bg-slate-950 px-4"
    >
        <div class="max-w-2xl text-center">
            <div class="relative mb-8 inline-block">
                <div
                    class="absolute inset-0 rounded-full bg-cyan-500/20 blur-3xl"
                ></div>
                <i
                    class="fas fa-microchip relative z-10 text-8xl text-cyan-400"
                ></i>
            </div>
            <h1 class="mb-4 text-6xl font-bold text-white md:text-8xl">404</h1>
            <h2 class="mb-4 text-2xl font-semibold text-gray-200 md:text-3xl">
                Industrial Connection Lost
            </h2>
            <p class="mb-8 text-gray-400">The page you're looking for seems to have been decommissioned. Let's get you back to the control room.</p>
            <div class="flex flex-col justify-center gap-4 sm:flex-row">
                <a
                    href="{{ route('home') }}"
                    class="inline-flex items-center gap-2 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-6 py-3 font-semibold text-white transition hover:shadow-lg"
                >
                    <i class="fas fa-home"></i> Return to Dashboard
                </a>
                <a
                    href="#"
                    onclick="history.back()"
                    class="inline-flex items-center gap-2 rounded-lg border border-gray-500 px-6 py-3 font-semibold text-gray-300 transition hover:bg-white/10"
                >
                    <i class="fas fa-arrow-left"></i> Go Back
                </a>
            </div>
        </div>
    </div>
@endsection
