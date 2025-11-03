<x-guest-layout>
    <div class="animate-fade-in-up space-y-6 text-gray-100">

        <!-- Header -->
        <div class="text-center">
            <h2 class="text-2xl font-semibold text-emerald-400">Buat Akun Baru</h2>
            <p class="text-sm text-slate-400 mt-1">Gabung untuk melacak dan menjaga jejak hijau kamu 🌍</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama Lengkap')" class="text-emerald-300" />
                <x-text-input 
                    id="name" 
                    type="text" 
                    name="name" 
                    :value="old('name')" 
                    required 
                    autofocus 
                    autocomplete="name"
                    class="mt-1 block w-full bg-slate-800/60 border-slate-700 text-gray-100 rounded-xl focus:border-emerald-500 focus:ring-emerald-500 placeholder-gray-400"
                    placeholder="Masukkan nama kamu"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400" />
            </div>

            <!-- Username -->
            <div>
                <x-input-label for="username" :value="__('Username')" class="text-emerald-300" />
                <x-text-input 
                    id="username" 
                    type="text" 
                    name="username" 
                    :value="old('username')" 
                    required 
                    autocomplete="username"
                    class="mt-1 block w-full bg-slate-800/60 border-slate-700 text-gray-100 rounded-xl focus:border-emerald-500 focus:ring-emerald-500 placeholder-gray-400"
                    placeholder="Pilih username unik"
                />
                <x-input-error :messages="$errors->get('username')" class="mt-2 text-red-400" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Alamat Email')" class="text-emerald-300" />
                <x-text-input 
                    id="email" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    required 
                    autocomplete="email"
                    class="mt-1 block w-full bg-slate-800/60 border-slate-700 text-gray-100 rounded-xl focus:border-emerald-500 focus:ring-emerald-500 placeholder-gray-400"
                    placeholder="nama@email.com"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Kata Sandi')" class="text-emerald-300" />
                <x-text-input 
                    id="password" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="new-password"
                    class="mt-1 block w-full bg-slate-800/60 border-slate-700 text-gray-100 rounded-xl focus:border-emerald-500 focus:ring-emerald-500 placeholder-gray-400"
                    placeholder="Minimal 8 karakter"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" class="text-emerald-300" />
                <x-text-input 
                    id="password_confirmation" 
                    type="password" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password"
                    class="mt-1 block w-full bg-slate-800/60 border-slate-700 text-gray-100 rounded-xl focus:border-emerald-500 focus:ring-emerald-500 placeholder-gray-400"
                    placeholder="Ketik ulang kata sandi"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400" />
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between mt-6">
                <a href="{{ route('login') }}" class="text-sm text-slate-400 hover:text-emerald-300 transition">
                    Sudah punya akun?
                </a>

                <x-primary-button class="bg-emerald-600 hover:bg-emerald-700 px-5 py-2.5 rounded-xl transition-all">
                    {{ __('Daftar Sekarang') }}
                </x-primary-button>
            </div>
        </form>
    </div>

    <!-- Animasi sederhana -->
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
    </style>
</x-guest-layout>
