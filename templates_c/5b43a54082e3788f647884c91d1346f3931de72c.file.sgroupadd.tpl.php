<?php /* Smarty version Smarty3rc4, created on 2014-07-14 17:44:18
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/yeti/sgroupadd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80853c3deb27c8291-80534498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b43a54082e3788f647884c91d1346f3931de72c' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/sgroupadd.tpl',
      1 => 1330431210,
    ),
  ),
  'nocache_hash' => '80853c3deb27c8291-80534498',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_servergroup_create'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_servergroup_create'])){?>
	<table class="border" style="width:50%;" cellpadding="1" cellspacing="0">
		<tr>
			<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['error'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['nopermissions'];?>
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
<form method="post" action="index.php?site=sgroupadd&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td colspan="2" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['addservergroup'];?>
</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['type'];?>
:</td>
		<td class="green1">
		<?php echo $_smarty_tpl->getVariable('lang')->value['template'];?>
<input type="radio" name="type" value="0" /><br />
		<?php echo $_smarty_tpl->getVariable('lang')->value['normal'];?>
<input checked="checked" type="radio" name="type" value="1" /><br />
		<?php echo $_smarty_tpl->getVariable('lang')->value['query'];?>
<input type="radio" name="type" value="2" /><br />
		</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
:</td>
		<td class="green2">
		<input type="text" name="name" value="" />
		</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['copypermsfrom'];?>
:</td>
		<td class="green1">
		<select name="copyfrom">
		<option value="0">-</option>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('servergroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
		<?php }} ?>
		</select>
		</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['overwritegroup'];?>
:</td>
		<td class="green2">
		<select name="overwrite">
		<option value="0">-</option>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('servergroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
		<?php }} ?>
		</select>
		</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
		<td class="green1"><input class="button" type="submit" name="addgroup" value="<?php echo $_smarty_tpl->getVariable('lang')->value['add'];?>
" /></td>
	</tr>
</table>
</form>
<?php }?>