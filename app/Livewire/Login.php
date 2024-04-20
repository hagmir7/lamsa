<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    #[Validate('required|min:3|email')]
    public $email = '';
    #[Validate('required|min:3')]
    public $password;

    public $error = '';


    public $is_login = true;


    public function formSwitcher(){
        if($this->is_long){
            $this->is_login = false;
        }else{
            $this->is_login = true;
        }
    }

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
            return $this->error = "Les informations d'identification invalides";
        }



        // if (Auth::attempt($credentials)) {
        //     session()->regenerate();

        //     return redirect()->intended('/');
        // } else {
        //     $this->addError('email', 'Invalid email or password');
        // }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
