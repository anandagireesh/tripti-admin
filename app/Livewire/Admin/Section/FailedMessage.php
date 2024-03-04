<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use Livewire\Attributes\Layout;

class FailedMessage extends Component
{
    #[Layout('components.layouts.error')]
    public function render()
    {
        return view('livewire.admin.section.failed-message');
    }
}
