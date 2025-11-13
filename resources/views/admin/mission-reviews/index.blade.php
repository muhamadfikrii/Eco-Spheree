<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="font-semibold text-2xl text-white leading-tight">
                        {{ __('Mission Review Dashboard') }}
                    </h2>
                    <p class="text-green-100 mt-2">Manage and review user mission submissions</p>
                </div>
                <div class="mt-4 sm:mt-0">
                    <div class="relative rounded-lg shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" placeholder="Type here to search..." class="block w-full pl-10 pr-4 py-3 border border-green-300 rounded-lg bg-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-sm">
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8" x-data="missionReviewDashboard()">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-20">
            <!-- Success Message -->
            @if (session('success'))
                <div class="mb-6 bg-green-50 border border-green-200 rounded-xl p-4 flex items-center justify-between slide-in" x-init="refreshPage()">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-green-700 font-medium">{{ session('success') }}</span>
                    </div>
                    <button @click="removeSuccessMessage()" class="text-green-700 hover:text-green-800">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif

            <!-- Hero Section -->
            <div class="mb-8 bg-gradient-to-r from-green-600 to-emerald-700 rounded-2xl shadow-xl overflow-hidden">
                <div class="px-6 py-12 sm:px-12 sm:py-16 lg:py-20">
                    <div class="max-w-3xl mx-auto text-center">
                        <div class="flex justify-center mb-6">
                            <div class="bg-white bg-opacity-20 p-4 rounded-full">
                                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                        </div>
                        <h1 class="text-3xl sm:text-4xl font-bold text-white mb-4">Mission Review Center</h1>
                        <p class="text-lg sm:text-xl text-green-100 max-w-2xl mx-auto">
                            Efficiently manage and review user mission submissions. Track pending, approved, and rejected missions all in one place.
                        </p>
                        <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-2xl mx-auto">
                            <div class="bg-white bg-opacity-10 rounded-lg p-4 backdrop-blur-sm">
                                <div class="text-2xl font-bold text-white">{{ $pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total() }}</div>
                                <div class="text-green-100 text-sm">Total Submissions</div>
                            </div>
                            <div class="bg-white bg-opacity-10 rounded-lg p-4 backdrop-blur-sm">
                                <div class="text-2xl font-bold text-white">{{ $pendingSubmissions->total() }}</div>
                                <div class="text-green-100 text-sm">Awaiting Review</div>
                            </div>
                            <div class="bg-white bg-opacity-10 rounded-lg p-4 backdrop-blur-sm">
                                <div class="text-2xl font-bold text-white">{{ $approvedSubmissions->total() }}</div>
                                <div class="text-green-100 text-sm">Approved Today</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats Section -->
            <div class="mb-8">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Overview</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-5 border border-yellow-200">
                            <div class="flex items-center">
                                <div class="p-3 bg-yellow-100 rounded-xl">
                                    <svg class="w-7 h-7 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Pending Reviews</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $pendingSubmissions->total() }}</p>
                                </div>
                            </div>
                            <div class="mt-3 text-sm text-yellow-700">
                                Needs your attention
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-5 border border-green-200">
                            <div class="flex items-center">
                                <div class="p-3 bg-green-100 rounded-xl">
                                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Approved</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $approvedSubmissions->total() }}</p>
                                </div>
                            </div>
                            <div class="mt-3 text-sm text-green-700">
                                Successfully processed
                            </div>
                        </div>

                        <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-5 border border-red-200">
                            <div class="flex items-center">
                                <div class="p-3 bg-red-100 rounded-xl">
                                    <svg class="w-7 h-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-600">Rejected</p>
                                    <p class="text-2xl font-bold text-gray-900">{{ $rejectedSubmissions->total() }}</p>
                                </div>
                            </div>
                            <div class="mt-3 text-sm text-red-700">
                                Require follow-up
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity Timeline Section -->
            <div class="mb-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Recent Activity -->
                <div class="lg:col-span-1 bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">New submission approved</p>
                                <p class="text-xs text-gray-500">2 minutes ago</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">3 submissions pending</p>
                                <p class="text-xs text-gray-500">1 hour ago</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0 w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">System updated</p>
                                <p class="text-xs text-gray-500">Yesterday</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Performance Metrics -->
                <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Review Performance</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 rounded-xl p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-600">Approval Rate</span>
                                <span class="text-lg font-bold text-green-600">
                                    @if($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total() > 0)
                                        {{ round(($approvedSubmissions->total() / ($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total())) * 100) }}%
                                    @else
                                        0%
                                    @endif
                                </span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-600 h-2 rounded-full" 
                                     style="width: {{ $pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total() > 0 ? ($approvedSubmissions->total() / ($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total())) * 100 : 0 }}%">
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-gray-600">Completion Rate</span>
                                <span class="text-lg font-bold text-green-600">
                                    @if($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total() > 0)
                                        {{ round((($approvedSubmissions->total() + $rejectedSubmissions->total()) / ($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total())) * 100) }}%
                                    @else
                                        0%
                                    @endif
                                </span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" 
                                     style="width: {{ $pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total() > 0 ? (($approvedSubmissions->total() + $rejectedSubmissions->total()) / ($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total())) * 100 : 0 }}%">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Main Content Section -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                <!-- Tab Navigation -->
                <div class="border-b border-gray-200">
                    <nav class="flex flex-col sm:flex-row">
                        <button 
                            @click="activeTab = 'pending'"
                            :class="activeTab === 'pending' ? 'border-green-500 text-green-600 bg-green-50' : 'border-transparent text-gray-500 hover:text-gray-700 hover:bg-gray-50'"
                            class="flex-1 py-5 px-6 text-center border-b-2 font-medium text-base flex items-center justify-center transition-all duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Pending Reviews
                            <span class="ml-2 bg-yellow-100 text-yellow-800 text-sm font-semibold px-2.5 py-1 rounded-full">{{ $pendingSubmissions->total() }}</span>
                        </button>
                        <button 
                            @click="activeTab = 'approved'"
                            :class="activeTab === 'approved' ? 'border-green-500 text-green-600 bg-green-50' : 'border-transparent text-gray-500 hover:text-gray-700 hover:bg-gray-50'"
                            class="flex-1 py-5 px-6 text-center border-b-2 font-medium text-base flex items-center justify-center transition-all duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Approved
                            <span class="ml-2 bg-green-100 text-green-800 text-sm font-semibold px-2.5 py-1 rounded-full">{{ $approvedSubmissions->total() }}</span>
                        </button>
                        <button 
                            @click="activeTab = 'rejected'"
                            :class="activeTab === 'rejected' ? 'border-green-500 text-green-600 bg-green-50' : 'border-transparent text-gray-500 hover:text-gray-700 hover:bg-gray-50'"
                            class="flex-1 py-5 px-6 text-center border-b-2 font-medium text-base flex items-center justify-center transition-all duration-200">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Rejected
                            <span class="ml-2 bg-red-100 text-red-800 text-sm font-semibold px-2.5 py-1 rounded-full">{{ $rejectedSubmissions->total() }}</span>
                        </button>
                    </nav>
                </div>

                <!-- Tab Content -->
                <div class="p-6">
                    <!-- Pending Reviews Tab -->
                    <div x-show="activeTab === 'pending'" class="fade-in">
                        <div class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Pending Mission Submissions</h3>
                                <p class="text-gray-600 mt-2">Review and approve or reject user mission submissions</p>
                            </div>

                        </div>

                        @if($pendingSubmissions->count() > 0)
                            <div class="space-y-4">
                                @foreach($pendingSubmissions as $submission)
                                    <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-md transition-all duration-200">
                                        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between">
                                            <div class="flex-1">
                                                <div class="flex items-start space-x-4">
                                                    <img src="{{ $submission->user->profile_photo ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}" alt="User" class="w-12 h-12 rounded-full border border-black flex-shrink-0">
                                                    <div class="flex-1">
                                                        <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between">
                                                            <div>
                                                                <h4 class="text-lg font-semibold text-gray-900">{{ $submission->user->name }}</h4>
                                                                <p class="text-gray-600 mt-1">{{ $submission->ecoChallenge?->title ?? 'Challenge Not Found' }}</p>
                                                            </div>
                                                            <div class="mt-2 sm:mt-0 flex items-center space-x-2">
                                                                <span class="inline-flex items-center px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">
                                                                    {{ $submission->ecoChallenge?->points_reward ?? 0 }} point
                                                                </span>
                                                                <span class="text-sm text-gray-500">
                                                                    {{ $submission->submitted_at->diffForHumans() }}
                                                                </span>
                                                            </div>
                                                        </div>

                                                        @if($submission->photo_path)
                                                            <div class="mt-4">
                                                                <img src="{{ $submission->photo_url }}" alt="Submission Photo" class="w-32 h-32 object-cover rounded-lg border border-gray-200">
                                                            </div>
                                                        @endif

                                                        <p class="mt-4 text-gray-700 leading-relaxed">{{ $submission->description }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 lg:mt-0 lg:ml-6 flex flex-col space-y-3">
                                                <form method="POST" action="{{ route('admin.mission-reviews.approve', $submission) }}" class="inline">
                                                    @csrf
                                                    <button type="submit" class="w-full px-4 py-2.5 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium flex items-center justify-center transition-colors duration-200">
                                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                        Approve
                                                    </button>
                                                </form>
                                                <form method="POST" action="{{ route('admin.mission-reviews.reject', $submission) }}" class="inline">
                                                    @csrf
                                                    <button type="submit" class="w-full px-4 py-2.5 bg-red-600 hover:bg-red-700 text-white rounded-lg font-medium flex items-center justify-center transition-colors duration-200" @click="openRejectModal({{ $submission->id }})">
                                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                        Reject
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-8">
                                {{ $pendingSubmissions->links() }}
                            </div>
                        @else
                            <div class="text-center py-12">
                                <div class="mx-auto w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mb-6">
                                    <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">All Caught Up!</h3>
                                <p class="text-gray-600 max-w-md mx-auto text-lg">No pending submissions to review at the moment.</p>
                            </div>
                        @endif
                    </div>

                    <!-- Approved Tab -->
                    <div x-show="activeTab === 'approved'" class="fade-in">
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-gray-900">Approved Submissions</h3>
                            <p class="text-gray-600 mt-2">Mission submissions that have been approved</p>
                        </div>

                        @if($approvedSubmissions->count() > 0)
                            <div class="space-y-4">
                                @foreach($approvedSubmissions as $submission)
                                    <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-md transition-all duration-200">
                                        <div class="flex items-start space-x-4">
                                            <img src="{{ $submission->user->profile_photo ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}" alt="User" class="w-12 h-12 rounded-full flex-shrink-0">
                                            <div class="flex-1">
                                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between">
                                                    <div>
                                                        <h4 class="text-lg font-semibold text-gray-900">{{ $submission->user->name }}</h4>
                                                        <p class="text-gray-600 mt-1">{{ $submission->ecoChallenge?->title ?? 'Challenge Not Found' }}</p>
                                                    </div>
                                                    <div class="mt-2 sm:mt-0 flex items-center space-x-2">
                                                        <span class="inline-flex items-center px-3 py-1 bg-green-100 text-green-800 text-sm font-medium rounded-full">
                                                            +{{ $submission->ecoCHallenge?->points_reward ?? 0 }} pts
                                                        </span>
                                                    </div>
                                                </div>
                                                
                                                <p class="mt-4 text-gray-700 leading-relaxed">{{ $submission->description }}</p>
                                                
                                                <div class="mt-4 flex items-center text-green-600">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <span class="text-sm font-medium">Approved {{ $submission->reviewed_at?->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-8">
                                {{ $approvedSubmissions->links() }}
                            </div>
                        @else
                            <div class="text-center py-12">
                                <div class="mx-auto w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">No Approved Submissions</h3>
                                <p class="text-gray-600 max-w-md mx-auto text-lg">Approved submissions will appear here.</p>
                            </div>
                        @endif
                    </div>

                    <!-- Rejected Tab -->
                    <div x-show="activeTab === 'rejected'" class="fade-in">
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-gray-900">Rejected Submissions</h3>
                            <p class="text-gray-600 mt-2">Mission submissions that have been rejected</p>
                        </div>

                        @if($rejectedSubmissions->count() > 0)
                            <div class="space-y-4">
                                @foreach($rejectedSubmissions as $submission)
                                    <div class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-md transition-all duration-200">
                                        <div class="flex items-start space-x-4">
                                            <img src="{{ $submission->user->profile_photo_url ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}" alt="User" class="w-12 h-12 rounded-full flex-shrink-0">
                                            <div class="flex-1">
                                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between">
                                                    <div>
                                                        <h4 class="text-lg font-semibold text-gray-900">{{ $submission->user->name }}</h4>
                                                        <p class="text-gray-600 mt-1">{{ $submission->eco_challenge?->title ?? 'Challenge Not Found' }}</p>
                                                    </div>
                                                    <div class="mt-2 sm:mt-0">
                                                        <span class="inline-flex items-center px-3 py-1 bg-red-100 text-red-800 text-sm font-medium rounded-full">
                                                            Rejected
                                                        </span>
                                                    </div>
                                                </div>
                                                
                                                <p class="mt-4 text-gray-700 leading-relaxed">{{ $submission->description }}</p>
                                                
                                                @if($submission->review_notes)
                                                    <div class="mt-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                                                        <div class="font-semibold text-red-800 mb-1">Rejection Reason:</div>
                                                        <p class="text-red-700">{{ $submission->review_notes }}</p>
                                                    </div>
                                                @endif
                                                
                                                <div class="mt-4 flex items-center text-red-600">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <span class="text-sm font-medium">Rejected {{ $submission->reviewed_at?->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-8">
                                {{ $rejectedSubmissions->links() }}
                            </div>
                        @else
                            <div class="text-center py-12">
                                <div class="mx-auto w-20 h-20 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">No Rejected Submissions</h3>
                                <p class="text-gray-600 max-w-md mx-auto text-lg">Rejected submissions will appear here.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reject Modal -->
    <div x-show="rejectModalOpen" x-cloak class="fixed inset-0 z-50 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div x-show="rejectModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="rejectModalOpen = false"></div>

            <!-- Modal panel -->
            <div x-show="rejectModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-white rounded-xl px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Reject Mission Submission</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500 mb-4">Please provide a reason for rejecting this submission. This feedback will be shared with the user.</p>
                            <form id="rejectForm" method="POST" action="" class="space-y-4">
                                @csrf
                                <div>
                                    <label for="rejectReason" class="block text-sm font-medium text-gray-700 mb-1">Rejection Reason</label>
                                    <textarea
                                        id="rejectReason"
                                        name="review_notes"
                                        rows="4"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent"
                                        placeholder="Please explain why this submission is being rejected..."
                                        required
                                        x-model="rejectionReason"></textarea>
                                </div>
                                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                    <button type="button" @click="submitRejection()" class="w-full inline-flex justify-center rounded-lg border border-transparent shadow-sm px-4 py-2.5 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                        Reject Submission
                                    </button>
                                    <button type="button" @click="rejectModalOpen = false" class="mt-3 w-full inline-flex justify-center rounded-lg border border-gray-300 shadow-sm px-4 py-2.5 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:mt-0 sm:w-auto sm:text-sm">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <style>
        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .slide-in {
            animation: slideIn 0.3s ease-out;
        }
        @keyframes slideIn {
            from { transform: translateY(-10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        [x-cloak] { display: none !important; }
    </style>

    <script>
        function missionReviewDashboard() {
            return {
                activeTab: 'pending',
                rejectModalOpen: false,
                currentSubmissionId: null,
                rejectionReason: '',

                init() {
                    // Set initial active tab based on URL hash or default to 'pending'
                    const hash = window.location.hash.substring(1);
                    if (hash && ['pending', 'approved', 'rejected'].includes(hash)) {
                        this.activeTab = hash;
                    }
                },

                openRejectModal(submissionId) {
                    this.currentSubmissionId = submissionId;
                    this.rejectModalOpen = true;
                    this.rejectionReason = '';
                },

                submitRejection() {
                    // Set the form action dynamically
                    const form = document.getElementById('rejectForm');
                    form.action = '/admin/mission-reviews/' + this.currentSubmissionId + '/reject';
                    // Submit the form
                    form.submit();
                },

                refreshPage() {
                    // Refresh the page after successful action
                    setTimeout(() => {
                        window.location.reload();
                    }, 100);
                },

                removeSuccessMessage() {
                    // This would remove the success message from the DOM
                    const successMessage = document.querySelector('.bg-green-50');
                    if (successMessage) {
                        successMessage.remove();
                    }
                }
            }
        }
    </script>
</x-app-layout>