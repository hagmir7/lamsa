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

    <div class="section-025 py-5">
        <div class="container">
            <h2 class="text-center h3 mb-5 fw-bold" style='font-family: "Manrope", sans-serif;!important'>Capturez l'instant</h2>
            <div class="row d-flex align-items-center">
                <div class="col-md-7" style='font-family: "Manrope", sans-serif;!important'>
                    <p class="h5 fw-bold" style="line-height: 40px;">Vivez pleinement l'esprit de Lamssa Fashion en portant nos
                    ensembles lors de vos escapades. Que ce soit sur la plage,
                    dans un café confortable ou en explorant de nouveaux
                    horizons, nos tenues sont parfaites pour créer des
                    souvenirs inoubliables et prendre de magnifiques photos
                    qui reflètent votre style unique.</p>
                </div>
                <div class="col-md-5">
                    <div class="az_single_image-wrapper az_box_border_grey rounded">
                        <img src="/assets/imgs/instant.png" class="az_single_image-img attachment-full rounded" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero 1 - Bootstrap Brain Component -->
<section class="bsb-hero-1 px-3 bsb-overlay bsb-hover-pull hero-bg-img" style="background-image: url('./assets/imgs/communaute.jpg');opacity: .7!important;height:400px;background-position: center;">
  <div class="container-lg">
    <div class="row">
      <div class="col-12 col-md-10 col-lg-8 col-xl-6 col-xxl-5">
        <h2 class="display-3 fw-bold mb-3 h4">Joignez-vous à la communauté</h2>
        <p class="lead mb-5 fs-3 fw-bold" style="line-height: 38px">Rejoignez notre communauté qui embrassent le confort
        et le style au quotidien. Partagez vos moments avec nous
        sur instagram pour avoir la chance d'être présentée sur
        notre page et inspirer d'autres personnes avec votre
        style authentique.</p>

      </div>
    </div>
  </div>
</section>


    <div class="section-025 py-4">
        <div class="container">
            <h2 class="text-center h3 mb-5 fw-bold" style='font-family: "Manrope", sans-serif;!important'>Joignez-vous à la communauté</h2>
            <div class="row d-flex align-items-center">
                <div class="col-md-5">
                   <img class="rounded" src="/assets/imgs/image-3.jpg" alt="">
                </div>
                <div class="col-md-7">
                   <p class="h5 fw-bold" style="line-height: 40px;" style='font-family: "Manrope", sans-serif;!important'>
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










</div>
@endsection
