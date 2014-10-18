<?php /* Smarty version Smarty3rc4, created on 2014-10-18 13:23:22
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/bootstrap/bansexport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32355442318a797308-24593858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ba17250b318bc01609b8fb70f479297b2ac59a' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/bootstrap/bansexport.tpl',
      1 => 1290355246,
    ),
  ),
  'nocache_hash' => '32355442318a797308-24593858',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table class="border" style="width:100%" cellpadding="1" cellspacing="0">

	<tr>
		<td class="thead" colspan="9"><?php echo $_smarty_tpl->getVariable('lang')->value['bansexport'];?>
</td>
	</tr>
	<tr>
		<td colspan="9"><?php echo $_smarty_tpl->getVariable('lang')->value['bansexportdesc'];?>
</td>
	</tr>
	<tr>
		<td>
		<textarea rows="10" cols="70" readonly="readonly"><?php echo $_smarty_tpl->getVariable('banexport')->value;?>
</textarea>
		</td>
	</tr>
</table>