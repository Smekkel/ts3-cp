<?php /* Smarty version Smarty3rc4, created on 2014-10-18 01:43:40
         compiled from "c:\WebServers\home\cp.test.ru\www\ts3wi\templates/bootstrap/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:890754418d8c4b4c14-80181247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad6d8d561df2f60f885ff1249c08a83b0ab610f9' => 
    array (
      0 => 'c:\\WebServers\\home\\cp.test.ru\\www\\ts3wi\\templates/bootstrap/showupdate.tpl',
      1 => 1291669960,
    ),
  ),
  'nocache_hash' => '890754418d8c4b4c14-80181247',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('newwiversion')->value)){?>
<tr>
	<td class="green1 warning center" colspan="2">
	<?php echo $_smarty_tpl->getVariable('newwiversion')->value;?>

	</td>
<tr>
<?php }?>