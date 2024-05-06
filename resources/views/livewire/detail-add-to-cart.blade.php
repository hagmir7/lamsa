<div>
    <form wire:submit.prevent='save'>
        <div class="d-block d-inline d-md-flex gp-2 gp-2">
            @if ($product->colors->count())
                <div class="ml-2 ms-2">
                    <div><label>{{ __("Colour") }}<label></div>
                    <select wire:model='color' class="col-sm-12">
                        <option value="">{{ __("Couleur") }}</option>
                        @foreach ($product->colors as $color)
                        <option class="p-3" style="background-color: {{ $color->code }}!important" value="{{ $color->name }}">{{$color->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            @if ($product->sizes->count())
                <div class="ml-2 ms-2">
                    <div><label>{{ __("Taille") }}<label></div>
                    <select wire:model='size' class="col-sm-12">
                        <option value="">{{ __("Taille") }}</option>
                        @foreach ($product->sizes as $size)
                        <option value="{{ $size->name }}">{{ $size->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            <div class="ml-2 ms-2">
                <div><label>{{ __("Quantity") }}<label></div>
                <input type="text" wire:model='quantity' class="col-sm-12">
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-2 w-100 mt-4" style="cursor: pointer">
            <div wire:loading.remove><x-cart-icon /></div>
            <div class="mt-2" wire:loading>
                <x-spenner-icon-brown />
            </div>
        </button>
    </form>
</div>
