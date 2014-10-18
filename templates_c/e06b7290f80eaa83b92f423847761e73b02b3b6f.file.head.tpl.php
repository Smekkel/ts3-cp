<?php /* Smarty version Smarty3rc4, created on 2014-04-15 09:42:41
         compiled from "/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/new/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1918896750534d61816d1ea0-72047454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e06b7290f80eaa83b92f423847761e73b02b3b6f' => 
    array (
      0 => '/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/new/head.tpl',
      1 => 1362311068,
    ),
  ),
  'nocache_hash' => '1918896750534d61816d1ea0-72047454',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table border="0" style="width:1000px; height:150px" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td class="header">
		<table style="width:100%; height:150px;" cellpadding="0" cellspacing="0">
			<tr valign="top">
				<td style="width:500px"></td>
				<td>
				<table align="right" style="width:100%; height:150px;" cellpadding="0" cellspacing="0">
					<tr valign="top">
						<td style="text-align:right; height:120px">
						<?php if ($_smarty_tpl->getVariable('loginstatus')->value===true){?>
							<?php echo $_SESSION['loginuser'];?>
 <a href="index.php?site=logout"><?php echo $_smarty_tpl->getVariable('lang')->value['logout'];?>
</a>
						<?php }?>
						</td>
					</tr>
					<tr>
						<td style="text-align:right; height:30px">
						<?php if ($_smarty_tpl->getVariable('fastswitch')->value==true&&$_smarty_tpl->getVariable('hoststatus')->value===true){?>
							<form method="get" action="index.php?site=serverview">
							<?php if (strpos($_smarty_tpl->getVariable('site')->value,'edit')==false||$_smarty_tpl->getVariable('site')->value=='serveredit'){?>
							<input type="hidden" name="site" value="<?php echo $_smarty_tpl->getVariable('site')->value;?>
" />
							<?php }else{ ?>
							<input type="hidden" name="site" value="serverview" />
							<?php }?>
							<select name="sid" onchange="submit()">
							<?php  $_smarty_tpl->tpl_vars['server'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('serverlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['server']->key => $_smarty_tpl->tpl_vars['server']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['server']->key;
?>
								<?php if ($_smarty_tpl->getVariable('sid')->value==$_smarty_tpl->tpl_vars['server']->value['virtualserver_id']){?>
								<option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_port'];?>
</option>
								<?php }else{ ?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_port'];?>
</option>
								<?php }?>
							<?php }} ?>
							</select>
							</form>
						<?php }?>
						</td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>