<?php
/* Smarty version 5.4.2, created on 2025-11-14 20:42:53
  from 'file:admin_panel.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6917863dd09f34_95309949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '847342ad245e220d0cca5e418bc579793a57b1c5' => 
    array (
      0 => 'admin_panel.tpl',
      1 => 1763149312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6917863dd09f34_95309949 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_03_szablonowanie\\app\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_17901833916917863dd06100_33400823', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_17901833916917863dd06100_33400823 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_03_szablonowanie\\app\\templates';
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
