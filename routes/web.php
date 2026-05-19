<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RewardController;
use App\Livewire\ChallengeCenter;
use App\Livewire\OnboardingWizard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/insights', function () {
    return view('insights');
})->name('insights');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/health', function () {
    return view('health');
})->name('health');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/learn', function () {
    return view('learn-more');
})->name('learnmore');

Route::get('/partner', function () {
    return view('become-partner');
})->name('become');

Route::get('/learn/contact', function () {
    return view('contact-partner');
})->name('contact-partner');

// Legacy routes (consider removing if not used)
Route::get('/core-capabilitie', function () {
    return view('livewire.components.core-capabilitie');
})->name('core-capabilitie');

Route::get('/learn_more', function () {
    return view('livewire.components.learn-more');
})->name('learn_more');
