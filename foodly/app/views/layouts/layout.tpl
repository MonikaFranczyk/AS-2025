<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>{$pageTitle|default:"Foodly"}</title>

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
        {if empty($conf->roles)}
            <a href="{$conf->action_url}login">Zaloguj</a>
            <a href="{$conf->action_url}register">Rejestracja</a>
        {else}
            <span class="badge">
                Zalogowany jako: {$smarty.session.user_login}
            </span>

            {* ===== KLIENT ===== *}
            {if \core\RoleUtils::inRole('KLIENT')}

                <a href="{$conf->action_url}cart">
                    🛒 Koszyk
                </a>

		<a class="btn-menu" href="{$conf->action_url}main_klient">
                    Menu
                </a>

                <a class="btn-menu" href="{$conf->action_url}moje_zamowienia">
                    Moje zamówienia
                </a>

            {/if}

            {* ===== PRACOWNIK RESTAURACJI ===== *}
            {if \core\RoleUtils::inRole('PRACOWNIK_RESTAURACJI')}
                <a class="btn-menu" href="{$conf->action_url}orders_restaurant">
                    Zamówienia
                </a>
            {/if}

            <a class="btn" href="{$conf->action_url}logout">
                Wyloguj
            </a>
        {/if}
    </div>
</nav>


<div class="container">

    {* ===== KOMUNIKATY ===== *}
    {if isset($messages) && $messages->isError()}
        <div class="alert-danger">
            <ul>
                {foreach $messages->getMessages() as $msg}
                    {if $msg->isError()}
                        <li>{$msg->text}</li>
                    {/if}
                {/foreach}
            </ul>
        </div>
    {/if}

    {if isset($messages) && $messages->isInfo()}
        <div class="alert-success">
            <ul>
                {foreach $messages->getMessages() as $msg}
                    {if $msg->isInfo()}
                        <li>{$msg->text}</li>
                    {/if}
                {/foreach}
            </ul>
        </div>
    {/if}

    {* ===== TREŚĆ STRONY ===== *}
<div class="container">
    {block name=content}{/block}
</div>

</div>

</body>
</html>