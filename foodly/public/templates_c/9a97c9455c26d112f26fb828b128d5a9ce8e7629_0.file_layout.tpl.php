<?php
/* Smarty version 5.4.5, created on 2026-01-14 08:52:31
  from 'file:layouts/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_69674b3f4b72e6_46670322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a97c9455c26d112f26fb828b128d5a9ce8e7629' => 
    array (
      0 => 'layouts/layout.tpl',
      1 => 1768377148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69674b3f4b72e6_46670322 (\Smarty\Template $_smarty_tpl) {
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
            display: flex;
            align-items: center;
        }

        .container {
            padding: 30px;
        }

        .badge {
            background: #27ae60;
            padding: 5px 10px;
            border-radius: 4px;
            margin-right: 15px;
        }

        .btn {
            background: #e74c3c;
            padding: 6px 12px;
            border-radius: 4px;
            margin-left: 10px;
        }

        .btn-menu {
            background: #3498db;
            padding: 6px 12px;
            border-radius: 4px;
            margin-left: 10px;
        }
.menu-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}

.menu-table thead {
    background-color: #f2f2f2;
}

.menu-table th,
.menu-table td {
    padding: 12px 16px;
    border-bottom: 1px solid #ddd;
    vertical-align: middle;
}

/* KOLUMNY – STAŁA SZEROKOŚĆ */
.menu-table .col-name {
    width: 60%;
    text-align: left;
}

.menu-table .col-price {
    width: 20%;
    text-align: right;
    white-space: nowrap;
}

.menu-table .col-action {
    width: 20%;
    text-align: right;
}

/* PRZYCISK ADD */
.btn-add {
    display: inline-block;
    padding: 6px 14px;
    background-color: #27ae60;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
    font-size: 13px;
}

.btn-add-2 {
    display: inline-block;
    padding: 6px 14px;
    background-color: #c40202;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
    font-size: 13px;
}

.btn-add:hover {
    background-color: #219150;
}

.btn-add-2:hover {
    background-color: #990303;
}

.auth-form select,
.auth-form textarea {
    padding: 12px;
    font-size: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

.summary-box {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 6px;
    margin: 30px 0;
    font-size: 15px;
}

.summary-box p {
    margin: 8px 0;
}

.summary-total {
    font-size: 18px;
    margin-top: 15px;
}

.auth-form {
    max-width: 420px;
    margin-top: 25px;
}

.auth-form {
    max-width: 400px;
}

.form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 15px;
}

.form-group label {
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input {
    padding: 8px;
    font-size: 14px;
}

.btn-submit {
    margin-top: 10px;
    padding: 10px;
    background: #3498db;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-submit:hover {
    background: #2980b9;
}

.menu-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.menu-table th,
.menu-table td {
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

.menu-table th {
    background: #f0f2f5;
    font-weight: bold;
}

.menu-table tr:hover {
    background: #f9f9f9;
}


/* KOSZYK */

.cart-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 25px;
}

.cart-table th,
.cart-table td {
    padding: 18px 22px;          /* DUŻE odstępy */
    border-bottom: 1px solid #ddd;
    text-align: center;
    vertical-align: middle;
}

.cart-table th {
    background: #f0f2f5;
    font-weight: bold;
}

.col-name {
    text-align: left;
    width: 35%;
}

.col-qty {
    width: 20%;
}

.col-price,
.col-sum {
    width: 15%;
}

.qty-value {
    display: inline-block;
    min-width: 24px;
    font-weight: bold;
    font-size: 16px;
}

.qty-btn {
    display: inline-block;
    width: 32px;
    height: 32px;
    line-height: 30px;
    border: 1px solid #3498db;
    border-radius: 50%;
    color: #3498db;
    font-size: 18px;
    text-decoration: none;
    margin: 0 10px;
}

.qty-btn:hover {
    background: #3498db;
    color: #fff;
}

.remove-btn {
    font-size: 18px;
    text-decoration: none;
}

.cart-summary {
    margin-top: 30px;
    font-size: 18px;
    text-align: right;
}

/* PRZYCISK */
.btn-submit {
    margin-top: 35px;      /* WYRAŹNY odstęp od pól */
    padding: 12px;
    font-size: 15px;
    background: #3498db;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


/* KOMUNIKATY */
        .alert-danger {
            background: #f8d7da;
            color: #721c24;
            padding: 12px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            padding: 12px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-danger ul,
        .alert-success ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>

<body>

<nav>
    <div class="nav-left">
        🍔 Foodly
    </div>

    <div class="nav-right">
        <?php if (( !true || empty($_smarty_tpl->getValue('conf')->roles))) {?>
            <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login">Zaloguj</a>
            <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
register">Rejestracja</a>
        <?php } else { ?>
            <span class="badge">
                Zalogowany jako: <?php echo $_SESSION['user_login'];?>

            </span>

                        <?php if (\core\RoleUtils::inRole('KLIENT')) {?>

                <a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
cart">
                    🛒 Koszyk
                </a>

		<a class="btn-menu" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
main_klient">
                    Menu
                </a>

                <a class="btn-menu" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
moje_zamowienia">
                    Moje zamówienia
                </a>

            <?php }?>

                        <?php if (\core\RoleUtils::inRole('PRACOWNIK_RESTAURACJI')) {?>
                <a class="btn-menu" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
orders_restaurant">
                    Zamówienia
                </a>
            <?php }?>

            <a class="btn" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout">
                Wyloguj
            </a>
        <?php }?>
    </div>
</nav>


<div class="container">

        <?php if ((true && ($_smarty_tpl->hasVariable('messages') && null !== ($_smarty_tpl->getValue('messages') ?? null))) && $_smarty_tpl->getValue('messages')->isError()) {?>
        <div class="alert-danger">
            <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->getMessages(), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('msg')->isError()) {?>
                        <li><?php echo $_smarty_tpl->getValue('msg')->text;?>
</li>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>

    <?php if ((true && ($_smarty_tpl->hasVariable('messages') && null !== ($_smarty_tpl->getValue('messages') ?? null))) && $_smarty_tpl->getValue('messages')->isInfo()) {?>
        <div class="alert-success">
            <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages')->getMessages(), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
                    <?php if ($_smarty_tpl->getValue('msg')->isInfo()) {?>
                        <li><?php echo $_smarty_tpl->getValue('msg')->text;?>
</li>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>

    <div class="container">
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_200988871169674b3f4b31f1_19296846', 'content');
?>

</div>

</div>

</body>
</html><?php }
/* {block 'content'} */
class Block_200988871169674b3f4b31f1_19296846 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\foodly\\app\\views\\layouts';
}
}
/* {/block 'content'} */
}
