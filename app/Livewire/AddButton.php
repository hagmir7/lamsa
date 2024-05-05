<?php

namespace App\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class AddButton extends Component
{
    public Product $product;

    public function mount() {

    }


    public function toggelAdd()
    {
        $cart = Cart::content()->toArray();
        foreach($cart as $item){
            if($item['id'] == $this->product->id){
                Cart::remove($item['rowId']);
            }else{
                Cart::add(
                    $this->product->id,
                    $this->product->name,
                    1,
                    $this->product->price,
                    [
                        'size' => '',
                        'color' => '',
                        'image' => $this->product->images[0]
                    ]
                );
            }
        }

        return $this->dispatch('itemAdded');



    }

    public function render()
    {
        return view('livewire.add-button', [
            'cart' => Cart::content()
        ]);
    }
}
