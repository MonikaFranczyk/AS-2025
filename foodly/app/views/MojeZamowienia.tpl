{extends file="layouts/layout.tpl"}

{block name=content}

<h2>Moje zamówienia</h2>

{if empty($orders)}
    <p>Nie masz jeszcze żadnych zamówień.</p>
{else}

<table class="menu-table">
    <thead>
        <tr>
            <th>ID zamówienia</th>
            <th>Status</th>
	<th>Rodzaj płatności</th>
            <th>Kwota produktów</th>
            <th>Koszt dostawy</th>
            <th>Do zapłaty</th>
            <th>Akcja</th>
        </tr>
    </thead>

    <tbody>
    {foreach $orders as $o}
        <tr>
            <td>#{$o.ID_ZAMOWIENIA}</td>

            <td>
                {if $o.ID_STATUS == 1}Koszyk
                {elseif $o.ID_STATUS == 2}Złożone
                {elseif $o.ID_STATUS == 3}Opłacone
                {elseif $o.ID_STATUS == 4}W realizacji
                {elseif $o.ID_STATUS == 5}Dostarczone
                {elseif $o.ID_STATUS == 6}Anulowane
                {/if}
            </td>
	<td>
	{$o.ID_PLATNOSC}
	</td>

            <td>
                {($o.KWOTA_CALKOWITA - $o.KOSZT_DOSTAWY)|default:0} zł
            </td>

            <td>
                {$o.KOSZT_DOSTAWY|default:0} zł
            </td>

            <td>
                <strong>{$o.KWOTA_CALKOWITA|default:0} zł</strong>
            </td>

            <td>
                {if $o.ID_STATUS == 2 && $o.ID_PLATNOSC != 3}
    		<a href="{$conf->action_url}order_pay&id={$o.ID_ZAMOWIENIA}" class="btn-submit">
       		 OPŁAĆ
    		</a>
		{else}
   		 —
		{/if}
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>

{/if}

{/block}
