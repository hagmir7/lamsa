<?php

namespace App\Livewire;

use App\Models\Subscrip as ModelsSubscrip;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Subscrip extends Component
{
    #[Validate('required|email|min:3')]
    public $email;
    public $message;

    public function save()
    {
        $this->validate();

        if(!ModelsSubscrip::where('email', $this->email)->exists()){
            ModelsSubscrip::create(['email' => $this->email]);
        }
        $this->reset();
        $this->message = "Vous êtes abonné avec succès, Merci!";
    }

    public function render()
    {
        return view('livewire.subscrip');
    }
}
