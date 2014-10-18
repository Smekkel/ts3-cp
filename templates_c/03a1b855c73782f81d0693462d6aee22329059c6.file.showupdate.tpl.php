<?php /* Smarty version Smarty3rc4, created on 2014-04-15 09:42:41
         compiled from "/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/new/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:852609068534d618177e9a6-43928500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a1b855c73782f81d0693462d6aee22329059c6' => 
    array (
      0 => '/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/new/showupdate.tpl',
      1 => 1291669960,
    ),
  ),
  'nocache_hash' => '852609068534d618177e9a6-43928500',
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