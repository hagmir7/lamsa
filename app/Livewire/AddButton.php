<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class AddButton extends Component
{
    public Product $product;
    public function toggelAdd()
    {

        $user = auth()->user();
        if ($user->hasAdded($this->product)) {
            $user->cart->products()->detach($this->product);
            $this->dispatch('product-added');
            return;
        }
        $user->cart->products()->attach($this->product);
        $this->dispatch('product-added');
    }

    public function render()
    {
        return view('livewire.add-button');
    }
}
