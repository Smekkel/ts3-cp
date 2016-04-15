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

<div class="container">
	<div class="well-sm">
		<h4>{$lang['virtualserver']} <span class="label label-danger"># {$serverinfo['virtualserver_id']}</span></h4>
		<p>{$lang['editor']}</p>
	</div>
	<div class="row">
		<div class="col-md-4">
			{if !isset($permoverview['b_virtualserver_modify_password']) OR $permoverview['b_virtualserver_modify_password'] == 1}
			<div class="container-fluid">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">{$lang['serverpassword']}</div>
					</div>
					<div class="panel-body">
						<form method="post" action="index.php?site=serveredit&amp;sid={$sid}">
							<div class="input-group">
								<input type="password" class="form-control" name="newsettings[virtualserver_password]" placeholder="{$lang['newpassword']}">
								  <span class="input-group-btn">
									<button class="btn btn-success" type="submit" name="editpw">{$lang['setpswd']}</button>
								  </span>
							</div><!-- /input-group -->
						</form>
					</div>
				</div>
			</div>
			{else}
			<div class="container-fluid">
				<div class="alert alert-dismissable alert-success">
					{$lang['nopasspermissions']}
				</div>
			</div>
			{/if}
		</div>
		<div class="col-md-8">
				<div class="container-fluid">
					<form method="post" action="index.php?site=serveredit&amp;sid={$sid}" class="form-horizontal">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					{*Basic group*}
					<div class="panel panel-primary">
						<div class="panel-heading" role="tab" id="headingbasics">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsebasics" aria-expanded="true" aria-controls="collapsebasics">
									{$lang['basics']} <span class="glyphicon glyphicon-menu-down"></span>
								</a>
							</h4>
						</div>
						<div id="collapsebasics" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingbasics">
							<div class="panel-body">
								{*{if isset($permoverview['b_virtualserver_modify_autostart']) AND empty($permoverview['b_virtualserver_modify_autostart'])}-{else}
								<div class="form-group">
									<label for="autostart" class="col-sm-5 control-label">{$lang['autostart']}</label>
									<div class="col-sm-6">
										<select id="autostart" class="form-control" name="newsettings[newsettings[virtualserver_autostart]]">
											<option {if $serverinfo['virtualserver_autostart'] === '0'}selected{/if} value="0">{$lang['no']}</option>
											<option {if $serverinfo['virtualserver_autostart'] === '1'}selected{/if} value="1">{$lang['yes']}</option>
										</select>
									</div>
								</div>
								{/if} *}
								{if isset($permoverview['b_virtualserver_modify_autostart']) AND empty($permoverview['b_virtualserver_modify_autostart'])}-{else}
									<div class="form-group">
										<label for="autostart" class="col-sm-5 control-label">{$lang['autostart']}</label>
										<div class="col-sm-6">
											<div class="btn-group btn-group-justified" data-toggle="buttons">
												<label class="btn btn-default {if $serverinfo['virtualserver_autostart'] === '1'}active{/if}">
													<input type="radio" name="newsettings[newsettings[virtualserver_autostart]]" autocomplete="off" {if $serverinfo['virtualserver_autostart'] === '1'}checked{/if} value="1"> {$lang['yes']}
												</label>
												<label class="btn btn-default {if $serverinfo['virtualserver_autostart'] === '0'}active{/if}">
													<input type="radio" name="newsettings[newsettings[virtualserver_autostart]]" autocomplete="off" {if $serverinfo['virtualserver_autostart'] === '0'}checked{/if} value="0"> {$lang['no']}
												</label>
											</div>
										</div>
									</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_port']) AND empty($permoverview['b_virtualserver_modify_port'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="port" class="col-sm-5 control-label">{$lang['port']}</label>
									<div class="col-sm-6">
										<input type="text" id="port" name="newsettings[virtualserver_port]" class="form-control" value="{$serverinfo['virtualserver_port']}">
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_min_client_version']) AND empty($permoverview['b_virtualserver_modify_min_client_version'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="minclientversion" class="col-sm-5 control-label">{$lang['minclientversion']}</label>
									<div class="col-sm-6">
										<input type="text" id="minclientversion" name="newsettings[virtualserver_min_client_version]" class="form-control" value="{$serverinfo['virtualserver_min_client_version']}">
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_name']) AND empty($permoverview['b_virtualserver_modify_name'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="name" class="col-sm-5 control-label">{$lang['name']}</label>
									<div class="col-sm-6">
										<input type="text" id="name" name="newsettings[virtualserver_name]" class="form-control" value="{$serverinfo['virtualserver_name']}">
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_welcomemessage']) AND empty($permoverview['b_virtualserver_modify_welcomemessage'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="welcomemsg" class="col-sm-5 control-label">{$lang['welcomemsg']}</label>
									<div class="col-sm-6">
										<textarea class="form-control vertresize" name="newsettings[virtualserver_welcomemessage]" rows="3">{$serverinfo['virtualserver_welcomemessage']}</textarea>
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_maxclients']) AND empty($permoverview['b_virtualserver_modify_maxclients'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="maxclients" class="col-sm-5 control-label">{$lang['maxclients']}</label>
									<div class="col-sm-6">
										<input type="text" id="maxclients" name="newsettings[virtualserver_maxclients]" class="form-control" value="{$serverinfo['virtualserver_maxclients']}">
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_reserved_slots']) AND empty($permoverview['b_virtualserver_modify_reserved_slots'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="maxreservedslots" class="col-sm-5 control-label">{$lang['maxreservedslots']}</label>
									<div class="col-sm-6">
										<input type="text" id="maxreservedslots" name="newsettings[virtualserver_reserved_slots]" class="form-control" value="{$serverinfo['virtualserver_reserved_slots']}">
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_weblist']) AND empty($permoverview['b_virtualserver_modify_weblist'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="showonweblist" class="col-sm-5 control-label">{$lang['showonweblist']}</label>
									<div class="col-sm-6">
										<div class="btn-group btn-group-justified" data-toggle="buttons">
											<label class="btn btn-default {if $serverinfo['virtualserver_weblist_enabled'] === '1'}active{/if}">
												<input type="radio" name="newsettings[newsettings[virtualserver_weblist_enabled]]" autocomplete="off" {if $serverinfo['virtualserver_weblist_enabled'] === '1'}checked{/if} value="1"> {$lang['yes']}
											</label>
											<label class="btn btn-default {if $serverinfo['virtualserver_weblist_enabled'] === '0'}active{/if}">
												<input type="radio" name="newsettings[newsettings[virtualserver_weblist_enabled]]" autocomplete="off" {if $serverinfo['virtualserver_weblist_enabled'] === '0'}checked{/if} value="0"> {$lang['no']}
											</label>
										</div>
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_codec_encryption_mode']) AND empty($permoverview['b_virtualserver_modify_codec_encryption_mode'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="codecencryptionmode" class="col-sm-5 control-label">{$lang['codecencryptionmode']}</label>
									<div class="col-sm-6">
										<select id="codecencryptionmode" class="form-control" name="newsettings[newsettings[virtualserver_codec_encryption_mode]]">
											<option {if $serverinfo['virtualserver_codec_encryption_mode'] === '0'}selected{/if} value="0">{$lang['codecencryptionmodeindi']}</option>
											<option {if $serverinfo['virtualserver_codec_encryption_mode'] === '1'}selected{/if} value="1">{$lang['codecencryptionmodegoff']}</option>
											<option {if $serverinfo['virtualserver_codec_encryption_mode'] === '2'}selected{/if} value="2">{$lang['codecencryptionmodegon']}</option>
										</select>
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_password']) AND empty($permoverview['b_virtualserver_modify_password'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="passwordset" class="col-sm-5 control-label">{$lang['passwordset']}</label>
									<div class="col-sm-6">
										{if $serverinfo['virtualserver_flag_password'] == 1}
											<button class="btn btn-block btn-success disabled">{$lang['yes']}</button>
										{else}
											<button class="btn btn-block btn-default disabled">{$lang['no']}</button>
										{/if}
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_needed_identity_security_level']) AND empty($permoverview['b_virtualserver_modify_needed_identity_security_level'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="securitylevel" class="col-sm-5 control-label">{$lang['securitylevel']}</label>
									<div class="col-sm-6">
										<input type="text" id="securitylevel" name="newsettings[virtualserver_needed_identity_security_level]" class="form-control" value="{$serverinfo['virtualserver_needed_identity_security_level']}">
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_channel_forced_silence']) AND empty($permoverview['b_virtualserver_modify_channel_forced_silence'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="minclientschan" class="col-sm-5 control-label">{$lang['minclientschan']}</label>
									<div class="col-sm-6">
										<input type="text" id="minclientschan" name="newsettings[virtualserver_min_clients_in_channel_before_forced_silence]" class="form-control" value="{$serverinfo['virtualserver_min_clients_in_channel_before_forced_silence']}">
									</div>
								</div>
								{/if}
								{if isset($permoverview['b_virtualserver_modify_icon_id']) AND empty($permoverview['b_virtualserver_modify_icon_id'])}-{else}
								{*Element separator*}
								<div class="form-group">
									<label for="iconid" class="col-sm-5 control-label">{$lang['iconid']}</label>
									<div class="col-sm-6">
										<div class="input-group">
											<input id="iconid" type="text" class="form-control" name="newsettings[virtualserver_icon_id]" placeholder="{$serverinfo['virtualserver_icon_id']}">
											  <span class="input-group-btn">
												<a class="btn btn-success" href="javascript:oeffnefenster('site/showallicons.php?ip={$smarty.session.server_ip}&amp;sid={$sid}&amp;port={$serverinfo['virtualserver_port']}');" name="newsettings[virtualserver_icon_id]">{$lang['set']}</a>
											  </span>
										</div><!-- /input-group -->
									</div>
								</div>
								{/if}
							</div>
						</div>
					</div>
					{*Standart groups*}
					<div class="panel panel-primary">
						<div class="panel-heading" role="tab" id="hstandardgroups">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#cstandardgroups" aria-expanded="false" aria-controls="cstandardgroups">
									{$lang['standardgroups']} <span class="glyphicon glyphicon-menu-down"></span>
								</a>
							</h4>
						</div>
						<div id="cstandardgroups" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hstandardgroups">
							<div class="panel-body">
								222
							</div>
						</div>
					</div>
					{*host settings*}
					<div class="panel panel-primary">
						<div class="panel-heading" role="tab" id="headinghost">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsehost" aria-expanded="false" aria-controls="collapsehost">
									{$lang['host']} <span class="glyphicon glyphicon-menu-down"></span>
								</a>
							</h4>
						</div>
						<div id="collapsehost" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinghost">
							<div class="panel-body">
								333
							</div>
						</div>
					</div>
					{*ban settings*}
					<div class="panel panel-primary">
						<div class="panel-heading" role="tab" id="headingautoban">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseautoban" aria-expanded="false" aria-controls="collapseautoban">
									{$lang['autoban']} <span class="glyphicon glyphicon-menu-down"></span>
								</a>
							</h4>
						</div>
						<div id="collapseautoban" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingautoban">
							<div class="panel-body">
								555
							</div>
						</div>
					</div>
					{*anti-flood settings*}
					<div class="panel panel-primary">
						<div class="panel-heading" role="tab" id="headingantiflood">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseantiflood" aria-expanded="false" aria-controls="collapseantiflood">
									{$lang['antiflood']} <span class="glyphicon glyphicon-menu-down"></span>
								</a>
							</h4>
						</div>
						<div id="collapseantiflood" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingantiflood">
							<div class="panel-body">
								777
							</div>
						</div>
					</div>
					{*trasnfers*}
					<div class="panel panel-primary">
						<div class="panel-heading" role="tab" id="headingtransfers">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetransfers" aria-expanded="false" aria-controls="collapsetransfers">
									{$lang['transfers']} <span class="glyphicon glyphicon-menu-down"></span>
								</a>
							</h4>
						</div>
						<div id="collapsetransfers" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtransfers">
							<div class="panel-body">
								999
							</div>
						</div>
					</div>
					{*logs*}
					<div class="panel panel-primary">
						<div class="panel-heading" role="tab" id="headinglogs">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapselogs" aria-expanded="false" aria-controls="collapselogs">
									{$lang['logs']} <span class="glyphicon glyphicon-menu-down"></span>
								</a>
							</h4>
						</div>
						<div id="collapselogs" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinglogs">
							<div class="panel-body">
								13131
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="container-fluid">
					<input class="btn btn-success btn-block btn-lg" type="submit" name="createserver" value="{$lang['create']}"/>
				</div>
		</div>
		</div>
	</div>
</div>


























<hr>
<table style="width:100%" cellpadding="1" cellspacing="0">
	<tr valign="top">
		<td style="width:50%">
		<form method="post" action="index.php?site=serveredit&amp;sid={$sid}">
		<table  style="width:100%" class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td class="thead" colspan="2">{$lang['virtualserver']} #{$serverinfo['virtualserver_id']} {$lang['editor']} </td>
			</tr>
			<tr>
				<td class="green1" style="width:50%">{$lang['autostart']}:</td>
				<td class="green1" style="width:50%">
				{if isset($permoverview['b_virtualserver_modify_autostart']) AND empty($permoverview['b_virtualserver_modify_autostart'])}
					-
				{else}
					<select name="newsettings[virtualserver_autostart]">
						<option value="1" {if $serverinfo['virtualserver_autostart'] == 1}selected="selected"{/if}>{$lang['yes']}</option>
						<option value="0" {if $serverinfo['virtualserver_autostart'] == 0}selected="selected"{/if}>{$lang['no']}</option>
					</select>
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2" style="width:50%">{$lang['port']}:</td>
				<td class="green2" style="width:50%">
				{if isset($permoverview['b_virtualserver_modify_port']) AND empty($permoverview['b_virtualserver_modify_port'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_port]" value="{$serverinfo['virtualserver_port']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1" style="width:50%">{$lang['minclientversion']}:</td>
				<td class="green1" style="width:50%">
				{if isset($permoverview['b_virtualserver_modify_min_client_version']) AND empty($permoverview['b_virtualserver_modify_min_client_version'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_min_client_version]" value="{$serverinfo['virtualserver_min_client_version']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['name']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_name']) AND empty($permoverview['b_virtualserver_modify_name'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_name]" value="{$serverinfo['virtualserver_name']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['welcomemsg']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_welcomemessage']) AND empty($permoverview['b_virtualserver_modify_welcomemessage'])}
					-
				{else}
					<textarea name="newsettings[virtualserver_welcomemessage]" rows="5" cols="30">{$serverinfo['virtualserver_welcomemessage']}</textarea>
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['maxclients']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_maxclients']) AND empty($permoverview['b_virtualserver_modify_maxclients'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_maxclients]" value="{$serverinfo['virtualserver_maxclients']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['maxreservedslots']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_reserved_slots']) AND empty($permoverview['b_virtualserver_modify_reserved_slots'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_reserved_slots]" value="{$serverinfo['virtualserver_reserved_slots']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['showonweblist']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_weblist']) AND empty($permoverview['b_virtualserver_modify_weblist'])}
					-
				{else}
					<select name="newsettings[virtualserver_weblist_enabled]">
						<option value="1" {if $serverinfo['virtualserver_weblist_enabled'] == 1}selected="selected"{/if}>{$lang['yes']}</option>
						<option value="0" {if $serverinfo['virtualserver_weblist_enabled'] == 0}selected="selected"{/if}>{$lang['no']}</option>
					</select>
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['codecencryptionmode']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_codec_encryption_mode']) AND empty($permoverview['b_virtualserver_modify_codec_encryption_mode'])}
					-
				{else}
					<select name="newsettings[virtualserver_codec_encryption_mode]">
					<option value="0" {if $serverinfo['virtualserver_codec_encryption_mode'] == 0}selected='selected'{/if}>{$lang['codecencryptionmodeindi']}</option>
					<option value="1" {if $serverinfo['virtualserver_codec_encryption_mode'] == 1}selected='selected'{/if}>{$lang['codecencryptionmodegoff']}</option>
					<option value="2" {if $serverinfo['virtualserver_codec_encryption_mode'] == 2}selected='selected'{/if}>{$lang['codecencryptionmodegon']}</option>
					</select>
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['passwordset']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_password']) AND empty($permoverview['b_virtualserver_modify_password'])}
					-
				{else}
					{if $serverinfo['virtualserver_flag_password'] == 1}{$lang['yes']}{else} {$lang['no']}{/if}
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['securitylevel']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_needed_identity_security_level']) AND empty($permoverview['b_virtualserver_modify_needed_identity_security_level'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_needed_identity_security_level]" value="{$serverinfo['virtualserver_needed_identity_security_level']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['minclientschan']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_channel_forced_silence']) AND empty($permoverview['b_virtualserver_modify_channel_forced_silence'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_min_clients_in_channel_before_forced_silence]" value="{$serverinfo['virtualserver_min_clients_in_channel_before_forced_silence']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['iconid']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_icon_id']) AND empty($permoverview['b_virtualserver_modify_icon_id'])}
					-
				{else}
					<input id="iconid" type="text" name="newsettings[virtualserver_icon_id]" value="{$serverinfo['virtualserver_icon_id']}" /><a href="javascript:oeffnefenster('site/showallicons.php?ip={$smarty.session.server_ip}&amp;sid={$sid}&amp;port={$serverinfo['virtualserver_port']}');">{$lang['set']}</a>
				{/if}
				</td>
			</tr>
			<tr>
				<td class="thead" colspan="2">{$lang['standardgroups']}</td>
			</tr>
			<tr>
				<td class="green1">{$lang['servergroup']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_default_servergroup']) AND empty($permoverview['b_virtualserver_modify_default_servergroup'])}
					-
				{else}
					<select name="newsettings[virtualserver_default_server_group]">
					{foreach key=key item=value from=$servergroups}
						{if $value['type'] == 1}
							<option {if $value['sgid'] == $serverinfo['virtualserver_default_server_group']}selected="selected"{/if} value="{$value['sgid']}">{$value['sgid']} {$value['name']}</option>
						{/if}
					{/foreach}
					</select>
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['channelgroup']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_default_channelgroup']) AND empty($permoverview['b_virtualserver_modify_default_channelgroup'])}
					-
				{else}
					<select name="newsettings[virtualserver_default_channel_group]">
					{foreach key=key item=value from=$channelgroups}
						{if $value['type'] == 1}
							<option {if $value['cgid'] == $serverinfo['virtualserver_default_channel_group']}selected="selected"{/if} value="{$value['cgid']}">{$value['cgid']} {$value['name']}</option>
						{/if}
					{/foreach}
					</select>
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['chanadmingroup']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_default_channeladmingroup']) AND empty($permoverview['b_virtualserver_modify_default_channeladmingroup'])}
					-
				{else}
					<select name="newsettings[virtualserver_default_channel_admin_group]">
					{foreach key=key item=value from=$channelgroups}
						{if $value['type'] == 1}
							<option {if $value['cgid'] == $serverinfo['virtualserver_default_channel_admin_group']}selected="selected"{/if} value="{$value['cgid']}">{$value['cgid']} {$value['name']}</option>
						{/if}
					{/foreach}
					</select>
				{/if}
				</td>
			</tr>
			<tr>
				<td class="thead" colspan="2">{$lang['host']}</td>
			</tr>
			<tr>
				<td class="green1">{$lang['hostmessage']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_hostmessage']) AND empty($permoverview['b_virtualserver_modify_hostmessage'])}
					-
				{else}
					<textarea name="newsettings[virtualserver_hostmessage]" rows="5" cols="30">{$serverinfo['virtualserver_hostmessage']}</textarea>
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['hostmessageshow']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_hostmessage']) AND empty($permoverview['b_virtualserver_modify_hostmessage'])}
					-
				{else}
				<select name="newsettings[virtualserver_hostmessage_mode]">
					<option value="0" {if $serverinfo['virtualserver_hostmessage_mode'] == 0}selected='selected'{/if}>{$lang['nomessage']}</option>
					<option value="1" {if $serverinfo['virtualserver_hostmessage_mode'] == 1}selected='selected'{/if}>{$lang['showmessagelog']}</option>
					<option value="2" {if $serverinfo['virtualserver_hostmessage_mode'] == 2}selected='selected'{/if}>{$lang['showmodalmessage']}</option>
					<option value="3" {if $serverinfo['virtualserver_hostmessage_mode'] == 3}selected='selected'{/if}>{$lang['modalandexit']}</option>
				</select>
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="green1">{$lang['hosturl']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_hostbanner']) AND empty($permoverview['b_virtualserver_modify_hostbanner'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_hostbanner_url]" value="{$serverinfo['virtualserver_hostbanner_url']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['hostbannerurl']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_hostbanner']) AND empty($permoverview['b_virtualserver_modify_hostbanner'])}
					-
				{else}
					{if $serverinfo['virtualserver_hostbanner_gfx_url']!=''}
					<img style="width:350px" src="{$serverinfo['virtualserver_hostbanner_gfx_url']}" alt="" /><br />
					{/if}
					<input type="text" name="newsettings[virtualserver_hostbanner_gfx_url]" value="{$serverinfo['virtualserver_hostbanner_gfx_url']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['hostbannerintval']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_hostbanner']) AND empty($permoverview['b_virtualserver_modify_hostbanner'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_hostbanner_gfx_interval]" value="{$serverinfo['virtualserver_hostbanner_gfx_interval']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="green2">{$lang['hostbuttontooltip']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_hostbutton']) AND empty($permoverview['b_virtualserver_modify_hostbutton'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_hostbutton_tooltip]" value="{$serverinfo['virtualserver_hostbutton_tooltip']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['hostbuttongfx']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_hostbutton']) AND empty($permoverview['b_virtualserver_modify_hostbutton'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_hostbutton_gfx_url]" value="{$serverinfo['virtualserver_hostbutton_gfx_url']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['hostbuttonurl']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_hostbutton']) AND empty($permoverview['b_virtualserver_modify_hostbutton'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_hostbutton_url]" value="{$serverinfo['virtualserver_hostbutton_url']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="thead" colspan="2">{$lang['autoban']}</td>
			</tr>
			<tr>
				<td class="green1">{$lang['autobancount']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_complain']) AND empty($permoverview['b_virtualserver_modify_complain'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_complain_autoban_count]" value="{$serverinfo['virtualserver_complain_autoban_count']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['autobantime']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_complain']) AND empty($permoverview['b_virtualserver_modify_complain'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_complain_autoban_time]" value="{$serverinfo['virtualserver_complain_autoban_time']}" />{$lang['seconds']}
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['removetime']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_complain']) AND empty($permoverview['b_virtualserver_modify_complain'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_complain_remove_time]" value="{$serverinfo['virtualserver_complain_remove_time']}" />{$lang['seconds']}
				{/if}
				</td>
			</tr>
			<tr>
				<td class="thead" colspan="2">{$lang['antiflood']}</td>
			</tr>
			<tr>
				<td class="green1">{$lang['pointstickreduce']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_antiflood']) AND empty($permoverview['b_virtualserver_modify_antiflood'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_antiflood_points_tick_reduce]" value="{$serverinfo['virtualserver_antiflood_points_tick_reduce']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['pointsneededblockcmd']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_antiflood']) AND empty($permoverview['b_virtualserver_modify_antiflood'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_antiflood_points_needed_command_block]" value="{$serverinfo['virtualserver_antiflood_points_needed_command_block']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['pointsneededblockip']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_antiflood']) AND empty($permoverview['b_virtualserver_modify_antiflood'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_antiflood_points_needed_ip_block]" value="{$serverinfo['virtualserver_antiflood_points_needed_ip_block']}" />
				{/if}
				</td>
			</tr>
			<tr>
				<td class="thead" colspan="2">{$lang['transfers']}</td>
			</tr>
			<tr>
				<td class="green1">{$lang['upbandlimit']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_ft_settings']) AND empty($permoverview['b_virtualserver_modify_ft_settings'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_max_upload_total_bandwidth]" value="{$serverinfo['virtualserver_max_upload_total_bandwidth']}" />Byte/s
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['uploadquota']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_ft_quotas']) AND empty($permoverview['b_virtualserver_modify_ft_quotas'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_upload_quota]" value="{$serverinfo['virtualserver_upload_quota']}" />MiB
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['downbandlimit']}:</td>
				<td class="green1">
				{if isset($permoverview['b_virtualserver_modify_ft_settings']) AND empty($permoverview['b_virtualserver_modify_ft_settings'])}
					-
				{else}
					<input type="text" name="newsettings[virtualserver_max_download_total_bandwidth]" value="{$serverinfo['virtualserver_max_download_total_bandwidth']}" />Byte/s
				{/if}
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['downloadquota']}:</td>
				<td class="green2">
				{if isset($permoverview['b_virtualserver_modify_ft_quotas']) AND empty($permoverview['b_virtualserver_modify_ft_quotas'])}
					-
				{else}	
					<input type="text" name="newsettings[virtualserver_download_quota]" value="{$serverinfo['virtualserver_download_quota']}" />MiB
				{/if}
				</td>
			</tr>
			<tr>
				<td class="maincat" colspan="2">{$lang['logs']}</td>
			</tr>
			<tr>
				<td class="green1">{$lang['logclient']}:</td>
				<td class="green1">
				<select name="newsettings[virtualserver_log_client]">
					<option value="1" {if $serverinfo['virtualserver_log_client'] == 1}selected="selected"{/if}>{$lang['yes']}</option>
					<option value="0" {if $serverinfo['virtualserver_log_client'] == 0}selected="selected"{/if}>{$lang['no']}</option>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['logquery']}:</td>
				<td class="green2">
				<select name="newsettings[virtualserver_log_query]">
					<option value="1" {if $serverinfo['virtualserver_log_query'] == 1}selected="selected"{/if}>{$lang['yes']}</option>
					<option value="0" {if $serverinfo['virtualserver_log_query'] == 0}selected="selected"{/if}>{$lang['no']}</option>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['logchannel']}:</td>
				<td class="green1">
				<select name="newsettings[virtualserver_log_channel]">
					<option value="1" {if $serverinfo['virtualserver_log_channel'] == 1}selected="selected"{/if}>{$lang['yes']}</option>
					<option value="0" {if $serverinfo['virtualserver_log_channel'] == 0}selected="selected"{/if}>{$lang['no']}</option>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green2">{$lang['logpermissions']}:</td>
				<td class="green2">
				<select name="newsettings[virtualserver_log_permissions]">
					<option value="1" {if $serverinfo['virtualserver_log_permissions'] == 1}selected="selected"{/if}>{$lang['yes']}</option>
					<option value="0" {if $serverinfo['virtualserver_log_permissions'] == 0}selected="selected"{/if}>{$lang['no']}</option>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green1">{$lang['logserver']}:</td>
				<td class="green1">
				<select name="newsettings[virtualserver_log_server]">
					<option value="1" {if $serverinfo['virtualserver_log_server'] == 1}selected="selected"{/if}>{$lang['yes']}</option>
					<option value="0" {if $serverinfo['virtualserver_log_server'] == 0}selected="selected"{/if}>{$lang['no']}</option>
				</select>
				</td>
			</tr>	
			<tr>
				<td class="green2">{$lang['logfiletransfer']}:</td>
				<td class="green2">
				<select name="newsettings[virtualserver_log_filetransfer]">
					<option value="1" {if $serverinfo['virtualserver_log_filetransfer'] == 1}selected="selected"{/if}>{$lang['yes']}</option>
					<option value="0" {if $serverinfo['virtualserver_log_filetransfer'] == 0}selected="selected"{/if}>{$lang['no']}</option>
				</select>
				</td>
			</tr>	
			<tr>
				<td class="green1">{$lang['option']}:</td>
				<td class="green1"><input class="button" type="submit" name="editserver" value="Edit" /></td>
			</tr>
		</table>
		</form>
		</td>
		<td style="width:50%" align="center">
		{if !isset($permoverview['b_virtualserver_modify_password']) OR $permoverview['b_virtualserver_modify_password'] == 1}
			<form method="post" action="index.php?site=serveredit&amp;sid={$sid}">
			<table class="border" cellpadding="1" cellspacing="0">
				<tr>
					<td class="thead" colspan="2">{$lang['serverpassword']}</td>
				</tr>
				<tr>
					<td class="green1">{$lang['newpassword']}:</td>
					<td class="green1">
					<input type="text" name="newsettings[virtualserver_password]" value=""/>
					</td>
				</tr>
				<tr>
					<td class="green2">{$lang['option']}:</td>
					<td class="green2"><input class="button" type="submit" name="editpw" value="Senden" /></td>
				</tr>
			</table>
			</form>
		{/if}
		</td>
	</tr>
</table>