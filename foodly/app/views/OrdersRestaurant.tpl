{extends file="layouts/layout.tpl"}

{block name=content}

<h2>Aktywne zamówienia</h2>

{if empty($orders)}
    <p>Brak zamówień do realizacji.</p>
{else}

<table style="width:100%; border-collapse: collapse; margin-top:20px;">
    <thead>
        <tr style="background:#f0f0f0;">
            <th style="padding:10px; border:1px solid #ccc;">ID</th>
            <th style="padding:10px; border:1px solid #ccc;">Klient</th>
            <th style="padding:10px; border:1px solid #ccc;">Kwota</th>
            <th style="padding:10px; border:1px solid #ccc;">Płatność</th>
            <th style="padding:10px; border:1px solid #ccc;">Status</th>
            <th style="padding:10px; border:1px solid #ccc;">Akcje</th>
        </tr>
    </thead>

    <tbody>
    {foreach $orders as $order}
        <tr>
            <td style="padding:10px; border:1px solid #ccc;">{$order.ID_ZAMOWIENIA}</td>
            <td style="padding:10px; border:1px solid #ccc;">{$order.ID_KLIENTA}</td>
            <td style="padding:10px; border:1px solid #ccc;">
                {$order.KWOTA_CALKOWITA} zł
            </td>

            <td style="padding:10px; border:1px solid #ccc;">
                {if $order.ID_PLATNOSC == 3}
                    Gotówka
                {else}
                    Online
                {/if}
            </td>

            <td style="padding:10px; border:1px solid #ccc;">
                {if $order.ID_STATUS == 2}
                    Złożone
                {elseif $order.ID_STATUS == 3}
                    Opłacone
                {elseif $order.ID_STATUS == 4}
                    W realizacji
                {elseif $order.ID_STATUS == 6}
                    Anulowane
                {/if}
            </td>

	<td style="padding:10px; border:1px solid #ccc;">
    		{if $order.ID_STATUS == 2 || $order.ID_STATUS == 3}
        <a class="btn-add" href="{$conf->action_url}order_accept&id={$order.ID_ZAMOWIENIA}">
            Akceptuj
        </a>
        |
        <a class="btn-add-2" href="{$conf->action_url}order_cancel&id={$order.ID_ZAMOWIENIA}">
            Anuluj
        </a>
    		{/if}
	</td>

        </tr>
    {/foreach}
    </tbody>
</table>

{/if}

{/block}