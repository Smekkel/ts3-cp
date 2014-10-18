<?php /* Smarty version Smarty3rc4, created on 2014-07-14 16:32:13
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/yeti/createserver.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2956453c3cdcd840d81-71698976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a31e56bf4c98c136ee9cf6058f84eee85bdd3f5a' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/createserver.tpl',
      1 => 1366731226,
    ),
  ),
  'nocache_hash' => '2956453c3cdcd840d81-71698976',
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
<?php if (!isset($_POST['createserver'])||!empty($_smarty_tpl->getVariable('error')->value)){?>
<form method="post" action="index.php?site=createserver">
<table class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['createserverdesc'];?>
</td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['createnewserver'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_name]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['name'];?>
"/></td>
			</tr>
			<tr>
				<td class="green2" style="width:50%"><?php echo $_smarty_tpl->getVariable('lang')->value['port'];?>
:</td>
				<td class="green2" style="width:50%"><input type="text" name="newsettings[virtualserver_port]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['port'];?>
"/></td>
			</tr>
			<tr>
				<td class="green1" style="width:50%"><?php echo $_smarty_tpl->getVariable('lang')->value['minclientversion'];?>
:</td>
				<td class="green1" style="width:50%"><input type="text" name="newsettings[virtualserver_min_client_version]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['minclientversion'];?>
"/></td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['welcomemsg'];?>
:</td>
				<td class="green2"><input type="text" name="newsettings[virtualserver_welcomemessage]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['welcomemsg'];?>
"/>
			</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['maxclients'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_maxclients]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['maxclients'];?>
"/></td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['maxreservedslots'];?>
:</td>
				<td class="green2">
				<input type="text" name="newsettings[virtualserver_reserved_slots]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['reservedslots'];?>
"/>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['showonweblist'];?>
:</td>
				<td class="green1">
				<input type="text" name="newsettings[virtualserver_weblist_enabled]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['showonweblist'];?>
"/>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['password'];?>
:</td>
				<td class="green2">
				<input type="text" name="newsettings[virtualserver_password]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['password'];?>
"/>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['securitylevel'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_needed_identity_security_level]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['securitylvl'];?>
"/></td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['minclientschan'];?>
:</td>
				<td class="green2"><input type="text" name="newsettings[virtualserver_min_clients_in_channel_before_forced_silence]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['forcesilence'];?>
"/></td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['host'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hostmessage'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_hostmessage]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['hostmsg'];?>
"/></td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostmessageshow'];?>
:</td>
				<td class="green2">
				<?php echo $_smarty_tpl->getVariable('lang')->value['nomessage'];?>
 <input <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['hostmsgshow']==='0'){?> checked="checked" <?php }?> type="radio" name="newsettings[virtualserver_hostmessage_mode]" value="0" /><br />
				<?php echo $_smarty_tpl->getVariable('lang')->value['showmessagelog'];?>
 <input <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['hostmsgshow']==='1'){?> checked="checked" <?php }?> type="radio" name="newsettings[virtualserver_hostmessage_mode]" value="1" /><br />
				<?php echo $_smarty_tpl->getVariable('lang')->value['showmodalmessage'];?>
 <input <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['hostmsgshow']==='2'){?> checked="checked" <?php }?> type="radio" name="newsettings[virtualserver_hostmessage_mode]" value="2" /><br />
				<?php echo $_smarty_tpl->getVariable('lang')->value['modalandexit'];?>
 <input <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['hostmsgshow']==='3'){?> checked="checked" <?php }?> type="radio" name="newsettings[virtualserver_hostmessage_mode]" value="3" />
				</td>
			</tr>
			<tr>
				<td class="green1" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hosturl'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_hostbanner_url]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['hosturl'];?>
"/></td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbannerurl'];?>
:</td>
				<td class="green2"><input type="text" name="newsettings[virtualserver_hostbanner_gfx_url]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['hostbannerurl'];?>
"/></td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbannerintval'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_hostbanner_gfx_interval]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['hostbannerint'];?>
"/></td>
			</tr>
			<tr>
				<td class="green2" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbuttongfx'];?>
:</td>
				<td class="green2"><input type="text" name="newsettings[virtualserver_hostbutton_gfx_url]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['hostbuttongfx'];?>
"/></td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbuttontooltip'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_hostbutton_tooltip]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['hostbuttontip'];?>
"/></td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbuttonurl'];?>
:</td>
				<td class="green2"><input type="text" name="newsettings[virtualserver_hostbutton_url]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['hostbuttonurl'];?>
"/></td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['autoban'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['autobancount'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_complain_autoban_count]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['autobancount'];?>
"/></td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['autobantime'];?>
:</td>
				<td class="green2"><input type="text" name="newsettings[virtualserver_complain_autoban_time]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['autobantime'];?>
"/> <?php echo $_smarty_tpl->getVariable('lang')->value['seconds'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['removetime'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_complain_remove_time]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['removetime'];?>
"/> <?php echo $_smarty_tpl->getVariable('lang')->value['seconds'];?>
</td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['antiflood'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['pointstickreduce'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_antiflood_points_tick_reduce]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['pointstickreduce'];?>
"/></td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['pointsneededblockcmd'];?>
:</td>
				<td class="green2"><input type="text" name="newsettings[virtualserver_antiflood_points_needed_command_block]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['pointsneededblockcmd'];?>
"/></td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['pointsneededblockip'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_antiflood_points_needed_ip_block]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['pointsneededblockip'];?>
"/></td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['transfers'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['upbandlimit'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_max_upload_total_bandwidth]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['uploadbandwidthlimit'];?>
"/> Byte/s</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['uploadquota'];?>
:</td>
				<td class="green2"><input type="text" name="newsettings[virtualserver_upload_quota]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['uploadquota'];?>
"/> MiB</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['downbandlimit'];?>
:</td>
				<td class="green1"><input type="text" name="newsettings[virtualserver_max_download_total_bandwidth]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['downloadbandwidthlimit'];?>
"/> Byte/s</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['downloadquota'];?>
:</td>
				<td class="green2"><input type="text" name="newsettings[virtualserver_download_quota]" value="<?php echo $_smarty_tpl->getVariable('screate_tmp')->value['downloadquota'];?>
"/> MiB</td>
			</tr>
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['logs'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['logclient'];?>
:</td>
				<td class="green1">
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
<input type="radio" name="newsettings[virtualserver_log_client]" value="1" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_client']==='1'){?>checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
<input type="radio" name="newsettings[virtualserver_log_client]" value="0" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_client']==='0'){?>checked="checked"<?php }?> />
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['logquery'];?>
:</td>
				<td class="green2">
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
<input type="radio" name="newsettings[virtualserver_log_query]" value="1" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_query']==='1'){?>checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
<input type="radio" name="newsettings[virtualserver_log_query]" value="0" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_query']==='0'){?>checked="checked"<?php }?> />
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['logchannel'];?>
:</td>
				<td class="green1">
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
<input type="radio" name="newsettings[virtualserver_log_channel]" value="1" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_channel']==='1'){?>checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
<input type="radio" name="newsettings[virtualserver_log_channel]" value="0" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_channel']==='0'){?>checked="checked"<?php }?> />
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['logpermissions'];?>
:</td>
				<td class="green2">
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
<input type="radio" name="newsettings[virtualserver_log_permissions]" value="1" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_permissions']==='1'){?>checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
<input type="radio" name="newsettings[virtualserver_log_permissions]" value="0" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_permissions']==='0'){?>checked="checked"<?php }?> />
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['logserver'];?>
:</td>
				<td class="green1">
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
<input type="radio" name="newsettings[virtualserver_log_server]" value="1" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_server']==='1'){?>checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
<input type="radio" name="newsettings[virtualserver_log_server]" value="0" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_server']==='0'){?>checked="checked"<?php }?> />
				</td>
			</tr>	
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['logfiletransfer'];?>
:</td>
				<td class="green2">
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
<input type="radio" name="newsettings[virtualserver_log_filetransfer]" value="1" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_filetransfer']==='1'){?>checked="checked"<?php }?> />
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
<input type="radio" name="newsettings[virtualserver_log_filetransfer]" value="0" <?php if ($_smarty_tpl->getVariable('screate_tmp')->value['virtualserver_log_filetransfer']==='0'){?>checked="checked"<?php }?> />
				</td>
			</tr>	
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
		<td class="green1"><input class="button" type="submit" name="createserver" value="<?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
" /></td>
	</tr>
</table>
</form>
<?php }?>
<?php }?>