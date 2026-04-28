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

    <tbody id="cart-body">

    {foreach $items as $id => $item}

        <tr>

            <td class="col-name">
                {$item.name}
            </td>

            <td class="col-qty">

                <button type="button"
                        class="qty-btn"
                        onclick="updateQtyAjax({$id}, -1)">
                    −
                </button>

                <span id="qty-{$id}">
                    {$item.qty}
                </span>

                <button type="button"
                        class="qty-btn"
                        onclick="updateQtyAjax({$id}, 1)">
                    +
                </button>

            </td>

            <td class="col-price">
                {$item.price|string_format:"%.2f"} zł
            </td>

            <td class="col-sum"
                id="sum-{$id}"
                data-price="{$item.price}">

                {($item.price * $item.qty)|string_format:"%.2f"} zł

            </td>

            <td class="col-remove">

                <button type="button"
                        class="remove-btn"
                        onclick="removeItemAjax({$id})">
                    🗑
                </button>

            </td>

        </tr>

    {/foreach}

    </tbody>

</table>

<div class="cart-summary">

    <strong>Kwota całkowita:</strong>

    <span id="cart-total">
        {$order.KWOTA_CALKOWITA|default:0}
    </span> zł

</div>

{if $totalPages > 1}

<!--  PAGINACJA -->

<div class="pagination"
     style="
        margin-top:20px;
        display:flex;
        justify-content:center;
        gap:10px;
     ">

    {if $currentPage > 1}

    <div>
        <a class="btn-submit" href="{$conf->action_url}cart&page={$currentPage-1}"
           onclick="return handlePaginationClick(event);">
            ⬅ Poprzednia
        </a>
    </div>
    {/if}

    <span>
        Strona {$currentPage} z {$totalPages}
    </span>

    {if $currentPage < $totalPages}
    <div>
        <a class="btn-submit" href="{$conf->action_url}cart&page={$currentPage+1}"
           onclick="return handlePaginationClick(event);">
            Następna ➡
        </a>
    </div>
    {/if}

</div>

{/if}

<form method="post"
      action="{$conf->action_url}cart_submit">

    <button class="btn-submit" type="submit">
        Przejdź do podsumowania
    </button>

</form>

{/if}


<script>
<!--  UPDATE QTY -->
function updateQtyAjax(id, change) {

    let qtyEl =
        document.getElementById("qty-" + id);

    let currentQty =
        parseInt(qtyEl.innerText);

    let newQty =
        currentQty + change;

    let params =
        new URLSearchParams(
            window.location.search
        );

    let currentPage =
        parseInt(params.get("page")) || 1;


    fetch("{$conf->action_url}cart_update_item_ajax", {

        method: "POST",

        headers: {
            "Content-Type":
            "application/x-www-form-urlencoded"
        },

        body:
            "id=" + id +
            "&qty=" + newQty +
            "&page=" + currentPage

    })

    .then(response => response.json())
    .then(data => {

        if (data.success) {
            if (newQty <= 0) {

                reloadCartAjax(currentPage);
                return;

            }

            // normalny update

            qtyEl.innerText =
                newQty;

            let sumCell =
                document.getElementById("sum-" + id);

            let price =
                parseFloat(
                    sumCell.dataset.price
                );

            sumCell.innerText =
                (price * newQty).toFixed(2) + " zł";

            document
                .getElementById("cart-total")
                .innerText =
                parseFloat(data.total).toFixed(2);

        }

    });

}

<!-- REMOVE ITEM -->
function removeItemAjax(id) {

    let params =
        new URLSearchParams(
            window.location.search
        );

    let currentPage =
        parseInt(params.get("page")) || 1;


    fetch("{$conf->action_url}cart_remove_item_ajax", {

        method: "POST",

        headers: {
            "Content-Type":
            "application/x-www-form-urlencoded"
        },

        body:
            "id=" + id +
            "&page=" + currentPage

    })

    .then(response => response.json())
    .then(data => {

        if (data.success) {
            reloadCartAjax(currentPage);

        }

    });

}

<!-- AJAX PAGINATION -->
function handlePaginationClick(event) {

    event.preventDefault();

    let url =
        event.currentTarget.href;

    fetch(url)

        .then(response => response.text())
        .then(html => {

            document.open();
            document.write(html);
            document.close();

        });

    return false;
}

function reloadCartAjax(page = null) {

    let params =
        new URLSearchParams(window.location.search);

    let currentPage =
        page ||
        parseInt(params.get("page")) || 1;

    window.history.replaceState(
        null,
        "",
        "?page=" + currentPage
    );

    fetch(
        "{$conf->action_url}cart&page=" +
        currentPage
    )

    .then(response => response.text())
    .then(html => {

        document.open();
        document.write(html);
        document.close();

    })

    .catch(error => {
        console.error(
            "Reload cart error:",
            error
        );

    });

}

</script>

{/block}