<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Title;


class Dashboard extends Component
{
    #[Title('Tripti| Super Admin Dashboard')] 
    public function render()
    {
        return view('livewire.admin.pages.dashboard');
    }
}
