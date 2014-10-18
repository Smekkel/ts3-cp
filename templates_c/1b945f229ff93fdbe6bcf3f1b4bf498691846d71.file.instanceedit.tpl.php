<?php /* Smarty version Smarty3rc4, created on 2014-07-15 18:06:04
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/yeti/instanceedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230053c5354c5939f8-62534124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b945f229ff93fdbe6bcf3f1b4bf498691846d71' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/instanceedit.tpl',
      1 => 1351423130,
    ),
  ),
  'nocache_hash' => '230053c5354c5939f8-62534124',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('hoststatus')->value===false&&$_smarty_tpl->getVariable('serverhost')->value===true){?>
<table>
	<tr>
		<td class="error"><?php echo $_smarty_tpl->getVariable('lang')->value['nohoster'];?>
</td>
	</tr>
</table>
<?php }else{ ?>
<?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
<table>
	<?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
	<tr>
		<td class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</td>
	</tr>
	<?php }?>
	<?php if (!empty($_smarty_tpl->getVariable('noerror')->value)){?>
	<tr>
		<td class="noerror"><?php echo $_smarty_tpl->getVariable('noerror')->value;?>
</td>
	</tr>
	<?php }?>
</table>
<?php }?>
<form method="post" action="index.php?site=instanceedit">
<table class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['instanceedit'];?>
</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['questsquerygroup'];?>
</td>
		<td class="green1"><input type="text" name="newsettings[serverinstance_guest_serverquery_group]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_guest_serverquery_group'];?>
" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['tempsadmingroup'];?>
</td>
		<td class="green2"><input type="text" name="newsettings[serverinstance_template_serveradmin_group]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_template_serveradmin_group'];?>
" /></td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['tempcadmingroup'];?>
</td>
		<td class="green1"><input type="text" name="newsettings[serverinstance_template_channeladmin_group]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_template_channeladmin_group'];?>
" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['tempsdefgroup'];?>
</td>
		<td class="green2"><input type="text" name="newsettings[serverinstance_template_serverdefault_group]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_template_serverdefault_group'];?>
" /></td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['tempcdefgroup'];?>
</td>
		<td class="green1"><input type="text" name="newsettings[serverinstance_template_channeldefault_group]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_template_channeldefault_group'];?>
" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['filetransport'];?>
</td>
		<td class="green2"><input type="text" name="newsettings[serverinstance_filetransfer_port]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_filetransfer_port'];?>
" /></td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['maxdownbandwidth'];?>
</td>
		<td class="green1"><input type="text" name="newsettings[serverinstance_max_download_total_bandwidth]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_max_download_total_bandwidth'];?>
" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['maxupbandwidth'];?>
</td>
		<td class="green2"><input type="text" name="newsettings[serverinstance_max_upload_total_bandwidth]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_max_upload_total_bandwidth'];?>
" /></td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['squeryfloodcmd'];?>
</td>
		<td class="green1"><input type="text" name="newsettings[serverinstance_serverquery_flood_commands]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_serverquery_flood_commands'];?>
" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['squeryfloodtime'];?>
</td>
		<td class="green2"><input type="text" name="newsettings[serverinstance_serverquery_flood_time]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_serverquery_flood_time'];?>
" /></td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['squerybantime'];?>
</td>
		<td class="green1"><input type="text" name="newsettings[serverinstance_serverquery_ban_time]" value="<?php echo $_smarty_tpl->getVariable('instanceinfo')->value['serverinstance_serverquery_ban_time'];?>
" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
		<td class="green2"><input class="button" type="submit" name="editinstance" value="<?php echo $_smarty_tpl->getVariable('lang')->value['edit'];?>
" /></td>
	</tr>
</table>
</form>
<br />
<form method="post" action="index.php?site=instanceedit">
<table class="border" cellpadding="1" cellspacing="0" style="width:60%">
	<tr>
		<td class="thead" colspan="3" ><?php echo $_smarty_tpl->getVariable('lang')->value['showonweblist'];?>
</td>
	</tr>
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['serverid'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</td>
		<td class="thead" align="right"><?php echo $_smarty_tpl->getVariable('lang')->value['selectall'];?>
<input type="checkbox" name="checkall" value="0" onclick="check(1)" /></td>
	</tr>
	<?php if (!empty($_smarty_tpl->getVariable('serverlist')->value)){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('serverlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
			<tr>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_name'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
" align="right">
				<input type="hidden" name="list[<?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
][0]" value="0" />
				<input <?php if ($_smarty_tpl->tpl_vars['value']->value['virtualserver_weblist_enabled']==1){?>checked="checked"<?php }?> type="checkbox" id="list<?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
" name="list[<?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
][0]" value="1"/>
				</td>
			</tr>
			<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php }} ?>
	<?php }?>
	<tr>
		<td align="center" colspan="3"><input type="submit" name="editshowlist" value="<?php echo $_smarty_tpl->getVariable('lang')->value['edit'];?>
" /></td>
	</tr>
</table>
</form>
<?php }?>