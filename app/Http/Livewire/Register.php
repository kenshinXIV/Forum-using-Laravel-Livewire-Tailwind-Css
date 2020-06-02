<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;
class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
           
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        return redirect(route('login'));


        
    }
    public function render()
    {
        return view('livewire.register');
    }
}
