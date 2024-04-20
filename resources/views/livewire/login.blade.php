<div>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" wire:ignore tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="u-column1 col-1">
                        <h2 class="tajawal t-start">Se connecter</h2>
                        <form wire:submit.prevent="login" method="POST" class="lynessa-form lynessa-form-login login form-store fv-plugins-bootstrap5 fv-plugins-framework">
                            @csrf
                            <p
                                class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                <label for="username" class="tajawal">Email&nbsp;<span class="required">*</span></label>
                                <input type="text" wire:model="email" class="lynessa-Input lynessa-Input--text input-text is-valid" placeholder="Tapez votre nom d'utilisateur ou email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            <p class="lynessa-form-row lynessa-form-row--wide form-row form-row-wide fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                <label for="password" class="tajawal">Mot de passe&nbsp;<span class="required">*</span></label>
                                <input class="lynessa-Input lynessa-Input--text input-text is-valid" type="password" placeholder="●●●●●●●●●● " wire:model="password">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </p>
                            <p class="form-row">
                                <button type="submit" class="lynessa-Button button tajawal" value="Se connecter">Se connecter </button>
                            </p>
                            <p class="lynessa-LostPassword lost_password f-right">
                                <a href="#" class="tajawal">Mot de passe oublié ?</a>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
