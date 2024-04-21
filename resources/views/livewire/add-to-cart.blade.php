<div class="single_variation_wrap mt-4">
    <div class="lynessa-variation-add-to-cart variations_button ">
        <button wire:click='addToCart' class="btn btn-success p-2 w-100">
            @if ($in_cart)
                <span wire:loading.remove> <x-check-icon /></span>
            @else
                 <span wire:loading.remove> <x-cart-icon /> Ajouter au panier </span>
            @endif
             <span wire:loading><x-spenner-icon /></span>
        </button>
    </div>
</div>
