<div class="u-column2 col-2">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger p-2">
            {{ $error }}
        </div>
        @endforeach
    @endif
    <h2 class="tajawal t-start">Créer un compte ?</h2>
    <form method="POST" wire:submit.prevent='register'>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                    <label for="reg_email" class="tajawal">Nom&nbsp;<span class="required">*</span></label>
                    <input type="text" wire:model='first_name' class="lynessa-Input lynessa-Input--text input-text" name="first_name"
                        placeholder="Tapez votre nom">
                </p>
            </div>

            <div class="col-md-6 col-sm-12">
                <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                    <label for="reg_email" class="tajawal">Prénom&nbsp;<span class="required">*</span></label>
                    <input type="text" wire:model='last_name' class="lynessa-Input lynessa-Input--text input-text" name="last_name"
                        placeholder="Tapez votre prénom">
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                    <label for="reg_email" class="tajawal">Email&nbsp;<span class="required">*</span></label>
                    <input type="email" wire:model='email' class="lynessa-Input lynessa-Input--text input-text" placeholder="Tapez votre email">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide">
                    <label for="reg_email" class="tajawal">Mot de passe&nbsp;<span class="required">*</span></label>
                    <input type="password" wire:model='password' class="lynessa-Input lynessa-Input--text input-text" placeholder="●●●●●●●●●● ">
                </p>
            </div>
        </div>
        <p class="mt-3 form-row">
            <button type="submit" class="lynessa-Button button tajawal w-100" value="S'inscrire">
                <span wire:loading class="mt-1">
                    <x-spenner-icon />
                </span>

                <span wire:loading.remove>S'inscrire</span>
            </button>
        </p>
    </form>
</div>
