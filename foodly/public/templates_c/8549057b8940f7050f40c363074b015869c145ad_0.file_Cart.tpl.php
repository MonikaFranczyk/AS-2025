<?php
/* Smarty version 5.4.5, created on 2026-04-27 15:22:51
  from 'file:Cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69ef632b293f45_16037675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8549057b8940f7050f40c363074b015869c145ad' => 
    array (
      0 => 'Cart.tpl',
      1 => 1777296092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69ef632b293f45_16037675 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20581021469ef632b269ab9_20940639', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_20581021469ef632b269ab9_20940639 extends \Smarty\Runtime\Block
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

    <tbody>
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
                <a class="qty-btn"
                   href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart_update_item&id=<?php echo $_smarty_tpl->getValue('id');?>
&qty=<?php echo $_smarty_tpl->getValue('item')['qty']-1;?>
&page=<?php echo $_smarty_tpl->getValue('currentPage');?>
">
                    −
                </a>

                <span class="qty-value">
                    <?php echo $_smarty_tpl->getValue('item')['qty'];?>

                </span>

                <a class="qty-btn"
                   href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart_update_item&id=<?php echo $_smarty_tpl->getValue('id');?>
&qty=<?php echo $_smarty_tpl->getValue('item')['qty']+1;?>
&page=<?php echo $_smarty_tpl->getValue('currentPage');?>
">
                    +
                </a>
            </td>

            <td class="col-price">
                <?php echo $_smarty_tpl->getValue('item')['price'];?>
 zł
            </td>

            <td class="col-sum">
                <?php echo $_smarty_tpl->getValue('item')['price']*$_smarty_tpl->getValue('item')['qty'];?>
 zł
            </td>

            <td class="col-remove">
                <a class="remove-btn"
                   href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart_remove_item&id=<?php echo $_smarty_tpl->getValue('id');?>
&page=<?php echo $_smarty_tpl->getValue('currentPage');?>
"
                    🗑
                </a>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<div class="cart-summary">
    <strong>Kwota całkowita:</strong>
    <?php echo (($tmp = $_smarty_tpl->getValue('order')['KWOTA_CALKOWITA'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
 zł
</div>

<?php if ($_smarty_tpl->getValue('totalPages') > 1) {?>

<div class="pagination" style="margin-top:20px;">

<?php if ($_smarty_tpl->getValue('totalPages') > 1) {?>

<div class="pagination" style="margin-top:20px;">

    <?php if ($_smarty_tpl->getValue('currentPage') > 1) {?>
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart&page=<?php echo $_smarty_tpl->getValue('currentPage')-1;?>
"
           style="padding:6px 12px;
                  border:1px solid #ccc;
                  margin-right:5px;
                  text-decoration:none;">
            ⬅ Poprzednia
        </a>
    <?php }?>

    <span style="margin-right:10px;">
        Strona <?php echo $_smarty_tpl->getValue('currentPage');?>
 z <?php echo $_smarty_tpl->getValue('totalPages');?>

    </span>

    <?php if ($_smarty_tpl->getValue('currentPage') < $_smarty_tpl->getValue('totalPages')) {?>
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart&page=<?php echo $_smarty_tpl->getValue('currentPage')+1;?>
"
           style="padding:6px 12px;
                  border:1px solid #ccc;
                  text-decoration:none;">
            Następna ➡
        </a>
    <?php }?>

</div>

<?php }?>

</div>

<?php }?>

<form method="post" action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart_submit">
    <button class="btn-submit" type="submit">
        Przejdź do podsumowania
    </button>
</form>

<?php }?>

<?php
}
}
/* {/block 'content'} */
}
