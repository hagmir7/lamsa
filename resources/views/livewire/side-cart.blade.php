<div class="header-control" style="margin-top: -10px !important">
    <div class="header-control-inner">
        <div class="meta-dreaming">
            <div class="block-minicart block-dreaming lynessa-mini-cart lynessa-dropdown card_header_container" id="">
                <div class="shopcart-dropdown block-cart-link" data-lynessa="lynessa-dropdown">
                    <a class="block-link link-dropdown" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#272626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M17 17h-11v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                        </svg>
                        <span class="count">{{ $count_products }}</span>
                    </a>
                </div>
                <div class="widget lynessa widget_shopping_cart" id="card_container">
                    <div class="widget_shopping_cart_content">
                        <h3 class="minicart-title tajawal">Mon panier<span class="minicart-number-items">{{ $count_products }}</span></h3>
                        <div class="scroll-wrapper lynessa-mini-cart cart_list product_list_widget"
                            style="position: relative;">
                            <ul class="lynessa-mini-cart cart_list me-0 mt-0 h-vh product_list_widget scroll-content"  style="0px; max-height: none;">
                                @foreach ($products as $product)
                                    <li class="lynessa-mini-cart-item mini_cart_item position-relative">
                                        <a wire:click='remoteFromCart({{ $product->id }})' href="#" class="position-absolute" style="right: 10px;">
                                            <x-delete-icon/>
                                        </a>
                                        </a>
                                        @if(isset($product->images[0]))
                                        <a href="{{ route("product", $product->id) }}">
                                            <img src="{{ Storage::url($product->images[0]->path) }}" class="attachment-lynessa_thumbnail size-lynessa_thumbnail"
                                                alt="img" width="600" height="778">
                                            {{ $product->name }}
                                        </a>
                                        @else
                                        <!-- Handle the case where there are no images -->
                                        @endif
                                        <span class="quantity">1 ×
                                            <span class="lynessa-Price-amount amount">
                                                <span class="lynessa-Price-currencySymbol">MAD {{ $product->price }} </span>
                                            </span>
                                        </span>
                                    </li>
                                @endforeach

                            </ul>
                        </div>

                        <p class="lynessa-mini-cart__total total"><strong>Total:</strong>
                            <span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol"> MAD </span>{{ $total }}</span>
                        </p>
                        <p class="lynessa-mini-cart__buttons buttons">
                            <a href="/cart" class="button w-100 checkout lynessa-forward tajawal">Commander
                                maintenant</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
