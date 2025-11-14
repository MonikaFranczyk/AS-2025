<?php
/* Smarty version 5.4.2, created on 2025-11-14 22:22:26
  from 'file:menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69179d926487c9_10295166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bfaeaafe5104d3cf401dbfe7f7c5b9ca921293e' => 
    array (
      0 => 'menu.tpl',
      1 => 1763155336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69179d926487c9_10295166 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_03_szablonowanie\\app\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_83853263069179d9263efd0_73665181', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_83853263069179d9263efd0_73665181 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_03_szablonowanie\\app\\templates';
?>

<div class="text-center mt-5">
    <h2>Witaj w systemie kalkulatorów!</h2>
    <p>Wybierz rodzaj kalkulatora:</p>

    <a class="btn btn-primary m-2" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/app/controllers/CalcCtrl.php">Zwykły kalkulator</a>
    <a class="btn btn-success m-2" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/app/controllers/KredytCtrl.php">Kalkulator kredytowy</a>

    <?php if ($_smarty_tpl->getValue('role') == "admin") {?>
        <a class="btn btn-danger m-2" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/app/controllers/AdminPanelCtrl.php">Panel administratora</a>
    <?php }?>

<?php if ($_smarty_tpl->getValue('show_form')) {?>
<form action="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/app/controllers/KredytCtrl.php" method="post">
  <!-- formularz kalkulatora -->
</form>
<?php }?>

<?php if (!$_smarty_tpl->getValue('show_form')) {?>
<div class="alert alert-danger mt-3 text-center">
  Brak dostępu do kalkulatora kredytowego!
</div>
<?php }?>

</div>
<?php
}
}
/* {/block 'content'} */
}
