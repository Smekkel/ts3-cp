<?php /* Smarty version Smarty3rc4, created on 2014-07-14 19:08:16
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/yeti/cgroups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2499453c3f260bb3050-30334855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7550ce6ba3429a591cd79a53696c7cbdf4524a46' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/cgroups.tpl',
      1 => 1330431210,
    ),
  ),
  'nocache_hash' => '2499453c3f260bb3050-30334855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_channelgroup_list'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_channelgroup_list'])){?>
	<table class="border" style="width:50%;" cellpadding="1" cellspacing="0">
		<tr>
			<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['error'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['nopermissions'];?>
</td>
		</tr>
	</table>
<?php }else{ ?>
<?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
<table>
	<?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
	<tr>
		<td class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</td>
	</tr>
	<?php }?>
	<?php if (!empty($_smarty_tpl->getVariable('noerror')->value)){?>
	<tr>
		<td class="noerror"><?php echo $_smarty_tpl->getVariable('noerror')->value;?>
</td>
	</tr>
	<?php }?>
</table>
<?php }?>
<table style="width:100%" class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="6"><?php echo $_smarty_tpl->getVariable('lang')->value['channelgroups'];?>
</td>
	</tr>
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['id'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['type'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['iconid'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['savedb'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['options'];?>
</td>
	</tr>
	<?php if (!empty($_smarty_tpl->getVariable('channelgroups')->value)){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channelgroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
			<tr>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
">
				<form method="post" action="index.php?site=cgroups&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cgid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
">
				<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
" /> <input class="button" type="submit" name="sendname" value="<?php echo $_smarty_tpl->getVariable('lang')->value['rename'];?>
" />
				</form>
				</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['iconid'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['savedb'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<?php if ($_smarty_tpl->tpl_vars['value']->value['type']!='0'){?>
				<form method="post" action="index.php?site=cgroupclients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cgid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
">
				<input type="submit" class="clients" name="permedit" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
" />
				</form>
				<?php }?>
				<form method="post" action="index.php?site=cgroupeditperm&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cgid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
">
				<input type="submit" class="eperms" name="permedit" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['editperms'];?>
" />
				</form>
				<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_channelgroup_delete'])||$_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_channelgroup_delete']==1){?>
				<form method="post" action="index.php?site=cgroups&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cgid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
">
				<input type="submit" class="delete" name="delgroup" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
"  onclick="return confirm('<?php echo $_smarty_tpl->getVariable('lang')->value['deletemsgchannelgroup'];?>
')" />
				</form>
				<?php }?>
				</td>
			</tr>
			<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php }} ?>
	<?php }?>
</table>
<?php }?>