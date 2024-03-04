<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use Session;
use Livewire\Attributes\Layout;

class SuccessForgetPassword extends Component
{
    public $email;
    public function mount()
    {
        $this->email = Session::get('email');
    }
    public function render()
    {
        $status = (Session::get('hasOtp')) ? Session::get('hasOtp') : false;
        if(!$status){
            session()->forget('hasOtp');
            return view('livewire.admin.section.verify-otp-error')->layout('components.layouts.error');
        }
        return view('livewire.admin.section.success-forget-password')->layout('components.layouts.login');
    }
}
