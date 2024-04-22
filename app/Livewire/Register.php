<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{


    public $first_name;
    public $last_name;
    public $email;
    public $password;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
    ];

    public function register()
    {
        $validatedData = $this->validate();
        $cart = Cart::create([]);
        $user = User::create([
            'name' => $validatedData['first_name'] . " " . $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'cart_id' => $cart->id
        ]);

        // Optionally, authenticate the user
        auth()->login($user);

        redirect('/');
    }
    public function render()
    {
        return view('livewire.register');
    }
}
