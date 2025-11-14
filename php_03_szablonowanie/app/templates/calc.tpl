{extends file="layout.tpl"}

{block name=content}
<div class="row justify-content-center mt-4">
    <div class="col-md-4">
                <div class="card shadow-sm" style="background-color: rgba(0,0,0,0.1);">
            <div class="card-body">
                <h4 class="card-title mb-4">Kalkulator</h4>
                <form method="post">
                    <div class="mb-3">
                        <label>Liczba 1:</label>
                        <input type="text" class="form-control" name="x" value="{$x|default:''}">
                    </div>
                    <div class="mb-3">
                        <label>Operacja:</label>
                        <select name="op" class="form-select">
                            <option value="plus">+</option>
                            <option value="minus">-</option>
                            <option value="times">*</option>
                            <option value="div">/</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Liczba 2:</label>
                        <input type="text" class="form-control" name="y" value="{$y|default:''}">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Oblicz</button>
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
                    <div class="alert alert-success mt-3">
                        Wynik: {$result}
                    </div>
                {/if}
            </div>
        </div>
    </div>
</div>
{/block}