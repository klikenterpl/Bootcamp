{$topic = $data.forumTopicsDB->fetchRow("ekey = '{$data.fekey}' and status!=0")}
{$parentGroupEkey = $data.forumGroupsDB->get($topic->groupId,'ekey')}
<div class="forum-buttons">
    <a href="{$HOME}{$data.pageUrlKey}?ftype=group&fekey={$parentGroupEkey}" class="btn btn-default">« Powrót do listy wątków</a>
    <div class="pull-right">
        <a href="{$HOME}{$data.pageUrlKey}?ftype=addPost&fekey={$topic->ekey}" class="btn btn-primary">Wyślij odpowiedź</a>
    </div>
</div>
<table class="table table-striped">
	<tbody>	
		{foreach $data.forumPostsDB->getPosts($topic->id) as $post}
		<tr>
			<td>
				{if $post->author!=null}
					{$post->author->email}
				{else}
					Użytkownik skasowany
				{/if}

                Dodał: {generate::showDatatime($post->createTime,true,true)}<br>
			</td>
			<td>{$post->content}</td>
		</tr>
		{/foreach}
	</tbody>
</table>
<div class="forum-buttons">
    <a href="{$HOME}{$data.pageUrlKey}?ftype=group&fekey={$parentGroupEkey}" class="btn btn-default">« Powrót do listy wątków</a>
    <div class="pull-right">
        <a href="{$HOME}{$data.pageUrlKey}?ftype=addPost&fekey={$topic->ekey}" class="btn btn-primary">Wyślij odpowiedź</a>
    </div>
</div>

