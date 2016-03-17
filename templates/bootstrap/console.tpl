<div class="container">
	<div class="well-sm">
		<h3>{$lang['queryconsole']}</b> </h3>
	</div>
	<div class="well-sm">
		<h4>{$lang['inputbox']}</h4>
	</div>
	<form method="post" action="index.php?site=console&amp;sid={$sid}">
		<div class="form-group form-horizontal">
			<div class="row">
				<div class="col-sm-10">
					<textarea name="command" class="form-control vertresize margintop10" rows="3"></textarea>
				</div>
				<div class="col-sm-2">
					<input class="btn btn-block btn-primary btn-querysend margintop10" type="submit" name="execute" value="{$lang['execute']}">
				</div>
			</div>
			<div class="well-sm">
				<h4>{$lang['outputbox']}</h4>
			</div>
			<textarea name="output" class="form-control vertresize" rows="10" readonly="readonly">{$showOutput}</textarea>
		</div>
	</form>
</div>