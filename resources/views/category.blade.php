@extends('layouts.app')
@section('content')
<div class="banner-wrapper my-wrapper has_background">
    <img src="{{ Storage::url($category->image) }}" style="width: 100%;max-height: 300px;" class="img-responsive attachment-1920x447 size-1920x447 hero-bg-img" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title text-black">{{ $category->name }}</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
            <div class="fw-bold h6" style="line-height: 29px;">{{ $category->description }}</div>
        </div>
    </div>
</div>
<div class="section-011 mt-6" id="new-collection">
    <div class="container mt-5">
        @livewire('product-card', ["category" => $category], key($category->id))
    </div>
</div>
@endsection
