{if is_numeric($params.id)}
    {$forumWhere = "id={$params.id} AND "}
{else}
    {$forumWhere = ""}
{/if}
{foreach $data.forumsDB->fetchAll("{$forumWhere}status!=0",'position ASC') as $forum}
	<table class="table table-striped">
		<thead>
			<tr>
				<th></th>
				<th><a href="{$HOME}{$data.pageUrlKey}?ftype=forum&fekey={$forum->ekey}">{$forum->name}</a></th>
				<th>Statystyki</th>
				<th>Ostatni post</th>
			</tr>
		</thead>
		<tbody>	
			{foreach $data.forumGroupsDB->fetchAll("forumId = {$forum->id} and status!=0","position ASC") as $group}		
			<tr>
				<td class="forum-icon {if $data.user!=null}{if $data.forumReadedLog->getReadedGroupCountByUser($data.user->id,$group->id)<$data.forumTopicsDB->fetchCount("groupId={$group->id} and status!=0")}forum-not-readed{/if}{/if}">
					<img src="{$HOME}data/widgets/forum/img/basic2-004.png">	
				</td>
				<td>
					<p class="forum-title"><a href="{$HOME}{$data.pageUrlKey}?ftype=group&fekey={$group->ekey}">{$group->name}</a></p>
					<p class="forum-description">{$group->description|truncate:100}</p>
				</td>
				<td class="forum-stat-column">
					<div class="forum-stat">
						Tematy: <strong>{$group->topicsCount}</strong><br>
						Posty: <strong>{$group->postsCount}</strong>
					</div>
				</td>
				<td class="forum-last-column">
					<div class="forum-stat">
						{$lastPost = $data.forumGroupsDB->getLastPost($group->id)}
                        {if $lastPost==null}
                            <a href="{$HOME}{$data.pageUrlKey}?ftype=addTopic&fekey={$group->ekey}" class="btn btn-default">Dodaj</a>
                        {else}
						    Dodano: {generate::showDatatime($lastPost->createTime,true,true)}<br>
						    Przez: <a href="{$HOME}{$data.pageUrlKey}?ftype=user&fekey={$lastPost->author->ekey}">{$lastPost->author->username}</a>
                        {/if}
					</div>			
				</td>
			</tr>
			{/foreach}
		</tbody>
	</table>	
{/foreach}
