{if isset($permoverview['b_virtualserver_log_view']) AND empty($permoverview['b_virtualserver_log_view'])}
	<div class="container">
		<div class="alert alert-danger" role="alert">
			<b>{$lang['error']}</b></br>{$lang['nopermissions']}
		</div>
	</div>
{else}
	<div class="container table-responsive">
		<table class="table table-bordered">
			<thead>
				{* <tr>
					<td colspan="5">
						<form method="post" action="{if isset($sid) == false}index.php?site=logview{else}index.php?site=logview&amp;sid={$sid}{/if}">
							<input type="hidden" name="begin_pos" value="{$begin_pos}"/>
							<input class="btn btn-block btn-success" type="submit" name="showmore" value="{$lang['showmoreentrys']}" />
						</form>
					</td>
				</tr> *}
				<tr>
					<th>{$lang['date']}</th>
					<th>{$lang['level']}</th>
					<th>{$lang['type']}</th>
					<th>{$lang['serverid']}</th>
					<th>{$lang['message']}</th>
				</tr>
			</thead>
			<tbody>
				{if !empty($serverlog)}
					{foreach key=key item=value from=$serverlog}
						{if empty($smarty.post.type.error) AND empty($smarty.post.type.warning) AND empty($smarty.post.type.debug) AND empty($smarty.post.type.info) OR $smarty.post.type.error == $value['level'] OR $smarty.post.type.warning == $value['level'] OR $smarty.post.type.debug == $value['level'] OR $smarty.post.type.info == $value['level']}
							{if $change_col % 2} {assign var=td_col value="active"} {else} {assign var=td_col value="green2"} {/if}
							<tr>
								<td class="{$td_col}">{$value[0]}</td>
								<td class="{$td_col}">{$value[1]}</td>
								<td class="{$td_col}">{$value[2]}</td>
								<td class="{$td_col}">{$value[3]}</td>
								<td class="{$td_col}">{$value[4]}</td>
							</tr>
							{assign var=change_col value="`$change_col+1`"}
						{/if}
					{/foreach}
				{/if}
				<tr>
					<td colspan="5">
						<form method="post" action="{if isset($sid) == false}index.php?site=logview{else}index.php?site=logview&amp;sid={$sid}{/if}">
							<input type="hidden" name="begin_pos" value="{$begin_pos}"/>
							<input class="btn btn-block btn-success" type="submit" name="showmore" value="{$lang['showmoreentrys']}" />
						</form>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
{/if}