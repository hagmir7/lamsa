@extends('layouts.app')

@section('content')
<div class="fullwidth-template">
    <div class="banner-wrapper my-wrapper has_background">
        <img src="/assets/imgs/hero-product.jpg" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
        <div class="banner-wrapper-inner">
            <h1 class="page-title">Que disent les clients ?</h1>
            <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                <ul class="trail-items d-flex justify-content-center" style="list-style: none">
                    <li class="trail-item trail-begin tajawal"><a href="/"><span>Accueil</span></a></li>
                    <li> &#xa0; > &#xa0; </li>
                    <li class="trail-item trail-end active"><span>Que disent les clients ? </span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-025 my-5">
        <h2 class="text-center h3 tajawal mb-5">Capturez l'instant</h2>
        <div class="container">
            <div class="row">
                <h1 class="h3">Que disent les clients ?</h1>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit rerum vitae cumque non sequi ipsum
                molestias tenetur! Veritatis soluta eos, placeat, mollitia expedita quae aperiam molestiae fugiat,
                exercitationem laboriosam nam?

            </div>
        </div>
    </div>
    <x-serveces />
</div>
@endsection
