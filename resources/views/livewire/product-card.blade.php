<div class=" auto-clear lynessa-products">
    <ul class="row products columns-3">
        @forelse ($products as $product)
        <li class="product-item wow fadeInUp product-item rows-space-30 col-bg-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-ts-12 style-01 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock last instock shipping-taxable purchasable product-type-simple"
            data-wow-duration="1s" data-wow-delay="0ms" data-wow="fadeInUp">
            <div
                class="product-item recent-product style-04 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                <div class="product-inner tooltip-top tooltip-all-top">
                    <div class="product-thumb">
                        <a class="thumb-link" href="" tabindex="0">
                            <img class="img-responsive"
                                src="https://imagedelivery.net/6dvntJzmKU3x3sg1oVGvwA/5ebe3158-04f4-4868-1f0a-83f887232800/public"
                                loading="lazy" alt="ETOILE DE NUIT" width="270" height="350">
                        </a>
                        <div class="flash">
                            <span class="onsale"><span class="number limited"
                                    style="letter-spacing: 1px;font-weight: bold;">Édition limitée</span></span>
                        </div>

                        <div class="flash-rupture">
                            <span class="onsale"><span class="number limited"
                                    style="letter-spacing: 1px;font-weight: bold;">Rupture</span></span>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name product_title">
                            <a href="" tabindex="0">ETOILE DE NUIT</a>
                        </h3>
                        <span class="price">
                            <span class="lynessa-Price-amount amount">
                                <span class="lynessa-Price-currencySymbol">MAD </span> 899.00
                            </span>
                        </span>
                        <br>


                        <button type="submit" wire:click='addToCart({{ $product->id }})' class="button btn-success w-100" style="cursor: pointer">
                            <div wire:loading.remove wire:target="addToCart({{ $product->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                            </div>
                            <div wire:loading wire:target="addToCart({{ $product->id }})">
                                Saving post...
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </li>

        @endforeach
    </ul>
</div>
