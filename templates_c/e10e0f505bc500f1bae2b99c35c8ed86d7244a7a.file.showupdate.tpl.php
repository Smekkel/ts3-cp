<?php /* Smarty version Smarty3rc4, created on 2014-07-02 04:28:05
         compiled from "/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/yeti/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54179580753b3ecc549e766-91187901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e10e0f505bc500f1bae2b99c35c8ed86d7244a7a' => 
    array (
      0 => '/Users/orangefox/Library/Containers/com.bitnami.mampstack/Data/app-5_4_9/apache2/htdocs/ts3wi/templates/yeti/showupdate.tpl',
      1 => 1291669960,
    ),
  ),
  'nocache_hash' => '54179580753b3ecc549e766-91187901',
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