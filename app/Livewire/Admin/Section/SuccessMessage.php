<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Session;

class SuccessMessage extends Component
{
    public $message;
    public function mount()
    {
        $this->message = Session::get('successMessage');
    }

    #[Layout('components.layouts.error')]
    public function render()
    {
        return view('livewire.admin.section.success-message');
    }
}
