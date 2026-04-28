<?php
/* Smarty version 5.4.5, created on 2026-04-28 17:48:50
  from 'file:Cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69f0d6e2bd3b70_58955526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8549057b8940f7050f40c363074b015869c145ad' => 
    array (
      0 => 'Cart.tpl',
      1 => 1777391095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f0d6e2bd3b70_58955526 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_127892472669f0d6e2bad800_10316939', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_127892472669f0d6e2bad800_10316939 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>


<h2>Koszyk</h2>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('items')) == 0) {?>

    <p>Koszyk jest pusty</p>

<?php } else { ?>

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

    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item', false, 'id');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>

        <tr>

            <td class="col-name">
                <?php echo $_smarty_tpl->getValue('item')['name'];?>

            </td>

            <td class="col-qty">

                <button type="button"
                        class="qty-btn"
                        onclick="updateQtyAjax(<?php echo $_smarty_tpl->getValue('id');?>
, -1)">
                    −
                </button>

                <span id="qty-<?php echo $_smarty_tpl->getValue('id');?>
">
                    <?php echo $_smarty_tpl->getValue('item')['qty'];?>

                </span>

                <button type="button"
                        class="qty-btn"
                        onclick="updateQtyAjax(<?php echo $_smarty_tpl->getValue('id');?>
, 1)">
                    +
                </button>

            </td>

            <td class="col-price">
                <?php echo sprintf("%.2f",$_smarty_tpl->getValue('item')['price']);?>
 zł
            </td>

            <td class="col-sum"
                id="sum-<?php echo $_smarty_tpl->getValue('id');?>
"
                data-price="<?php echo $_smarty_tpl->getValue('item')['price'];?>
">

                <?php echo sprintf("%.2f",($_smarty_tpl->getValue('item')['price']*$_smarty_tpl->getValue('item')['qty']));?>
 zł

            </td>

            <td class="col-remove">

                <button type="button"
                        class="remove-btn"
                        onclick="removeItemAjax(<?php echo $_smarty_tpl->getValue('id');?>
)">
                    🗑
                </button>

            </td>

        </tr>

    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    </tbody>

</table>

<div class="cart-summary">

    <strong>Kwota całkowita:</strong>

    <span id="cart-total">
        <?php echo (($tmp = $_smarty_tpl->getValue('order')['KWOTA_CALKOWITA'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>

    </span> zł

</div>

<?php if ($_smarty_tpl->getValue('totalPages') > 1) {?>

<!--  PAGINACJA -->

<div class="pagination"
     style="
        margin-top:20px;
        display:flex;
        justify-content:center;
        gap:10px;
     ">

    <?php if ($_smarty_tpl->getValue('currentPage') > 1) {?>

    <div>
        <a class="btn-submit" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart&page=<?php echo $_smarty_tpl->getValue('currentPage')-1;?>
"
           onclick="return handlePaginationClick(event);">
            ⬅ Poprzednia
        </a>
    </div>
    <?php }?>

    <span>
        Strona <?php echo $_smarty_tpl->getValue('currentPage');?>
 z <?php echo $_smarty_tpl->getValue('totalPages');?>

    </span>

    <?php if ($_smarty_tpl->getValue('currentPage') < $_smarty_tpl->getValue('totalPages')) {?>
    <div>
        <a class="btn-submit" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart&page=<?php echo $_smarty_tpl->getValue('currentPage')+1;?>
"
           onclick="return handlePaginationClick(event);">
            Następna ➡
        </a>
    </div>
    <?php }?>

</div>

<?php }?>

<form method="post"
      action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart_submit">

    <button class="btn-submit" type="submit">
        Przejdź do podsumowania
    </button>

</form>

<?php }?>


<?php echo '<script'; ?>
>
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


    fetch("<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart_update_item_ajax", {

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


    fetch("<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart_remove_item_ajax", {

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
        "<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart&page=" +
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

<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
