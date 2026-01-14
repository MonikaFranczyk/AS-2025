{extends file="layouts/layout.tpl"}
{block name=content}

<h2>Restauracje</h2>

<ul>
{foreach $restauracje as $r}
    <li>
        <a href="{$conf->action_url}restauracja_menu&id={$r.ID_RESTAURACJI}">
            {$r.NAZWA}
        </a>
    </li>
{/foreach}
</ul>

{/block}