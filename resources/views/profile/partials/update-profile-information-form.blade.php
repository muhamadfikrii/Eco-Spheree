<section>
    
    <div class="bg-gradient-to-r from-blue-700 to-blue-600 px-6 py-5 sm:px-8">
        <div class="flex items-center">
            <div class="col-span-6 sm:col-span-4">
                <x-input-label for="profile_photo" value="Profile Photo" />
                <div class="mt-2 flex items-center space-x-4">
                    @if (Auth::user()->profile_photo)
                        <img
                            src="{{ asset('storage/' . Auth::user()->profile_photo) }}"
                            alt="Profile Photo"
                            class="h-16 w-16 rounded-full object-cover"
                        />
                    @else
                        <img
                            src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random"
                            alt="Default Avatar"
                            class="h-16 w-16 rounded-full object-cover"
                        />
                    @endif

                    <input
                        id="profile_photo"
                        name="profile_photo"
                        type="file"
                        class="mt-2 block w-full text-sm text-gray-600"
                        accept="image/*"
                    />
                </div>
                <x-input-error
                    :messages="$errors->get('profile_photo')"
                    class="mt-2"
                />
            </div>
            <div class="ml-4">
                <h2 class="text-xl font-semibold text-white">
                    {{ __('Profile Information') }}
                </h2>
                <p class="mt-1 text-sm text-blue-100">
                    {{ __("Update your account's profile information and email address.") }}
                </p>
            </div>
        </div>
    </div>

    
    <form
        id="send-verification"
        method="post"
        action="{{ route('verification.send') }}"
    >
        @csrf
    </form>

    
    <form
        method="post"
        action="{{ route('profile.update') }}"
        class="px-6 py-6 sm:px-8"
    >
        @csrf
        @method ('patch')

        <div class="space-y-6">
            
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                
                <div>
                    <x-input-label
                        for="name"
                        :value="__('Full Name')"
                        class="mb-2 text-sm font-medium text-gray-700"
                    />
                    <div class="relative rounded-md shadow-sm">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <x-text-input
                            id="name"
                            name="name"
                            type="text"
                            class="block w-full rounded-md border-gray-300 pl-10 transition duration-150 ease-in-out focus:border-blue-500 focus:ring-blue-500"
                            :value="old('name', $user->name)"
                            required
                            autocomplete="name"
                        />
                    </div>
                    <x-input-error
                        class="mt-2"
                        :messages="$errors->get('name')"
                    />
                </div>

                
                <div>
                    <x-input-label
                        for="username"
                        :value="__('Username')"
                        class="mb-2 text-sm font-medium text-gray-700"
                    />
                    <div class="relative rounded-md shadow-sm">
                        <div
                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                        </div>
                        <x-text-input
                            id="username"
                            name="username"
                            type="text"
                            class="block w-full rounded-md border-gray-300 pl-10 transition duration-150 ease-in-out focus:border-blue-500 focus:ring-blue-500"
                            :value="old('username', $user->username)"
                            required
                            autocomplete="username"
                        />
                    </div>
                    <x-input-error
                        class="mt-2"
                        :messages="$errors->get('username')"
                    />
                </div>
            </div>

            
            <div>
                <x-input-label
                    for="email"
                    :value="__('Email Address')"
                    class="mb-2 text-sm font-medium text-gray-700"
                />
                <div class="relative rounded-md shadow-sm">
                    <div
                        class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <x-text-input
                        id="email"
                        name="email"
                        type="email"
                        class="block w-full rounded-md border-gray-300 pl-10 transition duration-150 ease-in-out focus:border-blue-500 focus:ring-blue-500"
                        :value="old('email', $user->email)"
                        required
                        autocomplete="email"
                    />
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div
                        class="mt-4 rounded-lg border border-amber-200 bg-amber-50 p-4"
                    >
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-amber-800">
                                    {{ __('Email Verification Required') }}
                                </h3>
                                <div class="mt-2 text-sm text-amber-700">
                                    <p>
                                        {{ __('Your email address is unverified.') }}
                                        <button
                                            form="send-verification"
                                            class="font-medium text-amber-800 underline transition-colors duration-150 hover:text-amber-900"
                                        >
                                            {{ __('Click here to resend the verification email.') }}
                                        </button>
                                    </p>
                                    @if (session('status') === 'verification-link-sent')
                                        <p class="mt-2 flex items-center font-medium text-green-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        
        <div
            class="mt-6 flex items-center justify-between border-t border-gray-200 pt-6"
        >
            <div class="flex items-center space-x-4">
                <x-primary-button
                    class="flex items-center border-transparent bg-blue-600 px-5 py-2.5 hover:bg-blue-700 focus:ring-blue-500"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    {{ __('Save Changes') }}
                </x-primary-button>

                @if (session('status') === 'profile-updated')
                    <div
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-1"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform translate-y-0"
                        x-transition:leave-end="opacity-0 transform -translate-y-1"
                        x-init="setTimeout(() => (show = false), 3000)"
                        class="flex items-center space-x-2 rounded-md border border-green-200 bg-green-50 px-4 py-2 text-green-800"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <span
                            class="text-sm font-medium"
                            >{{ __('Saved successfully') }}</span
                        >
                    </div>
                @endif
            </div>
        </div>
    </form>
</section>
