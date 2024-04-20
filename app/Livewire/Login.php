<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    public $error;


    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8',
    ];

    public function login()
    {
        $credentials = $this->validate();

        if (Auth::attempt($credentials)) {
            if (request()->next) {
                return redirect()->intended(request()->next);
            } else {
                return redirect()->intended('/');
            }
        } else {
            $this->error = "No User";
        }

    }


    public function render()
    {
        return view('livewire.login');
    }
}
