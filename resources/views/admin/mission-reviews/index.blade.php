<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <div
                class="flex flex-col sm:flex-row sm:items-center sm:justify-between"
            >
                <div>
                    <h2 class="text-2xl font-semibold leading-tight text-white">
                        {{ __('Mission Review Dashboard') }}
                    </h2>
                    <p class="mt-2 text-green-100">Manage and review user mission submissions</p>
                </div>
                <div class="mt-4 sm:mt-0">
                    <div class="relative rounded-lg shadow-sm">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                        >
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input
                            type="text"
                            placeholder="Type here to search..."
                            class="block w-full rounded-lg border border-green-300 bg-white py-3 pl-10 pr-4 text-sm placeholder-gray-500 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500"
                        />
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8" x-data="missionReviewDashboard()">
        <div class="mx-auto mt-20 max-w-7xl px-4 sm:px-6 lg:px-8">
            
            @if (session('success'))
                <div
                    class="slide-in mb-6 flex items-center justify-between rounded-xl border border-green-200 bg-green-50 p-4"
                    x-init="refreshPage()"
                >
                    <div class="flex items-center">
                        <svg class="mr-2 h-5 w-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span
                            class="font-medium text-green-700"
                            >{{ session('success') }}</span
                        >
                    </div>
                    <button
                        @click="removeSuccessMessage()"
                        class="text-green-700 hover:text-green-800"
                    >
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            @endif

            
            <div
                class="mb-8 overflow-hidden rounded-2xl bg-gradient-to-r from-green-600 to-emerald-700 shadow-xl"
            >
                <div class="px-6 py-12 sm:px-12 sm:py-16 lg:py-20">
                    <div class="mx-auto max-w-3xl text-center">
                        <div class="mb-6 flex justify-center">
                            <div
                                class="rounded-full bg-white bg-opacity-20 p-4"
                            >
                                <svg class="h-12 w-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                        </div>
                        <h1
                            class="mb-4 text-3xl font-bold text-white sm:text-4xl"
                        >
                            Mission Review Center
                        </h1>
                        <p class="mx-auto max-w-2xl text-lg text-green-100 sm:text-xl">Efficiently manage and review user mission submissions. Track pending, approved, and rejected missions all in one place.</p>
                        <div
                            class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-4 sm:grid-cols-3"
                        >
                            <div
                                class="rounded-lg bg-white bg-opacity-10 p-4 backdrop-blur-sm"
                            >
                                <div class="text-2xl font-bold text-white">
                                    {{ $pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total() }}
                                </div>
                                <div class="text-sm text-green-100">
                                    Total Submissions
                                </div>
                            </div>
                            <div
                                class="rounded-lg bg-white bg-opacity-10 p-4 backdrop-blur-sm"
                            >
                                <div class="text-2xl font-bold text-white">
                                    {{ $pendingSubmissions->total() }}
                                </div>
                                <div class="text-sm text-green-100">
                                    Awaiting Review
                                </div>
                            </div>
                            <div
                                class="rounded-lg bg-white bg-opacity-10 p-4 backdrop-blur-sm"
                            >
                                <div class="text-2xl font-bold text-white">
                                    {{ $approvedSubmissions->total() }}
                                </div>
                                <div class="text-sm text-green-100">
                                    Approved Today
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="mb-8">
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm"
                >
                    <h3 class="mb-4 text-lg font-semibold text-gray-800">
                        Quick Overview
                    </h3>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                        <div
                            class="rounded-xl border border-yellow-200 bg-gradient-to-br from-yellow-50 to-yellow-100 p-5"
                        >
                            <div class="flex items-center">
                                <div class="rounded-xl bg-yellow-100 p-3">
                                    <svg class="h-7 w-7 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                        <div
                            class="rounded-xl border border-green-200 bg-gradient-to-br from-green-50 to-green-100 p-5"
                        >
                            <div class="flex items-center">
                                <div class="rounded-xl bg-green-100 p-3">
                                    <svg class="h-7 w-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                        <div
                            class="rounded-xl border border-red-200 bg-gradient-to-br from-red-50 to-red-100 p-5"
                        >
                            <div class="flex items-center">
                                <div class="rounded-xl bg-red-100 p-3">
                                    <svg class="h-7 w-7 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

            
            <div class="mb-8 grid grid-cols-1 gap-8 lg:grid-cols-3">
                
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm lg:col-span-1"
                >
                    <h3 class="mb-4 text-lg font-semibold text-gray-800">
                        Recent Activity
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div
                                class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-green-100"
                            >
                                <svg class="h-4 w-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">New submission approved</p>
                                <p class="text-xs text-gray-500">2 minutes ago</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div
                                class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-yellow-100"
                            >
                                <svg class="h-4 w-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">3 submissions pending</p>
                                <p class="text-xs text-gray-500">1 hour ago</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div
                                class="flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-green-100"
                            >
                                <svg class="h-4 w-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                
                <div
                    class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm lg:col-span-2"
                >
                    <h3 class="mb-4 text-lg font-semibold text-gray-800">
                        Review Performance
                    </h3>
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div class="rounded-xl bg-gray-50 p-4">
                            <div class="mb-2 flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-600"
                                    >Approval Rate</span
                                >
                                <span class="text-lg font-bold text-green-600">
                                    @if ($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total() > 0)
                                        {{ round(($approvedSubmissions->total() / ($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total())) * 100) }}%
                                    @else
                                        0%
                                    @endif
                                </span>
                            </div>
                            <div class="h-2 w-full rounded-full bg-gray-200">
                                <div
                                    class="h-2 rounded-full bg-green-600"
                                    style="width: {{ $pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total() > 0 ? ($approvedSubmissions->total() / ($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total())) * 100 : 0 }}%"
                                ></div>
                            </div>
                        </div>

                        <div class="rounded-xl bg-gray-50 p-4">
                            <div class="mb-2 flex items-center justify-between">
                                <span class="text-sm font-medium text-gray-600"
                                    >Completion Rate</span
                                >
                                <span class="text-lg font-bold text-green-600">
                                    @if ($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total() > 0)
                                        {{ round((($approvedSubmissions->total() + $rejectedSubmissions->total()) / ($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total())) * 100) }}%
                                    @else
                                        0%
                                    @endif
                                </span>
                            </div>
                            <div class="h-2 w-full rounded-full bg-gray-200">
                                <div
                                    class="h-2 rounded-full bg-green-500"
                                    style="width: {{ $pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total() > 0 ? (($approvedSubmissions->total() + $rejectedSubmissions->total()) / ($pendingSubmissions->total() + $approvedSubmissions->total() + $rejectedSubmissions->total())) * 100 : 0 }}%"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div
                class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm"
            >
                
                <div class="border-b border-gray-200">
                    <nav class="flex flex-col sm:flex-row">
                        <button
                            @click="activeTab = 'pending'"
                            :class="activeTab === 'pending'
                                ? 'border-green-500 text-green-600 bg-green-50'
                                : 'border-transparent text-gray-500 hover:text-gray-700 hover:bg-gray-50'"
                            class="flex flex-1 items-center justify-center border-b-2 px-6 py-5 text-center text-base font-medium transition-all duration-200"
                        >
                            <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Pending Reviews
                            <span
                                class="ml-2 rounded-full bg-yellow-100 px-2.5 py-1 text-sm font-semibold text-yellow-800"
                                >{{ $pendingSubmissions->total() }}</span
                            >
                        </button>
                        <button
                            @click="activeTab = 'approved'"
                            :class="activeTab === 'approved'
                                ? 'border-green-500 text-green-600 bg-green-50'
                                : 'border-transparent text-gray-500 hover:text-gray-700 hover:bg-gray-50'"
                            class="flex flex-1 items-center justify-center border-b-2 px-6 py-5 text-center text-base font-medium transition-all duration-200"
                        >
                            <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Approved
                            <span
                                class="ml-2 rounded-full bg-green-100 px-2.5 py-1 text-sm font-semibold text-green-800"
                                >{{ $approvedSubmissions->total() }}</span
                            >
                        </button>
                        <button
                            @click="activeTab = 'rejected'"
                            :class="activeTab === 'rejected'
                                ? 'border-green-500 text-green-600 bg-green-50'
                                : 'border-transparent text-gray-500 hover:text-gray-700 hover:bg-gray-50'"
                            class="flex flex-1 items-center justify-center border-b-2 px-6 py-5 text-center text-base font-medium transition-all duration-200"
                        >
                            <svg class="mr-3 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Rejected
                            <span
                                class="ml-2 rounded-full bg-red-100 px-2.5 py-1 text-sm font-semibold text-red-800"
                                >{{ $rejectedSubmissions->total() }}</span
                            >
                        </button>
                    </nav>
                </div>

                
                <div class="p-6">
                    
                    <div x-show="activeTab === 'pending'" class="fade-in">
                        <div
                            class="mb-6 flex flex-col sm:flex-row sm:items-center sm:justify-between"
                        >
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">
                                    Pending Mission Submissions
                                </h3>
                                <p class="mt-2 text-gray-600">Review and approve or reject user mission submissions</p>
                            </div>
                        </div>

                        @if ($pendingSubmissions->count() > 0)
                            <div class="space-y-4">
                                @foreach ($pendingSubmissions as $submission)
                                    <div
                                        class="rounded-xl border border-gray-200 bg-white p-6 transition-all duration-200 hover:shadow-md"
                                    >
                                        <div
                                            class="flex flex-col lg:flex-row lg:items-start lg:justify-between"
                                        >
                                            <div class="flex-1">
                                                <div
                                                    class="flex items-start space-x-4"
                                                >
                                                    <img
                                                        src="{{ $submission->user->profile_photo ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}"
                                                        alt="User"
                                                        class="h-12 w-12 flex-shrink-0 rounded-full border border-black"
                                                    />
                                                    <div class="flex-1">
                                                        <div
                                                            class="flex flex-col sm:flex-row sm:items-start sm:justify-between"
                                                        >
                                                            <div>
                                                                <h4
                                                                    class="text-lg font-semibold text-gray-900"
                                                                >
                                                                    {{ $submission->user->name }}
                                                                </h4>
                                                                <p class="mt-1 text-gray-600">{{ $submission->ecoChallenge?->title ?? 'Challenge Not Found' }}</p>
                                                            </div>
                                                            <div
                                                                class="mt-2 flex items-center space-x-2 sm:mt-0"
                                                            >
                                                                <span
                                                                    class="inline-flex items-center rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-800"
                                                                >
                                                                    {{ $submission->ecoChallenge?->points_reward ?? 0 }} point
                                                                </span>
                                                                <span
                                                                    class="text-sm text-gray-500"
                                                                >
                                                                    {{ $submission->submitted_at->diffForHumans() }}
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="mt-4">
                                                            @if ($submission->photo_path)
                                                                <img
                                                                    src="{{ asset('storage/' . $submission->photo_path) }}"
                                                                    alt="Submission Photo"
                                                                    class="h-32 w-32 rounded-lg border border-gray-200 object-cover"
                                                                />
                                                            @else
                                                                <img
                                                                    src="{{ $submission->ecoChallenge->image_url ?? 'https://via.placeholder.com/128x128?text=No+Photo' }}"
                                                                    alt="Challenge Image"
                                                                    class="h-32 w-32 rounded-lg border border-gray-200 object-cover"
                                                                />
                                                            @endif
                                                        </div>

                                                        <p class="mt-4 leading-relaxed text-gray-700">{{ $submission->description }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="mt-4 flex flex-col space-y-3 lg:ml-6 lg:mt-0"
                                            >
                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.mission-reviews.approve', $submission) }}"
                                                    class="inline"
                                                >
                                                    @csrf
                                                    <button
                                                        type="submit"
                                                        class="flex w-full items-center justify-center rounded-lg bg-green-600 px-4 py-2.5 font-medium text-white transition-colors duration-200 hover:bg-green-700"
                                                    >
                                                        <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                        </svg>
                                                        Approve
                                                    </button>
                                                </form>
                                                
                                                <button
                                                    type="button"
                                                    class="flex w-full items-center justify-center rounded-lg bg-red-600 px-4 py-2.5 font-medium text-white transition-colors duration-200 hover:bg-red-700"
                                                    @click="openRejectModal({{ $submission->id }})"
                                                >
                                                    <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                    Reject
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-8">
                                {{ $pendingSubmissions->links() }}
                            </div>
                        @else
                            <div class="py-12 text-center">
                                <div
                                    class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-green-100"
                                >
                                    <svg class="h-10 w-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3
                                    class="mb-3 text-2xl font-bold text-gray-900"
                                >
                                    All Caught Up!
                                </h3>
                                <p class="mx-auto max-w-md text-lg text-gray-600">No pending submissions to review at the moment.</p>
                            </div>
                        @endif
                    </div>

                    
                    <div x-show="activeTab === 'approved'" class="fade-in">
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-gray-900">
                                Approved Submissions
                            </h3>
                            <p class="mt-2 text-gray-600">Mission submissions that have been approved</p>
                        </div>

                        @if ($approvedSubmissions->count() > 0)
                            <div class="space-y-4">
                                @foreach ($approvedSubmissions as $submission)
                                    <div
                                        class="rounded-xl border border-gray-200 bg-white p-6 transition-all duration-200 hover:shadow-md"
                                    >
                                        <div class="flex items-start space-x-4">
                                            <img
                                                src="{{ $submission->user->profile_photo ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}"
                                                alt="User"
                                                class="h-12 w-12 flex-shrink-0 rounded-full"
                                            />
                                            <div class="flex-1">
                                                <div
                                                    class="flex flex-col sm:flex-row sm:items-start sm:justify-between"
                                                >
                                                    <div>
                                                        <h4
                                                            class="text-lg font-semibold text-gray-900"
                                                        >
                                                            {{ $submission->user->name }}
                                                        </h4>
                                                        <p class="mt-1 text-gray-600">{{ $submission->ecoChallenge?->title ?? 'Challenge Not Found' }}</p>
                                                    </div>
                                                    <div
                                                        class="mt-2 flex items-center space-x-2 sm:mt-0"
                                                    >
                                                        <span
                                                            class="inline-flex items-center rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-800"
                                                        >
                                                            +{{ $submission->ecoChallenge?->points_reward ?? 0 }} pts
                                                        </span>
                                                    </div>
                                                </div>

                                                <p class="mt-4 leading-relaxed text-gray-700">{{ $submission->description }}</p>

                                                <div
                                                    class="mt-4 flex items-center text-green-600"
                                                >
                                                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <span
                                                        class="text-sm font-medium"
                                                        >Approved {{ $submission->reviewed_at?->diffForHumans() }}</span
                                                    >
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
                            <div class="py-12 text-center">
                                <div
                                    class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-gray-100"
                                >
                                    <svg class="h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <h3
                                    class="mb-3 text-2xl font-bold text-gray-900"
                                >
                                    No Approved Submissions
                                </h3>
                                <p class="mx-auto max-w-md text-lg text-gray-600">Approved submissions will appear here.</p>
                            </div>
                        @endif
                    </div>

                    
                    <div x-show="activeTab === 'rejected'" class="fade-in">
                        <div class="mb-6">
                            <h3 class="text-xl font-bold text-gray-900">
                                Rejected Submissions
                            </h3>
                            <p class="mt-2 text-gray-600">Mission submissions that have been rejected</p>
                        </div>

                        @if ($rejectedSubmissions->count() > 0)
                            <div class="space-y-4">
                                @foreach ($rejectedSubmissions as $submission)
                                    <div
                                        class="rounded-xl border border-gray-200 bg-white p-6 transition-all duration-200 hover:shadow-md"
                                    >
                                        <div class="flex items-start space-x-4">
                                            <img
                                                src="{{ $submission->user->profile_photo ?? 'https://cdn-icons-png.flaticon.com/512/219/219983.png' }}"
                                                alt="User"
                                                class="h-12 w-12 flex-shrink-0 rounded-full"
                                            />
                                            <div class="flex-1">
                                                <div
                                                    class="flex flex-col sm:flex-row sm:items-start sm:justify-between"
                                                >
                                                    <div>
                                                        <h4
                                                            class="text-lg font-semibold text-gray-900"
                                                        >
                                                            {{ $submission->user->name }}
                                                        </h4>
                                                        <p class="mt-1 text-gray-600">{{ $submission->eco_challenge?->title ?? 'Challenge Not Found' }}</p>
                                                    </div>
                                                    <div class="mt-2 sm:mt-0">
                                                        <span
                                                            class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-800"
                                                        >
                                                            Rejected
                                                        </span>
                                                    </div>
                                                </div>

                                                <p class="mt-4 leading-relaxed text-gray-700">{{ $submission->description }}</p>

                                                @if ($submission->review_notes)
                                                    <div
                                                        class="mt-4 rounded-lg border border-red-200 bg-red-50 p-4"
                                                    >
                                                        <div
                                                            class="mb-1 font-semibold text-red-800"
                                                        >
                                                            Rejection Reason:
                                                        </div>
                                                        <p class="text-red-700">{{ $submission->review_notes }}</p>
                                                    </div>
                                                @endif

                                                <div
                                                    class="mt-4 flex items-center text-red-600"
                                                >
                                                    <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                    <span
                                                        class="text-sm font-medium"
                                                        >Rejected {{ $submission->reviewed_at?->diffForHumans() }}</span
                                                    >
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
                            <div class="py-12 text-center">
                                <div
                                    class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-gray-100"
                                >
                                    <svg class="h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <h3
                                    class="mb-3 text-2xl font-bold text-gray-900"
                                >
                                    No Rejected Submissions
                                </h3>
                                <p class="mx-auto max-w-md text-lg text-gray-600">Rejected submissions will appear here.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        
        <div
            x-show="rejectModalOpen"
            x-cloak
            class="fixed inset-0 z-50 overflow-y-auto"
        >
            <div
                class="flex min-h-screen items-center justify-center px-4 pb-20 pt-4 text-center sm:block sm:p-0"
            >
                
                <div
                    x-show="rejectModalOpen"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                    @click="rejectModalOpen = false"
                ></div>

                
                <div
                    x-show="rejectModalOpen"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="inline-block transform overflow-hidden rounded-xl bg-white px-4 pb-4 pt-5 text-left align-bottom shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6 sm:align-middle"
                    style="margin-top: 120px"
                >
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"
                        >
                            <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                        </div>
                        <div
                            class="mt-3 w-full text-center sm:ml-4 sm:mt-0 sm:text-left"
                        >
                            <h3
                                class="text-lg font-medium leading-6 text-gray-900"
                            >
                                Reject Mission Submission
                            </h3>
                            <div class="mt-2">
                                <p class="mb-4 text-sm text-gray-500">Please provide a reason for rejecting this submission. This feedback will be shared with the user.</p>
                                
                                <form
                                    method="POST"
                                    :action="rejectUrl"
                                    class="space-y-4"
                                >
                                    @csrf
                                    <div>
                                        <label
                                            for="rejectReason"
                                            class="mb-1 block text-sm font-medium text-gray-700"
                                            >Rejection Reason</label
                                        >
                                        <textarea
                                            id="rejectReason"
                                            name="review_notes"
                                            rows="4"
                                            class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:border-transparent focus:outline-none focus:ring-2 focus:ring-red-500"
                                            placeholder="Please explain why this submission is being rejected..."
                                            required
                                            x-model="rejectionReason"
                                            style="color: black"
                                        ></textarea>
                                    </div>
                                    <div
                                        class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse"
                                    >
                                        <button
                                            type="submit"
                                            class="inline-flex w-full justify-center rounded-lg border border-transparent bg-red-600 px-4 py-2.5 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm"
                                        >
                                            Reject Submission
                                        </button>
                                        <button
                                            type="button"
                                            @click="rejectModalOpen = false"
                                            class="mt-3 inline-flex w-full justify-center rounded-lg border border-gray-300 bg-white px-4 py-2.5 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm"
                                        >
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
    </div>

    <style>
        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .slide-in {
            animation: slideIn 0.3s ease-out;
        }
        @keyframes slideIn {
            from {
                transform: translateY(-10px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        [x-cloak] {
            display: none !important;
        }
    </style>

    <script>
        function missionReviewDashboard() {
            return {
                activeTab: 'pending',
                rejectModalOpen: false,
                currentSubmissionId: null,
                rejectionReason: '',
                rejectUrl: '',

                init() {
                    // Set initial active tab based on URL hash or default to 'pending'
                    const hash = window.location.hash.substring(1);
                    if (
                        hash &&
                        ['pending', 'approved', 'rejected'].includes(hash)
                    ) {
                        this.activeTab = hash;
                    }
                },

                openRejectModal(submissionId) {
                    this.currentSubmissionId = submissionId;
                    // PERBAIKAN: Set URL reject yang benar
                    this.rejectUrl = `/admin/mission-reviews/${submissionId}/reject`;
                    this.rejectModalOpen = true;
                    this.rejectionReason = '';
                },

                refreshPage() {
                    // Refresh the page after successful action
                    setTimeout(() => {
                        window.location.reload();
                    }, 100);
                },

                removeSuccessMessage() {
                    // This would remove the success message from the DOM
                    const successMessage =
                        document.querySelector('.bg-green-50');
                    if (successMessage) {
                        successMessage.remove();
                    }
                },
            };
        }
    </script>
</x-app-layout>
