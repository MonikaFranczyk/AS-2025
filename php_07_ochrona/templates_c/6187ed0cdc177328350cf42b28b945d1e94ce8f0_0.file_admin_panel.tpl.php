<?php
/* Smarty version 5.4.2, created on 2025-12-06 22:58:10
  from 'file:admin_panel.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6934a6f2701102_78720108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6187ed0cdc177328350cf42b28b945d1e94ce8f0' => 
    array (
      0 => 'admin_panel.tpl',
      1 => 1765046517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6934a6f2701102_78720108 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6272110796934a6f25d06f2_63845148', 'content');
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_6272110796934a6f25d06f2_63845148 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
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
