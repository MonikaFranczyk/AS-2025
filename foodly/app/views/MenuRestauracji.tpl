{extends file="layouts/layout.tpl"}

{block name=content}

<h2>Menu restauracji</h2>

{if empty($menu)}
    <p>Brak pozycji w menu.</p>
{else}

{foreach $menu as $typ => $items}

    <h3 style="margin-top:40px;">{$typ}</h3>

    <table class="menu-table">
        <thead>
            <tr>
                <th class="col-name">Nazwa</th>
                <th class="col-price">Cena</th>
                <th class="col-action"></th>
            </tr>
        </thead>

        <tbody>
        {foreach $items as $item}
            <tr>
                <td class="col-name">{$item.NAZWA}</td>
                <td class="col-price">{$item.CENA} zł</td>
                <td class="col-action">
                    <a class="btn-add"
                       href="{$conf->action_url}cart_add_item&id={$item.ID_MENU_ITEM}&rest_id={$smarty.get.id}">
                        ADD
                    </a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>

{/foreach}

{/if}

{/block}