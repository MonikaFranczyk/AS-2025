{extends file="layouts/layout.tpl"}

{block name=content}

<h2>Finalizacja zamówienia</h2>

<form method="post"
      action="{$conf->action_url}checkout_submit"
      class="auth-form">

    {* ===== FORMA PŁATNOŚCI ===== *}
    <div class="form-group">
        <label for="payment_id">Forma płatności</label>

        <select name="payment_id" id="payment_id" required>
            <option value="">— wybierz formę płatności —</option>
            {foreach $payments as $p}
                <option value="{$p.ID_PLATNOSC}">
                    {$p.NAZWA}
                </option>
            {/foreach}
        </select>
    </div>

    {* ===== ADRES ===== *}
    <div class="form-group">
        <label for="address">Adres dostawy</label>

        <textarea name="address"
                  id="address"
                  rows="4"
                  placeholder="Ulica, numer domu/mieszkania, miasto"
                  required></textarea>
    </div>

    {* ===== PODSUMOWANIE ===== *}
    <div class="summary-box">
        <p>
            <strong>Koszt dostawy:</strong>
            {$deliveryCost} zł
        </p>

        <p>
            <strong>Kwota produktów:</strong>
            {$order.KWOTA_CALKOWITA} zł
        </p>

        <hr>

        <p class="summary-total">
            Do zapłaty:
            <strong>{$order.KWOTA_CALKOWITA + $deliveryCost} zł</strong>
        </p>
    </div>

    <button type="submit" class="btn-submit">
        Złóż zamówienie
    </button>

</form>

{/block}
