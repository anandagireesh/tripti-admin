<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    // #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.login') ->layout('components.layouts.admin');
    }
}
