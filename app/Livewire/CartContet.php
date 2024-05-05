<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;
use Livewire\Component;
use PhpParser\Node\Expr\FuncCall;

class CartContet extends Component
{

    public $cartCount = 0;
    public $total = 0;
    public $products;


    #[On('itemAdded')]
    public function mount()
    {
        // Fetch cart content
        $cartContent = Cart::content();

        $this->products = $cartContent->map(function ($item) {
            return [
                'rowId' => $item->rowId,
                'id' => $item->id,
                'name' => $item->name,
                'qty' => $item->qty,
                'price' => $item->price,
                'options' => $item->options->toArray(), // Convert options to array
            ];
        })->toArray();


        $this->cartCount = count($cartContent);
        $this->total = Cart::subtotal();
    }


    public function removeItem($id)
    {
        Cart::remove($id);
        $this->mount();
    }


    public function render()
    {
        return view('livewire.cart-contet');
    }
}
