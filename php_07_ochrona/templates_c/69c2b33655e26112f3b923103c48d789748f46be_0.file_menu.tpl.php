<?php
/* Smarty version 5.4.2, created on 2025-12-06 20:27:45
  from 'file:menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_693483b1c8d041_47659649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69c2b33655e26112f3b923103c48d789748f46be' => 
    array (
      0 => 'menu.tpl',
      1 => 1765048666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_693483b1c8d041_47659649 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_162950366693483b1c80894_54548656', 'content');
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_162950366693483b1c80894_54548656 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
?>

<div class="text-center mt-5">
    <h2>Menu użytkownika</h2>

    <?php if ($_smarty_tpl->getValue('role') == "user") {?>
        <a class="btn btn-primary m-2" 
           href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=calc">
            Zwykły kalkulator
        </a>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('role') == "admin") {?>
        <a class="btn btn-primary m-2" 
           href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=calc">
            Zwykły kalkulator
        </a>

        <a class="btn btn-success m-2" 
           href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=credit">
            Kalkulator kredytowy
        </a>

        <a class="btn btn-danger m-2" 
           href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=admin">
            Panel administratora
        </a>
    <?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
