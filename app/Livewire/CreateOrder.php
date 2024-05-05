<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\ProductCart;
use App\Models\ProductOrder;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateOrder extends Component
{
    #[Validate('required|min:3|max:40')]
    public $first_name;
    #[Validate('required|min:3|max:40')]
    public $last_name;
    #[Validate('required|min:3|max:40')]
    public $city;
    #[Validate('required|min:3|max:16')]
    public $phone;
    #[Validate('required|min:3|max:100')]
    public $address;

    public $product_id;


    public function mount($id = null){
        $this->product_id = $id;
    }


    public function save(){
        if(!Cart::content()->count()){
            $this->addError('cart', "Votre panier est vide");
        }
        $order = Order::create([
            'full_name' => $this->first_name . " " . $this->last_name,
            'city' => $this->city,
            'phone' => $this->phone,
            'address' => $this->address,
            'status' => 1
        ]);

        if($this->product_id){
            ProductOrder::create([
                'product_id' => $this->product_id,
                'quantity' => 1,
                'order_id' => $order->id
            ]);
        }else{
            foreach (Cart::content()->toArray() as $product) {
                ProductOrder::create([
                    'product_id' => $product['id'],
                    'quantity' => 1,
                    'order_id' => $order->id
                ]);
            }
            Cart::destroy();
        }





        return redirect('thank');

    }


    public function render()
    {
        return view('livewire.create-order');
    }
}
