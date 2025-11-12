<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $validated = $request->validated();

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            // Hapus foto lama kalau ada
            if ($user->profile_photo) {
                Storage::disk('public')->delete($user->profile_photo);
            }

            // Simpan foto baru
            $path = $request->file('profile_photo')->store('profile-photos', 'public');
            $user->profile_photo = $path;
        }

        // Update data umum
        $user->fill([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
        ]);

        
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        if (!$user->save()) {
            return back()
                ->with('error', 'Failed to update profile. Please try again.')
                ->withInput();
        }

        return Redirect::route('profile.edit')
            ->with('status', 'profile-updated')
            ->with('message', 'Profile updated successfully!');
    }

    /**
     * Update user's password.
     */
    public function updatePassword(Request $request): RedirectResponse
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = $request->user();

        return back()
            ->with('status', 'password-updated')
            ->with('message', 'Password updated successfully!');
    }

    /**
     * Delete user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        if (!Hash::check($request->password, $user->password)) {
            return back()
                ->withErrors(['password' => 'The provided password does not match your current password.'])
                ->withInput();
        }

        Auth::logout();

        // Hapus foto profil jika ada
        if ($user->profile_photo) {
            Storage::disk('public')->delete($user->profile_photo);
        }

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * Check username availability via AJAX
     */
    public function checkUsername(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'min:3', 'max:20', 'regex:/^[a-zA-Z0-9_]+$/'],
        ]);

        $username = $request->input('username');
        $currentUserId = Auth::id();

        $exists = User::isUsernameTaken($username, $currentUserId);

        return response()->json([
            'available' => !$exists,
            'message' => $exists ? 'Username is already taken' : 'Username is available',
        ]);
    }

    /**
     * Upload profile photo via AJAX (for preview)
     */
    public function uploadProfilePhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('temp-profile-photos', 'public');

            return response()->json([
                'success' => true,
                'photo_url' => Storage::url($path),
                'photo_path' => $path,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'No photo uploaded.',
        ]);
    }

    /**
     * Get user's profile data (for AJAX)
     */
    public function getProfileData(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'name' => $user->name,
            'username' => $user->username,
            'email' => $user->email,
            'profile_photo' => $user->profile_photo ? Storage::url($user->profile_photo) : null,
            'eco_points' => $user->eco_points ?? 0,
            'eco_level' => $user->eco_level ?? 'Beginner',
            'challenges_completed' => $user->challenges_completed ?? 0,
            'daily_streak' => $user->daily_streak ?? 0,
        ]);
    }
}
