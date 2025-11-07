<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Home;
use App\Livewire\OnboardingWizard;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('Home');
})->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/onboarding', OnboardingWizard::class)->name('onboarding');
});
