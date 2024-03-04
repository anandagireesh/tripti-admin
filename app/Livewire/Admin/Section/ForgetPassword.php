<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\User;
use App\Jobs\SendOTPEmailQueueJob;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use DB;

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
        
        $token = Str::random(64);
        $details['email'] = $email;
        $details['otp'] = env('BASE_URL').'/reset-password/'.$token;
        $details['date'] = Carbon::now()->isoFormat('DD MMM, YYYY');
        $details['name'] = $user->name;
        DB::table('password_reset_tokens')->insert([
            'email' => $email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);
        dispatch(new SendOTPEmailQueueJob($details));   
        return redirect('sucess-forget-password')->with('hasOtp', true)->with('email',$email);
    }

    #[Layout('components.layouts.login')]
    public function render()
    {
        return view('livewire.admin.section.forget-password');
    }
}
