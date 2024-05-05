<?php

namespace App\Livewire;

use App\Models\ProductCart;
use Livewire\Attributes\On;
use Livewire\Component;

class SideCartMobile extends Component
{
    public $products = [];
    public $count_products = 0;
    public $total = 0;


    // #[On('product-added')]
    public function productAdded()
    {
        $this->products = auth()->user()->cart->products;
        $this->count_products = $this->products->count();

        $this->total = array_sum($this->products->pluck('price')->toArray());
    }


    public function mount()
    {
        if (auth()->user()?->cart_id) {
            $this->products = auth()->user()->cart->products;
            $this->count_products = $this->products->count();
            $this->total = array_sum($this->products->pluck('price')->toArray());
        }
    }

    public function remoteFromCart($id)
    {
        $cart = auth()->user()->cart;
        $product_cart = ProductCart::where('product_id', $id)
            ->where('cart_id', $cart->id)->first();

        if ($product_cart) {
            $product_cart->delete();
            $this->products = auth()->user()->cart->products;
            $this->count_products = $this->products->count();
        }
    }



    public function render()
    {
        return view('livewire.side-cart-mobile');
    }
}
