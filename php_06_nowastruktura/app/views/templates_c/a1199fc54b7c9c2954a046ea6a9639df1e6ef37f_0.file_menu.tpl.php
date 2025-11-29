<?php
/* Smarty version 5.4.2, created on 2025-11-21 19:51:43
  from 'file:menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6920b4bfc2c730_93576859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1199fc54b7c9c2954a046ea6a9639df1e6ef37f' => 
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
function content_6920b4bfc2c730_93576859 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8450402976920b4bfc21b82_36504953', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_8450402976920b4bfc21b82_36504953 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\app\\views\\templates';
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
