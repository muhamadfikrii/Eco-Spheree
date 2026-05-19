<section>
    
    <div
        class="bg-gradient-to-r from-yellow-500 to-slate-800 px-6 py-5 sm:px-8"
    >
        <div class="flex items-center">
            <div
                class="flex h-10 w-10 items-center justify-center rounded-lg bg-white/10 backdrop-blur-sm"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <div class="ml-4">
                <h2 class="text-xl font-semibold text-white">
                    {{ __('Update Password') }}
                </h2>
                <p class="mt-1 text-sm text-blue-100">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </p>
            </div>
        </div>
    </div>

    <form
        method="post"
        action="{{ route('password.update') }}"
        class="px-6 py-6 sm:px-8"
    >
        @csrf
        @method ('put')

        <div class="space-y-6">
            
            <div>
                <x-input-label
                    for="update_password_current_password"
                    :value="__('Current Password')"
                    class="mb-2 text-sm font-medium text-gray-700"
                />
                <div class="relative rounded-md shadow-sm">
                    <div
                        class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <x-text-input
                        id="update_password_current_password"
                        name="current_password"
                        type="password"
                        class="block w-full rounded-md border-gray-300 pl-10 transition duration-150 ease-in-out focus:border-blue-500 focus:ring-blue-500"
                        autocomplete="current-password"
                    />
                </div>
                <x-input-error
                    :messages="$errors->updatePassword->get('current_password')"
                    class="mt-2"
                />
            </div>

            
            <div>
                <x-input-label
                    for="update_password_password"
                    :value="__('New Password')"
                    class="mb-2 text-sm font-medium text-gray-700"
                />
                <div class="relative rounded-md shadow-sm">
                    <div
                        class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                        </svg>
                    </div>
                    <x-text-input
                        id="update_password_password"
                        name="password"
                        type="password"
                        class="block w-full rounded-md border-gray-300 pl-10 transition duration-150 ease-in-out focus:border-blue-500 focus:ring-blue-500"
                        autocomplete="new-password"
                    />
                </div>
                <x-input-error
                    :messages="$errors->updatePassword->get('password')"
                    class="mt-2"
                />
            </div>

            
            <div>
                <x-input-label
                    for="update_password_password_confirmation"
                    :value="__('Confirm Password')"
                    class="mb-2 text-sm font-medium text-gray-700"
                />
                <div class="relative rounded-md shadow-sm">
                    <div
                        class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <x-text-input
                        id="update_password_password_confirmation"
                        name="password_confirmation"
                        type="password"
                        class="block w-full rounded-md border-gray-300 pl-10 transition duration-150 ease-in-out focus:border-blue-500 focus:ring-blue-500"
                        autocomplete="new-password"
                    />
                </div>
                <x-input-error
                    :messages="$errors->updatePassword->get('password_confirmation')"
                    class="mt-2"
                />
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
                    {{ __('Update Password') }}
                </x-primary-button>

                @if (session('status') === 'password-updated')
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
                            >{{ __('Password updated successfully') }}</span
                        >
                    </div>
                @endif
            </div>
        </div>
    </form>
</section>
