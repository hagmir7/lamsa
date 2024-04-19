<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class ProductCard extends Component
{

    public $products = [];
    public $cart;

    public function mount(){
        // dd(request()->cookie('cart'));
        // $this->cart = request()->cookie('cart');
        $this->products = Product::all();
    }


    public function addToCart($id)
    {
        $cart = json_decode(request()->cookie('cart'), true) ?? [];



        // Toggle item existence in the cart
        if (($key = array_search($id, $cart)) !== false) {
            unset($cart[$key]); // Remove item directly if it exists
        } else {
            $cart[] = $id;      // Add item if it doesn't exist
        }

        dd($cart);

        return response('Cart updated')->cookie('cart', json_encode($cart), 60 * 24);
    }



    public function render()
    {
        return view('livewire.product-card');
    }
}
