<?php /* Smarty version Smarty3rc4, created on 2014-10-18 00:54:18
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/bootstrap/temppw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8858544181fa6f0d92-44582820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '619285e9858c33bb1058d723b8b2fc721c0953d5' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/bootstrap/temppw.tpl',
      1 => 1351766220,
    ),
  ),
  'nocache_hash' => '8858544181fa6f0d92-44582820',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
<table style="width:100%" class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="8"><?php echo $_smarty_tpl->getVariable('lang')->value['temppw'];?>
</td>
	</tr>
	<tr>
		<td class="thead" align="center">Nickname</td>
		<td class="thead" align="center">Uid</td>
		<td class="thead" align="center">Desc</td>
		<td class="thead" align="center">Passwort</td>
		<td class="thead" align="center">Start</td>
		<td class="thead" align="center">Ende</td>
		<td class="thead" align="center">Channel</td>
		<td class="thead" align="center">Option</td>
	</tr>
	<?php if (!empty($_smarty_tpl->getVariable('temppwlist')->value)){?>
	<?php  $_smarty_tpl->tpl_vars['temppw'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('temppwlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['temppw']->key => $_smarty_tpl->tpl_vars['temppw']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['temppw']->key;
?>
	<tr>
		<td class="green1" align="center"><?php echo $_smarty_tpl->tpl_vars['temppw']->value['nickname'];?>
</td>
		<td class="green1" align="center"><?php echo $_smarty_tpl->tpl_vars['temppw']->value['uid'];?>
</td>
		<td class="green1" align="center"><?php echo $_smarty_tpl->tpl_vars['temppw']->value['desc'];?>
</td>
		<td class="green1" align="center"><?php echo $_smarty_tpl->tpl_vars['temppw']->value['pw_clear'];?>
</td>
		<td class="green1" align="center"><?php echo $_smarty_tpl->tpl_vars['temppw']->value['start'];?>
</td>
		<td class="green1" align="center"><?php echo $_smarty_tpl->tpl_vars['temppw']->value['end'];?>
</td>
		<td class="green1" align="center"><?php echo $_smarty_tpl->tpl_vars['temppw']->value['tcid'];?>
</td>
		<td class="green1" align="center">
		<form method="post" action="index.php?site=temppw&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
		<input name="pw" value="<?php echo $_smarty_tpl->tpl_vars['temppw']->value['pw_clear'];?>
" type="hidden">
		<input class="delete" name="temppwdel" value="" title="L&ouml;schen" type="submit">
		</form>
		</td>
	</tr>
	<?php }} ?>
	<?php }?>
</table>
<br />
<form method="post" action="index.php?site=temppw&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table style="width:30%" class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['temppw'];?>
</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['password'];?>
</td>
		<td class="green1"><input type="text" name="password" value="" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['duration'];?>
</td>
		<td class="green2"><input type="text" name="duration" value="" /></td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
</td>
		<td class="green1"><input type="text" name="description" value="" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
</td>
		<td class="green2">
		<select name="tcid">
		<?php  $_smarty_tpl->tpl_vars['channel'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['channel']->key => $_smarty_tpl->tpl_vars['channel']->value){
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['channel']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['channel']->value['channel_name'];?>
</option>
		<?php }} ?>
		</select>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
		<td class="green1"><input type="submit" name="create" value="<?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
" /></td>
	</tr>
</table>
</form>