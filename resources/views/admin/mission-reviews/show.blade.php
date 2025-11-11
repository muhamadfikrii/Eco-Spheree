<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Mission Submission Details
            </h2>
            <a href="{{ route('admin.mission-reviews.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-lg">
                ← Back to Reviews
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                <!-- Submission Header -->
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img src="{{ $submission->user->profile_photo_url ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}" alt="User" class="w-16 h-16 rounded-full">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">{{ $submission->user->name }}</h3>
                                <p class="text-gray-600">{{ $submission->user->email }}</p>
                                <div class="flex items-center space-x-2 mt-1">
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">{{ $submission->status }}</span>
                                    <span class="text-sm text-gray-500">Submitted {{ $submission->submitted_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>

                        @if($submission->status === 'pending')
                        <div class="flex space-x-2">
                            <form method="POST" action="{{ route('admin.mission-reviews.approve', $submission) }}" class="inline">
                                @csrf
                                <div class="mb-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Review Notes (Optional)</label>
                                    <textarea name="review_notes" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm" placeholder="Add approval notes..."></textarea>
                                </div>
                                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded-lg">
                                    ✅ Approve Submission
                                </button>
                            </form>

                            <form method="POST" action="{{ route('admin.mission-reviews.reject', $submission) }}" class="inline ml-2">
                                @csrf
                                <div class="mb-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Rejection Reason (Required)</label>
                                    <textarea name="review_notes" rows="2" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm" placeholder="Why are you rejecting this submission?" required></textarea>
                                </div>
                                <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg">
                                    ❌ Reject Submission
                                </button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Mission Details -->
                <div class="p-6 border-b border-gray-200">
                    <h4 class="text-lg font-medium text-gray-900 mb-4">Mission Details</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h5 class="font-medium text-gray-900">{{ $submission->eco_challenge?->title ?? 'Challenge Not Found' }}</h5>
                            <p class="text-sm text-gray-600 mt-1">{{ $submission->eco_challenge?->description ?? 'No description available' }}</p>
                            <div class="mt-3 flex items-center space-x-4">
                                <span class="text-sm text-gray-500">Points Reward:</span>
                                <span class="px-2 py-1 bg-green-100 text-green-800 text-sm rounded">{{ $submission->eco_challenge?->points_reward ?? 0 }} pts</span>
                            </div>
                        </div>

                        <div>
                            <h5 class="font-medium text-gray-900">Submission Description</h5>
                            <p class="text-sm text-gray-600 mt-1">{{ $submission->description }}</p>
                        </div>
                    </div>
                </div>

                <!-- Photo Evidence -->
                @if($submission->photo_path)
                <div class="p-6 border-b border-gray-200">
                    <h4 class="text-lg font-medium text-gray-900 mb-4">Photo Evidence</h4>
                    <div class="flex justify-center">
                        <img src="{{ asset('storage/' . $submission->photo_path) }}" alt="Submission Photo" class="max-w-full h-auto max-h-96 rounded-lg border border-gray-200 shadow-sm">
                    </div>
                    <div class="mt-4 text-center">
                        <a href="{{ asset('storage/' . $submission->photo_path) }}" target="_blank" class="text-blue-600 hover:text-blue-800 text-sm">
                            🔗 View Full Size Image
                        </a>
                    </div>
                </div>
                @endif

                <!-- Review History -->
                @if($submission->status !== 'pending')
                <div class="p-6">
                    <h4 class="text-lg font-medium text-gray-900 mb-4">Review Details</h4>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <div class="flex items-center space-x-2 mb-2">
                            @if($submission->status === 'approved')
                                <span class="text-green-600">✅</span>
                                <span class="font-medium text-green-800">Approved</span>
                            @else
                                <span class="text-red-600">❌</span>
                                <span class="font-medium text-red-800">Rejected</span>
                            @endif
                            <span class="text-sm text-gray-500">on {{ $submission->reviewed_at?->format('M j, Y \a\t g:i A') }}</span>
                        </div>

                        @if($submission->review_notes)
                        <div class="mt-3">
                            <h5 class="font-medium text-gray-900 mb-1">Review Notes:</h5>
                            <p class="text-gray-700 bg-white p-3 rounded border">{{ $submission->review_notes }}</p>
                        </div>
                        @endif

                        @if($submission->status === 'approved')
                        <div class="mt-3 p-3 bg-green-50 border border-green-200 rounded">
                            <div class="flex items-center space-x-2">
                                <span class="text-green-600">🏆</span>
                                <span class="text-green-800 font-medium">{{ $submission->eco_challenge?->points_reward ?? 0 }} points awarded to {{ $submission->user->name }}</span>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
