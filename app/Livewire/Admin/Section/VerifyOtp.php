<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use Session;
use Livewire\Attributes\Layout;

class VerifyOtp extends Component
{
    
    public function render()
    {
        $status = (Session::get('hasOtp')) ? Session::get('hasOtp') : false;
        if(!$status){
            session()->forget('hasOtp');
            return view('livewire.admin.section.verify-otp-error')->layout('components.layouts.error');
        }
        return view('livewire.admin.section.verify-otp')->layout('components.layouts.login');
    }
}
