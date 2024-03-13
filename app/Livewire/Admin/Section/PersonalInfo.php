<?php

namespace App\Livewire\Admin\Section;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use App\Models\User;

class PersonalInfo extends Component
{
    #[Validate('required')] 
    public $name='';

    #[Validate('sometimes')] 
    public $bio='';

    #[Validate('required|email')] 
    public $email='';

    #[Validate('required')] 
    public $role='';

    #[Validate('sometimes')] 
    public $company_name='';

    #[Validate('sometimes|url:http,https')] 
    public $website='';

    #[Validate('sometimes|url:http,https')] 
    public $facebook='';

    #[Validate('sometimes|url:http,https')] 
    public $twitter='';

    #[Validate('sometimes|url:http,https')] 
    public $instagram='';

    #[Validate('sometimes|url:http,https')] 
    public $linkedin='';

    public function updateAccountDetail(){
        $this->validate();
        User::where('id',Auth::user()->id)->update($this->all());
        
    }
    public function mount(){
        $this->name = AUTH::user()->name;
        $this->bio = AUTH::user()->bio;
        $this->email = AUTH::user()->email;
        $this->role = AUTH::user()->role;
        $this->company_name = AUTH::user()->company_name;
        $this->website = AUTH::user()->website;
        $this->facebook = AUTH::user()->facebook;
        $this->twitter = AUTH::user()->twitter;
        $this->instagram = AUTH::user()->instagram;
        $this->linkedin = AUTH::user()->linkedin;
    }

    public function render()
    {
        return view('livewire.admin.section.personal-info');
    }
}
