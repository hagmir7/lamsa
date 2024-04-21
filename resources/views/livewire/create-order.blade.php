<div class="col2-set" id="customer_details">
    <div class="col-1">
        <div class="lynessa-billing-fields">
            <h3>Passer la commande</h3>
            <form wire:submit.prevent='save' class="lynessa-billing-fields__field-wrapper">

                <p class="form-row form-row-first" >
                    <label for="billing_first_name"><strong>Prénom</strong>&nbsp;
                    <abbr class="required" title="required">*</abbr>
                    </label>
                    <span class="lynessa-input-wrapper">
                        <input class="border" required wire:model='first_name' type="text" class="input-text">
                    </span>
                </p>

                <p class="form-row form-row-first" style="margin-left: 30px;">
                    <label><strong>Nom</strong>&nbsp;
                        <abbr class="required" title="required">*</abbr>
                    </label>
                    <span class="lynessa-input-wrapper">
                        <input required wire:model='last_name' type="text" class="input-text ms-2">
                    </span>
                </p>


                <p class="form-row form-row-first" >
                    <label>
                        <Strong>Téléphone</Strong>
                        <abbr class="required" title="required">*</abbr>
                    </label>
                    <span class="lynessa-input-wrapper">
                        <input required wire:model='phone' type="text" class="input-text">
                    </span>
                </p>

                <p class="form-row form-row-first" style="margin-left: 30px;">
                    <label>
                        <Strong>Ville</Strong>
                        <abbr class="required" title="required">*</abbr>
                    </label>
                    <span class="lynessa-input-wrapper">
                        <input required wire:model='city' type="text" class="input-text">
                    </span>
                </p>


                <p class="form-row form-row-wide address-field validate-postcode">
                    <label>
                        <Strong>Adresse</Strong>
                        <abbr class="required" title="required">*</abbr>
                    </label>
                    <span class="lynessa-input-wrapper">
                            <input required wire:model='address' type="text" class="input-text" >
                    </span>
                </p>
                <button type="submit" class="button alt w-100" style="cursor: pointer">Passer la commande</button>
            </form>
        </div>
    </div>
</div>
