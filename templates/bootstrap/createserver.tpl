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

	{* Server creation *}
	{if !isset($smarty.post.createserver) OR !empty($error)}
		<div class="container-fluid">
			<form method="post" action="index.php?site=createserver" class="form-horizontal">
			{* Head *}
			<div class="well-sm">
				<h3>{$lang['createnewserver']}</b> </h3>
				{$lang['createserverdesc']}
			</div>
			{* Create form *}
			<div class="row">
				<div class="col-md-6">
					<div class="well-sm">
						<h4>{$lang['createnewserver_basic']}</b> </h4>
					</div>
					{* First colonum *}
					<div class="form-group">
						<label for="name" class="col-sm-5 control-label">{$lang['name']}</label>
						<div class="col-sm-6">
							<input type="text" id="name" name="newsettings[virtualserver_name]" class="form-control" value="{$screate_tmp['name']}">
						</div>
					</div>
					<div class="form-group">
						{*Element separator*}
						<label for="port" class="col-sm-5 control-label">{$lang['port']}</label>
						<div class="col-sm-6">
							<input type="text" id="port" name="newsettings[virtualserver_port]" class="form-control" value="{$screate_tmp['port']}">
						</div>
					</div>
					{*Element separator*}
					<div class="form-group">
						<label for="minclientversion" class="col-sm-5 control-label">{$lang['minclientversion']}</label>
						<div class="col-sm-6">
							<input type="text" id="minclientversion" name="newsettings[virtualserver_min_client_version]" class="form-control" value="{$screate_tmp['minclientversion']}">
						</div>
					</div>
					{*Element separator*}
					<div class="form-group">
						<label for="welcomemsg" class="col-sm-5 control-label">{$lang['welcomemsg']}</label>
						<div class="col-sm-6">
							<input type="text" id="welcomemsg" name="newsettings[virtualserver_welcomemessage]" class="form-control" value="{$screate_tmp['welcomemsg']}">
						</div>
					</div>
					{*Element separator*}
					<div class="form-group">
						<label for="maxclients" class="col-sm-5 control-label">{$lang['maxclients']}</label>
						<div class="col-sm-6">
							<input type="text" id="maxclients" name="newsettings[virtualserver_maxclients]" class="form-control" value="{$screate_tmp['maxclients']}">
						</div>
					</div>
					{*Element separator*}
					<div class="form-group">
						<label for="maxreservedslots" class="col-sm-5 control-label">{$lang['maxreservedslots']}</label>
						<div class="col-sm-6">
							<input type="text" id="maxreservedslots" name="newsettings[virtualserver_reserved_slots]" class="form-control" value="{$screate_tmp['reservedslots']}">
						</div>
					</div>
					{*Element separator*}
					<div class="form-group">
						<label for="showonweblist" class="col-sm-5 control-label">{$lang['showonweblist']}</label>
						<div class="col-sm-6">
							<input type="text" id="showonweblist" name="newsettings[virtualserver_weblist_enabled]" class="form-control" value="{$screate_tmp['showonweblist']}">
						</div>
					</div>
					{*Element separator*}
					<div class="form-group">
						<label for="passwrd" class="col-sm-5 control-label">{$lang['password']}</label>
						<div class="col-sm-6">
							<input type="text" id="passwrd" name="newsettings[virtualserver_password]" class="form-control" value="{$screate_tmp['password']}">
						</div>
					</div>
					{*Element separator*}
					<div class="form-group">
						<label for="securitylevel" class="col-sm-5 control-label">{$lang['securitylevel']}</label>
						<div class="col-sm-6">
							<input type="text" id="securitylevel" name="newsettings[virtualserver_needed_identity_security_level]" class="form-control" value="{$screate_tmp['securitylvl']}">
						</div>
					</div>
					{*Element separator*}
					<div class="form-group">
						<label for="minclientschan" class="col-sm-5 control-label">{$lang['minclientschan']}</label>
						<div class="col-sm-6">
							<input type="text" id="minclientschan" name="newsettings[virtualserver_min_clients_in_channel_before_forced_silence]" class="form-control" value="{$screate_tmp['forcesilence']}">
						</div>
					</div>
					{* First colonum *}
				</div>
				<div class="col-md-6">
					<div class="well-sm">
						<h4>{$lang['createnewserver_advanced']}</b> </h4>
					</div>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						{* host panel *}
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headinghost">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsehost" aria-expanded="true" aria-controls="collapsehost">
										{$lang['host']} <span class="caret"></span>
									</a>
								</h4>
							</div>
							<div id="collapsehost" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headinghost">
								<div class="panel-body">
									{*Element separator*}
									<div class="form-group">
										<label for="hostmessage" class="col-sm-5 control-label">{$lang['hostmessage']}</label>
										<div class="col-sm-6">
											<input type="text" id="hostmessage" name="newsettings[virtualserver_hostmessage]" class="form-control" value="{$screate_tmp['hostmsg']}">
										</div>
									</div>
									{*
                                    <div class="form-group">
                                        <label for="hostmessage" class="col-sm-5 control-label">{$lang['hostmessageshow']}</label>
                                        <div class="col-sm-6">
                                            {$lang['nomessage']} <input {if $screate_tmp['hostmsgshow'] === '0'} checked="checked" {/if} type="radio" name="newsettings[virtualserver_hostmessage_mode]" value="0" /><br />
                                            {$lang['showmessagelog']} <input {if $screate_tmp['hostmsgshow'] === '1'} checked="checked" {/if} type="radio" name="newsettings[virtualserver_hostmessage_mode]" value="1" /><br />
                                            {$lang['showmodalmessage']} <input {if $screate_tmp['hostmsgshow'] === '2'} checked="checked" {/if} type="radio" name="newsettings[virtualserver_hostmessage_mode]" value="2" /><br />
                                            {$lang['modalandexit']} <input {if $screate_tmp['hostmsgshow'] === '3'} checked="checked" {/if} type="radio" name="newsettings[virtualserver_hostmessage_mode]" value="3" />
                                        </div>
                                    </div>
                                    *}
									{*Element separator*}
									<div class="form-group">
										<label for="hostmessage" class="col-sm-5 control-label">{$lang['hostmessageshow']}</label>
										<div class="col-sm-6">
											<select class="form-control" name="newsettings[virtualserver_hostmessage_mode]">
												<option {if $screate_tmp['hostmsgshow'] === '0'}selected{/if} value="0">{$lang['nomessage']}</option>
												<option {if $screate_tmp['hostmsgshow'] === '1'}selected{/if} value="1">{$lang['showmessagelog']}</option>
												<option {if $screate_tmp['hostmsgshow'] === '2'}selected{/if} value="2">{$lang['showmodalmessage']}</option>
												<option {if $screate_tmp['hostmsgshow'] === '3'}selected{/if} value="3">{$lang['modalandexit']}</option>
											</select>
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="hosturl" class="col-sm-5 control-label">{$lang['hosturl']}</label>
										<div class="col-sm-6">
											<input type="text" id="hosturl" name="newsettings[virtualserver_hostbanner_url]" class="form-control" value="{$screate_tmp['hosturl']}">
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="hostbannerurl" class="col-sm-5 control-label">{$lang['hostbannerurl']}</label>
										<div class="col-sm-6">
											<input type="text" id="hostbannerurl" name="newsettings[virtualserver_hostbanner_gfx_url]" class="form-control" value="{$screate_tmp['hostbannerurl']}">
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="hostbannerintval" class="col-sm-5 control-label">{$lang['hostbannerintval']}</label>
										<div class="col-sm-6">
											<input type="text" id="hostbannerintval" name="newsettings[virtualserver_hostbanner_gfx_interval]" class="form-control" value="{$screate_tmp['hostbannerint']}">
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="hostbuttongfx" class="col-sm-5 control-label">{$lang['hostbuttongfx']}</label>
										<div class="col-sm-6">
											<input type="text" id="hostbuttongfx" name="newsettings[virtualserver_hostbutton_gfx_url]" class="form-control" value="{$screate_tmp['hostbuttongfx']}">
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="hostbuttontooltip" class="col-sm-5 control-label">{$lang['hostbuttontooltip']}</label>
										<div class="col-sm-6">
											<input type="text" id="hostbuttontooltip" name="newsettings[virtualserver_hostbutton_tooltip]" class="form-control" value="{$screate_tmp['hostbuttontooltip']}">
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="hostbuttonurl" class="col-sm-5 control-label">{$lang['hostbuttonurl']}</label>
										<div class="col-sm-6">
											<input type="text" id="hostbuttonurl" name="newsettings[virtualserver_hostbutton_url]" class="form-control" value="{$screate_tmp['hostbuttonurl']}">
										</div>
									</div>
								</div>
							</div>
						</div>
						{* autoban panel *}
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingautoban">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseautoban" aria-expanded="false" aria-controls="collapseautoban">
										{$lang['autoban']} <span class="caret"></span>
									</a>
								</h4>
							</div>
							<div id="collapseautoban" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingautoban">
								<div class="panel-body">
									{*Element separator*}
									<div class="form-group">
										<label for="autobancount" class="col-sm-5 control-label">{$lang['autobancount']}</label>
										<div class="col-sm-6">
											<input type="text" id="autobancount" name="newsettings[virtualserver_complain_autoban_count]" class="form-control" value="{$screate_tmp['autobancount']}">
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="autobantime" class="col-sm-5 control-label">{$lang['autobantime']}</label>
										<div class="col-sm-6">
											<div class="input-group">
												<input type="text" class="form-control" id="autobantime" name="newsettings[virtualserver_complain_autoban_time]" value="{$screate_tmp['autobantime']}" class="form-control" aria-describedby="basic-addon2">
												<span class="input-group-addon" id="basic-addon2">{$lang['seconds']}</span>
											</div>
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="removetime" class="col-sm-5 control-label">{$lang['removetime']}</label>
										<div class="col-sm-6">
											<div class="input-group">
												<input type="text" class="form-control" id="removetime" name="newsettings[virtualserver_complain_remove_time]" value="{$screate_tmp['removetime']}" class="form-control" aria-describedby="basic-addon2">
												<span class="input-group-addon" id="basic-addon2">{$lang['seconds']}</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						{* aniflood panel *}
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingantiflood">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseantiflood" aria-expanded="false" aria-controls="collapseantiflood">
										{$lang['antiflood']} <span class="caret"></span>
									</a>
								</h4>
							</div>
							<div id="collapseantiflood" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingantiflood">
								<div class="panel-body">
									{*Element separator*}
									<div class="form-group">
										<label for="pointstickreduce" class="col-sm-5 control-label">{$lang['pointstickreduce']}</label>
										<div class="col-sm-6">
											<input type="text" id="pointstickreduce" name="newsettings[virtualserver_antiflood_points_tick_reduce]" class="form-control" value="{$screate_tmp['pointstickreduce']}">
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="pointsneededblockcmd" class="col-sm-5 control-label">{$lang['pointsneededblockcmd']}</label>
										<div class="col-sm-6">
											<input type="text" id="pointsneededblockcmd" name="newsettings[virtualserver_antiflood_points_needed_command_block]" class="form-control" value="{$screate_tmp['pointsneededblockcmd']}">
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="pointsneededblockip" class="col-sm-5 control-label">{$lang['pointsneededblockip']}</label>
										<div class="col-sm-6">
											<input type="text" id="pointsneededblockip" name="newsettings[virtualserver_antiflood_points_needed_ip_block]" class="form-control" value="{$screate_tmp['pointsneededblockip']}">
										</div>
									</div>
								</div>
							</div>
						</div>
						{* transfer panel *}
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingtransfers">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetransfers" aria-expanded="false" aria-controls="collapsetransfers">
										{$lang['transfers']} <span class="caret"></span>
									</a>
								</h4>
							</div>
							<div id="collapsetransfers" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtransfers">
								<div class="panel-body">
									{*Element separator*}
									<div class="form-group">
										<label for="upbandlimit" class="col-sm-5 control-label">{$lang['upbandlimit']}</label>
										<div class="col-sm-6">
											<div class="input-group">
												<input type="text" class="form-control" id="upbandlimit" name="newsettings[virtualserver_max_upload_total_bandwidth]" value="{$screate_tmp['uploadbandwidthlimit']}" class="form-control" aria-describedby="basic-addon2">
												<span class="input-group-addon" id="basic-addon2">Byte/s</span>
											</div>
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="uploadquota" class="col-sm-5 control-label">{$lang['uploadquota']}</label>
										<div class="col-sm-6">
											<div class="input-group">
												<input type="text" class="form-control" id="uploadquota" name="newsettings[virtualserver_upload_quota]" value="{$screate_tmp['uploadquota']}" class="form-control" aria-describedby="basic-addon2">
												<span class="input-group-addon" id="basic-addon2">MiB</span>
											</div>
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="downbandlimit" class="col-sm-5 control-label">{$lang['downbandlimit']}</label>
										<div class="col-sm-6">
											<div class="input-group">
												<input type="text" class="form-control" id="downbandlimit" name="newsettings[virtualserver_max_download_total_bandwidth]" value="{$screate_tmp['downloadbandwidthlimit']}" class="form-control" aria-describedby="basic-addon2">
												<span class="input-group-addon" id="basic-addon2">Byte/s</span>
											</div>
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="downbandlimit" class="col-sm-5 control-label">{$lang['downloadquota']}</label>
										<div class="col-sm-6">
											<div class="input-group">
												<input type="text" class="form-control" id="downloadquota" name="newsettings[virtualserver_download_quota]" value="{$screate_tmp['downloadquota']}" class="form-control" aria-describedby="basic-addon2">
												<span class="input-group-addon" id="basic-addon2">MiB</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						{* logs panel *}
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headinglogs">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapselogs" aria-expanded="false" aria-controls="collapselogs">
										{$lang['logs']} <span class="caret"></span>
									</a>
								</h4>
							</div>
							<div id="collapselogs" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinglogs">
								<div class="panel-body">
									{*Element separator*}
									<div class="form-group">
										<label for="logclient" class="col-sm-5 control-label">{$lang['logclient']}</label>
										<div class="col-sm-6">
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_client'] === '1'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_client]" autocomplete="off" {if $screate_tmp['virtualserver_log_client'] === '1'}checked{/if} value="1"> {$lang['yes']}
												</label>
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_client'] === '0'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_client]" autocomplete="off" {if $screate_tmp['virtualserver_log_client'] === '0'}checked{/if} value="0"> {$lang['no']}
												</label>
											</div>
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="logquery" class="col-sm-5 control-label">{$lang['logquery']}</label>
										<div class="col-sm-6">
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_query'] === '1'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_query]" autocomplete="off" {if $screate_tmp['virtualserver_log_query'] === '1'}checked{/if} value="1"> {$lang['yes']}
												</label>
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_query'] === '0'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_query]" autocomplete="off" {if $screate_tmp['virtualserver_log_query'] === '0'}checked{/if} value="0"> {$lang['no']}
												</label>
											</div>
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="logchannel" class="col-sm-5 control-label">{$lang['logchannel']}</label>
										<div class="col-sm-6">
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_channel'] === '1'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_channel]" autocomplete="off" {if $screate_tmp['virtualserver_log_channel'] === '1'}checked{/if} value="1"> {$lang['yes']}
												</label>
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_channel'] === '0'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_channel]" autocomplete="off" {if $screate_tmp['virtualserver_log_channel'] === '0'}checked{/if} value="0"> {$lang['no']}
												</label>
											</div>
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="logpermissions" class="col-sm-5 control-label">{$lang['logpermissions']}</label>
										<div class="col-sm-6">
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_permissions'] === '1'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_permissions]" autocomplete="off" {if $screate_tmp['virtualserver_log_permissions'] === '1'}checked{/if} value="1"> {$lang['yes']}
												</label>
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_permissions'] === '0'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_permissions]" autocomplete="off" {if $screate_tmp['virtualserver_log_permissions'] === '0'}checked{/if} value="0"> {$lang['no']}
												</label>
											</div>
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="logserver" class="col-sm-5 control-label">{$lang['logserver']}</label>
										<div class="col-sm-6">
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_server'] === '1'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_server]" autocomplete="off" {if $screate_tmp['virtualserver_log_server'] === '1'}checked{/if} value="1"> {$lang['yes']}
												</label>
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_server'] === '0'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_server]" autocomplete="off" {if $screate_tmp['virtualserver_log_server'] === '0'}checked{/if} value="0"> {$lang['no']}
												</label>
											</div>
										</div>
									</div>
									{*Element separator*}
									<div class="form-group">
										<label for="logfiletransfer" class="col-sm-5 control-label">{$lang['logfiletransfer']}</label>
										<div class="col-sm-6">
											<div class="btn-group" data-toggle="buttons">
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_filetransfer'] === '1'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_filetransfer]" autocomplete="off" {if $screate_tmp['virtualserver_log_filetransfer'] === '1'}checked{/if} value="1"> {$lang['yes']}
												</label>
												<label class="btn btn-default {if $screate_tmp['virtualserver_log_filetransfer'] === '1'}active{/if}">
													<input type="radio" name="newsettings[virtualserver_log_filetransfer]" autocomplete="off" {if $screate_tmp['virtualserver_log_filetransfer'] === '0'}checked{/if} value="0"> {$lang['no']}
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						{* end panels *}
					</div>
					</div>
				</div>
				{* submit button *}
				<div class="container">
					<input class="btn btn-primary btn-lg btn-createserver" type="submit" name="createserver" value="{$lang['create']}"/>
				</div>
			</div>
			</form>
		</div>
	{/if}
{/if}