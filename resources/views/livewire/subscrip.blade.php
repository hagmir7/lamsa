<div class="section-001 section-009">
    <div class="container">
        <div class="lynessa-newsletter style-01">
            <div class="newsletter-inner">
                <div class="newsletter-info">
                    <div class="newsletter-wrap">
                        <h3 class="title"><span>Lamssa Fashion</span></h3>
                        <h4 class="subtitle tajawal">Obtenez les dernières offres</h4>
                        <p class="desc tajawal">Découvrez les nouveautés et obtenez plus d’informations en vous inscrivant à notre newsletter</p>
                    </div>
                </div>
                <form class="newsletter-form-wrap" wire:submit.prevent='save'>
                    @csrf
                    <div class="newsletter-form-inner">
                        <input class="email email-newsletter" wire:model='email' name="email" style="text-align: start " placeholder="Votre adresse e-mail" type="email">
                        <button type="submit" class="button btn-submit submit-newsletter tajawal">
                            <span wire:loading class="mt-1"><x-spenner-icon /></span>
                            <span wire:loading.remove class="text">S&#039;abonner</span>
                        </button>
                    </div>
                    @if ($message)
                    <div class="alert alert-success p-2 mt-3">{{ $message }}</div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
