<?php
/* Smarty version 5.4.2, created on 2025-11-29 11:11:06
  from 'file:admin_panel.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692ac6baa2eb46_04857501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d9122569f017e4f7d35d450c59c806a0a07a440' => 
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
function content_692ac6baa2eb46_04857501 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_670091194692ac6baa2b385_65462236', 'content');
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_670091194692ac6baa2b385_65462236 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
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
