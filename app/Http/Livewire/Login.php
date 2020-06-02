<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function submit(){
        $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);
        return redirect(route('home'));
    }

   
    
    public function render()
    {
        return view('livewire.login');
    }
}
