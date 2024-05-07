@extends('layouts.app')

@section('content')
<div class="fullwidth-template">
    <div class="slide-home-04">
        <div class="response-product product-list-owl owl-slick equal-container better-height"
            data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
            data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">

            <div class="slide-wrap">
                <img style="height: 280px;" class="hero" src="/assets/imgs/cart-hore.jpeg" alt="image">
                <img style="height: 280px;" class="hero_mobile d-none" src="/assets/imgs/cart-hore.jpeg" alt="image">
                <div class="slide-info text-center sm-text-right">
                    <div class="container">
                        <div class="slide-inner">
                            {{-- <h5>Sale up to <span>40%</span> Off</h5> --}}
                            <h1 class="h3" style="color: #252525!important; ">Lamssa Fashion</h1>
                            <h2 style="color: #252525!important">Le luxe à petit prix !</h2>
                        </div>
                    </div>
                </div>
                <div class="slugon d-none">
                    <h2 class="slide-title" style="color: #252525 !important">Le luxe à petit prix !</h2>
                </div>
            </div>
        </div>
    </div>
    <main class="site-main main-container no-sidebar">
        <div class="container">
            <div class="row">
                <div class="main-content col-md-12">
                    <div class="page-main-content">
                        <div class="lynessa">
                            <div class="lynessa-notices-wrapper"></div>
                            <form class="lynessa-cart-form">

                                @if (count($items) === 0)
                                <div class="h1 d-flex justify-content-center py-1">
                                    Il n'y a pas de produits
                                </div>
                                @else
                                <table class="shop_table shop_table_responsive cart lynessa-cart-form__contents" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Produit</th>
                                            <th class="product-price">Prix</th>
                                            {{-- <th class="product-quantity">Quantité</th> --}}
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $item)
                                        <tr class="lynessa-cart-form__cart-item cart_item">
                                            <td class="product-remove">
                                                <a href="{{ route('cart.remove', $item['rowId']) }}"
                                                    onclick="return confirm('Etes-vous sûr de vouloir supprimer ce panier de formulaire de produit')">
                                                    <x-delete-icon />
                                                </a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#!">
                                                    <img src="{{ Storage::url($item['options']['image']['path']) }}"
                                                        class="attachment-lynessa_thumbnail size-lynessa_thumbnail" alt="img" width="600" height="778"></a>
                                            </td>
                                            <td class="product-name" data-title="Product">
                                                <a href="#!">{{ $item['name'] }}</a>
                                            </td>
                                            <td class="product-price" data-title="Price">
                                                <span class="lynessa-Price-amount amount">
                                                    <span class="lynessa-Price-currencySymbol"> MAD </span>{{ $item['price'] }} <strong> &#xa0; x &#xa0;  {{ $item['qty'] }} </strong>
                                                </span>
                                            </td>
                                            {{-- <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <span class="qty-label">Quantiy:</span>
                                                    <div class="control">
                                                        <a class="btn-number qtyminus" href="#">-</a>
                                                        <input type="text" value="1" title="Qty" class="input-qty input-text qty text">
                                                        <a class="btn-number qtyplus" href="#">+</a>
                                                    </div>
                                                </div>
                                            </td> --}}
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="lynessa-Price-amount amount">
                                                    <span class="lynessa-Price-currencySymbol"> MAD </span>{{ $item['price'] }}
                                                </span>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                                @endif

                            </form>
                            <div class="cart-collaterals">
                                <div class="cart_totals ">
                                    <h2>Total du panier</h2>
                                    <table class="shop_table shop_table_responsive" cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Prix de livraison</th>
                                                <td data-title="Subtotal">
                                                    <span class="lynessa-Price-amount amount">
                                                        <span class="lynessa-Price-currencySymbol"> MAD </span> {{ $total > 0 ? + 25 : 0 }}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td data-title="Total">
                                                    <strong>
                                                        <span class="lynessa-Price-amount amount">
                                                            <span class="lynessa-Price-currencySymbol"> MAD </span>{{ $total > 0 ? $total +  25 : 0}}
                                                        </span>
                                                    </strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @if (count($items) > 0)
                                        <div class="lynessa-proceed-to-checkout">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#checkOutModal"
                                                class="checkout-button button alt lynessa-forward">
                                                Envoyer le demande
                                            </a>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" style="z-index: 10000" id="checkOutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    @livewire('create-order')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>









</div>
@endsection
