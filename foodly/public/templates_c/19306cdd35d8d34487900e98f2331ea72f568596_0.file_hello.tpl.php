<?php
/* Smarty version 5.4.5, created on 2026-01-08 16:51:25
  from 'file:hello.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_695fd27dbb3b04_52835589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19306cdd35d8d34487900e98f2331ea72f568596' => 
    array (
      0 => 'hello.tpl',
      1 => 1767887340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_695fd27dbb3b04_52835589 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Foodly</title>
</head>
<body>

<nav>
    <?php if ($_smarty_tpl->getValue('isAdmin')) {?>
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
main_admin">Panel admina</a>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('isClient')) {?>
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
main_klient">Panel klienta</a>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('isCourier')) {?>
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
main_dostawca">Panel dostawcy</a>
    <?php }?>

    <?php if ($_smarty_tpl->getValue('isAdmin') || $_smarty_tpl->getValue('isClient') || $_smarty_tpl->getValue('isCourier')) {?>
        <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout">Wyloguj</a>
    <?php }?>
</nav>

<hr>

<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1526245050695fd27dbaff97_34410055', 'content');
?>


</body>
</html><?php }
/* {block 'content'} */
class Block_1526245050695fd27dbaff97_34410055 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views';
}
}
/* {/block 'content'} */
}
