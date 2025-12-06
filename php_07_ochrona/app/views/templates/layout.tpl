<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>{$page_title|default:"System kalkulatorów"}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('{$conf.app_url}/app/views/templates/images/background.jpg');
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

        {if isset($role)}
            <span class="navbar-text text-light me-3">
                Zalogowany jako: {$role}
            </span>
        {/if}

        <!-- UWAGA: zawsze notacja kropkowa -->
        {if isset($role)}
            <a class="navbar-brand text-white" href="{$conf.app_url}/index.php?action=menu">Menu</a>
        {else}
            <a class="navbar-brand text-white" href="{$conf.app_url}/index.php?action=start">Menu</a>
        {/if}

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                {if isset($role)}
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{$conf.app_url}/index.php?action=logout">Wyloguj</a>
                    </li>
                {/if}

            </ul>
        </div>

    </div>
</nav>

<div class="container content-wrapper">
    {block name=content}{/block}
</div>

</body>
</html>

