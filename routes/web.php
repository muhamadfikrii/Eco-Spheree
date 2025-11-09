<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\OnboardingWizard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');





Route::get('/report', function () {
    return view('report');
})->name('report');

Route::get('/challenge', function () {
    return view('challenge');
})->name('challenge');

Route::get('/eco_track', function () {
    return view('eco_track');
})->name('eco_track');

Route::get('/leaderboard', function () {
    return view('leaderboard');
})->name('leaderboard');

Route::get('/explore', function() {
    return view('explore');
})->name('explore');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/onboarding', OnboardingWizard::class)->name('onboarding');
});

Route::get('/learn', function () {
    return view('learn-more');
})->name('learnmore');
Route::get('/partner', function () {
    return view('become-partner');
})->name('become');
Route::get('/learn/contact', function () {
    return view('contact-partner');
})->name('contact-partner');