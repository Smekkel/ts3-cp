<?php /* Smarty version Smarty3rc4, created on 2014-10-18 13:09:14
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/bootstrap/banadd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2197854422e3aeff168-50777920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9bff9e231cd6a1d65d6f3e42b30342d96d6638c' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/bootstrap/banadd.tpl',
      1 => 1330431210,
    ),
  ),
  'nocache_hash' => '2197854422e3aeff168-50777920',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_client_ban_create'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_client_ban_create'])){?>
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
<form method="post" action="index.php?site=banadd&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table class="border" cellpadding="0" cellspacing="0">
	<tr>
		<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['addban'];?>
</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['ip'];?>
</td>
		<td class="green1"><input type="text" name="banip" value="" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</td>
		<td class="green2"><input type="text" name="banname" value="" /></td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['uniqueid'];?>
</td>
		<td class="green1"><input type="text" name="banuid" value="" /></td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['reason'];?>
</td>
		<td class="green2"><input type="text" name="reason" value="" /></td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['bantime'];?>
</td>
		<td class="green1"><input type="text" name="bantime" value="" /><?php echo $_smarty_tpl->getVariable('lang')->value['seconds'];?>
</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
		<td class="green2"><input class="button" type="submit" name="addban" value="<?php echo $_smarty_tpl->getVariable('lang')->value['ban'];?>
" /></td>
	</tr>
</table>
</form>
<?php }?>