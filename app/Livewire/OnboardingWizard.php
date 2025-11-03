<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class OnboardingWizard extends Component
{
    public $step = 1;
    public $interests = [];
    public $lifestyles = [];
    public $commitments = [];

    public function nextStep()
    {
        if ($this->step == 4 && empty($this->interests)) {
            $this->addError('interests', 'Please select at least one interest.');
            return;
        }
        if ($this->step == 5 && empty($this->lifestyles)) {
            $this->addError('lifestyles', 'Please select at least one lifestyle option.');
            return;
        }
        if ($this->step == 6 && empty($this->commitments)) {
            $this->addError('commitments', 'Please select at least one commitment.');
            return;
        }

        if ($this->step < 6) {
            $this->step++;
        }
    }

    public function prevStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function completeOnboarding()
    {
        if (empty($this->interests) || empty($this->lifestyles) || empty($this->commitments)) {
            $this->addError('general', 'Please complete all selections before finishing.');
            return;
        }

        $user = Auth::user();
        $user->update([
            'onboarding_data' => json_encode([
                'interests' => $this->interests,
                'lifestyles' => $this->lifestyles,
                'commitments' => $this->commitments,
            ])
        ]);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.onboarding-wizard')
        ->layout('layouts.onboarding');
    }
}
