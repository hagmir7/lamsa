@extends('layouts.app')

@section('content')
<div class="fullwidth-template">
    <div class="banner-wrapper my-wrapper has_background">
        <img src="/assets/imgs/banner-category.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner">
            <h1 class="page-title">MERCI</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                {{-- <ul class="trail-items d-flex justify-content-center" style="list-style: none">
                    <li class="trail-item trail-begin tajawal"><a href="/"><span>Accueil</span></a></li>
                    <li> &#xa0; > &#xa0; </li>
                    <li class="trail-item trail-end active"><span>À propos </span></li>
                </ul> --}}
            </div>
        </div>
    </div>
    <div class="section-025 my-5">
        <h2 class="text-center h3 tajawal mb-5">Nous vous remercions de votre commande</h2>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="text-center">
                    <img width="100px" src="/assets/imgs/thank.png" alt="Nous vous remercions de votre commande">
                    <p class="mt-5 fs-5 h5">Votre commande est en cours de traitement un conseiller vous contactera dans le plus bref détai. <a
                            href="/contact">Contactez-nous</a>
                    </p>
                    <a class="btn bg-light h6 border" href="/#new-collection">Retour aux produits</a>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <x-serveces />
</div>
@endsection
