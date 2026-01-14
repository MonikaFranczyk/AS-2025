{extends file="layouts/layout.tpl"}

{block name=content}

<h2>Logowanie</h2>

<form method="post" action="{$conf->action_url}login" class="auth-form">

    <div class="form-group">
        <label for="id_login">Login</label>
        <input
            id="id_login"
            type="text"
            name="login"
            value="{$form->login|default:''}"
        >
    </div>

    <div class="form-group">
        <label for="id_pass">Hasło</label>
        <input
            id="id_pass"
            type="password"
            name="pass"
        >
    </div>

    <button type="submit" class="btn-submit">
        Zaloguj
    </button>

</form>

{/block}
