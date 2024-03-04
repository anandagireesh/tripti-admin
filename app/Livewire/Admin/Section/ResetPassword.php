<?php

namespace App\Livewire\Admin\Section;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Component
{
    #[Title('Tripti| Reset Password')] 

    #[Validate('required|email')] 
    public $email='';

    #[Validate('required|confirmed')] 
    public $password='';

    #[Validate('required')] 
    public $password_confirmation='';

    public $resetEmail='';
    public $token='';

    public function changePassword(){
        $this->validate();
        $resteData = DB::table('password_reset_tokens')->where('token',$this->token)->where('email',$this->email)->first();
        if($resteData){
            User::where('email', $this->email)
            ->update(['password' => Hash::make($this->password)]);

            $deleted = DB::table('password_reset_tokens')->where('token',$this->token)->where('email',$this->email)->delete();

            return redirect('success-message')->with('successMessage', 'Passward has changed successfully');
        }
        return redirect('failed-message');
    }

    public function mount($token)
    {
        $resetToken = DB::table('password_reset_tokens')->where('token',$token)->first();
        if($resetToken){
        $this->email = $resetToken->email;
        $this->token = $token;
        }else{
            return redirect('failed-message');  
        }
       

    }

    public function render()
    {
        return view('livewire.admin.section.reset-password')->layout('components.layouts.login');
    }
}
