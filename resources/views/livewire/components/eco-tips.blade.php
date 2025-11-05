<!-- Eco Tips -->
<div class="bg-gray-800/50 backdrop-blur-sm p-4 sm:p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
    <div class="flex justify-between items-center mb-3">
        <h3 class="text-lg font-semibold text-teal-400 flex items-center">
            <i class="fas fa-lightbulb mr-2"></i>
            Eco-Tips
        </h3>
        <button wire:click="refreshTips" class="text-gray-400 hover:text-white transition-colors transform hover:rotate-180 duration-500">
            <i class="fas fa-sync-alt"></i>
        </button>
    </div>
    <ul class="mt-4 space-y-3 text-sm text-gray-300">
        @foreach($ecoTips as $tip)
        <li class="flex items-start p-2 rounded hover:bg-gray-700/30 transition-all duration-300 transform hover:translate-x-1">
            <span class="text-xl mr-3">{{ $tip['icon'] }}</span>
            <span>{{ $tip['text'] }}</span>
        </li>
        @endforeach
    </ul>
</div>
