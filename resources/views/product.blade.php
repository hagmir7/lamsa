@extends('layouts.app')


@section('content')
    <div class="banner-wrapper my-wrapper has_background">
        <img src="/assets/imgs/product-hero.png" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner">
            <h1 class="page-title">{{ $product->name }}</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items d-flex justify-content-center" style="list-style: none">
                    <li class="trail-item trail-begin tajawal"><a href="/"><span>Accueil</span></a></li>
                    <li> &#xa0; > &#xa0; </li>
                    <li class="trail-item trail-end active"><span>Détail du produit </span></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="single-thumb-vertical main-container shop-page no-sidebar">
        <div class="container">
            <div class="row">
                <div class="main-content col-md-12">
                    <div class="lynessa-notices-wrapper"></div>
                    <div id="product-27"
                        class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="main-contain-summary">
                            <div class="contain-left has-gallery">


                                <div class="single-left" style="float: left">
                                    <div
                                        class="lynessa-product-gallery lynessa-product-gallery--with-images lynessa-product-gallery--columns-4 images">
                                        <span href="#" class="lynessa-product-gallery__trigger activeZoom d-none">
                                            <img draggable="false" class="emoji" alt="🔍"
                                                src="https://s.w.org/images/core/emoji/11/svg/1f50d.svg">
                                        </span>
                                        <span href="#" class="hide-zoom d-none">
                                            <svg viewBox="0 0 24 24" fill="none" height="20px" width="20px"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M9.60997 9.60714C8.05503 10.4549 7 12.1043 7 14C7 16.7614 9.23858 19 12 19C13.8966 19 15.5466 17.944 16.3941 16.3878M21 14C21 9.02944 16.9706 5 12 5C11.5582 5 11.1238 5.03184 10.699 5.09334M3 14C3 11.0069 4.46104 8.35513 6.70883 6.71886M3 3L21 21"
                                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <div class="flex-viewport">
                                            <figure class="lynessa-product-gallery__wrapper">
                                                @foreach ($product->images as $image)
                                                <div class="lynessa-product-gallery__image">
                                                    <img class="toZoom" alt="img" src="{{ Storage::url($image->path) }}">
                                                </div>
                                                @endforeach
                                            </figure>
                                        </div>
                                        <ol class="flex-control-nav flex-control-thumbs">
                                            @foreach ($product->images as $image)
                                            <li>
                                                <img src="{{ Storage::url($image->path) }}" alt="img">
                                            </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                                <div class="summary entry-summary" style=" text-align:  start; padding:0 20px ">
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>


                                    <h1 class="product_title entry-title">{{ $product->name }}</h1>
                                    <p class="price">
                                        <span class="lynessa-Price-amount amount">
                                            {{ $product->price }} MAD
                                        </span>
                                    </p>

                                    {{-- <p class="stock in-stock tajawal"> Disponibilité : <span> {{
                                            $product->status}}</span></p> --}}
                                    <div class="lynessa-product-details__short-description">
                                        <p class="tajawal">{{ $product->description }}</p>
                                    </div>



                                        <table class="variations">
                                            <tbody>

                                                @if ($product->sizes->count())
                                                <tr>
                                                    <td class="label tajawal">
                                                        <label>Taille</label>
                                                    </td>
                                                    <td class="value">
                                                        <div class="data-val attribute-pa_color" data-attributetype="box_style"
                                                            style=" display:flex ;margin-right: 4px;">
                                                            @foreach ($product->sizes as $size)
                                                            <div class="btn bg-light mx-1 border text-uppercase" data-value="{{ $size->name }}">
                                                                {{ $size->name }}
                                                            </div>
                                                            @endforeach
                                                        </div>

                                                    </td>
                                                </tr>
                                                @endif

                                                @if ($product->colors->count())
                                                <tr>
                                                    <td class="label tajawal">
                                                        <label>Colours</label>
                                                    </td>

                                                    <td class="value">
                                                        <div class="data-val attribute-pa_color flex me-2" data-attributetype="box_style">
                                                            @foreach ($product->colors as $color)
                                                            <div class="btn p-3 mx-1 border text-uppercase" style="background-color: {{ $color->code }}"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{ $color->name }}"
                                                                data-value="{{ $color->name }}">
                                                            </div>
                                                            @endforeach
                                                        </div>

                                                    </td>
                                                </tr>
                                                @endif

                                            </tbody>
                                        </table>




                                    @livewire('detail-add-to-cart', ['product' => $product], key($product->id))
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#checkOutModal" class="btn btn-primary m-2 w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                                        </svg>
                                        Acheter maintenant
                                    </a>



                                </div>
                            </div>
                        </div>

                    </div>
                    @if ($product->body)
                        <div class="mb-4">
                            <h4>Description</h4>
                            <div>{!! $product->body !!}</div>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" style="z-index: 10000" id="checkOutModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        @livewire('create-order', ['id' => $product->id])
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
@endsection
