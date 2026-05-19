@extends('layouts.app') {{-- atau x-app-layout --}}
@section('content')
<div class="min-h-screen bg-slate-950 flex items-center justify-center px-4">
    <div class="text-center max-w-2xl">
        <div class="mb-8 relative inline-block">
            <div class="absolute inset-0 blur-3xl bg-cyan-500/20 rounded-full"></div>
            <i class="fas fa-microchip text-8xl text-cyan-400 relative z-10"></i>
        </div>
        <h1 class="text-6xl md:text-8xl font-bold text-white mb-4">404</h1>
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-200 mb-4">Industrial Connection Lost</h2>
        <p class="text-gray-400 mb-8">The page you're looking for seems to have been decommissioned. Let's get you back to the control room.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-cyan-500 to-blue-600 text-white rounded-lg font-semibold hover:shadow-lg transition">
                <i class="fas fa-home"></i> Return to Dashboard
            </a>
            <a href="#" onclick="history.back()" class="inline-flex items-center gap-2 px-6 py-3 border border-gray-500 text-gray-300 rounded-lg font-semibold hover:bg-white/10 transition">
                <i class="fas fa-arrow-left"></i> Go Back
            </a>
        </div>
    </div>
</div>
@endsection