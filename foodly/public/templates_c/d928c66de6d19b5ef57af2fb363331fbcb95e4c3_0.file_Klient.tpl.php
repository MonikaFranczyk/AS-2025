<?php
/* Smarty version 5.4.5, created on 2026-01-13 17:29:25
  from 'file:Klient.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696672e5774bd1_81519970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd928c66de6d19b5ef57af2fb363331fbcb95e4c3' => 
    array (
      0 => 'Klient.tpl',
      1 => 1767951739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696672e5774bd1_81519970 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2080627639696672e57702a6_04859102', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_2080627639696672e57702a6_04859102 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>

<h2>Panel klienta</h2>
<a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
restauracje">🍽️ Przeglądaj restauracje</a>
<?php
}
}
/* {/block 'content'} */
}
