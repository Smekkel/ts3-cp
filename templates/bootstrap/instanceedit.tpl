{* Status notification *}
{if $hoststatus === false AND $serverhost === true}
	<div class="container container-alert">
		<div class="alert alert-dismissable alert-warning">
			<h4><b>Warning! </b></h4>{$lang['nohoster']}
		</div>
	</div>
{else}
	{if !empty($error) OR !empty($noerror)}
		<div class="container container-alert">
			{if !empty($error)}
				<div class="alert alert-dismissable alert-warning">
					<h4><b>Warning! </b></h4>{$error}
				</div>
			{/if}
			{if !empty($noerror)}
				<div class="alert alert-dismissable alert-success">
					{$noerror}
				</div>
			{/if}
		</div>
	{/if}

{* Instance parameters *}
<div class="container">
	<div class="well-sm">
		<h3>{$lang['instanceedit']}</b> </h3>
	</div>
	<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" method="post" action="index.php?site=instanceedit">
				<div class="well-sm">
					<h4>{$lang['instanceparams']}</h4>
				</div>
				<div class="form-group">
					<label for="questsquerygroup" class="col-sm-8 control-label">{$lang['questsquerygroup']}</label>
					<div class="col-sm-4">
						<input type="text" id="questsquerygroup" name="newsettings[serverinstance_guest_serverquery_group]" class="form-control marginbo10" value="{$instanceinfo['serverinstance_guest_serverquery_group']}">
					</div>
					<label for="tempsadmingroup" class="col-sm-8 control-label">{$lang['tempsadmingroup']}</label>
					<div class="col-sm-4" style="padding-top: 10px;">
						<input type="text" id="tempsadmingroup" name="newsettings[serverinstance_template_serveradmin_group]" class="form-control" value="{$instanceinfo['serverinstance_template_serveradmin_group']}">
					</div>
					<label for="tempcadmingroup" class="col-sm-8 control-label">{$lang['tempcadmingroup']}</label>
					<div class="col-sm-4" style="padding-top: 10px;">
						<input type="text" id="tempcadmingroup" name="newsettings[serverinstance_template_channeladmin_group]" class="form-control" value="{$instanceinfo['serverinstance_template_channeladmin_group']}">
					</div>
					<label for="tempsdefgroup" class="col-sm-8 control-label">{$lang['tempsdefgroup']}</label>
					<div class="col-sm-4" style="padding-top: 10px;">
						<input type="text" id="tempsdefgroup" name="newsettings[serverinstance_template_serverdefault_group]" class="form-control" value="{$instanceinfo['serverinstance_template_serverdefault_group']}">
					</div>
					<label for="tempcdefgroup" class="col-sm-8 control-label">{$lang['tempsdefgroup']}</label>
					<div class="col-sm-4" style="padding-top: 10px;">
						<input type="text" id="tempcdefgroup" name="newsettings[serverinstance_template_channeldefault_group]" class="form-control" value="{$instanceinfo['serverinstance_template_channeldefault_group']}">
					</div>
					<label for="filetransport" class="col-sm-8 control-label">{$lang['filetransport']}</label>
					<div class="col-sm-4" style="padding-top: 10px;">
						<input type="text" id="filetransport" name="newsettings[serverinstance_filetransfer_port]" class="form-control" value="{$instanceinfo['serverinstance_filetransfer_port']}">
					</div>
					<label for="maxdownbandwidth" class="col-sm-8 control-label">{$lang['maxdownbandwidth']}</label>
					<div class="col-sm-4" style="padding-top: 10px;">
						<input type="text" id="maxdownbandwidth" name="newsettings[serverinstance_max_download_total_bandwidth]" class="form-control" value="{$instanceinfo['serverinstance_max_download_total_bandwidth']}">
					</div>
					<label for="maxupbandwidth" class="col-sm-8 control-label">{$lang['maxupbandwidth']}</label>
					<div class="col-sm-4" style="padding-top: 10px;">
						<input type="text" id="maxupbandwidth" name="newsettings[serverinstance_max_upload_total_bandwidth]" class="form-control" value="{$instanceinfo['serverinstance_max_upload_total_bandwidth']}">
					</div>
					<label for="squeryfloodcmd" class="col-sm-8 control-label">{$lang['squeryfloodcmd']}</label>
					<div class="col-sm-4" style="padding-top: 10px;">
						<input type="text" id="squeryfloodcmd" name="newsettings[serverinstance_serverquery_flood_commands]" class="form-control" value="{$instanceinfo['serverinstance_serverquery_flood_commands']}">
					</div>
					<label for="squeryfloodtime" class="col-sm-8 control-label">{$lang['squeryfloodtime']}</label>
					<div class="col-sm-4" style="padding-top: 10px;">
						<input type="text" id="squeryfloodtime" name="newsettings[serverinstance_serverquery_flood_time]" class="form-control" value="{$instanceinfo['serverinstance_serverquery_flood_time']}">
					</div>
					<label for="squerybantime" class="col-sm-8 control-label">{$lang['squerybantime']}</label>
					<div class="col-sm-4" style="padding-top: 10px;">
						<input type="text" id="squerybantime" name="newsettings[serverinstance_serverquery_ban_time]" class="form-control" value="{$instanceinfo['serverinstance_serverquery_ban_time']}">
					</div>
					<div class="col-sm-4 col-md-offset-8" style="padding-top: 10px;">
						<button class="btn btn-success btn-block marginup10" type="submit" name="editinstance">{$lang['edit']}</button>
					</div>
				</div>

			</form>
		</div>
		<div class="col-md-6">
			<div class="well-sm">
				<h4>{$lang['showonweblist']}</h4>
			</div>
			<form method="post" action="index.php?site=instanceedit">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					<tr>
						<th class="thead" style="width: 20%">{$lang['serverid']}</a></th>
						<th class="thead" style="width: 60%">{$lang['name']}</a></th>
						<th class="thead">{$lang['webliststatus']} {*<input type="checkbox" name="checkall" value="0" onclick="check(1)" />*} </th>
					</tr>
					</thead>
					<tbody>
					{if !empty($serverlist)}
						{foreach key=key item=value from=$serverlist}
							{if $change_col % 2} {assign var=td_col value="active"} {else} {assign var=td_col value=""} {/if}
							<tr>
								<td class="{$td_col}">{$value['virtualserver_id']}</td>
								<td class="{$td_col}">{$value['virtualserver_name']}</td>
								<td class="{$td_col}" align="right">
									<input type="hidden" name="list[{$value['virtualserver_id']}][0]" value="0" />
									<input {if $value['virtualserver_weblist_enabled'] == 1}checked="checked"{/if} type="checkbox" id="list{$value['virtualserver_id']}" name="list[{$value['virtualserver_id']}][0]" value="1"/>
								</td>
							</tr>
							{assign var=change_col value="`$change_col+1`"}
						{/foreach}
					{/if}
					</tbody>
				</table>
			</div>
				<div>
					<button class="btn btn-success btn-block" type="submit" name="editshowlist">{$lang['edit']}</button>
				</div>
				</form>
			{/if}
		</div>
	</div>
</div>











