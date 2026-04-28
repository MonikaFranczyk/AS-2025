<?php
/* Smarty version 5.4.5, created on 2026-04-27 21:11:39
  from 'file:MenuRestauracji.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69efb4eb7301e3_25388203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a04ea22a784ac9b45e060e14e676f28b8d9a46' => 
    array (
      0 => 'MenuRestauracji.tpl',
      1 => 1777317097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69efb4eb7301e3_25388203 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_71505771969efb4eb719624_02199078', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_71505771969efb4eb719624_02199078 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>


<h2>Menu restauracji</h2>

<div id="menu-container">

<?php if (( !$_smarty_tpl->hasVariable('menu') || empty($_smarty_tpl->getValue('menu')))) {?>

    <p>Brak pozycji w menu.</p>

<?php } else { ?>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('menu'), 'items', false, 'typ');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('typ')->value => $_smarty_tpl->getVariable('items')->value) {
$foreach0DoElse = false;
?>

    <h3 style="margin-top:40px;">
        <?php echo $_smarty_tpl->getValue('typ');?>

    </h3>

    <table class="menu-table">

        <thead>
            <tr>
                <th class="col-name">
                    Nazwa
                </th>

                <th class="col-price">
                    Cena
                </th>

                <th class="col-action">
                </th>
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

                <td class="col-name">
                    <?php echo $_smarty_tpl->getValue('item')['NAZWA'];?>

                </td>

                <td class="col-price">
                    <?php echo sprintf("%.2f",$_smarty_tpl->getValue('item')['CENA']);?>
 zł
                </td>

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

</div>

<?php
}
}
/* {/block 'content'} */
}
