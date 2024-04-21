<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductCart;
use App\Models\User;
use Livewire\Component;

class AddToCart extends Component
{

    public $id;


    public function mount(Product $product)
    {
        $this->id = $product->id;
    }

    public function addToCart()
    {

        if(auth()->user()->cart){
            $user_products = auth()->user()?->cart?->products->pluck("id")->toArray();
            if(in_array($this->id, $user_products)){
                $productCart = ProductCart::where('product_id', $this->id)->first();
                if ($productCart) {
                    $productCart->delete();
                }
            }else{

                $cart = auth()->user()->cart;
                ProductCart::create([
                    'cart_id' => $cart->id,
                    'product_id' => $this->id,
                    'quantity' => 1
                ]);
            }

        }else{

            $cart = Cart::create([]);
            $user_id = auth()->user()->id;
            $user = User::find($user_id);
            $user->update([
                'cart_id' => $cart->id
            ]);

            ProductCart::create([
                'cart_id' => $cart->id,
                'product_id' => $this->id,
                'quantity' => 1
            ]);
        }


        if (auth()->user()?->cart) {
            $user_products = auth()->user()?->cart?->products->pluck("id")->toArray();
        }

    }


    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
