<?php
/* Smarty version 5.4.5, created on 2026-01-13 17:29:16
  from 'file:Main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_696672dc4624c2_57533212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b6f94ecb8680a21c41a75977dcba72a0b673756' => 
    array (
      0 => 'Main.tpl',
      1 => 1767944071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_696672dc4624c2_57533212 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_431906744696672dc458f16_01919238', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_431906744696672dc458f16_01919238 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
?>

<h1>Witaj w Foodly!</h1>

<?php if (!$_smarty_tpl->getValue('isLogged')) {?>
    <p>Zaloguj się, aby korzystać z systemu.</p>
<?php } else { ?>
    <p>Wybierz opcję z menu powyżej.</p>
<?php }
}
}
/* {/block 'content'} */
}
