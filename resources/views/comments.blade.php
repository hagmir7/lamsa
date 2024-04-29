@extends('layouts.app')

@section('content')
<div class="fullwidth-template">
    <div class="banner-wrapper my-wrapper has_background">
        <img src="/assets/imgs/inspiration-hreo.png" class="img-responsive hero-bg-img attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner">
            <h1 class="page-title">Galerie d'Inspirations</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items d-flex justify-content-center" style="list-style: none">
                    <li class="trail-item trail-begin tajawal"><a href="/"><span>Accueil</span></a></li>
                    <li> &#xa0; > &#xa0; </li>
                    <li class="trail-item trail-end active"><span>Galerie d'Inspirations </span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-025 my-5">
        <div class="container">
            <div class="lynessa-heading style-01">
                <div class="heading-inner">
                    <div class="fw-bold h5" style="line-height: 29px">
                        Bienvenue dans notre galerie d'inspirations ! Nous adorons voir nos clientes
                        rayonner dans nos créations. Chaque photo partagée ici est une source
                        d'inspiration pour nous et pour toute la communauté.
                    </div>
                </div>
            </div>
            @livewire('comments')
        </div>
    </div>
    <x-serveces />
</div>
@endsection
