{extends file="layout.tpl"}

{block name=content}
<div class="text-center mt-5">
    <h2>Menu użytkownika</h2>

    {if $role == "user"}
        <a class="btn btn-primary m-2" 
           href="{$conf.app_url}/index.php?action=calc">
            Zwykły kalkulator
        </a>
    {/if}

    {if $role == "admin"}
        <a class="btn btn-primary m-2" 
           href="{$conf.app_url}/index.php?action=calc">
            Zwykły kalkulator
        </a>

        <a class="btn btn-success m-2" 
           href="{$conf.app_url}/index.php?action=credit">
            Kalkulator kredytowy
        </a>

        <a class="btn btn-danger m-2" 
           href="{$conf.app_url}/index.php?action=admin">
            Panel administratora
        </a>
    {/if}
</div>
{/block}


