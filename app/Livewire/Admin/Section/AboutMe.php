<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On; 

class AboutMe extends Component
{
    
    public $name;
    public $role;
    public $phone;
    public $email;
    public $bio;

    #[On('refresh-about-me')]
    public function updateList()
    {
        $this->name = Auth::user()->name;
        $this->role = Auth::user()->role;
        $this->phone = AUTH::user()->phone;
        $this->email = Auth::user()->email;
        $this->bio = Auth::user()->bio;
    }

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
        return view('livewire.admin.section.about-me')->with('name',Auth::user()->name)->with('role',Auth::user()->role)->with('phone',Auth::user()->phone)->with('email',Auth::user()->email)->with('bio',Auth::user()->bio);
    }
}
