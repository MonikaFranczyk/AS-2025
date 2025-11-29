<?php
/* Smarty version 5.4.2, created on 2025-11-29 11:11:04
  from 'file:menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692ac6b8ea7644_28149352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '952e7276777976e5f518f2e7a17e5e810390ea04' => 
    array (
      0 => 'menu.tpl',
      1 => 1763750925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692ac6b8ea7644_28149352 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_682410282692ac6b8e9e462_27285373', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_682410282692ac6b8e9e462_27285373 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
?>

<div class="text-center mt-5">
    <h2>Witaj w systemie kalkulatorów!</h2>
    <p>Wybierz rodzaj kalkulatora:</p>

    <?php if ($_smarty_tpl->getValue('role')) {?>
        <a class="btn btn-primary m-2" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=calc">Zwykły kalkulator</a>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('role') == "admin") {?>
        <a class="btn btn-success m-2" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=credit">Kalkulator kredytowy</a>
        <a class="btn btn-danger m-2" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=admin">Panel administratora</a>
    <?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
