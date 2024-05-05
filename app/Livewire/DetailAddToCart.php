<?php

namespace App\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class DetailAddToCart extends Component
{



    public Product $product;

    public $quantity = 1;
    public $size;
    public $color;


    public function mount()
    {
        // dd($this->product);
    }



    public function save()
    {

        Cart::add(
            $this->product->id,
            $this->product->name,
            $this->quantity,
            $this->product->price,
            [
                'size' => 'large',
                'color' => 'White',
                'image' => $this->product->images[0]
            ]
        );

        return $this->dispatch('itemAdded');



    }

    public function render()
    {
        return view('livewire.detail-add-to-cart');
    }
}
