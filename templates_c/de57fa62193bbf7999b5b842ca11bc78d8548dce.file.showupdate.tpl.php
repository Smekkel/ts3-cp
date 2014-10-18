<?php /* Smarty version Smarty3rc4, created on 2014-10-18 00:45:59
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/bootstrap/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1799544180079d6e22-50607204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de57fa62193bbf7999b5b842ca11bc78d8548dce' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/bootstrap/showupdate.tpl',
      1 => 1291669960,
    ),
  ),
  'nocache_hash' => '1799544180079d6e22-50607204',
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