<div class="forum-buttons">
    <a href="{$HOME}{$data.pageUrlKey}?ftype=topic&fekey={$data.fekey}" class="btn btn-default">« Powrót do listy tematów</a>
</div>
{if $data.user!=null}
    {$data.formAddPost->toHtml()}
{else}
    Musisz być zalogowany
{/if}
<div class="forum-buttons">
    <a href="{$HOME}{$data.pageUrlKey}?ftype=topic&fekey={$data.fekey}" class="btn btn-default">« Powrót do listy tematów</a>
</div>