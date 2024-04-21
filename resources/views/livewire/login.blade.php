<div>

    <!-- Modal -->
    <div class="modal fade" style="z-index: 10000" id="loginModal" wire:ignore tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Se connecter
                                </button>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Créer un compte ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                               <div class="u-column1 col-1">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger p-2">
                                        {{ $error }}
                                    </div>
                                    @endforeach
                                    @endif
                                <h2 class="tajawal t-start">Se connecter</h2>
                                <form wire:submit.prevent='login'>
                                    <p
                                        class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                        <label for="username" class="tajawal">Email&nbsp;<span class="required">*</span></label>
                                        <input type="text" wire:model="email" class="lynessa-Input lynessa-Input--text input-text is-valid"
                                            placeholder="Tapez votre nom d'utilisateur ou email">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p
                                        class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                        <label for="password" class="tajawal">Mot de passe&nbsp;<span class="required">*</span></label>
                                        <input class="lynessa-Input lynessa-Input--text input-text is-valid" type="password"
                                            placeholder="●●●●●●●●●● " wire:model="password">
                                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                    </p>
                                    <p class="form-row">
                                        <button type="submit" class="lynessa-Button button tajawal w-100" value="Se connecter">
                                            <span wire:loading class="mt-1">
                                                <x-spenner-icon />
                                            </span>

                                            <span wire:loading.remove>Se connecter</span>
                                        </button>
                                    </p>
                                </form>
                            </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                               @livewire('register')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
