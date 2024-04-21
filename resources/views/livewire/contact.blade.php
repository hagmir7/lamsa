<div class="col-md-8">
    <h1 class="h3">Contactez-nous</h1>
    <form wire:submit.prevent='save' class="w-100">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger p-2 my-2">
                {{ $error }}
            </div>
            @endforeach
        @endif
        <p>
            <label class="w-100">Nom complet *<br>
                <input wire:model='full_name' class="w-100" type="text">

            </label>
        </p>
        <p>
            <label class="w-100"> Email *<br>
                <input wire:model='email' class="w-100" type="email">

            </label>
        </p>
        <p>
            <label class="w-100"> Message *<br>
                <textarea wire:model='description' class="w-100" cols="40" rows="5"></textarea>
            </label>
        </p>
        <p>
            <button type="submit" class="w-100">
                <span wire:loading class="mt-1"><x-spenner-icon /></span>
                <span wire:loading.remove>Envoyer</span>
            </button>
        </p>
        @if ($message)
            <div class="alert alert-success p-2 mt-3">{{ $message }}</div>
        @endif

    </form>
</div>
