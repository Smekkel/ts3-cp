<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
	$(function() {
		$('[data-tooltip="true"]').tooltip();
	});
</script>

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
		<h4>{$lang['serverfiles']}</h4>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			{$lang['filelist']}
		</div>
		<div class="panel-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-8 col-md-push-4" style="padding: 5px;">
						<ol class="breadcrumb marginb0">
							{*<li><a href="index.php?site=filelist&sid={$sid}">{$lang['virtualserver']} #{$sid}</a></li>*}
							<li class="active">{$lang['virtualserver']} #{$sid}</li>
							<li>{if !empty($smarty.get.cid)}[{$smarty.get.cid}] "{$chaninfo['channel_name']}"{/if}</li>
							{foreach $breadcumb_path as $value}
								{if !empty($value)}
									<li class="active">{$value}</li>
								{/if}
							{/foreach}
							{*{if $smarty.get.path != "/" AND !empty($smarty.get.path)}
								<li class="active"><a href="index.php?site=filelist&amp;sid={$smarty.get.sid}&amp;cid={$cid}&amp;path={$newpath}">Back</a></li>
							{/if}*}
						</ol>
					</div>

					<div class="col-md-4 col-md-pull-8">
						<div class="row">
							<div class="col-sm-6" style="padding: 5px;">
								<div class="btn-group" role="group" aria-label="...">
									<a href="index.php?site=filelist&amp;sid={$smarty.get.sid}&amp;cid={$cid}&amp;path={$newpath}" class="btn btn-primary {if $smarty.get.path == "/" OR empty($smarty.get.path)}disabled disableсlick{/if}" style="height: 34px" data-toggle="tooltip" data-placement="top"  title="{$lang['getback']}"><span class="glyphicon glyphicon-arrow-left"></span></a>
									<a href="index.php?site=filelist&sid={$sid}" class="btn btn-primary {if $smarty.get.path == "/" OR empty($smarty.get.path)}disabled disableсlick{/if}" style="height: 34px" data-toggle="tooltip" data-placement="top"  title="{$lang['getrootdir']}"><span class="glyphicon glyphicon-home"></span></a>
									<a href="index.php?site=filelist&amp;sid={$smarty.get.sid}&amp;cid={$smarty.get.cid}&amp;path={$smarty.get.path}" class="btn btn-primary" style="height: 34px"  data-toggle="tooltip" data-placement="top" title="{$lang['refresh']}"><span class="glyphicon glyphicon-refresh"></span></a>
								</div>
							</div>
							<div class="col-sm-6" style="padding: 5px;">
								<button type="button" class="btn btn-danger" data-toggle="modal" data-tooltip="true" data-placement="top" data-target="#fileupload" title="{$lang['upload']}"><span class="glyphicon glyphicon-save"></span> <span class="glyphicon glyphicon-file"></span></button>
								<button type="button" class="btn btn-success"  data-toggle="modal" data-tooltip="true" data-placement="top" data-target="#foldercreation" title="{$lang['createfolder']}"><span class="glyphicon glyphicon-plus"></span> <span class="glyphicon glyphicon-folder-open"></span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{if !empty($getallfiles)}
			<div class="table-responsive">
				<table class="table table-hover table-striped">
					<thead>
					<tr class="bg-success">
						<th style="width:25%">{$lang['name']}</th>
						<th style="width:10%">{$lang['size']}</th>
						<th style="width:25%">{$lang['date']}</th>
						<th style="width:25%">{$lang['channel']}</th>
						<th style="width:10%">{$lang['delete']}</th>
					</tr>
					</thead>
					<tbody>
					{foreach key=key item=value from=$getallfiles}
						{if $key !== 'totalsize'}
							<tr>
								<td class="green1">{if $value['type'] == 0}<span class="glyphicon glyphicon-folder-open"></span> <a href="index.php?site=filelist&amp;sid={$smarty.get.sid}&amp;path={if $smarty.get.path != "/"}{$smarty.get.path}{/if}/{$value['name']}&amp;cid={if isset($value['cid'])}{$value['cid']}{else}{$smarty.get.cid}{/if}"> {$value['name']}</a>{else}<span class="glyphicon glyphicon-file"></span> <a href="site/filetransfer.php?sid={$smarty.get.sid}&amp;cid={if isset($value['cid'])}{$value['cid']}{else}{$smarty.get.cid}{/if}&amp;path={if $smarty.get.path != "/"}{$smarty.get.path}{/if}&amp;name={$value['name']}&amp;getfile=1" target="_blank">{$value['name']}</a>{/if}</td>
								<td class="green1"><kbd>{$value['size']} Mb</kbd></td>
								<td class="green1">{$value['datetime']|date_format:"%d.%m.%Y - %H:%M:%S"}</td>
								<td class="green1">{if $smarty.get.path != "/" AND !empty($smarty.get.path)}{$chaninfo['channel_name']}{else}{$value['cname']}{/if}</td>
								<td class="green1" align="center">
									<a href="index.php?site=filelist&amp;sid={$sid}&amp;cid={if isset($value['cid'])}{$value['cid']}{else}{$smarty.get.cid}{/if}&amp;path={if empty($smarty.get.path)}/{else}{$smarty.get.path}{/if}&amp;name={$value['name']}&amp;deletefile=1" data-toggle="tooltip" data-placement="top" title="{$lang['delete']}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
								</td>
							</tr>
						{/if}
					{/foreach}
					</tbody>
					<tfoot>
					{foreach key=key item=value from=$getallfiles}
						{if $key === 'totalsize'}
							<tr class="bg-success">
								<td class="green1">{$lang['totalsize']}</td>
								<td class="green1" colspan="4"><kbd>{$value} Mb</kbd></td>
							</tr>
						{/if}
					{/foreach}
					</tfoot>
				</table>
			</div>
		{else}
			<div class="panel-body">
				{$lang['nofiles']}
			</div>
		{/if}
	</div>
</div>

<!-- File upload Modal -->
<div class="modal fade" id="fileupload" tabindex="-1" role="dialog" aria-labelledby="fileuploadLabel">
	<div class="modal-dialog" role="document">
		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="index.php?site=filelist&amp;sid={$smarty.get.sid}&amp;cid={$smarty.get.cid}&amp;cpw={$smarty.get.cpw}&amp;path={$smarty.get.path}">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="fileuploadLabel">{$lang['upload']}</h4>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						{if empty($smarty.get.cid)}
							<div class="form-group">
								<label for="channel" class="col-sm-4 control-label">{$lang['channel']}</label>
								<div class="col-sm-8">
									<select id="channel" class="form-control" name="cid">
										{foreach key=key item=value from=$channellist}
											<option value="{$value['cid']}">{$value['channel_name']}</option>
										{/foreach}
									</select>
								</div>
							</div>
						{/if}
						<div class="form-group">
							<label for="upload" class="col-sm-4 control-label">{$lang['upload']}:</label>
							<div class="col-sm-8">
								<input type="hidden" name="max_file_size" value="8388603" />
								<input name="thefile" type="file" id="upload"/>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">{$lang['close']}</button>
					<input type="submit" class="btn btn-success" name="upload" value="{$lang['upload']}" />
				</div>
			</div>
		</form>
	</div>
</div>

<!-- Folder Create Modal -->
<div class="modal fade" id="foldercreation" tabindex="-1" role="dialog" aria-labelledby="foldercreationLabel">
	<div class="modal-dialog" role="document">

		<form method="post" action="index.php?site=filelist&amp;sid={$smarty.get.sid}&amp;cid={$smarty.get.cid}&amp;cpw={$smarty.get.cpw}&amp;path={$smarty.get.path}" class="form-horizontal">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="foldercreationLabel">{$lang['createfolder']}</h4>
			</div>
				<div class="modal-body">
					<div class="container-fluid">
						{if empty($smarty.get.cid)}
							<div class="form-group">
								<label for="channel" class="col-sm-4 control-label">{$lang['channel']}</label>
								<div class="col-sm-8">
									<select id="channel" class="form-control" name="cid">
										{foreach key=key item=value from=$channellist}
											<option value="{$value['cid']}">{$value['channel_name']}</option>
										{/foreach}
									</select>
								</div>
							</div>
						{/if}
						<div class="form-group">
							<label for="upload" class="col-sm-4 control-label">{$lang['name']}</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="fname" value="" placeholder="{$lang['foldercreateplaseholder']}"/>
							</div>
						</div>
					</div>
				</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{$lang['close']}</button>
				<input type="submit" name="createdir" value="{$lang['create']}" class="btn btn-success"/>
			</div>
		</div>
		</form>
	</div>
</div>
