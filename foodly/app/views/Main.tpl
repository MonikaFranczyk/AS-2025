{extends file="layouts/layout.tpl"}

{block name=content}
<h1>Witaj w Foodly!</h1>

{if !$isLogged}
    <p>Zaloguj się, aby korzystać z systemu.</p>
{else}
    <p>Wybierz opcję z menu powyżej.</p>
{/if}
{/block}