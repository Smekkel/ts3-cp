<?php /* Smarty version Smarty3rc4, created on 2014-07-14 18:05:10
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/yeti/console.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3161753c3e396c89a91-02806710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136e46da723123f062066c7289ef00aa8b0e0e9e' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/console.tpl',
      1 => 1330431210,
    ),
  ),
  'nocache_hash' => '3161753c3e396c89a91-02806710',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post" action="index.php?site=console&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table class="border" cellpadding="0" cellspacing="0">
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['queryconsole'];?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['inputbox'];?>
</td>
	</tr>
	<tr>
		<td>
			<textarea name="command" cols="50" rows="10"></textarea>	
		</td>
	</tr>
	<tr>
		<td><input class="button" type="submit" name="execute" value="<?php echo $_smarty_tpl->getVariable('lang')->value['execute'];?>
" /><br /><br /></td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['outputbox'];?>
</td>
	</tr>
	<tr>
		<td>
			<textarea name="output" cols="80" rows="20" readonly="readonly"><?php echo $_smarty_tpl->getVariable('showOutput')->value;?>
</textarea>	
		</td>
	</tr>
</table>
</form>