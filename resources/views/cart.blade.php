@extends('layouts.app')

@section('content')
<div class="fullwidth-template">
    <div class="banner-wrapper my-wrapper has_background">
        <img src="/assets/imgs/hero-product.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner">
            <h1 class="page-title">Demande de commande</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items d-flex justify-content-center" style="list-style: none">
                    <li class="trail-item trail-begin tajawal"><a href="/"><span>Accueil</span></a></li>
                    <li> &#xa0; > &#xa0; </li>
                    <li class="trail-item trail-end active"><span>Demande de commande </span></li>
                </ul>
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
                                <table class="shop_table shop_table_responsive cart lynessa-cart-form__contents"
                                    cellspacing="0">
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
                                                    <a href="{{ route('cart.remove', $item->id) }}" onclick="return confirm('Etes-vous sûr de vouloir supprimer ce panier de formulaire de produit')">
                                                        <x-delete-icon />
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="{{ route('product', $item->product->id) }}">
                                                        <img src="{{ Storage::url($item->product->images[0]->path) }}" class="attachment-lynessa_thumbnail size-lynessa_thumbnail" alt="img" width="600" height="778"></a>
                                                </td>
                                                <td class="product-name" data-title="Product">
                                                    <a href="{{ route('product', $item->product->id) }}">{{ $item->product->name }}</a>
                                                </td>
                                                <td class="product-price" data-title="Price">
                                                    <span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol"> MAD </span>{{ $item->product->price }}</span>
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
                                                        <span class="lynessa-Price-currencySymbol"> MAD </span>{{ $item->product->price }}
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </form>
                            <div class="cart-collaterals">
                                <div class="cart_totals ">
                                    <h2>Totaux du panier</h2>
                                    <table class="shop_table shop_table_responsive" cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Total</th>
                                                <td data-title="Subtotal">
                                                    <span class="lynessa-Price-amount amount">
                                                        <span class="lynessa-Price-currencySymbol"> MAD </span>{{ $total }}
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td data-title="Total">
                                                    <strong>
                                                        <span class="lynessa-Price-amount amount">
                                                            <span class="lynessa-Price-currencySymbol"> MAD </span>{{ $total }}
                                                        </span>
                                                    </strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="lynessa-proceed-to-checkout">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#checkOutModal" class="checkout-button button alt lynessa-forward">
                                            Envoyer le demande
                                        </a>
                                    </div>
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
