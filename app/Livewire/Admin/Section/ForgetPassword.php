<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\User;
use App\Jobs\SendOTPEmailQueueJob;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redis;

class ForgetPassword extends Component
{

    #[Validate('required|email')] 
    public $email='';

    public function sendOtpEmail(){
        $this->validate();
        $email = $this->email;
        $user  =User::where('email',$email)->first();
        if(!$user){
           return $this->addError('success', 'The provided email does not exist');
        }
        
        $otp = rand(100000, 999999);
        $details['email'] = $email;
        $details['otp'] = $otp;
        $details['date'] = Carbon::now()->isoFormat('DD MMM, YYYY');
        $details['name'] = $user->name;
        Redis::setex("otp:$email", 300, $otp);
        dispatch(new SendOTPEmailQueueJob($details));
        
        return redirect('verify-otp')->with('hasOtp', true);
        return view('livewire.admin.section.verify-otp');
        dd($otp);

    }

    #[Layout('components.layouts.login')]
    public function render()
    {
        return view('livewire.admin.section.forget-password');
    }
}
