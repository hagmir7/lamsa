@extends('layouts.app')

@section('content')
<div class="fullwidth-template">
    <x-header />







    {{-- Products --}}
    <div class="section-011 mt-5">
        <div class="container">
            <div class="lynessa-heading style-01">
                <div class="heading-inner">
                    <h3 class="title tajawal">
                        Nouvelle collection</h3>
                    <div class="subtitle tajawal">
                        Découvrez les derniers produits de notre boutique en ligne <strong>Lamsa</strong>
                    </div>
                </div>
            </div>

            @livewire('product-card')

        </div>
    </div>

    {{-- Comuting --}}

    <div class="section-025 my-5">
        <h2 class="text-center h3 tajawal mb-5">Capturez l'instant</h2>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-7">
                    <p class="h5 tajawal" style="line-height: 40px;">Vivez pleinement l'esprit de lamsa en portant nos
                    ensembles lors de vos escapades. Que ce soit sur la plage,
                    dans un café confortable ou en explorant de nouveaux
                    horizons, nos tenues sont parfaites pour créer des
                    souvenirs inoubliables et prendre de magnifiques photos
                    qui reflètent votre style unique.</p>
                </div>
                <div class="col-md-5">
                    <div class="az_single_image-wrapper az_box_border_grey rounded">
                        <img src="/assets/imgs/image-4.jpg" class="az_single_image-img attachment-full" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-025">
        <h2 class="text-center h3 tajawal mb-5">Joignez-vous à la communauté</h2>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-5">
                   <img class="rounded" src="/assets/imgs/image-3.jpg" alt="">
                </div>
                <div class="col-md-7">
                   <p class="h5 tajawal" style="line-height: 40px;">
                        Rejoignez notre communauté qui embrassent le confort
                        et le style au quotidien. Partagez vos moments avec nous
                        sur instagram pour avoir la chance d'être présentée sur
                        notre page et inspirer d'autres personnes avec votre
                        style authentique.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <x-serveces />







</div>
@endsection
