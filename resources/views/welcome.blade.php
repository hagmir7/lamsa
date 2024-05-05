@extends('layouts.app')

@section('content')
<div class="fullwidth-template">
    <x-header />
    {{-- Products --}}


    @livewire('category-card')
    <x-serveces />
    <div class="section-011 mt-5" id="new-collection">
        <div class="container">
            <div class="lynessa-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">Nouvelle collection</h3>
                    <div class="subtitle">
                        Découvrez les derniers produits de notre boutique en ligne <strong>Lamssa Fashion</strong>
                    </div>
                </div>
            </div>
            @livewire('product-card')
        </div>
    </div>

    {{-- <div class="section-025 py-5">
        <div class="container">
            <h2 class="text-center h3 mb-5 fw-bold" style='font-family: "Manrope", sans-serif;!important'>Capturez
                l'instant</h2>
            <div class="row d-flex align-items-center">
                <div class="col-md-7" style='font-family: "Manrope", sans-serif;!important'>
                    <p class="h5 fw-bold" style="line-height: 40px;">
                        Vivez pleinement l'esprit de Lamssa Fashion en portant nos
                        ensembles lors de vos escapades. Que ce soit sur la plage,
                        dans un café confortable ou en explorant de nouveaux
                        horizons, nos tenues sont parfaites pour créer des
                        souvenirs inoubliables et prendre de magnifiques photos
                        qui reflètent votre style unique.</p>
                </div>
                <div class="col-md-5">
                    <div class="az_single_image-wrapper az_box_border_grey rounded">
                        <img src="/assets/imgs/instant.png" class="az_single_image-img attachment-full rounded"
                            alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="section-033 mb-4">
        <div class="container">
            <div class="section-034" style="background-image: url('/assets/imgs/instant.png');background-position: left;">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-6 offset-sm-1 col-xl-5 col-lg-5">
                        <div class="lynessa-slide">
                            <div class="owl-slick equal-container better-height">
                                <div class="lynessa-testimonial style-02">
                                    <div class="testimonial-inner">
                                        <div>
                                            <svg style="text-shadow: 12px 12px 12px white;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path
                                                    d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                                                <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                                            </svg>
                                        </div>
                                        <p class="desc h5" style="text-shadow: 12px 12px 12px white; color:#87654a">Capturez l'instant</p>
                                        <p class="fw-bold h5 text-white" style="line-height: 35px;text-shadow: 12px 12px 12px white;">Vivez pleinement l'esprit de Lamssa Fashion en portant nos
                                        ensembles lors de vos escapades. Que ce soit sur la plage,
                                        dans un café confortable ou en explorant de nouveaux
                                        horizons, nos tenues sont parfaites pour créer des
                                        souvenirs inoubliables et prendre de magnifiques photos
                                        qui reflètent votre style unique.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-bottom-hero />
</div>
@endsection
