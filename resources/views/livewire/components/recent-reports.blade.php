<!-- Recent Reports -->
<div class="bg-gray-800/50 backdrop-blur-sm p-4 sm:p-6 rounded-lg shadow-lg border-gray-700 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-1">
    <div class="flex justify-between items-center mb-3">
        <h3 class="text-lg font-semibold text-teal-400 flex items-center">
            <i class="fas fa-exclamation-circle mr-2"></i>
            Recent Community Reports
        </h3>
        <div class="flex items-center text-xs text-gray-400">
            <span class="w-2 h-2 bg-green-500 rounded-full mr-1 animate-pulse"></span>
            <span>Live</span>
        </div>
    </div>
    <ul class="space-y-3">
        @foreach($recentReports as $report)
        <li class="flex items-start hover:bg-gray-700/50 p-2 rounded transition-all duration-300 transform hover:translate-x-1 cursor-pointer">
            <i class="{{ $report['icon_class'] }} mt-1 mr-3"></i>
            <div class="flex-1">
                <div class="flex items-center">
                    <p class="text-white text-sm">{{ $report['title'] }}</p>
                    @if($report['verified'] ?? false)
                        <i class="fas fa-check-circle text-blue-400 text-xs ml-2"></i>
                    @endif
                </div>
                <p class="text-gray-400 text-xs">{{ $report['created_at'] }} • {{ $report['upvotes'] }} upvotes</p>
            </div>
            <button wire:click="upvoteReport({{ $report['id'] }})" class="text-gray-400 hover:text-yellow-400 transition-colors transform hover:scale-110">
                <i class="fas fa-arrow-up"></i>
            </button>
        </li>
        @endforeach
    </ul>
    <button class="text-teal-400 hover:text-teal-300 text-sm mt-3 transition-colors">
        View All Reports <i class="fas fa-arrow-right ml-1"></i>
    </button>
</div>
