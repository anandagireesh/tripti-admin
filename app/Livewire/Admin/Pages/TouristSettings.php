<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

class TouristSettings extends Component
{
    #[Title('Tripti| Super Admin| Tourist Sttings')]
    public $breadTitle='';

    public function mount()
    {
        $this->breadTitle = 'Tourist Category';
    }
    public function render()
    {
        return view('livewire.admin.pages.tourist-settings');
    }
}
