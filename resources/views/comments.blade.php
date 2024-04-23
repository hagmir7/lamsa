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
        <div class="container">
            {{-- <div class="lynessa-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">
                        Blog Grid</h3>
                    <div class="subtitle">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit erat vehicula ad, mollis viverra
                        vulputate
                    </div>
                </div>
            </div> --}}
            @livewire('comments')
        </div>
    </div>
    <x-serveces />
</div>
@endsection
