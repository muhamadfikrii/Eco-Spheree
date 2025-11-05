<!-- Impact Stories -->
<div class="bg-gray-800/50 backdrop-blur-sm overflow-hidden shadow-xl rounded-xl border border-gray-700 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-1">
    <div class="p-4 sm:p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-teal-400 flex items-center">
                <i class="fas fa-book-open mr-2"></i>
                Impact Stories
            </h2>
            <button class="text-teal-400 hover:text-teal-300 text-sm flex items-center transition-colors">
                View All <i class="fas fa-arrow-right ml-1"></i>
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($impactStories as $story)
                <article class="rounded-lg overflow-hidden cursor-pointer group hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative h-40 w-full overflow-hidden">
                        <img src="{{ $story['image'] }}" alt="{{ $story['title'] }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-3">
                            @if($story['featured'] ?? false)
                                <span class="inline-block px-2 py-1 text-xs font-semibold bg-gradient-to-r from-teal-600 to-green-600 text-white rounded-full animate-pulse">
                                    <i class="fas fa-star mr-1"></i> Featured
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="p-3 bg-gray-800">
                        <h3 class="text-white font-semibold">{{ $story['title'] }}</h3>
                        <p class="text-gray-300 text-sm mt-1">{{ $story['description'] }}</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-xs text-gray-400">{{ $story['reading_time'] ?? '5 min read' }}</span>
                            <div class="flex items-center space-x-2">
                                <button wire:click="likeStory({{ $story['id'] }})" class="text-gray-400 hover:text-red-400 transition-colors transform hover:scale-110">
                                    <i class="far fa-heart"></i>
                                </button>
                                <button wire:click="shareStory({{ $story['id'] }})" class="text-gray-400 hover:text-blue-400 transition-colors transform hover:scale-110">
                                    <i class="fas fa-share"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</div>
