<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class RemoveButton extends Component
{

    public Product $product;



    public function remove()
    {

        $user = auth()->user();
        if ($user->hasAdded($this->product)) {
            $user->cart->products()->detach($this->product);
        }
    }
    public function render()
    {
        return view('livewire.remove-button');
    }
}
