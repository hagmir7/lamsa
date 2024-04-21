<div class="single_variation_wrap">
    <div class="lynessa-variation-add-to-cart variations_button ">
        <button wire:click='addToCart' class="btn btn-primary m-2 w-100">
            @if ($in_cart)
                <span wire:loading.remove> <x-check-icon /></span>
            @else
                 <span wire:loading.remove> <x-cart-icon /> Ajouter au panier </span>
            @endif
             <span wire:loading><x-spenner-icon-brown /></span>
        </button>
    </div>
</div>
