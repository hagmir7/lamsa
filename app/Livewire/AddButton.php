<?php

namespace App\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class AddButton extends Component
{
    public Product $product;
    public $exists = false;

    public function mount() {

    }


    public function toggleAdd()
    {
        $cart = Cart::content()->toArray();
        $productExistsInCart = false;

        // Check if the product already exists in the cart
        foreach ($cart as $item) {
            if ($item['id'] == $this->product->id) {
                $productExistsInCart = true;
                Cart::remove($item['rowId']); // Remove the product if it exists in the cart
                break; // Exit the loop since we found the product
            }
        }

        // If the product does not exist in the cart, add it
        if (!$productExistsInCart) {
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

        return $this->dispatch('itemAdded');
    }


    public function render()
    {
        return view('livewire.add-button', [
            'cart' => Cart::content()
        ]);
    }
}
