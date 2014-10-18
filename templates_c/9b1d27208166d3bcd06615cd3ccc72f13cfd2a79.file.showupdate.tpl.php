<?php /* Smarty version Smarty3rc4, created on 2014-07-14 16:18:22
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/yeti/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1681253c3ca8ee3d274-69500780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b1d27208166d3bcd06615cd3ccc72f13cfd2a79' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/showupdate.tpl',
      1 => 1291669960,
    ),
  ),
  'nocache_hash' => '1681253c3ca8ee3d274-69500780',
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