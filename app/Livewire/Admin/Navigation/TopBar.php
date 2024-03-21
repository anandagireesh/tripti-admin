<?php

namespace App\Livewire\Admin\Navigation;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class TopBar extends Component
{
    public $name;
    public $role;

    #[On('refresh-about-me')]
    public function updateList()
    {
        $this->name = Auth::user()->name;
        $this->role = Auth::user()->role;
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->role = Auth::user()->role;
    }
    public function render()
    {
        return view('livewire.admin.navigation.top-bar');
    }
}
