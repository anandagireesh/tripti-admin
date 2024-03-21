<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use App\Models\TouristPlaces;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class TouristPlacesList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.admin.section.tourist-places-list',
        [
            'touristPlaces' => TouristPlaces::latest()->paginate(5),
        ]);
    }
}
