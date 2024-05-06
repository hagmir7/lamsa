<div>
    <button wire:click.prevent='toggleAdd()' type="button" class="button btn-primary w-100"
        style="cursor: pointer">
        <div wire:loading.remove>
            @if ($cart->where('id', $product->id)->count())
                <x-check-icon />
            @else
                <x-cart-icon />
            @endif


        </div>
        <div class="pt-2" wire:loading>
            <x-spenner-icon-brown />
        </div>
    </button>
</div>
