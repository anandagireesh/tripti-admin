<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use App\Models\TouristCategory;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class TouristCategoryList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $editingCategoryId;
    public$category;

    #[On('refresh-category')]
    public function updateList()
    {
        TouristCategory::latest()->paginate(5);
    }
    public function delete($id)
    {
        $category = TouristCategory::find($id);
        $category->delete();
        $this->dispatch('refresh-category')->self();
        session()->flash('delete', true);
    }

    public function edit($id)
    {
        $category = TouristCategory::find($id);
        $this->editingCategoryId = $category->id;
        $this->category = $category->category;
    }

    public function cancelEdit()
    {
        $this->editingCategoryId = null;
        $this->category = '';
    }

    public function updateTouristCategory()
    {
        $category = TouristCategory::find($this->editingCategoryId);
        $category->category = $this->category;
        $category->save();
        $this->editingCategoryId = null;
        $this->category = '';
        $this->dispatch('refresh-category')->self();
        session()->flash('update', true);
    }
    public function render()
    {
        return view('livewire.admin.section.tourist-category-list',[
            'touristCategories'=> TouristCategory::latest()->paginate(5),
        ]);
    }
}
