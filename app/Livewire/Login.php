<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{


    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $credentials = $this->validate();
        dd("Login");
        if (Auth::attempt($credentials)) {
            session()->regenerate();

            return redirect()->intended('/');
        } else {

            $this->addError('email', 'Invalid email or password');
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
