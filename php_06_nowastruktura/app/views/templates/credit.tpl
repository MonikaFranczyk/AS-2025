{extends file="layout.tpl"}

{block name=content}
<div class="row justify-content-center mt-4">
    <div class="col-md-5">
        <div class="card p-3">
            <h4 class="mb-3">Kalkulator kredytowy</h4>

            <form method="post" action="{$conf.app_url}/index.php?action=credit">
                <div class="mb-3">
                    <label>Kwota kredytu (PLN):</label>
                    <input type="text" class="form-control" name="kwota" value="{$form->kwota|default:''}">
                </div>

                <div class="mb-3">
                    <label>Oprocentowanie roczne (%):</label>
                    <input type="text" class="form-control" name="oprocentowanie" value="{$form->oprocentowanie|default:''}">
                </div>

                <div class="mb-3">
                    <label>Liczba miesięcy spłaty:</label>
                    <input type="text" class="form-control" name="miesiace" value="{$form->miesiace|default:''}">
                </div>

                <button type="submit" class="btn btn-success w-100">Oblicz ratę</button>
            </form>

            {if $form->messages|@count > 0}
                <div class="alert alert-danger mt-3">
                    <ul>
                    {foreach $form->messages as $msg}
                        <li>{$msg}</li>
                    {/foreach}
                    </ul>
                </div>
            {/if}

            {if isset($result)}
                <div class="alert alert-success mt-3 text-center">
                    Miesięczna rata: <strong>{$result|number_format:2:',':' '} PLN</strong>
                </div>
            {/if}
        </div>
    </div>
</div>
{/block}