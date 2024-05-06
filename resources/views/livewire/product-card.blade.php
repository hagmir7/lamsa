<div class="auto-clear lynessa-products">
    <ul class="row products columns-3">
        @foreach ($products as $product)
        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-ts-12 style-01 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock last instock shipping-taxable purchasable product-type-simple"
            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
            <div class="product-item recent-product style-04 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                <div class="product-inner tooltip-top tooltip-all-top">
                    <div class="product-thumb">
                        <a class="thumb-link" href="{{ route('product', $product->slug) }}" tabindex="0">
                            <img class="img-responsive product-image" src="{{ Storage::url($product->images[0]->path) }}" loading="lazy" alt="{{ $product->name }}T" width="270" height="350">
                        </a>
                        {{-- <div class="flash">
                            <span class="onsale"><span class="number limited fw-bold" style="letter-spacing: 1px;">{{ $product->status }}</span></span>
                        </div> --}}
                    </div>
                    <div class="product-info">
                        <h3 class="product-name product_title">
                            <a href="{{ route('product', $product->slug) }}" tabindex="0">{{ $product->name }}</a>
                        </h3>
                        <span class="price">
                            <span class="lynessa-Price-amount amount">
                                <span class="lynessa-Price-currencySymbol">MAD </span> {{ $product->price }}
                            </span>
                        </span><br>
                            @livewire('add-button', ['product' => $product], key($product->id))
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
    @if ($total_products > $amount)
    <div class="d-flex justify-content-center">
        <button class="load-btn w-25" wire:click='loadMore' role="button">
            <span wire:loading.remove wire:target='loadMore'>Voir plus</span>
            <span class="mt-2" wire:loading wire:target='loadMore'>
                <x-spenner-icon />
            </span>
        </button>
    </div>

    @endif

</div>
