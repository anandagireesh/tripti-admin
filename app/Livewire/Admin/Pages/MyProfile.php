<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Component;

class MyProfile extends Component
{
    public $breadTitle='';

    public function mount()
    {
        $this->breadTitle = 'My Account';
    }
    public function render()
    {
        return view('livewire.admin.pages.my-profile');
    }
}
