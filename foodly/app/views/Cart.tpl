{extends file="layouts/layout.tpl"}
{block name=content}

<h2>Koszyk</h2>

{if $items|@count == 0}
    <p>Koszyk jest pusty</p>
{else}

<table class="cart-table">
    <thead>
        <tr>
            <th>Produkt</th>
            <th>Ilość</th>
            <th>Cena</th>
            <th>Suma</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
    {foreach $items as $id => $item}
        <tr>
            <td class="col-name">
                {$item.name}
            </td>

            <td class="col-qty">
                <a class="qty-btn"
                   href="{$conf->action_url}cart_update_item&id={$id}&qty={$item.qty-1}">
                    −
                </a>

                <span class="qty-value">
                    {$item.qty}
                </span>

                <a class="qty-btn"
                   href="{$conf->action_url}cart_update_item&id={$id}&qty={$item.qty+1}">
                    +
                </a>
            </td>

            <td class="col-price">
                {$item.price} zł
            </td>

            <td class="col-sum">
                {$item.price * $item.qty} zł
            </td>

            <td class="col-remove">
                <a class="remove-btn"
                   href="{$conf->action_url}cart_remove_item&id={$id}">
                    🗑
                </a>
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>

<div class="cart-summary">
    <strong>Kwota całkowita:</strong>
    {$order.KWOTA_CALKOWITA|default:0} zł
</div>

<form method="post" action="{$conf->action_url}cart_submit">
    <button class="btn-submit" type="submit">
        Przejdź do podsumowania
    </button>
</form>

{/if}

{/block}