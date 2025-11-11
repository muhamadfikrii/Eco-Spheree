<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mission Review Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-2 bg-yellow-100 rounded-lg">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Pending Reviews</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $pendingSubmissions->total() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-2 bg-green-100 rounded-lg">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Approved</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $approvedSubmissions->total() }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-2 bg-red-100 rounded-lg">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Rejected</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $rejectedSubmissions->total() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Tabs -->
            <div class="mb-6">
                <nav class="flex space-x-1 bg-gray-100 p-1 rounded-lg">
                    <button onclick="showTab('pending')" class="tab-link active flex-1 text-center py-2 px-4 rounded-md text-sm font-medium transition-colors" data-tab="pending">
                        Pending Reviews
                    </button>
                    <button onclick="showTab('approved')" class="tab-link flex-1 text-center py-2 px-4 rounded-md text-sm font-medium transition-colors" data-tab="approved">
                        Approved
                    </button>
                    <button onclick="showTab('rejected')" class="tab-link flex-1 text-center py-2 px-4 rounded-md text-sm font-medium transition-colors" data-tab="rejected">
                        Rejected
                    </button>
                </nav>
            </div>

            <!-- Pending Reviews Tab -->
            <div id="pending-tab" class="tab-content">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Pending Mission Submissions</h3>
                        <p class="mt-1 text-sm text-gray-600">Review and approve or reject user mission submissions</p>
                    </div>

                    @if($pendingSubmissions->count() > 0)
                        <div class="divide-y divide-gray-200">
                            @foreach($pendingSubmissions as $submission)
                                <div class="p-6 hover:bg-gray-50">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <div class="flex items-center space-x-3">
                                                <img src="{{ $submission->user->profile_photo_url ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}" alt="User" class="w-10 h-10 rounded-full">
                                                <div>
                                                    <h4 class="text-sm font-medium text-gray-900">{{ $submission->user->name }}</h4>
                                                    <p class="text-sm text-gray-500">{{ $submission->eco_challenge?->title ?? 'Challenge Not Found' }}</p>
                                                </div>
                                            </div>

                                            @if($submission->photo_path)
                                            <div class="mt-3">
                                                <img src="{{ asset('storage/' . $submission->photo_path) }}" alt="Submission Photo" class="w-24 h-24 object-cover rounded-lg border border-gray-200">
                                            </div>
                                            @endif

                                            <p class="mt-2 text-sm text-gray-700">{{ Str::limit($submission->description, 100) }}</p>

                                            <div class="mt-2 flex items-center space-x-4 text-xs text-gray-500">
                                                <span>📅 Submitted {{ $submission->submitted_at->diffForHumans() }}</span>
                                            </div>
                                        </div>

                                        <div class="flex space-x-2 ml-4">
                                            <form method="POST" action="{{ route('admin.mission-reviews.approve', $submission) }}" class="inline">
                                                @csrf
                                                <button type="submit" class="px-3 py-1 bg-green-500 hover:bg-green-600 text-white text-sm rounded">
                                                    ✅ Approve
                                                </button>
                                            </form>
                                            <button onclick="openRejectModal({{ $submission->id }})" class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white text-sm rounded">
                                                ❌ Reject
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="px-6 py-4 border-t border-gray-200">
                            {{ $pendingSubmissions->links() }}
                        </div>
                    @else
                        <div class="p-12 text-center">
                            <div class="text-6xl mb-4">✅</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">All Caught Up!</h3>
                            <p class="text-gray-600">No pending submissions to review at the moment.</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Approved Tab -->
            <div id="approved-tab" class="tab-content hidden">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Approved Submissions</h3>
                    </div>

                    @if($approvedSubmissions->count() > 0)
                        <div class="divide-y divide-gray-200">
                            @foreach($approvedSubmissions as $submission)
                                <div class="p-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <div class="flex items-center space-x-3">
                                                <img src="{{ $submission->user->profile_photo_url ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}" alt="User" class="w-10 h-10 rounded-full">
                                                <div>
                                                    <h4 class="text-sm font-medium text-gray-900">{{ $submission->user->name }}</h4>
                                                    <p class="text-sm text-gray-500">{{ $submission->eco_challenge?->title ?? 'Challenge Not Found' }}</p>
                                                </div>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-700">{{ Str::limit($submission->description, 100) }}</p>
                                            <div class="mt-2 text-xs text-green-600">✅ Approved {{ $submission->reviewed_at?->diffForHumans() }}</div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-sm font-medium text-green-600">+{{ $submission->eco_challenge?->points_reward ?? 0 }} points</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="px-6 py-4 border-t border-gray-200">
                            {{ $approvedSubmissions->links() }}
                        </div>
                    @else
                        <div class="p-12 text-center">
                            <div class="text-4xl mb-4">📋</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">No Approved Submissions</h3>
                            <p class="text-gray-600">Approved submissions will appear here.</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Rejected Tab -->
            <div id="rejected-tab" class="tab-content hidden">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Rejected Submissions</h3>
                    </div>

                    @if($rejectedSubmissions->count() > 0)
                        <div class="divide-y divide-gray-200">
                            @foreach($rejectedSubmissions as $submission)
                                <div class="p-6">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <div class="flex items-center space-x-3">
                                                <img src="{{ $submission->user->profile_photo_url ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}" alt="User" class="w-10 h-10 rounded-full">
                                                <div>
                                                    <h4 class="text-sm font-medium text-gray-900">{{ $submission->user->name }}</h4>
                                                    <p class="text-sm text-gray-500">{{ $submission->eco_challenge?->title ?? 'Challenge Not Found' }}</p>
                                                </div>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-700">{{ Str::limit($submission->description, 100) }}</p>
                                            @if($submission->review_notes)
                                                <div class="mt-2 p-2 bg-red-50 border border-red-200 rounded text-sm text-red-800">
                                                    <strong>Rejection Reason:</strong> {{ $submission->review_notes }}
                                                </div>
                                            @endif
                                            <div class="mt-2 text-xs text-red-600">❌ Rejected {{ $submission->reviewed_at?->diffForHumans() }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="px-6 py-4 border-t border-gray-200">
                            {{ $rejectedSubmissions->links() }}
                        </div>
                    @else
                        <div class="p-12 text-center">
                            <div class="text-4xl mb-4">📋</div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">No Rejected Submissions</h3>
                            <p class="text-gray-600">Rejected submissions will appear here.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal -->
    <div id="rejectModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Reject Mission Submission</h3>
                <form id="rejectForm" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Rejection Reason (Required)</label>
                        <textarea name="review_notes" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Please provide a reason for rejection..." required></textarea>
                    </div>
                    <div class="flex space-x-3">
                        <button type="button" onclick="closeRejectModal()" class="flex-1 px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-md">
                            Cancel
                        </button>
                        <button type="submit" class="flex-1 px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-md">
                            Reject Submission
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let currentSubmissionId = null;

        function showTab(tabName) {
            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('hidden');
            });

            // Remove active class from all links
            document.querySelectorAll('.tab-link').forEach(link => {
                link.classList.remove('active', 'bg-white', 'text-gray-900');
                link.classList.add('text-gray-600');
            });

            // Show selected tab
            document.getElementById(tabName + '-tab').classList.remove('hidden');

            // Add active class to selected link
            document.querySelector(`[data-tab="${tabName}"]`).classList.add('active', 'bg-white', 'text-gray-900');
            document.querySelector(`[data-tab="${tabName}"]`).classList.remove('text-gray-600');
        }

        function openRejectModal(submissionId) {
            currentSubmissionId = submissionId;
            document.getElementById('rejectModal').classList.remove('hidden');
            document.getElementById('rejectForm').action = `/admin/mission-reviews/${submissionId}/reject`;
        }

        function closeRejectModal() {
            document.getElementById('rejectModal').classList.add('hidden');
            currentSubmissionId = null;
            document.getElementById('rejectForm').querySelector('textarea').value = '';
        }

        // Initialize first tab as active
        document.addEventListener('DOMContentLoaded', function() {
            showTab('pending');
        });
    </script>
</x-app-layout>
