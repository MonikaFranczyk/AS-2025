<?php
/* Smarty version 5.4.5, created on 2026-01-09 08:51:25
  from 'file:layouts/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_6960b37d43b8b5_12302723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a97c9455c26d112f26fb828b128d5a9ce8e7629' => 
    array (
      0 => 'layouts/layout.tpl',
      1 => 1767945078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6960b37d43b8b5_12302723 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views\\layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('pageTitle') ?? null)===null||$tmp==='' ? "Foodly" ?? null : $tmp);?>
</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f8;
        }

        nav {
            background: #2c3e50;
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .nav-left {
            font-size: 20px;
            font-weight: bold;
        }

        .nav-right {
            font-size: 14px;
        }

        .container {
            padding: 30px;
        }

        .badge {
            background: #27ae60;
            padding: 5px 10px;
            border-radius: 4px;
            margin-right: 10px;
        }

        .btn {
            background: #e74c3c;
            padding: 6px 12px;
            border-radius: 4px;
        }

        .btn-menu {
            background: #3498db;
            padding: 6px 12px;
            border-radius: 4px;
        }
    </style>
</head>

<body>

<nav>
    <div class="nav-left">
        🍔 Foodly
    </div>

    <div class="nav-right">
        <?php if (!$_smarty_tpl->getValue('isLogged')) {?>
            <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login">Zaloguj</a>
        <?php } else { ?>
 		<span class="user-info">
    		Zalogowany jako: <strong><?php echo $_smarty_tpl->getValue('userLogin');?>
</strong>
		</span>
            <a class="btn-menu" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;
echo $_smarty_tpl->getValue('mainRoute');?>
">
                Menu
            </a>

            <a class="btn" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout">
                Wyloguj
            </a>
        <?php }?>
    </div>
</nav>

<div class="container">
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_19669754636960b37d30bcd0_90043358', 'content');
?>

</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_19669754636960b37d30bcd0_90043358 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views\\layouts';
}
}
/* {/block 'content'} */
}
