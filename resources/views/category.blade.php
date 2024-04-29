@extends('layouts.app')
@section('content')
<div class="banner-wrapper my-wrapper has_background">
    <img src="{{ Storage::url($category->image) }}" style="width: 100%;max-height: 300px;" class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title">{{ $category->name }}</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <ul class="trail-items d-flex justify-content-center" style="list-style: none">
                <li class="trail-item trail-begin tajawal"><a href="/"><span>Accueil</span></a></li>
                <li> &#xa0; > &#xa0; </li>
                <li class="trail-item trail-end active"><span>{{ $category->name }}</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="section-011 mt-6" id="new-collection">
    <div class="container mt-5">
        @livewire('product-card', ["category" => $category], key($category->id))
    </div>
</div>
@endsection
