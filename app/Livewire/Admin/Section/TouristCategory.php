<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\TouristCategory as CategoryTable;

class TouristCategory extends Component
{
    #[Validate('required')]
    public $category='';

    public function updateTouristCategory(){
        session()->flash('cat', true);
        $this->validate();
        CategoryTable::create($this->all());
        $this->dispatch('refresh-category');
        return null;
    }
    public function render()
    {
        return view('livewire.admin.section.tourist-category');
    }
}
