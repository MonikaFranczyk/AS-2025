<?php
/* Smarty version 5.4.5, created on 2026-01-14 08:36:50
  from 'file:MojeZamowienia.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696747926ae758_28186504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4794810505a4a7d22bff087c5841600de6077d44' => 
    array (
      0 => 'MojeZamowienia.tpl',
      1 => 1768376206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696747926ae758_28186504 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1287279966967479268f756_87604212', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1287279966967479268f756_87604212 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>


<h2>Moje zamówienia</h2>

<?php if (( !$_smarty_tpl->hasVariable('orders') || empty($_smarty_tpl->getValue('orders')))) {?>
    <p>Nie masz jeszcze żadnych zamówień.</p>
<?php } else { ?>

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
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'o');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('o')->value) {
$foreach0DoElse = false;
?>
        <tr>
            <td>#<?php echo $_smarty_tpl->getValue('o')['ID_ZAMOWIENIA'];?>
</td>

            <td>
                <?php if ($_smarty_tpl->getValue('o')['ID_STATUS'] == 1) {?>Koszyk
                <?php } elseif ($_smarty_tpl->getValue('o')['ID_STATUS'] == 2) {?>Złożone
                <?php } elseif ($_smarty_tpl->getValue('o')['ID_STATUS'] == 3) {?>Opłacone
                <?php } elseif ($_smarty_tpl->getValue('o')['ID_STATUS'] == 4) {?>W realizacji
                <?php } elseif ($_smarty_tpl->getValue('o')['ID_STATUS'] == 5) {?>Dostarczone
                <?php } elseif ($_smarty_tpl->getValue('o')['ID_STATUS'] == 6) {?>Anulowane
                <?php }?>
            </td>
	<td>
	<?php echo $_smarty_tpl->getValue('o')['ID_PLATNOSC'];?>

	</td>

            <td>
                <?php echo (($tmp = ($_smarty_tpl->getValue('o')['KWOTA_CALKOWITA']-$_smarty_tpl->getValue('o')['KOSZT_DOSTAWY']) ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
 zł
            </td>

            <td>
                <?php echo (($tmp = $_smarty_tpl->getValue('o')['KOSZT_DOSTAWY'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
 zł
            </td>

            <td>
                <strong><?php echo (($tmp = $_smarty_tpl->getValue('o')['KWOTA_CALKOWITA'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
 zł</strong>
            </td>

            <td>
                <?php if ($_smarty_tpl->getValue('o')['ID_STATUS'] == 2 && $_smarty_tpl->getValue('o')['ID_PLATNOSC'] != 3) {?>
    		<a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
order_pay&id=<?php echo $_smarty_tpl->getValue('o')['ID_ZAMOWIENIA'];?>
" class="btn-submit">
       		 OPŁAĆ
    		</a>
		<?php } else { ?>
   		 —
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
