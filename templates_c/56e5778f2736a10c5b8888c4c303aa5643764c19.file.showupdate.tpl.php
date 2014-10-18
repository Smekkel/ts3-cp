<?php /* Smarty version Smarty3rc4, created on 2014-04-15 15:54:04
         compiled from "/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/bootstrap/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:946846669534db88c3e89a3-44453407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e5778f2736a10c5b8888c4c303aa5643764c19' => 
    array (
      0 => '/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/bootstrap/showupdate.tpl',
      1 => 1291669960,
    ),
  ),
  'nocache_hash' => '946846669534db88c3e89a3-44453407',
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