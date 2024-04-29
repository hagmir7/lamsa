<div class="section-013 section-001">
    <div class="container">
        <div class="lynessa-heading style-01">
            <div class="heading-inner">
                <h3 class="title tajawal">Catégories</h3>
                <div class="subtitle tajawal">
                    Découvrez nos catégories et trouvez ce qui vous inspire
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mt-3">
                <a href="{{ route('category', $category->slug) }}">
                    <div class="lynessa-banner style-03 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="{{ Storage::url($category->image) }}" class="attachment-full size-full" style="opacity: .5!important;" alt="img">
                            </figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    {{-- <div class="title-wrap">
                                        <h6 class="title">
                                            <a target="_self" href="{{ route('category', $category->slug) }}">Montre</a>
                                        </h6>
                                    </div> --}}
                                    <div class="cate">{{ $category->name }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            @endforeach
        </div>
    </div>
    @if ($total_categories > $amount)
    <div class="d-flex justify-content-center mt-3">
        <button class="load-btn w-25" wire:click='loadMore' role="button">
            <span wire:loading.remove wire:target='loadMore'>Voir plus</span>
            <span class="mt-2" wire:loading wire:target='loadMore'>
                <x-spenner-icon />
            </span>
        </button>
    </div>
    @endif
</div>
