<?php
/* Smarty version 5.4.5, created on 2026-01-14 08:57:06
  from 'file:OrdersRestaurant.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69674c52d762b4_92911598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5c93829e15b9dda7335b2416f1de9f1928f4d82' => 
    array (
      0 => 'OrdersRestaurant.tpl',
      1 => 1768377423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69674c52d762b4_92911598 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_212835582169674c52d5c1b6_76847587', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_212835582169674c52d5c1b6_76847587 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>


<h2>Aktywne zamówienia</h2>

<?php if (( !$_smarty_tpl->hasVariable('orders') || empty($_smarty_tpl->getValue('orders')))) {?>
    <p>Brak zamówień do realizacji.</p>
<?php } else { ?>

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
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'order');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order')->value) {
$foreach0DoElse = false;
?>
        <tr>
            <td style="padding:10px; border:1px solid #ccc;"><?php echo $_smarty_tpl->getValue('order')['ID_ZAMOWIENIA'];?>
</td>
            <td style="padding:10px; border:1px solid #ccc;"><?php echo $_smarty_tpl->getValue('order')['ID_KLIENTA'];?>
</td>
            <td style="padding:10px; border:1px solid #ccc;">
                <?php echo $_smarty_tpl->getValue('order')['KWOTA_CALKOWITA'];?>
 zł
            </td>

            <td style="padding:10px; border:1px solid #ccc;">
                <?php if ($_smarty_tpl->getValue('order')['ID_PLATNOSC'] == 3) {?>
                    Gotówka
                <?php } else { ?>
                    Online
                <?php }?>
            </td>

            <td style="padding:10px; border:1px solid #ccc;">
                <?php if ($_smarty_tpl->getValue('order')['ID_STATUS'] == 2) {?>
                    Złożone
                <?php } elseif ($_smarty_tpl->getValue('order')['ID_STATUS'] == 3) {?>
                    Opłacone
                <?php } elseif ($_smarty_tpl->getValue('order')['ID_STATUS'] == 4) {?>
                    W realizacji
                <?php } elseif ($_smarty_tpl->getValue('order')['ID_STATUS'] == 6) {?>
                    Anulowane
                <?php }?>
            </td>

	<td style="padding:10px; border:1px solid #ccc;">
    		<?php if ($_smarty_tpl->getValue('order')['ID_STATUS'] == 2 || $_smarty_tpl->getValue('order')['ID_STATUS'] == 3) {?>
        <a class="btn-add" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
order_accept&id=<?php echo $_smarty_tpl->getValue('order')['ID_ZAMOWIENIA'];?>
">
            Akceptuj
        </a>
        |
        <a class="btn-add-2" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
order_cancel&id=<?php echo $_smarty_tpl->getValue('order')['ID_ZAMOWIENIA'];?>
">
            Anuluj
        </a>
    		<?php }?>
	</td>

        </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php }?>

<?php
}
}
/* {/block 'content'} */
}
