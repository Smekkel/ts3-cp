{if $hoststatus === false AND $serverhost === true}
	<div class="container">
		<div class="alert alert-danger" role="alert">
			<b>{$lang['nohoster']}</b>
		</div>
	</div>
	{else}
	{if !empty($error) OR !empty($noerror)}
		<div class="container">
			{if !empty($error)}
			<div class="alert alert-danger" role="alert">
				<b>{$error}</b>
			</div>
			{/if}
			{if !empty($noerror)}
			<div class="alert alert-warning" role="alert">
				<b>{$noerror}</b>
			</div>
			{/if}
		</div>
	{/if}

<div class="container">
	<div class="well-sm">
		<h4>{$lang['instancebackup']}</h4>
		<p>{$lang['servbackdesc']}</p>
	</div>
	<div class="col-md-4 col-md-offset-4 alert alert-danger"><b>{$lang['snapwarning']}</b></div>
</div>
<div class="container">
	{* Vitrual server backups panel *}
	<div class="panel panel-primary">
		<div class="panel-heading">{$lang['serverbackups']}</div>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					<tr>
						<td class="thead">{$lang['created']}</td>
						<td class="thead">{$lang['server']}</td>
						<td class="thead">{$lang['options']}</td>
					</tr>
					</thead>
					<tbody>
					{if isset($files[0]) AND !empty($files[0]) OR isset($folder[2]) AND !empty($folder[2])}
						{if !isset($smarty.post.backupdate)}
							{foreach key=key item=value from=$folder[2]}
								{if $change_col % 2} {assign var=td_col value="active"} {else} {assign var=td_col value="green2"} {/if}
								<tr>
									<td class="{$td_col} center">{$value}</td>
									<td colspan="2" class="{$td_col}">
										<form method="post" action="index.php?site=iserverbackup">
											<input type="hidden" name="backupdate" value="{$value}" />
											<input class="btn btn-sm btn-primary center-block" type="submit" name="chose" value="{$lang['select']}" />
										</form>
									</td>
								</tr>
								{assign var=change_col value="`$change_col+1`"}
							{/foreach}
						{else}
							{if	isset($files[0])}
								{foreach key=key item=value from=$files[0]}
									{if $change_col % 2} {assign var=td_col value="active"} {else} {assign var=td_col value="green2"} {/if}
									<tr>
										<td class="{$td_col}">{$value['timestamp']|date_format:"%d.%m.%Y - %H:%M:%S"}</td>
										<td class="{$td_col}">{$value['server']}</td>
										<td class="{$td_col} minwidth">
											<form class="form-inline" method="post" action="index.php?site=iserverbackup">
												<div class="form-group">
														<select class="form-control" name="deployon">
															<option value="">{$lang['select']}</option>
															{if !empty($serverlist)}
																{foreach key=key2 item=value2 from=$serverlist}
																	<option value="{$value2['virtualserver_port']}">{$lang['id']}:{$value2['virtualserver_id']} [{$value2['virtualserver_name']}] {$lang['port']}:{$value2['virtualserver_port']}</option>
																{/foreach}
															{/if}
														</select>
														<input type="hidden" name="backupid" value="{$value['timestamp']}" />
														<input type="hidden" name="fileport" value="{$value['server']}" />
														<input type="hidden" name="backupdate" value="{$smarty.post.backupdate}" />
												</div>
												<div class="btn-group text-center" role="group" aria-label="...">
													<button class="btn btn-success" type="submit" name="deploy" value="{$lang['deploy']}">{$lang['deploy']}</button>
													<button type="submit" name="delete" value="{$lang['delete']}" class="btn btn-danger">{$lang['delete']}</button>
												</div>
											</form>
									</td>
									</tr>
									{assign var=change_col value="`$change_col+1`"}
								{/foreach}
							{else}
								<tr>
									<td colspan="3" class="warning">{$lang['nodatebackups']}</td>
								</tr>
							{/if}
						{/if}
					{else}
						<tr>
							<td colspan="3" class="warning">{$lang['nobackups']}</td>
						</tr>
					{/if}
					</tbody>
				</table>
			</div>
	</div>
	{* Host backups panel *}
	<div class="panel panel-primary">
		<div class="panel-heading">{$lang['host']} {$lang['serverbackups']}</div>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					<tr>
						<td class="thead">{$lang['created']}</td>
						<td class="thead">{$lang['server']}</td>
						<td class="thead">{$lang['options']}</td>
					</tr>
					</thead>
					<tbody>
					{if isset($files[1]) AND !empty($files[1]) OR isset($folder[1]) AND !empty($folder[1])}
						{if !isset($smarty.post.backupdate)}
							{foreach key=key item=value from=$folder.1}
								{if $change_col % 2} {assign var=td_col value="active"} {else} {assign var=td_col value="green2"} {/if}
								<tr>
									<td class="{$td_col} center">{$value}</td>
									<td colspan="2" class="{$td_col}">
										<form method="post" action="index.php?site=iserverbackup">
											<input type="hidden" name="backupdate" value="{$value}" />
											<input class="btn btn-sm btn-primary center-block" type="submit" name="chose" value="{$lang['select']}" />
										</form>
									</td>
								</tr>
								{assign var=change_col value="`$change_col+1`"}
							{/foreach}
						{else}
							{if	isset($files[1])}
								{foreach key=key item=value from=$files[1]}
									{if $change_col % 2} {assign var=td_col value="active"} {else} {assign var=td_col value="green2"} {/if}
									<tr>
										<td class="{$td_col}">{$value['timestamp']|date_format:"%d.%m.%Y - %H:%M:%S"}</td>
										<td class="{$td_col}">{$value['server']}</td>
										<td class="{$td_col} minwidth">
											<form class="form-inline" method="post" action="index.php?site=iserverbackup">
												<div class="form-group">
													<select class="form-control" name="deployon">
													<option value="">{$lang['select']}</option>
													{if !empty($serverlist)}
														{foreach key=key2 item=value2 from=$serverlist}
															<option value="{$value2['virtualserver_port']}">{$lang['id']}:{$value2['virtualserver_id']} [{$value2['virtualserver_name']}] {$lang['port']}:{$value2['virtualserver_port']}</option>
														{/foreach}
													{/if}
												</select>
												<input type="hidden" name="hostbackup" value="1" />
												<input type="hidden" name="backupdate" value="{$smarty.post.backupdate}" />
												<input type="hidden" name="backupid" value="{$value['timestamp']}" />
												<input type="hidden" name="fileport" value="{$value['server']}" />
												<div class="btn-group text-center" role="group" aria-label="...">
													<button class="btn btn-success" type="submit" name="deploy" value="{$lang['deploy']}">{$lang['deploy']}</button>
													<button type="submit" name="delete" value="{$lang['delete']}" class="btn btn-danger">{$lang['delete']}</button>
												</div>
											</form>
										</td>
									</tr>
									{assign var=change_col value="`$change_col+1`"}
								{/foreach}
							{else}
								<tr>
									<td colspan="3" class="warning">{$lang['nodatebackups']}</td>
								</tr>
							{/if}
						{/if}
					{else}
						<tr>
							<td colspan="3" class="warning">{$lang['nobackups']}</td>
						</tr>
					{/if}
					</tbody>
				</table>
			</div>
	</div>
</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<div class="well-sm">
					<form method="post" action="index.php?site=iserverbackup">
						<input class="btn btn-block btn-lg btn-primary" type="submit" name="create" value="{$lang['create']}" />
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<div class="well-sm">
					<form method="post" action="index.php?site=iserverbackup">
						<input type="hidden" name="hostbackup" value="1" />
						<input class="btn btn-block btn-lg btn-primary" type="submit" name="create" value="{$lang['host']} {$lang['create']}" />
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="well-sm">
				<a class="btn btn-default" href="index.php?site=iserverbackup">{$lang['getback']}</a>
			</div>
		</div>
	</div>
{/if}