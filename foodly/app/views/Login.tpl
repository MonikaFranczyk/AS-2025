{extends file="layouts/layout.tpl"}
{block name=content}

<h2>Logowanie</h2>

{* komunikaty błędów *}
{if $msgs->isError()}
    <ul style="color:red;">
        {foreach $msgs->getMessages() as $msg}
            {if $msg->type == 'ERROR'}
                <li>{$msg->text}</li>
            {/if}
        {/foreach}
    </ul>
{/if}

{* komunikaty informacyjne *}
{if $msgs->isInfo()}
    <ul style="color:green;">
        {foreach $msgs->getMessages() as $msg}
            {if $msg->type == 'INFO'}
                <li>{$msg->text}</li>
            {/if}
        {/foreach}
    </ul>
{/if}

<form method="post" action="{$conf->action_url}login">

    <label>
        Login:
        <input id="id_login" type="text" name="login" value="{$form->login|default:''}">
    </label>
    <br><br>

    <label>
        Hasło:
        <input id="id_pass" type="password" name="pass">
    </label>
    <br><br>

    <button type="submit">Zaloguj</button>

</form>

{/block}
