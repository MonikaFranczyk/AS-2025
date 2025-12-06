{extends file="layout.tpl"}

{block name=content}
<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class="card shadow-sm" style="background-color: rgba(0,0,0,0.1);">
            <div class="card-body">
                <h4 class="card-title text-center mb-4">Logowanie</h4>

                <form method="post" action="{$conf.app_url}/index.php?action=login">
                    <div class="mb-3">
                        <label for="login" class="form-label">Login:</label>
                        <input type="text" class="form-control" name="login" id="login" required>
                    </div>

                    <div class="mb-3">
                        <label for="pass" class="form-label">Hasło:</label>
                        <input type="password" class="form-control" name="pass" id="pass" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Zaloguj</button>
                </form>

                {if !empty($messages)}
                    <div class="alert alert-danger mt-3">
                        <ul>
                            {foreach $messages as $m}
                                <li>{$m.text}</li>
                            {/foreach}
                        </ul>
                    </div>
                {/if}

            </div>
        </div>
    </div>
</div>
{/block}



