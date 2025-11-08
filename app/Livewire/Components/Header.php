<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Header extends Component
{
    public $currentView = 'home';

    public function switchView($view)
    {
        $this->currentView = $view;
    }

    public function render()
    {
        return view('livewire.components.header');
    }
}
