<?php /* Smarty version Smarty3rc4, created on 2014-07-15 04:24:31
         compiled from "c:\WebServers\home\cp.test.ru\www\ts3wi\templates/yeti/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2190253c474bf40f826-93395356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49a8355a002dd3bb96bbaf32fe983a9a58dd985b' => 
    array (
      0 => 'c:\\WebServers\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/showupdate.tpl',
      1 => 1291669960,
    ),
  ),
  'nocache_hash' => '2190253c474bf40f826-93395356',
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