<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    @if (session('message'))        
        <div 
            class="fixed top-6 mt-2 right-10 origin-right z-50 bg-emerald-500 text-white px-6 py-3 rounded-xl shadow-lg animate-fade-in"
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 3000)"
        >
            {{ session('message') }}
        </div>
    @endif
    <div class="py-8 px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto relative mt-20">
        <!-- User Profile Card dengan Animasi -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden mb-8 relative">
            <!-- Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-green-400/10 to-emerald-600/10"></div>
            
            <!-- Header dengan Gradien -->
            <div class="relative bg-gradient-to-r from-green-500 to-emerald-600 h-32">
                <div class="absolute inset-0 bg-black/5"></div>
                <!-- Animated Background Elements -->
                <div class="absolute top-4 right-4 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
                <div class="absolute bottom-4 left-8 w-16 h-16 bg-white/5 rounded-full blur-lg"></div>
            </div>
            
            <div class="px-6 pb-6 relative">
                <!-- Profile Picture dengan Hover Effect -->
                <div class="absolute -top-16 left-6 group">
                    <div class="relative">
                        @if (Auth::user()->profile_photo)
                            <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" 
                                 alt="Profile Photo" 
                                 class="w-32 h-32 rounded-full border-4 border-white dark:border-gray-800 object-cover transition-all duration-300 group-hover:scale-105 shadow-xl">
                        @else
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random" 
                                 alt="Default Avatar"
                                 class="w-32 h-32 rounded-full border-4 border-white dark:border-gray-800 object-cover transition-all duration-300 group-hover:scale-105 shadow-xl">
                        @endif
                        
                        <!-- Edit Button Overlay -->
                        <label for="profile_photo" class="absolute inset-0 flex items-center justify-center bg-black/50 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer">
                            <div class="bg-white/90 rounded-full p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                        </label>
                        <input id="profile_photo" name="profile_photo" type="file" class="hidden" accept="image/*">
                    </div>
                </div>
                
                <!-- User Info dengan Better Typography -->
                <div class="mt-16 sm:mt-0 sm:ml-36">
                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-1">{{ Auth::user()->name }}</h1>
                    <p class="text-gray-600 dark:text-gray-400 mb-3">{{ Auth::user()->email }}</p>
                    
                    <!-- User Badges -->
                    <div class="flex flex-wrap gap-2">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                            {{ Auth::user()->eco_level ?? 'Beginner' }}
                        </span>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Level {{ Auth::user()->level ?? 1 }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Eco Stats dengan Better Visual -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <!-- Total Points Card -->
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 rounded-xl p-6 border border-blue-200 dark:border-blue-800 hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-2">
                    <div class="p-2 bg-blue-500 rounded-lg group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-blue-600 dark:text-blue-400">+12%</span>
                </div>
                <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-1">{{ number_format(Auth::user()->eco_points ?? 0) }}</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Total Points</div>
            </div>
            
            <!-- Current Level Card -->
            <div class="bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 rounded-xl p-6 border border-green-200 dark:border-green-800 hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-2">
                    <div class="p-2 bg-green-500 rounded-lg group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-green-600 dark:text-green-400">Active</span>
                </div>
                <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-1">{{ Auth::user()->eco_level ?? 'Beginner' }}</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Current Level</div>
            </div>
            
            <!-- Missions Completed Card -->
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-xl p-6 border border-purple-200 dark:border-purple-800 hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-2">
                    <div class="p-2 bg-purple-500 rounded-lg group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-purple-600 dark:text-purple-400">{{ Auth::user()->challenges_completed ?? 0 }}/6</span>
                </div>
                <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-1">{{ Auth::user()->challenges_completed ?? 0 }}/6</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Missions</div>
            </div>
            
            <!-- Streak Card -->
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 rounded-xl p-6 border border-orange-200 dark:border-orange-800 hover:shadow-lg transition-all duration-300 group">
                <div class="flex items-center justify-between mb-2">
                    <div class="p-2 bg-orange-500 rounded-lg group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.5 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 00-2.343-5.657z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-orange-600 dark:text-orange-400">🔥</span>
                </div>
                <div class="text-3xl font-bold text-orange-600 dark:text-orange-400 mb-1">{{ Auth::user()->daily_streak ?? 0 }}</div>
                <div class="text-sm text-gray-600 dark:text-gray-400">Day Streak</div>
            </div>
        </div>

        <!-- Progress Overview -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-8 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Overall Progress</h3>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->challenges_completed ?? 0 }}/6 missions completed</span>
            </div>
            <div class="relative">
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3">
                    <div class="bg-gradient-to-r from-green-400 to-emerald-500 h-3 rounded-full transition-all duration-500 relative overflow-hidden"
                         style="width: {{ (Auth::user()->challenges_completed ?? 0) > 0 ? ((Auth::user()->challenges_completed / 6) * 100) : 0 }}%">
                        <div class="absolute inset-0 bg-white/20 animate-pulse"></div>
                    </div>
                </div>
                <div class="flex justify-between mt-2 text-xs text-gray-500 dark:text-gray-400">
                    <span>Beginner</span>
                    <span>Expert</span>
                </div>
            </div>
        </div>

        <!-- Tab Navigation dengan Better Design -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden mb-8">
            <div class="border-b border-gray-200 dark:border-gray-700">
                <nav class="flex flex-wrap -mb-px" x-data="{ activeTab: 'profile' }">
                    <button @click="activeTab = 'profile'" 
                            :class="activeTab === 'profile' ? 'border-green-500 text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700'"
                            class="py-3 px-6 border-b-2 font-medium text-sm transition-all duration-200 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Profile Information
                    </button>
                    <button @click="activeTab = 'password'" 
                            :class="activeTab === 'password' ? 'border-green-500 text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700'"
                            class="py-3 px-6 border-b-2 font-medium text-sm transition-all duration-200 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        Password
                    </button>
                    <button @click="activeTab = 'achievements'" 
                            :class="activeTab === 'achievements' ? 'border-green-500 text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700'"
                            class="py-3 px-6 border-b-2 font-medium text-sm transition-all duration-200 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Achievements
                    </button>
                    <button @click="activeTab = 'danger'" 
                            :class="activeTab === 'danger' ? 'border-red-500 text-red-600 dark:text-red-400 bg-red-50 dark:bg-red-900/20' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700'"
                            class="py-3 px-6 border-b-2 font-medium text-sm transition-all duration-200 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        Danger Zone
                    </button>
                </nav>
            </div>

            <!-- Tab Content dengan Better Transitions -->
            <div class="p-6">
                <!-- Profile Information Tab -->
                <div x-show="activeTab === 'profile'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                        @csrf
                        @method('patch')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name Field -->
                            <div class="space-y-2">
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Full Name
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="name" name="name" 
                                           value="{{ old('name', Auth::user()->name) }}" 
                                           class="block w-full pl-10 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:text-white transition-colors" 
                                           required>
                                </div>
                                @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>

                            <!-- Username Field -->
                            <div class="space-y-2">
                                <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                    Username
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                        </svg>
                                    </div>
                                    <input type="text" id="username" name="username" 
                                           value="{{ old('username', Auth::user()->username) }}" 
                                           class="block w-full pl-10 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:text-white transition-colors" 
                                           required>
                                </div>
                                @error('username') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Email Address
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <input type="email" id="email" name="email" 
                                       value="{{ old('email', Auth::user()->email) }}" 
                                       class="block w-full pl-10 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:text-white transition-colors" 
                                       required>
                            </div>
                            @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                            
                            @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! Auth::user()->hasVerifiedEmail())
                                <div class="mt-4 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg p-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-yellow-800 dark:text-yellow-200">
                                                Email Verification Required
                                            </h3>
                                            <div class="mt-2 text-sm text-yellow-700 dark:text-yellow-300">
                                                <p>Your email address is unverified.</p>
                                                <form method="post" action="{{ route('verification.send') }}" class="mt-2">
                                                    @csrf
                                                    <button type="submit" class="font-medium text-yellow-800 dark:text-yellow-200 underline hover:text-yellow-700 dark:hover:text-yellow-300 transition-colors">
                                                        Click here to resend verification email.
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit" class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Password Tab -->
                <div 
                x-show="activeTab === 'password'" 
                x-transition:enter="transition ease-out duration-300" 
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100" class="hidden">
                    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
                        @csrf
                        @method('put')

                        <!-- Current Password -->
                        <div class="space-y-2">
                            <label for="current_password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Current Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input type="password" id="current_password" name="current_password" 
                                       class="block w-full pl-10 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:text-white transition-colors" 
                                       required>
                            </div>
                            @error('current_password') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- New Password -->
                        <div class="space-y-2">
                            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                New Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                    </svg>
                                </div>
                                <input type="password" id="password" name="password" 
                                       class="block w-full pl-10 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:text-white transition-colors" 
                                       required>
                            </div>
                            @error('password') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="space-y-2">
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Confirm Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <input type="password" id="password_confirmation" name="password_confirmation" 
                                       class="block w-full pl-10 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:text-white transition-colors" 
                                       required>
                            </div>
                            @error('password_confirmation') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit" class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Update Password
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Achievements Tab -->
                <div 
                x-show="activeTab === 'achievements'" 
                x-transition:enter="transition ease-out duration-300" 
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100" class="hidden">
                    @php
                        $achievements = auth()->user()->achievements_unlocked ?? [];
                        $achievementData = [
                            'first_mission' => ['icon' => '🌱', 'title' => 'Green Beginner', 'description' => 'Complete your first mission'],
                            'point_collector' => ['icon' => '💰', 'title' => 'Point Collector', 'description' => 'Collect 50 points'],
                            'eco_warrior' => ['icon' => '🛡️', 'title' => 'Eco Warrior', 'description' => 'Complete 3 missions'],
                            'eco_master' => ['icon' => '🏆', 'title' => 'Environmental Master', 'description' => 'Complete all missions'],
                            'community_leader' => ['icon' => '⭐', 'title' => 'Community Leader', 'description' => 'Reach top 10 in leaderboard']
                        ];
                    @endphp
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($achievementData as $key => $achievement)
                            <div class="text-center p-6 rounded-xl border {{ isset($achievements[$key]) ? 'bg-green-50 dark:bg-green-900/20 border-green-200 dark:border-green-800' : 'bg-gray-50 dark:bg-gray-700 border-gray-200 dark:border-gray-600' }} transition-all duration-300 hover:shadow-lg group">
                                <div class="text-5xl mb-3 transition-transform duration-300 group-hover:scale-110">{{ $achievement['icon'] }}</div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">{{ $achievement['title'] }}</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">{{ $achievement['description'] }}</p>
                                @if(isset($achievements[$key]))
                                    <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        Unlocked
                                    </div>
                                @else
                                    <div class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7h6zM3 13a1 1 0 011-1h1a1 1 0 011 1v1a1 1 0 01-1 1H4a1 1 0 01-1-1v-1z" clip-rule="evenodd"/>
                                        </svg>
                                        Locked
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Danger Zone Tab -->
                <div x-show="activeTab === 'danger'" 
                x-transition:enter="transition ease-out duration-300" 
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100" class="hidden">
                    <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-red-800 dark:text-red-200">
                                    Delete Account
                                </h3>
                                <p class="text-sm text-red-700 dark:text-red-300 mt-1">
                                    Once you delete your account, there is no going back. Please be certain.
                                </p>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                To delete your account, please enter your password below to confirm you would like to permanently delete your account.
                            </p>
                            
                            <form method="post" action="{{ route('profile.destroy') }}" class="space-y-4">
                                @csrf
                                @method('delete')
                                
                                <div>
                                    <label for="delete_password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                        </div>
                                        <input type="password" id="delete_password" name="password" 
                                               class="block w-full pl-10 border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:text-white transition-colors" 
                                               placeholder="Enter your password" required>
                                    </div>
                                    @error('password') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                                </div>
                                
                                <div class="flex justify-end">
                                    <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        Delete Account
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Link to Challenge Center -->
        <div class="text-center">
            <a href="{{ route('challenge.center') }}" class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
                Go to Challenge Center
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabs = document.querySelectorAll('nav button');
            const tabContents = document.querySelectorAll('[x-show*="activeTab"]');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabName = this.getAttribute('@click').match(/'([^']+)'/)[1];
                    
                    // Update active tab styling
                    tabs.forEach(t => {
                        t.classList.remove('border-green-500', 'text-green-600', 'dark:text-green-400', 'bg-green-50', 'dark:bg-green-900/20');
                        t.classList.add('border-transparent', 'text-gray-500', 'dark:text-gray-400', 'dark:hover:text-gray-300');
                    });
                    
                    this.classList.remove('border-transparent', 'text-gray-500', 'dark:text-gray-400', 'dark:hover:text-gray-300');
                    this.classList.add('border-green-500', 'text-green-600', 'dark:text-green-400', 'bg-green-50', 'dark:bg-green-900/20');
                    
                    // Show/hide content
                    tabContents.forEach(content => {
                        if (content.getAttribute('x-show').includes(tabName)) {
                            content.classList.remove('hidden');
                        } else {
                            content.classList.add('hidden');
                        }
                    });
                });
            });
            
            // Profile photo upload
            const profilePhotoInput = document.getElementById('profile_photo');
            if (profilePhotoInput) {
                profilePhotoInput.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const img = document.querySelector('img[alt="Profile Photo"]');
                            if (img) {
                                img.src = e.target.result;
                            }
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }

            // Add smooth transitions for form submissions
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function() {
                    const submitBtn = this.querySelector('button[type="submit"]');
                    if (submitBtn) {
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = `
                            <svg class="animate-spin h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Processing...
                        `;
                    }
                });
            });
        });
    </script>

    <style>
        /* Custom animations */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .animate-spin {
            animation: spin 1s linear infinite;
        }
        
        /* Smooth transitions */
        * {
            transition-property: color, background-color, border-color, transform, opacity;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
        
        /* Focus styles */
        input:focus, select:focus, button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
        }
        
        /* Hover effects */
        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
        }
        
        ::-webkit-scrollbar-thumb {
            background: rgba(34, 197, 94, 0.5);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(34, 197, 94, 0.7);
        }
    </style>
</x-app-layout>