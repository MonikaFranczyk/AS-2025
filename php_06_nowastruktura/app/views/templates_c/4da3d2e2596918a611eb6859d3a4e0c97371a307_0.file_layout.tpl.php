<?php
/* Smarty version 5.4.2, created on 2025-11-29 11:10:58
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_692ac6b2e1f0a0_24271399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4da3d2e2596918a611eb6859d3a4e0c97371a307' => 
    array (
      0 => 'layout.tpl',
      1 => 1763749569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692ac6b2e1f0a0_24271399 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "System kalkulatorów" ?? null : $tmp);?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/app/views/templates/images/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
        }
    </style>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg" style="background-color: rgba(0,0,0,0.5);">
    <div class="container-fluid">
        <?php if ((null !== ($_smarty_tpl->getValue('role') ?? null))) {?>
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=menu">Menu</a>
        <?php } else { ?>
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php">Menu</a>
        <?php }?>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <?php if ((null !== ($_smarty_tpl->getValue('role') ?? null))) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=logout">Wyloguj</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2136810780692ac6b2e1e368_88780353', 'content');
?>

</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_2136810780692ac6b2e1e368_88780353 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
}
}
/* {/block 'content'} */
}
