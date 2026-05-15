<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    {{-- Notifikasi pesan sukses --}}
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
        <!-- Profile Header Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden mb-8 relative">
            <div class="absolute inset-0 bg-gradient-to-br from-green-400/10 to-emerald-600/10"></div>

            <div class="relative bg-gradient-to-r from-green-500 to-emerald-600 h-32">
                <div class="absolute inset-0 bg-black/5"></div>
                <div class="absolute top-4 right-4 w-20 h-20 bg-white/10 rounded-full blur-xl"></div>
                <div class="absolute bottom-4 left-8 w-16 h-16 bg-white/5 rounded-full blur-lg"></div>
            </div>

            <div class="px-6 pb-6 relative">
                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">
                    <!-- Profile Photo -->
                    <div class="flex-shrink-0">
                        <div class="w-24 h-24 rounded-full overflow-hidden bg-gray-100 dark:bg-gray-700 border-4 border-white dark:border-gray-800 shadow-lg">
                                <img
                                    src="{{ Auth::user()->profile_photo
                                                ? asset('storage/' . Auth::user()->profile_photo)
                                                : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                    alt="Profile Photo"
                                    class="w-full h-full object-cover"
                                >
                                <div class="w-full h-full flex items-center justify-center text-gray-400 dark:text-gray-500">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                        </div>
                    </div>

                    <!-- User Info -->
                    <div class="flex-1 text-center sm:text-left">
                        <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-1">{{ Auth::user()->name }}</h1>
                        <p class="text-gray-600 dark:text-gray-400 mb-3">{{ Auth::user()->email }}</p>

                        <!-- User Badges -->
                        <div class="flex flex-wrap justify-center sm:justify-start gap-2">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Level {{ Auth::user()->eco_level ?? 1 }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Kartu Statistik Eco --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                {{-- Kartu Total Poin --}}
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 rounded-xl p-6 border border-blue-200 dark:border-blue-800 hover:shadow-lg transition-all duration-300 group">
                    <div class="flex items-center justify-between mb-3">
                        <div class="p-3 bg-blue-500 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-800 px-2 py-1 rounded-full">+12%</span>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400 mb-1">{{ number_format(Auth::user()->eco_points ?? 0) }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Total Points</div>
                </div>

                {{-- Kartu Level Saat Ini --}}
                <div class="bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 rounded-xl p-6 border border-green-200 dark:border-green-800 hover:shadow-lg transition-all duration-300 group">
                    <div class="flex items-center justify-between mb-3">
                        <div class="p-3 bg-green-500 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-green-600 dark:text-green-400 bg-green-100 dark:bg-green-800 px-2 py-1 rounded-full">Active</span>
                    </div>
                    <div class="text-3xl font-bold text-green-600 dark:text-green-400 mb-1">{{ Auth::user()->eco_level ?? 'Beginner' }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Current Level</div>
                </div>

                {{-- Kartu Misi Selesai --}}
                <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-xl p-6 border border-purple-200 dark:border-purple-800 hover:shadow-lg transition-all duration-300 group">
                    <div class="flex items-center justify-between mb-3">
                        <div class="p-3 bg-purple-500 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-purple-600 dark:text-purple-400 bg-purple-100 dark:bg-purple-800 px-2 py-1 rounded-full">{{ Auth::user()->challenges_completed ?? 0 }}/11</span>
                    </div>
                    <div class="text-3xl font-bold text-purple-600 dark:text-purple-400 mb-1">{{ Auth::user()->challenges_completed ?? 0 }}/11</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Missions</div>
                </div>

                {{-- Kartu Streak --}}
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 rounded-xl p-6 border border-orange-200 dark:border-orange-800 hover:shadow-lg transition-all duration-300 group">
                    <div class="flex items-center justify-between mb-3">
                        <div class="p-3 bg-orange-500 rounded-xl group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.5 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 00-2.343-5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-orange-600 dark:text-orange-400 bg-orange-100 dark:bg-orange-800 px-2 py-1 rounded-full">🔥</span>
                    </div>
                    <div class="text-3xl font-bold text-orange-600 dark:text-orange-400 mb-1">{{ Auth::user()->daily_streak }}</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 font-medium">Day Streak</div>
                </div>
        </div>

        {{-- Ringkasan Progress --}}
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-8 border border-gray-200 dark:border-gray-700">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Overall Progress</h3>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 px-3 py-1 rounded-full">{{ Auth::user()->challenges_completed ?? 0 }}/11 total missions completed</span>
            </div>
            <div class="relative mb-4">
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-4">
                    <div class="bg-gradient-to-r from-green-400 to-emerald-500 h-4 rounded-full transition-all duration-500 relative overflow-hidden shadow-sm"
                         style="width: {{ (Auth::user()->challenges_completed ?? 0) > 0 ? ((Auth::user()->challenges_completed / 11) * 100) : 0 }}%">
                        <div class="absolute inset-0 bg-white/20 animate-pulse"></div>
                    </div>
                </div>
                <div class="flex justify-between mt-3 text-sm font-medium text-gray-600 dark:text-gray-400">
                    <span>Beginner</span>
                    <span>Expert</span>
                </div>
            </div>
            <div class="text-center">
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Keep completing missions to level up your eco-status!
                </p>
            </div>
        </div>

        {{-- Tab Pengaturan --}}
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden mb-8">
            <div class="border-b border-gray-200 w-full dark:border-gray-700 overflow-x-auto">
                <nav class="flex min-w-max sm:min-w-0" x-data="{ activeTab: 'profile' }">
                    <button @click="activeTab = 'profile'"
                            :class="activeTab === 'profile' ? 'border-green-500 text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700'"
                            class="flex-shrink-0 py-3 px-4 sm:py-4 sm:px-6 border-b-2 font-semibold text-xs sm:text-sm transition-all duration-200 flex items-center gap-2 sm:gap-3 whitespace-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="hidden xs:inline">Profile Information</span>
                        <span class="xs:hidden">Profile</span>
                    </button>
                    <button @click="activeTab = 'password'"
                            :class="activeTab === 'password' ? 'border-green-500 text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700'"
                            class="flex-shrink-0 py-3 px-4 sm:py-4 sm:px-6 border-b-2 font-semibold text-xs sm:text-sm transition-all duration-200 flex items-center gap-2 sm:gap-3 whitespace-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <span class="hidden xs:inline">Update Password</span>
                        <span class="xs:hidden">Password</span>
                    </button>
                    <button @click="activeTab = 'achievements'"
                            :class="activeTab === 'achievements' ? 'border-green-500 text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700'"
                            class="flex-shrink-0 py-3 px-4 sm:py-4 sm:px-6 border-b-2 font-semibold text-xs sm:text-sm transition-all duration-200 flex items-center gap-2 sm:gap-3 whitespace-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="hidden xs:inline">Achievements</span>
                        <span class="xs:hidden">Achievements</span>
                    </button>
                    <button @click="activeTab = 'rewards'"
                            :class="activeTab === 'rewards' ? 'border-green-500 text-green-600 dark:text-green-400 bg-green-50 dark:bg-green-900/20' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700'"
                            class="flex-shrink-0 py-3 px-4 sm:py-4 sm:px-6 border-b-2 font-semibold text-xs sm:text-sm transition-all duration-200 flex items-center gap-2 sm:gap-3 whitespace-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                        </svg>
                        <span class="hidden xs:inline">Rewards & Benefits</span>
                        <span class="xs:hidden">Rewards</span>
                    </button>
                    <button @click="activeTab = 'danger'"
                            :class="activeTab === 'danger' ? 'border-red-500 text-red-600 dark:text-red-400 bg-red-50 dark:bg-red-900/20' : 'border-transparent text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700'"
                            class="flex-shrink-0 py-3 px-4 sm:py-4 sm:px-6 border-b-2 font-semibold text-xs sm:text-sm transition-all duration-200 flex items-center gap-2 sm:gap-3 whitespace-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span class="hidden xs:inline">Danger Zone</span>
                        <span class="xs:hidden">Danger</span>
                    </button>
                </nav>
            </div>

            {{-- Konten Tab --}}
            <div class="p-4 sm:p-8">
                <div x-show="activeTab === 'profile'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Information Profile</h3>
                        <p class="text-gray-600 dark:text-gray-400">Update your profile information and account email address.</p>
                    </div>

                    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="hidden">
                        @csrf
                    </form>

                        {{-- Upload Foto Profil --}}
                        <div class="mb-8" x-data="{ photoPreview: null }">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Profile Photo</h4>
                            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-4">
                                @csrf
                                @method('PATCH')
                                <div class="flex flex-col sm:flex-row items-center gap-6">
                                    <div class="relative w-20 h-20">
                                        <!-- Profile Image -->
                                        <img
                                            x-show="!photoPreview"
                                            src="{{ Auth::user()->profile_photo
                                                ? asset('storage/' . Auth::user()->profile_photo)
                                                : 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) }}"
                                            alt="Profile Photo"
                                            class="w-full h-full rounded-full object-cover shadow-lg border-4 border-white dark:border-gray-800">

                                        <template x-if="photoPreview">
                                            <div 
                                                class="w-full h-full rounded-full bg-cover bg-center shadow-lg border-4 border-white dark:border-gray-800"
                                                x-bind:style="`background-image: url('${photoPreview}')`"
                                            ></div>
                                        </template>
                                    </div>

                                    <div class="flex-1 w-full">
                                        <input 
                                            ref="profile_photo"
                                            id="profile_photo" 
                                            name="profile_photo" 
                                            type="file"
                                            class="hidden"
                                            @change="event => { 
                                                const file = event.target.files[0]; 
                                                if (file) { 
                                                    const reader = new FileReader(); 
                                                    reader.onload = e => photoPreview = e.target.result; 
                                                    reader.readAsDataURL(file); 
                                                } 
                                            }"
                                        />
                                        
                                        <!-- Custom file input label -->
                                        <label for="profile_photo" class="block w-full text-sm text-gray-500 cursor-pointer">
                                            <div class="flex items-center justify-center w-full p-3 border-2 border-dashed border-gray-300 rounded-lg hover:border-green-400 transition-colors">
                                                <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                                </svg>
                                                <span class="text-sm">Choose file or click edit button</span>
                                            </div>
                                        </label>
                                        
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">JPG, GIF or PNG. Max 2MB.</p>
                                        <x-input-error class="mt-2" :messages="$errors->get('profile_photo')" />
                                    </div>

                                    <button type="submit" 
                                        class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg 
                                            font-medium transition-colors focus:outline-none focus:ring-2 
                                            focus:ring-offset-2 focus:ring-green-500">
                                        Upload
                                    </button>
                                </div>
                                @if (session('status') === 'ProfilePhotoUpdated')
                                <div class="flex items-center gap-2 text-green-600 dark:text-green-400">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">{{ __('Profile successfully updated.') }}</span>
                                </div>
                            @endif
                            </form>
                        </div>

                        {{-- Form Informasi Profil --}}
                        <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                            @csrf
                            @method('patch')

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                {{-- Nama --}}
                                <div>
                                    <x-input-label for="name" :value="__('Name')" class="block text-sm font-medium text-gray-700 dark:text-gray-200"/>
                                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                        :value="old('name', $user->name)" required autocomplete="name" />
                                    <x-input-error class="mt-2 text-red-600 dark:text-red-400" :messages="$errors->get('name')" />
                                </div>

                                {{-- Username --}}
                                <div>
                                    <x-input-label for="username" :value="__('Username')" class="block text-sm font-medium text-gray-700 dark:text-gray-200" />
                                    <x-text-input id="username" name="username" type="text" class="mt-1 block w-full bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                        :value="old('username', $user->username)" autocomplete="username" />
                                    <x-input-error class="mt-2 text-red-600 dark:text-red-400" :messages="$errors->get('username')" />
                                </div>
                            </div>

                            {{-- Email --}}
                            <div>
                                <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700 dark:text-gray-200" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                    :value="old('email', $user->email)" required autocomplete="username" />
                                <x-input-error class="mt-2 text-red-600 dark:text-red-400" :messages="$errors->get('email')" />

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div class="mt-3 p-4 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg">
                                        <div class="flex flex-col sm:flex-row">
                                            <div class="flex-shrink-0 mb-2 sm:mb-0">
                                                <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                                </svg>
                                            </div>
                                            <div class="ml-0 sm:ml-3">
                                                <p class="text-sm text-yellow-800 dark:text-yellow-200">
                                                    {{ __('Your email address is unverified.') }}
                                                    <button form="send-verification" type="submit"
                                                       class="font-medium underline text-yellow-800 dark:text-yellow-200 hover:text-yellow-600 dark:hover:text-yellow-100">
                                                        {{ __('Click here to re-send the verification email.') }}
                                                    </button>
                                                </p>
                                                @if (session('status') === 'verification-link-sent')
                                                    <p class="mt-2 text-sm text-green-600 dark:text-green-400 font-medium">
                                                        {{ __('A new verification link has been sent to your email address.') }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            {{-- Tombol Simpan --}}
                            <div class="flex flex-col sm:flex-row sm:items-center gap-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                                <x-primary-button class="bg-green-600 hover:bg-green-700 focus:ring-2 focus:ring-offset-2 focus:ring-green-500">{{ __('Save Changes') }}</x-primary-button>

                                @if (session('status') === 'profile-updated')
                                    <div class="flex items-center gap-2 text-green-600 dark:text-green-400">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <span class="font-medium">{{ __('Successfully Updated') }}</span>
                                    </div>
                                @endif
                            </div>
                        </form>
                </div>

                {{-- Tab Kata Sandi --}}
                <div x-show="activeTab === 'password'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Update Password</h3>
                        <p class="text-gray-600 dark:text-gray-400">Ensure your account is using a long, random password to stay secure.</p>
                    </div>

                    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
                        @csrf
                        @method('put')

                        {{-- Kata Sandi Saat Ini --}}
                        <div>
                            <x-input-label for="current_password" :value="__('Current Password')" class="block text-sm font-medium text-gray-700 dark:text-gray-200" />
                            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-red-600 dark:text-red-400" />
                        </div>

                        {{-- Kata Sandi Baru --}}
                        <div>
                            <x-input-label for="password" :value="__('New Password')" class="block text-sm font-medium text-gray-700 dark:text-gray-200" />
                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                autocomplete="new-password" />
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Must be at least 8 characters.</p>
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-red-600 dark:text-red-400" />
                        </div>

                        {{-- Konfirmasi Kata Sandi --}}
                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium text-gray-700 dark:text-gray-200" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                                autocomplete="new-password" />
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-red-600 dark:text-red-400" />
                        </div>

                        {{-- Tombol Simpan --}}
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                            <x-primary-button class="bg-green-600 hover:bg-green-700 focus:ring-2 focus:ring-offset-2 focus:ring-green-500">{{ __('Update Password') }}</x-primary-button>

                            @if (session('status') === 'password-updated')
                                <div class="flex items-center gap-2 text-green-600 dark:text-green-400">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">{{ __('Password successfully updated.') }}</span>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>

                {{-- Tab Pencapaian --}}
                <div
                x-show="activeTab === 'achievements'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100">
                    @php
                        $achievements = auth()->user()->achievements_unlocked ?? [];
                        $achievementData = [
                            'first_mission' => ['icon' => '🌱', 'title' => 'Green Beginner', 'description' => 'Complete your first mission'],
                            'point_collector' => ['icon' => '💰', 'title' => 'Point Collector', 'description' => 'Collect 50 points'],
                            'eco_warrior' => ['icon' => '🛡️', 'title' => 'Eco Warrior', 'description' => 'Complete 3 missions'],
                            'eco_master' => ['icon' => '🏆', 'title' => 'Master of Environment', 'description' => 'Complete all missions'],
                            'community_leader' => ['icon' => '⭐', 'title' => 'Community Leader', 'description' => 'Reach the top 10 on the leaderboard']
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
                                        Open {{ isset($achievements[$key]['unlocked_at']) ? \Carbon\Carbon::parse($achievements[$key]['unlocked_at'])->format('M j, Y') : '' }}
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

                {{-- Tab Rewards --}}
                <div x-show="activeTab === 'rewards'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Rewards & Benefits</h3>
                        <p class="text-gray-600 dark:text-gray-400">Track your eco-points and redeem rewards for your environmental contributions.</p>
                    </div>

                    {{-- Current Points Display --}}
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 rounded-xl p-6 mb-6 border border-green-200 dark:border-green-800">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">Current Eco-Points</h4>
                                <p class="text-3xl font-bold text-green-600 dark:text-green-400">{{ number_format(Auth::user()->eco_points ?? 0) }}</p>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Keep completing missions to earn more points!</p>
                            </div>
                            <div class="text-6xl opacity-20">🌱</div>
                        </div>
                    </div>

                    {{-- Available Rewards --}}
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Available Rewards</h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                            {{-- Reward 1 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 sm:p-4 border border-gray-200 dark:border-gray-700 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-lg sm:text-xl">🛒</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <h5 class="font-semibold text-gray-900 dark:text-white text-sm sm:text-base truncate">Shopping Voucher Rp 50.000</h5>
                                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">50 points</p>
                                    </div>
                                </div>
                                <p class="text-xs md:text-md text-gray-600 dark:text-gray-400 mb-2 md:mb-3 line-clamp-2">Rp 50.000 shopping voucher for eco-friendly products</p>
                                <button class="w-full px-3 md:px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs md:text-md rounded-lg transition-all duration-300 transform hover:scale-105 {{ (Auth::user()->eco_points ?? 0) >= 50 ? '' : 'opacity-50 cursor-not-allowed' }}" {{ (Auth::user()->eco_points ?? 0) >= 50 ? '' : 'disabled' }} onclick="openRewardModal('shopping_voucher_50k', 'Shopping Voucher Rp 50.000', 50, '🛒', 'Rp 50.000 shopping voucher for eco-friendly products')">
                                    Redeem
                                </button>
                            </div>

                            {{-- Reward 2 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 md:p-4 border border-gray-200 dark:border-gray-700 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-2 md:gap-3 mb-2 md:mb-3">
                                    <div class="w-8 h-8 md:w-10 md:h-10 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-lg md:text-xl">🎵</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <h5 class="font-semibold text-gray-900 dark:text-white text-md md:text-base truncate">Eco-Friendly Concert Ticket</h5>
                                        <p class="text-xs md:text-md text-gray-600 dark:text-gray-400">100 points</p>
                                    </div>
                                </div>
                                <p class="text-xs md:text-md text-gray-600 dark:text-gray-400 mb-2 md:mb-3 line-clamp-2">Free ticket to eco-friendly music concert</p>
                                <button class="w-full px-3 md:px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-xs md:text-md rounded-lg transition-all duration-300 transform hover:scale-105 {{ (Auth::user()->eco_points ?? 0) >= 100 ? '' : 'opacity-50 cursor-not-allowed' }}" {{ (Auth::user()->eco_points ?? 0) >= 100 ? '' : 'disabled' }} onclick="openRewardModal('concert_ticket', 'Eco-Friendly Concert Ticket', 100, '🎵', 'Free ticket to eco-friendly music concert')">
                                    Redeem
                                </button>
                            </div>

                            {{-- Reward 3 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 md:p-4 border border-gray-200 dark:border-gray-700 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-2 md:gap-3 mb-2 md:mb-3">
                                    <div class="w-8 h-8 md:w-10 md:h-10 bg-purple-100 dark:bg-purple-900/30 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-lg md:text-xl">🌱</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <h5 class="font-semibold text-gray-900 dark:text-white text-md md:text-base truncate">Environmental Event Ticket</h5>
                                        <p class="text-xs md:text-md text-gray-600 dark:text-gray-400">150 points</p>
                                    </div>
                                </div>
                                <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 mb-2 sm:mb-3 line-clamp-2">Entry ticket to environmental awareness event</p>
                                <button class="w-full px-3 sm:px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white text-xs sm:text-sm rounded-lg transition-all duration-300 transform hover:scale-105 {{ (Auth::user()->eco_points ?? 0) >= 150 ? '' : 'opacity-50 cursor-not-allowed' }}" {{ (Auth::user()->eco_points ?? 0) >= 150 ? '' : 'disabled' }} onclick="openRewardModal('eco_event_ticket', 'Environmental Event Ticket', 150, '🌱', 'Entry ticket to environmental awareness event')">
                                    Redeem
                                </button>
                            </div>

                            {{-- Reward 4 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 sm:p-4 border border-gray-200 dark:border-gray-700 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-orange-100 dark:bg-orange-900/30 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-lg sm:text-xl">🎓</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <h5 class="font-semibold text-gray-900 dark:text-white text-sm sm:text-base truncate">Sustainability Workshop Ticket</h5>
                                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">200 points</p>
                                    </div>
                                </div>
                                <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 mb-2 sm:mb-3 line-clamp-2">Access to sustainability workshop session</p>
                                <button class="w-full px-3 sm:px-4 py-2 bg-orange-600 hover:bg-orange-700 text-white text-xs sm:text-sm rounded-lg transition-all duration-300 transform hover:scale-105 {{ (Auth::user()->eco_points ?? 0) >= 200 ? '' : 'opacity-50 cursor-not-allowed' }}" {{ (Auth::user()->eco_points ?? 0) >= 200 ? '' : 'disabled' }} onclick="openRewardModal('workshop_ticket', 'Sustainability Workshop Ticket', 200, '🎓', 'Access to sustainability workshop session')">
                                    Redeem
                                </button>
                            </div>

                            {{-- Reward 5 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 sm:p-4 border border-gray-200 dark:border-gray-700 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-green-100 dark:bg-green-900/30 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-lg sm:text-xl">🌳</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <h5 class="font-semibold text-gray-900 dark:text-white text-sm sm:text-base truncate">Tree Planting Event Ticket</h5>
                                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">250 points</p>
                                    </div>
                                </div>
                                <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 mb-2 sm:mb-3 line-clamp-2">Participation ticket for community tree planting</p>
                                <button class="w-full px-3 sm:px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-xs sm:text-sm rounded-lg transition-all duration-300 transform hover:scale-105 {{ (Auth::user()->eco_points ?? 0) >= 250 ? '' : 'opacity-50 cursor-not-allowed' }}" {{ (Auth::user()->eco_points ?? 0) >= 250 ? '' : 'disabled' }} onclick="openRewardModal('planting_event_ticket', 'Tree Planting Event Ticket', 250, '🌳', 'Participation ticket for community tree planting')">
                                    Redeem
                                </button>
                            </div>

                            {{-- Reward 6 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 sm:p-4 border border-gray-200 dark:border-gray-700 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-lg sm:text-xl">🏖️</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <h5 class="font-semibold text-gray-900 dark:text-white text-sm sm:text-base truncate">Beach Cleanup Event Ticket</h5>
                                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">300 points</p>
                                    </div>
                                </div>
                                <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 mb-2 sm:mb-3 line-clamp-2">Entry to organized beach cleanup activity</p>
                                <button class="w-full px-3 sm:px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm rounded-lg transition-all duration-300 transform hover:scale-105 {{ (Auth::user()->eco_points ?? 0) >= 300 ? '' : 'opacity-50 cursor-not-allowed' }}" {{ (Auth::user()->eco_points ?? 0) >= 300 ? '' : 'disabled' }} onclick="openRewardModal('beach_cleanup_ticket', 'Beach Cleanup Event Ticket', 300, '🏖️', 'Entry to organized beach cleanup activity')">
                                    Redeem
                                </button>
                            </div>

                            {{-- Reward 7 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 sm:p-4 border border-gray-200 dark:border-gray-700 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-yellow-100 dark:bg-yellow-900/30 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-lg sm:text-xl">♻️</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <h5 class="font-semibold text-gray-900 dark:text-white text-sm sm:text-base truncate">Recycling Workshop Ticket</h5>
                                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">350 points</p>
                                    </div>
                                </div>
                                <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 mb-2 sm:mb-3 line-clamp-2">Hands-on recycling workshop participation</p>
                                <button class="w-full px-3 sm:px-4 py-2 bg-yellow-600 hover:bg-yellow-700 text-white text-xs sm:text-sm rounded-lg transition-all duration-300 transform hover:scale-105 {{ (Auth::user()->eco_points ?? 0) >= 350 ? '' : 'opacity-50 cursor-not-allowed' }}" {{ (Auth::user()->eco_points ?? 0) >= 350 ? '' : 'disabled' }} onclick="openRewardModal('recycling_workshop_ticket', 'Recycling Workshop Ticket', 350, '♻️', 'Hands-on recycling workshop participation')">
                                    Redeem
                                </button>
                            </div>

                            {{-- Reward 8 --}}
                            <div class="bg-white dark:bg-gray-800 rounded-lg p-3 sm:p-4 border border-gray-200 dark:border-gray-700 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                                    <div class="w-8 h-8 sm:w-10 sm:h-10 bg-pink-100 dark:bg-pink-900/30 rounded-full flex items-center justify-center flex-shrink-0">
                                        <span class="text-lg sm:text-xl">🛍️</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <h5 class="font-semibold text-gray-900 dark:text-white text-sm sm:text-base truncate">Green Market Event Ticket</h5>
                                        <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">400 points</p>
                                    </div>
                                </div>
                                <p class="text-xs sm:text-sm text-gray-600 dark:text-gray-400 mb-2 sm:mb-3 line-clamp-2">Access to eco-friendly products market</p>
                                <button class="w-full px-3 sm:px-4 py-2 bg-pink-600 hover:bg-pink-700 text-white text-xs sm:text-sm rounded-lg transition-all duration-300 transform hover:scale-105 {{ (Auth::user()->eco_points ?? 0) >= 400 ? '' : 'opacity-50 cursor-not-allowed' }}" {{ (Auth::user()->eco_points ?? 0) >= 400 ? '' : 'disabled' }} onclick="openRewardModal('green_market_ticket', 'Green Market Event Ticket', 400, '🛍️', 'Access to eco-friendly products market')">
                                    Redeem
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Redemption History --}}
                    <div class="bg-gray-50 dark:bg-gray-800/50 rounded-xl p-6">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Recent Redemptions</h4>
                        <div class="space-y-3">
                            @php
                                $recentRedemptions = Auth::user()->rewardRedemptions()->latest()->take(5)->get();
                            @endphp
                            @if($recentRedemptions->count() > 0)
                                @foreach($recentRedemptions as $redemption)
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 py-2 border-b border-gray-200 dark:border-gray-700">
                                        <div class="flex items-center gap-3">
                                            <span class="text-xl">{{ $redemption->reward_details['icon'] ?? '🎁' }}</span>
                                            <div>
                                                <p class="font-medium text-gray-900 dark:text-white">{{ $redemption->reward_name }}</p>
                                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $redemption->redeemed_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                        <span class="text-sm font-medium text-green-600 dark:text-green-400">-{{ $redemption->points_spent }} points</span>
                                    </div>
                                @endforeach
                            @else
                                <div class="text-center py-4 text-gray-500 dark:text-gray-400">
                                    <p>No recent redemptions</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Tab Zona Bahaya --}}
                <div x-show="activeTab === 'danger'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100">
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

        {{-- Tautan ke Pusat Tantangan --}}
        <div class="text-center">
            <a href="{{ route('challenge.center') }}" class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
                Go to Challenge Center
            </a>
        </div>
    </div>

    <!-- Modal for Reward Redemption -->
    <div id="rewardModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" onclick="closeRewardModal()"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal panel -->
            <div class="inline-block align-bottom bg-white dark:bg-gray-800 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg leading-6 font-medium text-white" id="modal-title">Redeem Reward</h3>
                        <button type="button" class="text-white hover:text-gray-200 focus:outline-none" onclick="closeRewardModal()">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="px-6 py-5">
                    <div class="flex items-center mb-4">
                        <div id="modalIcon" class="w-16 h-16 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center mr-4">
                            <span class="text-2xl">🛒</span>
                        </div>
                        <div>
                            <h4 id="modalTitle" class="text-lg font-semibold text-gray-900 dark:text-white">Reward Title</h4>
                            <p id="modalDescription" class="text-sm text-gray-600 dark:text-gray-400">Reward Description</p>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4 mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Current Points:</span>
                            <span id="currentPoints" class="text-sm font-bold text-green-600 dark:text-green-400">{{ number_format(Auth::user()->eco_points ?? 0) }}</span>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Required Points:</span>
                            <span id="requiredPoints" class="text-sm font-bold text-red-600 dark:text-red-400">0</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Remaining Points:</span>
                            <span id="remainingPoints" class="text-sm font-bold text-gray-900 dark:text-white">0</span>
                        </div>
                    </div>
                    
                    <div id="errorMessage" class="hidden mb-4 p-3 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-800 dark:text-red-200">You don't have enough points to redeem this reward.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div id="successMessage" class="hidden mb-4 p-3 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-800 dark:text-green-200">Reward successfully redeemed! Check your email for details.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 dark:bg-gray-700 px-6 py-3 flex justify-end space-x-3">
                    <button type="button" class="bg-white dark:bg-gray-600 py-2 px-4 border border-gray-300 dark:border-gray-500 rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" onclick="closeRewardModal()">
                        Cancel
                    </button>
                    <button id="confirmRedeem" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Redeem Reward
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabs = document.querySelectorAll('nav button');
            const tabContents = document.querySelectorAll('[x-show*="activeTab"]');

            // Initialize: hide all tabs except the default active one ('profile')
            tabContents.forEach(content => {
                if (!content.getAttribute('x-show').includes('profile')) {
                    content.classList.add('hidden');
                }
            });

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

        // Modal functionality
        let currentRewardType = '';
        let currentRewardPoints = 0;
        let currentPoints = {{ Auth::user()->eco_points ?? 0 }};

        function openRewardModal(rewardType, rewardTitle, rewardPoints, rewardIcon, rewardDescription) {
            currentRewardType = rewardType;
            currentRewardPoints = rewardPoints;
            
            // Update modal content
            document.getElementById('modalTitle').textContent = rewardTitle;
            document.getElementById('modalDescription').textContent = rewardDescription;
            document.getElementById('modalIcon').innerHTML = `<span class="text-2xl">${rewardIcon}</span>`;
            document.getElementById('requiredPoints').textContent = rewardPoints;
            
            const remainingPoints = currentPoints - rewardPoints;
            document.getElementById('remainingPoints').textContent = remainingPoints;
            
            // Set color based on remaining points
            const remainingPointsElement = document.getElementById('remainingPoints');
            if (remainingPoints >= 0) {
                remainingPointsElement.className = 'text-sm font-bold text-green-600 dark:text-green-400';
                document.getElementById('confirmRedeem').disabled = false;
                document.getElementById('confirmRedeem').className = 'inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500';
            } else {
                remainingPointsElement.className = 'text-sm font-bold text-red-600 dark:text-red-400';
                document.getElementById('confirmRedeem').disabled = true;
                document.getElementById('confirmRedeem').className = 'inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 cursor-not-allowed';
            }
            
            // Hide messages
            document.getElementById('errorMessage').classList.add('hidden');
            document.getElementById('successMessage').classList.add('hidden');
            
            // Show modal
            document.getElementById('rewardModal').classList.remove('hidden');
        }

        function closeRewardModal() {
            document.getElementById('rewardModal').classList.add('hidden');
        }

        document.getElementById('confirmRedeem').addEventListener('click', function() {
            if (currentPoints >= currentRewardPoints) {
                // Disable button and show loading
                this.disabled = true;
                this.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processing...
                `;
                
                // Call the original redeem function
                redeemReward(currentRewardType);
            } else {
                // Show error message
                document.getElementById('errorMessage').classList.remove('hidden');
            }
        });

        function redeemReward(rewardType) {
            fetch("/rewards/redeem", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector("meta[name=csrf-token]").getAttribute("content")
                },
                body: JSON.stringify({ reward_type: rewardType })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    document.getElementById('successMessage').classList.remove('hidden');
                    
                    // Update current points display
                    currentPoints = data.new_points;
                    document.getElementById('currentPoints').textContent = data.new_points;
                    
                    // Disable redeem button
                    document.getElementById('confirmRedeem').disabled = true;
                    document.getElementById('confirmRedeem').innerHTML = 'Redeemed';
                    
                    // Close modal after delay
                    setTimeout(() => {
                        closeRewardModal();
                        // Reload page to show updated points
                        location.reload();
                    }, 2000);
                } else {
                    // Show error message
                    document.getElementById('errorMessage').classList.remove('hidden');
                    document.getElementById('confirmRedeem').disabled = false;
                    document.getElementById('confirmRedeem').innerHTML = 'Redeem Reward';
                }
            })
            .catch(error => {
                console.error("Error:", error);
                // Show error message
                document.getElementById('errorMessage').classList.remove('hidden');
                document.getElementById('confirmRedeem').disabled = false;
                document.getElementById('confirmRedeem').innerHTML = 'Redeem Reward';
            });
        }
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