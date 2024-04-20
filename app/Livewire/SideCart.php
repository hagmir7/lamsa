<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class SideCart extends Component
{
    public $products = [];
    public $count_products = 0;


    public function mount(){
        if(auth()->user()?->cart_id){
            $this->products = auth()->user()->cart->products;
            $this->count_products = $this->products->count();
        }

    }

    #[On('product-added')]
    public function productAdded()
    {
        $this->products = auth()->user()->cart->products;
    }

    public function render()
    {
        return view('livewire.side-cart');
    }



}
