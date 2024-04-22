<div>
    <button wire:click='toggelAdd()' type="submit" class="button btn-primary w-100"
        style="cursor: pointer">
        <div wire:loading.remove>
            @if (auth()->user()->hasAdded($product))
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
