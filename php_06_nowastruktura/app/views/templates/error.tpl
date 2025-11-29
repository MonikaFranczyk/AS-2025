{extends file="layout.tpl"}

{block name=content}
<div class="alert alert-danger mt-5 text-center">
    <h4>Błąd!</h4>
    <p>{$error|default:"Wystąpił nieoczekiwany błąd."}</p>
</div>
{/block}

