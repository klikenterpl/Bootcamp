{$group = $data.forumGroupsDB->fetchRow("ekey = '{$data.fekey}' and status!=0")}
{$parentForumEkey = $data.forumsDB->get($group->forumId,'ekey')}
<div class="forum-buttons">
	<a href="{$HOME}{$data.pageUrlKey}?ftype=forum&fekey={$parentForumEkey}" class="btn btn-default">« Powrót do listy tematów</a>
	<div class="pull-right">
		<a href="{$HOME}do/setAllForumTopicReaded/{$group->ekey}/" class="btn btn-default">Oznacz tematy jako przeczytane</a>
		<a href="{$HOME}{$data.pageUrlKey}?ftype=addTopic&fekey={$group->ekey}" class="btn btn-primary">Dodaj nowy temat</a>
	</div>
</div>
<table class="table table-striped">
	<thead>
		<tr>
			<th></th>
			<th>{$group->name}</th>
			<th>Statystyki</th>
			<th>Ostatni post</th>
		</tr>
	</thead>
	<tbody>
		{foreach $data.forumTopicsDB->fetchAll("groupId = '{$group->id}' and status!=0","updateTime DESC") as $topic}		
		<tr>
			<td class="forum-icon {if $data.user!=null}{if !in_array($topic->id,$data.readedArray)}forum-not-readed{/if}{/if}">
				<img src="{$HOME}data/widgets/forum/img/basic2-004.png">	
			</td>					
			<td>
				<p class="forum-title"><a href="{$HOME}{$data.pageUrlKey}?ftype=topic&fekey={$topic->ekey}">{$topic->name}</a></p>
				<p class="forum-description">{generate::showDatatime($topic->updateTime)}</p>			
			</td>
			<td class="forum-stat-column">
				<div class="forum-stat">
					Posty: <strong>{$topic->postsCount}</strong><br>
					Wyświetlenia: <strong>{$topic->views}</strong>
				</div>
			</td>
			<td class="forum-last-column">
				<div class="forum-stat">
					{$lastPost = $data.forumTopicsDB->getLastPost($topic->id)}

                    Dodano: {generate::showDatatime($lastPost->createTime,true,true)}<br>
                    Przez: <a href="{$HOME}{$data.pageUrlKey}?ftype=user&fekey={$lastPost->author->ekey}">{$lastPost->author->username}</a>
				</div>			
			</td>
		</tr>
		{/foreach}
	</tbody>
</table>
<div class="forum-buttons">
    <a href="{$HOME}{$data.pageUrlKey}?ftype=forum&fekey={$parentForumEkey}" class="btn btn-default">« Powrót do listy tematów</a>
    <div class="pull-right">
        <a href="{$HOME}do/setAllForumTopicReaded/{$group->ekey}/" class="btn btn-default">Oznacz tematy jako przeczytane</a>
        <a href="{$HOME}{$data.pageUrlKey}?ftype=addTopic&fekey={$group->ekey}" class="btn btn-primary">Dodaj nowy temat</a>
    </div>
</div>
