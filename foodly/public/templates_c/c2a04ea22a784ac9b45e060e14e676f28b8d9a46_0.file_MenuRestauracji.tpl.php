<?php
/* Smarty version 5.4.5, created on 2026-01-13 19:37:39
  from 'file:MenuRestauracji.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696690f3f09dd3_48423241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a04ea22a784ac9b45e060e14e676f28b8d9a46' => 
    array (
      0 => 'MenuRestauracji.tpl',
      1 => 1768329456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696690f3f09dd3_48423241 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1947503372696690f3ef3099_70414925', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_1947503372696690f3ef3099_70414925 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>


<h2>Menu restauracji</h2>

<?php if (( !$_smarty_tpl->hasVariable('menu') || empty($_smarty_tpl->getValue('menu')))) {?>
    <p>Brak pozycji w menu.</p>
<?php } else { ?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu'), 'items', false, 'typ');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('typ')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach0DoElse = false;
?>

    <h3 style="margin-top:40px;"><?php echo $_smarty_tpl->getValue('typ');?>
</h3>

    <table class="menu-table">
        <thead>
            <tr>
                <th class="col-name">Nazwa</th>
                <th class="col-price">Cena</th>
                <th class="col-action"></th>
            </tr>
        </thead>

        <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
            <tr>
                <td class="col-name"><?php echo $_smarty_tpl->getValue('item')['NAZWA'];?>
</td>
                <td class="col-price"><?php echo $_smarty_tpl->getValue('item')['CENA'];?>
 zł</td>
                <td class="col-action">
                    <a class="btn-add"
                       href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart_add_item&id=<?php echo $_smarty_tpl->getValue('item')['ID_MENU_ITEM'];?>
&rest_id=<?php echo $_GET['id'];?>
">
                        ADD
                    </a>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<?php }?>

<?php
}
}
/* {/block 'content'} */
}
