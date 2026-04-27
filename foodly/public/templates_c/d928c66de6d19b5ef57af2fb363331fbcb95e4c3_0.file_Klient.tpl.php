<?php
/* Smarty version 5.4.5, created on 2026-04-27 15:02:58
  from 'file:Klient.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69ef5e82067028_83434907',
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
function content_69ef5e82067028_83434907 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_149050192869ef5e820625d4_85631540', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_149050192869ef5e820625d4_85631540 extends \Smarty\Runtime\Block
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
