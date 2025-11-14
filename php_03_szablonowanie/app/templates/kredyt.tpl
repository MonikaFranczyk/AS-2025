{extends file="layout.tpl"}

{block name=content}
<div class="row justify-content-center mt-4">
    <div class="col-md-5">
                <div class="card shadow-sm" style="background-color: rgba(0,0,0,0.1);">
            <div class="card-body">
                <h4 class="card-title mb-4">Kalkulator kredytowy</h4>
                <form method="post">
                    <div class="mb-3">
                        <label>Kwota kredytu (PLN):</label>
                        <input type="number" class="form-control" name="kwota" step="0.01" value="{$kwota|default:''}" required>
                    </div>
                    <div class="mb-3">
                        <label>Oprocentowanie roczne (%):</label>
                        <input type="number" class="form-control" name="oprocentowanie" step="0.01" value="{$oprocentowanie|default:''}" required>
                    </div>
                    <div class="mb-3">
                        <label>Liczba miesięcy spłaty:</label>
                        <input type="number" class="form-control" name="miesiace" value="{$miesiace|default:''}" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Oblicz ratę</button>
                </form>

                {if isset($messages) && $messages|@count > 0}
                    <div class="alert alert-danger mt-3">
                        <ul>
                        {foreach $messages as $msg}
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
</div>
{/block}