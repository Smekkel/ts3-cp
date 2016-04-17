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
		<h4>{$lang['icononsrv']}</h4>
	</div>
	<form method="post" action="index.php?site=fileupload&amp;sid={$sid}">
		<div class="panel panel-primary">
			<!-- Default panel contents -->
			<div class="panel-heading">{$lang['iconlist']}</div>
			<!-- Table -->
			{if !empty($allicons)}
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					<tr class="bg-info">
						<th class="col-md-1">{$lang['icon']}</th>
						<th class="col-md-3">{$lang['name']}</th>
						<th class="col-md-3">{$lang['iconid']}</th>
						<th class="col-md-1">{$lang['size']}</th>
						<th class="col-md-1">{$lang['type']}</th>
						<th class="col-md-1">{$lang['delete']}</th>
					</tr>
					</thead>
					<tbody>
					{foreach key=key item=value from=$allicons}
						<tr>
							<td align="center"><img style="border:0"src="site/showfile.php?name=icon_{$value.name}&amp;port={$port}" alt="" /></td>
							<td>{$key}</td>
							<td>{$value.id}</td>
							<td align="center"><kbd>{$value.info.0}x{$value.info.1}</kbd></td>
							<td align="center">
								<span class="label label-primary">
								{if $value.info.2 == 1}
									.gif
								{elseif $value.info.2 == 2}
									.jpg
								{elseif $value.info.2 == 3}
									.png
								{/if}
									</span>
							</td>
							<td align="center">
								<form method="post" action="index.php?site=fileupload&amp;sid={$sid}">
									<input type="hidden" id="list{$value['virtualserver_id']}" name="delicons[]" value="/{$key}" />
									<button type="submit" class="btn btn-danger" name="delaction" title="{$lang['delete']}" onclick="return confirm('{$lang['icondeleteconfirm']}')">
										<span class="glyphicon glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</form>
							</td>
						</tr>
					{/foreach}
					</tbody>
				</table>
			</div>
			{else}
			<div class="panel-body">
				{$lang['noicon']}
			</div>
			{/if}
			</div>
	</form>
	<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#iconupload_modal">
		<span class="glyphicon glyphicon-upload"></span> {$lang['iconupload']}
	</button>
	<a href="index.php?site=fileupload&amp;sid={$sid}" class="btn btn-default btn-lg">
		<span class="glyphicon glyphicon-refresh"></span> {$lang['refresh']}
	</a>
</div>


<!-- Icon Upload Modal -->
<div class="modal fade" id="iconupload_modal" tabindex="-1" role="dialog" aria-labelledby="iconuploadmodal_label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form enctype="multipart/form-data" action="index.php?site=fileupload&amp;sid={$sid}" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="iconuploadmodal_label">{$lang['iconupload']}</h4>
			</div>
			<div class="modal-body">
				<p class="help-block">{$lang['iconupinfo']}</p>
					<div class="form-group">
						<input type="hidden" name="max_file_size" value="81920" />
						<label for="iconupload">{$lang['iconupload']}:</label>
						<input name="thefile" type="file" id="iconupload">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{$lang['close']}</button>
				<input class="btn btn-success" type="submit" name="upload" value="{$lang['upload']}" />
			</div>
			</form>
		</div>
	</div>
</div>