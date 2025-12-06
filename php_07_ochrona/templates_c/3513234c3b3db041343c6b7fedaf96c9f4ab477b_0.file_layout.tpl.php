<?php
/* Smarty version 5.4.2, created on 2025-12-06 20:27:45
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_693483b1e23ae4_08000795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3513234c3b3db041343c6b7fedaf96c9f4ab477b' => 
    array (
      0 => 'layout.tpl',
      1 => 1765048876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_693483b1e23ae4_08000795 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
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

        .content-wrapper {
            max-width: 650px;
            margin: 60px auto;
        }
    </style>
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg" style="background-color: rgba(0,0,0,0.5);">
    <div class="container-fluid">

        <?php if ((null !== ($_smarty_tpl->getValue('role') ?? null))) {?>
            <span class="navbar-text text-light me-3">
                Zalogowany jako: <?php echo $_smarty_tpl->getValue('role');?>

            </span>
        <?php }?>

        <!-- UWAGA: zawsze notacja kropkowa -->
        <?php if ((null !== ($_smarty_tpl->getValue('role') ?? null))) {?>
            <a class="navbar-brand text-white" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=menu">Menu</a>
        <?php } else { ?>
            <a class="navbar-brand text-white" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=start">Menu</a>
        <?php }?>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                <?php if ((null !== ($_smarty_tpl->getValue('role') ?? null))) {?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $_smarty_tpl->getValue('conf')['app_url'];?>
/index.php?action=logout">Wyloguj</a>
                    </li>
                <?php }?>

            </ul>
        </div>

    </div>
</nav>

<div class="container content-wrapper">
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_263083261693483b1e23190_00169155', 'content');
?>

</div>

</body>
</html>

<?php }
/* {block 'content'} */
class Block_263083261693483b1e23190_00169155 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_ochrona\\app\\views\\templates';
}
}
/* {/block 'content'} */
}
