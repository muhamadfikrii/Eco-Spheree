<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OnboardingWizard extends Component
{
    public $step = 1;

    public $interest;

    public $lifestyle;

    public $commitment;

    public function nextStep()
    {
        if ($this->step < 3) {
            $this->step++;
        } else {
            // Simpan data onboarding ke database (atau session)
            $user = Auth::user();
            $user->update([
                'onboarding_data' => json_encode([
                    'interest' => $this->interest,
                    'lifestyle' => $this->lifestyle,
                    'commitment' => $this->commitment,
                ]),
            ]);

            return redirect()->route('dashboard');
        }
    }

    public function prevStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function render()
    {
        return view('livewire.onboarding-wizard')
            ->layout('layouts.onboarding');
    }
}
