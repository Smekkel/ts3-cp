<?php /* Smarty version Smarty3rc4, created on 2014-10-18 13:23:30
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/bootstrap/clientsexport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2186254423192e6bc42-79125179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8e524f77bc0f8bf21475539fc5d54a2710f3f71' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/bootstrap/clientsexport.tpl',
      1 => 1330431210,
    ),
  ),
  'nocache_hash' => '2186254423192e6bc42-79125179',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post" action="site/clientsexport.php" target="_blank">
<table class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['clientsexport'];?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['clientsexportdesc'];?>
</td>
	</tr>
	<tr>
		<td class="green1">
		<?php echo $_smarty_tpl->getVariable('lang')->value['serverid'];?>
: <input type="text" name="sid" value="" />
		<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->getVariable('sid')->value;?>
" />
		<input class="button" type="submit" name="give" value="<?php echo $_smarty_tpl->getVariable('lang')->value['clientsexport'];?>
" />
		</td>
	</tr>
</table>
</form>