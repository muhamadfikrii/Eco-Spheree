<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Livewire\ChallengeCenter;
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
})->name('report')->middleware(['auth']);

Route::get('/challenge', function () {
    return view('challenge');
})->name('challenge');
Route::get('/challenge-center', ChallengeCenter::class)
    ->name('challenge.center')->middleware('auth');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/mission-reviews', [App\Http\Controllers\Admin\MissionReviewController::class, 'index'])->name('admin.mission-reviews.index');
    Route::get('/admin/mission-reviews/{submission}', [App\Http\Controllers\Admin\MissionReviewController::class, 'show'])->name('admin.mission-reviews.show');
    Route::post('/admin/mission-reviews/{submission}/approve', [App\Http\Controllers\Admin\MissionReviewController::class, 'approve'])->name('admin.mission-reviews.approve');
    Route::post('/admin/mission-reviews/{submission}/reject', [App\Http\Controllers\Admin\MissionReviewController::class, 'reject'])->name('admin.mission-reviews.reject');

});

Route::get('/eco_track', function () {
    return view('eco_track');
})->name('eco_track');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/explore', function () {
    return view('explore');
})->name('explore');
Route::get('/protect', function () {
    return view('livewire.components.protect');
})->name('protect');
Route::get('/learn_more', function () {
    return view('livewire.components.learn-more');
})->name('learn_more');
Route::get('/discover', function () {
    return view('livewire.components.discover');
})->name('discover');

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
Route::get('/explore/deeper', function () {
    return view('explore-deeper');
})->name('deeper');
