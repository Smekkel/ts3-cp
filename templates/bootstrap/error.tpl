<div class="container">
	<div class="alert alert-warning">
		<h4>{$lang['pagenotfound']}</h4>
		<p>{$lang['pagenotfoundmsg']}</p>
		<p>
			<a href="{if isset($sid) == false}index.php{else}index.php?site=serverview&sid={$sid}{/if}" class="btn btn-lg btn-warning">{$lang['getback']}</a>
		</p>
	</div>
</div>