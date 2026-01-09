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
        {if !$isLogged}
            <a href="{$conf->action_url}login">Zaloguj</a>
        {else}
 		<span class="user-info">
    		Zalogowany jako: <strong>{$userLogin}</strong>
		</span>
            <a class="btn-menu" href="{$conf->action_url}{$mainRoute}">
                Menu
            </a>

            <a class="btn" href="{$conf->action_url}logout">
                Wyloguj
            </a>
        {/if}
    </div>
</nav>

<div class="container">
    {block name=content}{/block}
</div>

</body>
</html>