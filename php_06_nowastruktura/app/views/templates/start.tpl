{extends file="layout.tpl"}

{block name=content}
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card shadow-sm" style="background-color: rgba(0,0,0,0.1);">
            <div class="card-body text-center">
                <h1 class="mb-3">Welcome!</h1>
                <p class="mb-4">Witaj w systemie kalkulatorów</p>
                <a class="btn btn-primary btn-lg" href="{$conf.app_url}/index.php?action=loginShow">Zaloguj się</a>
            </div>
        </div>
    </div>
</div>
{/block}
