<?php
/* Smarty version 5.4.2, created on 2025-11-21 19:52:02
  from 'file:admin_panel.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6920b4d20ec500_71171289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81693fa74ec80c87c47d93acb117c0032c148f2c' => 
    array (
      0 => 'admin_panel.tpl',
      1 => 1763751014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6920b4d20ec500_71171289 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13566936976920b4d20e7389_60574852', 'content');
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_13566936976920b4d20e7389_60574852 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\app\\views\\templates';
?>

<div class="mt-4">
    <h3>Panel administratora</h3>
    <p>To jest strona dostępna tylko dla administratora.</p>
</div>
<?php
}
}
/* {/block 'content'} */
}
