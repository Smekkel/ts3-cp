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

<div class="container-fluid">
	<div class="well-sm">
		<h4>{$lang['temppw']}</h4>
	</div>
			<div class="panel panel-primary">
				<div class="panel-heading">{$lang['temppwlist']}</div>
				<div class="table-responsive">
					{if !empty($temppwlist)}
					<table class="table table-bordered">
						<thead>
							<tr class="bg-info">
								<th>{$lang['nickname']}</th>
								<th>{$lang['userid']}</th>
								<th>{$lang['description']}</th>
								<th>{$lang['password']}</th>
								<th>{$lang['passcreated']} (UTC)</th>
								<th>{$lang['passsuspend']} (UTC)</th>
								<th>{$lang['channel']}</th>
								<th>{$lang['delete']}</th>
							</tr>
						</thead>
						<tbody>
								{foreach key=id item=temppw from=$temppwlist}
									<tr>
										<td class="green1" align="center">{$temppw.nickname}</td>
										<td class="green1" align="center">{$temppw.uid}</td>
										<td class="green1" align="center">{$temppw.desc}</td>
										<td class="green1" align="center">{$temppw.pw_clear}</td>
										<td class="green1" align="center">{gmdate('d.m.Y H:i:s', {$temppw.start})}</td>
										<td class="green1" align="center">{gmdate('d.m.Y H:i:s', {$temppw.end})}</td>
										<td class="green1" align="center">{$temppw.tcid}</td>
										<td class="green1" align="center">
											<form method="post" action="index.php?site=temppw&amp;sid={$sid}">
												<input name="pw" value="{$temppw.pw_clear}" type="hidden">
												<button type="submit" class="btn btn-danger" name="temppwdel" value="" title="{$lang['delete']}">
													<span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span>
												</button>
											</form>
										</td>
									</tr>
								{/foreach}
							{else}
								<div class="panel-body text-info">
									{$lang['notmppassw']}
								</div>
							{/if}
						</tbody>
					</table>
				</div>
			</div>
			<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#passwcreate_modal">
				{$lang['create']} {$lang['temppw']}
			</button>
</div>

<!-- password creation modal -->
<div class="modal fade" id="passwcreate_modal" tabindex="-1" role="dialog" aria-labelledby="passwcreate_modal_label">
	<div class="modal-dialog" role="document">
		<form method="post" action="index.php?site=temppw&amp;sid={$sid}" class="form-horizontal">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="passwcreate_modal_label">{$lang['create']} {$lang['temppw']}</h4>
			</div>
			<div class="modal-body">
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">{$lang['password']}</label>
						<div class="col-sm-8">
							<input type="text" id="password" name="password" class="form-control" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="duration" class="col-sm-3 control-label">{$lang['duration']}</label>
						<div class="col-sm-8">
							<div class="input-group">
								<input type="text" id="duration" name="duration" class="form-control" value="" aria-describedby="duration-addon2">
								<span class="input-group-addon" id="duration-addon2">{$lang['seconds']}</span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-3 control-label">{$lang['description']}</label>
						<div class="col-sm-8">
							<input type="text" id="description" name="description" class="form-control" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="channel" class="col-sm-3 control-label">{$lang['channel']}</label>
						<div class="col-sm-8">
							<select id="channel" class="form-control" name="tcid">
								<option value="0">{$lang['channelzero']}</option>
								{foreach key=id item=channel from=$channellist}
									<option value="{$channel.cid}">{$channel.channel_name}</option>
								{/foreach}
							</select>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{$lang['close']}</button>
				<input class="btn btn-success" type="submit" name="create" value="{$lang['create']}" />
			</div>
		</div>
		</form>
	</div>
</div>