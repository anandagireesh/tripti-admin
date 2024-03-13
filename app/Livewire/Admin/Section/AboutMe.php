<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AboutMe extends Component
{
    public $name;
    public $role;
    public $phone;
    public $email;
    public $bio;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->role = Auth::user()->role;
        $this->phone = AUTH::user()->phone;
        $this->email = Auth::user()->email;
        $this->bio = Auth::user()->bio;

    }
    public function render()
    {
        return view('livewire.admin.section.about-me');
    }
}
