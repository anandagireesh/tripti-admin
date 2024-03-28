<?php

namespace App\Livewire\Admin\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\TouristCategory;


class AddTouristPlace extends Component
{
    #[Title('Tripti| Super Admin| Tourist Places')]
    public $breadTitle='';

    public function mount()
    {
        $this->breadTitle = 'Tourist Places';
    }
    public function render()
    {
        return view('livewire.admin.pages.add-tourist-place');
    }
}
