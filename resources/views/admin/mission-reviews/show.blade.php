<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Mission Submission Details
            </h2>
            <a
                href="{{ route('admin.mission-reviews.index') }}"
                class="rounded-lg bg-gray-500 px-4 py-2 text-white hover:bg-gray-600"
            >
                ← Back to Reviews
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-4xl sm:px-6 lg:px-8">
            @if (session('success'))
                <div
                    class="mb-4 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
                >
                    {{ session('success') }}
                </div>
            @endif

            <div
                class="overflow-hidden border border-gray-200 bg-white shadow-sm sm:rounded-lg"
            >
                
                <div class="border-b border-gray-200 p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <img
                                src="{{ $submission->user->profile_photo ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}"
                                alt="User"
                                class="h-16 w-16 rounded-full"
                            />
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">
                                    {{ $submission->user->name }}
                                </h3>
                                <p class="text-gray-600">{{ $submission->user->email }}</p>
                                <div class="mt-1 flex items-center space-x-2">
                                    <span
                                        class="rounded-full bg-blue-100 px-2 py-1 text-xs text-blue-800"
                                        >{{ $submission->status }}</span
                                    >
                                    <span class="text-sm text-gray-500"
                                        >Submitted {{ $submission->submitted_at->diffForHumans() }}</span
                                    >
                                </div>
                            </div>
                        </div>

                        @if ($submission->status === 'pending')
                            <div class="flex space-x-2">
                                <form
                                    method="POST"
                                    action="{{ route('admin.mission-reviews.approve', $submission) }}"
                                    class="inline"
                                >
                                    @csrf
                                    <div class="mb-2">
                                        <label
                                            class="mb-1 block text-sm font-medium text-gray-700"
                                            >Review Notes (Optional)</label
                                        >
                                        <textarea
                                            name="review_notes"
                                            rows="2"
                                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                                            placeholder="Add approval notes..."
                                        ></textarea>
                                    </div>
                                    <button
                                        type="submit"
                                        class="rounded-lg bg-green-500 px-4 py-2 text-white hover:bg-green-600"
                                    >
                                        ✅ Approve Submission
                                    </button>
                                </form>

                                <form
                                    method="POST"
                                    action="{{ route('admin.mission-reviews.reject', $submission) }}"
                                    class="ml-2 inline"
                                >
                                    @csrf
                                    <div class="mb-2">
                                        <label
                                            class="mb-1 block text-sm font-medium text-gray-700"
                                            >Rejection Reason (Required)</label
                                        >
                                        <textarea
                                            name="review_notes"
                                            rows="2"
                                            class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm"
                                            placeholder="Why are you rejecting this submission?"
                                            required
                                        ></textarea>
                                    </div>
                                    <button
                                        type="submit"
                                        class="rounded-lg bg-red-500 px-4 py-2 text-white hover:bg-red-600"
                                    >
                                        ❌ Reject Submission
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>

                
                <div class="border-b border-gray-200 p-6">
                    <h4 class="mb-4 text-lg font-medium text-gray-900">
                        Mission Details
                    </h4>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <h5 class="font-medium text-gray-900">
                                {{ $submission->eco_challenge?->title ?? 'Challenge Not Found' }}
                            </h5>
                            <p class="mt-1 text-sm text-gray-600">{{ $submission->eco_challenge?->description ?? 'No description available' }}</p>
                            <div class="mt-3 flex items-center space-x-4">
                                <span class="text-sm text-gray-500"
                                    >Points Reward:</span
                                >
                                <span
                                    class="rounded bg-green-100 px-2 py-1 text-sm text-green-800"
                                    >{{ $submission->eco_challenge?->points_reward ?? 0 }} pts</span
                                >
                            </div>
                        </div>

                        <div>
                            <h5 class="font-medium text-gray-900">
                                Submission Description
                            </h5>
                            <p class="mt-1 text-sm text-gray-600">{{ $submission->description }}</p>
                        </div>
                    </div>
                </div>

                
                @if ($submission->photo_path)
                    <div class="border-b border-gray-200 p-6">
                        <h4 class="mb-4 text-lg font-medium text-gray-900">
                            Photo Evidence
                        </h4>
                        <div class="flex justify-center">
                            <img
                                src="{{ asset('storage/' . $submission->photo_path) }}"
                                alt="Submission Photo"
                                class="h-auto max-h-96 max-w-full rounded-lg border border-gray-200 shadow-sm"
                            />
                        </div>
                        <div class="mt-4 text-center">
                            <a
                                href="{{ asset('storage/' . $submission->photo_path) }}"
                                target="_blank"
                                class="text-sm text-blue-600 hover:text-blue-800"
                            >
                                🔗 View Full Size Image
                            </a>
                        </div>
                    </div>
                @endif

                
                @if ($submission->status !== 'pending')
                    <div class="p-6">
                        <h4 class="mb-4 text-lg font-medium text-gray-900">
                            Review Details
                        </h4>
                        <div class="rounded-lg bg-gray-50 p-4">
                            <div class="mb-2 flex items-center space-x-2">
                                @if ($submission->status === 'approved')
                                    <span class="text-green-600">✅</span>
                                    <span class="font-medium text-green-800"
                                        >Approved</span
                                    >
                                @else
                                    <span class="text-red-600">❌</span>
                                    <span class="font-medium text-red-800"
                                        >Rejected</span
                                    >
                                @endif
                                <span class="text-sm text-gray-500"
                                    >on {{ $submission->reviewed_at?->format('M j, Y \a\t g:i A') }}</span
                                >
                            </div>

                            @if ($submission->review_notes)
                                <div class="mt-3">
                                    <h5 class="mb-1 font-medium text-gray-900">
                                        Review Notes:
                                    </h5>
                                    <p class="rounded border bg-white p-3 text-gray-700">{{ $submission->review_notes }}</p>
                                </div>
                            @endif

                            @if ($submission->status === 'approved')
                                <div
                                    class="mt-3 rounded border border-green-200 bg-green-50 p-3"
                                >
                                    <div class="flex items-center space-x-2">
                                        <span class="text-green-600">🏆</span>
                                        <span class="font-medium text-green-800"
                                            >{{ $submission->eco_challenge?->points_reward ?? 0 }} points
                                            awarded to {{ $submission->user->name }}</span
                                        >
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
