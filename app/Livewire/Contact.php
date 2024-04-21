<?php

namespace App\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Contact extends Component
{
    #[Validate('required|min:3', as: 'Nom complet')]
    public $full_name;
    #[Validate('required|min:3|email', as: 'Email')]
    public $email;
    #[Validate('required|min:3', as: 'Message')]
    public $description;

    public $message;


    public function save(){
        $this->validate();
        ModelsContact::create($this->validate());
        $this->reset();
        $this->message = "Votre message est envoyé avec succès";

    }


    public function render()
    {
        return view('livewire.contact');
    }
}
