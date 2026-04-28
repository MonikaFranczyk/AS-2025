<?php
/* Smarty version 5.4.5, created on 2026-04-27 15:45:35
  from 'file:Main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69ef687f2652d0_84643669',
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
function content_69ef687f2652d0_84643669 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_205983078669ef687f248205_81764496', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/layout.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_205983078669ef687f248205_81764496 extends \Smarty\Runtime\Block
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
