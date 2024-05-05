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
    <x-bottom-hero />
</div>
@endsection
