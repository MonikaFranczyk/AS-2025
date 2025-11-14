{extends file="layout.tpl"}

{block name=content}
<div class="text-center mt-5">
    <h2>Witaj w systemie kalkulatorów!</h2>
    <p>Wybierz rodzaj kalkulatora:</p>

    <a class="btn btn-primary m-2" href="{$conf.app_url}/app/controllers/CalcCtrl.php">Zwykły kalkulator</a>
    <a class="btn btn-success m-2" href="{$conf.app_url}/app/controllers/KredytCtrl.php">Kalkulator kredytowy</a>

    {if $role == "admin"}
        <a class="btn btn-danger m-2" href="{$conf.app_url}/app/controllers/AdminPanelCtrl.php">Panel administratora</a>
    {/if}

</div>
{/block}