<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Menampilkan form edit profil pengguna
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update informasi profil pengguna
     */
    public function update(Request $request)
    {
        $user = $request->user();

        // Cek apakah hanya update foto profil
        $isPhotoOnlyUpdate = $request->hasFile('profile_photo') &&
                            ! $request->has(['username', 'name', 'email']);

        if ($isPhotoOnlyUpdate) {
            // Validasi untuk upload foto
            $validated = $request->validate([
                'profile_photo' => ['required', 'image', 'max:2048'],
            ]);

            // Hapus foto lama
            if ($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)) {
                Storage::disk('public')->delete($user->profile_photo);
            }

            // Simpan foto baru
            $user->profile_photo = $request->file('profile_photo')->store('profile-photos', 'public');
            $user->save();

            return redirect()->route('profile.edit')->with('status', 'profile-updated');
        } else {
            // Validasi untuk update profil lengkap
            $validated = $request->validate([
                'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
                'profile_photo' => ['nullable', 'image', 'max:2048'],
            ]);

            // Handle upload foto profil jika ada
            if ($request->hasFile('profile_photo')) {
                // Hapus foto lama
                if ($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)) {
                    Storage::disk('public')->delete($user->profile_photo);
                }
                $user->profile_photo = $request->file('profile_photo')->store('profile-photos', 'public');
            }

            $oldEmail = $user->email;

            // Update data pengguna
            $user->username = $validated['username'];
            $user->name = $validated['name'];
            $user->email = $validated['email'];

            // Reset verifikasi email jika email berubah
            if ($validated['email'] !== $oldEmail) {
                $user->email_verified_at = null;
            }

            $user->save();

            return redirect()->route('profile.edit')->with('status', 'profile-updated');
        }
    }

    /**
     * Hapus akun pengguna
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ], [
            'password.required' => 'Masukkan password untuk konfirmasi.',
            'password.current_password' => 'Password tidak sesuai.',
        ]);

        $user = $request->user();

        // Logout pengguna
        Auth::logout();

        // Hapus foto profil jika ada
        if ($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)) {
            Storage::disk('public')->delete($user->profile_photo);
        }

        // Hapus akun
        $user->delete();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
