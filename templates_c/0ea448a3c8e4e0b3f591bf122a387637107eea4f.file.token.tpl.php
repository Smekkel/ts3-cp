<?php /* Smarty version Smarty3rc4, created on 2014-07-14 18:44:19
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/yeti/token.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1289253c3ecc3052002-52328628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ea448a3c8e4e0b3f591bf122a387637107eea4f' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/token.tpl',
      1 => 1330431210,
    ),
  ),
  'nocache_hash' => '1289253c3ecc3052002-52328628',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'W:\home\cp.test.ru\www\ts3wi\libs\Smarty\libs\plugins\modifier.date_format.php';
?><?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
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
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_token_list'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_token_list'])){?>
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
<form method="post" action="index.php?site=token&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table class="border" style="width:100%" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="7"><?php echo $_smarty_tpl->getVariable('lang')->value['tokenlist'];?>
</td>
	</tr>
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['token'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['type'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['id1'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['id2'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['created'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['selectall'];?>
<input type="checkbox" name="checkall" value="0" onclick="check(1)" /></td>
	</tr>
	<?php if (!empty($_smarty_tpl->getVariable('tokenlist')->value)){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('tokenlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
			<tr>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['token'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<?php if ($_smarty_tpl->tpl_vars['value']->value['token_type']==0){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['servergroup'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['value']->value['token_type']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['channelgroup'];?>

				<?php }?>
				</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<?php if ($_smarty_tpl->tpl_vars['value']->value['token_type']==0){?>
					<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sgrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value2']->value['sgid']==$_smarty_tpl->tpl_vars['value']->value['token_id1']){?>
							<?php echo $_smarty_tpl->tpl_vars['value2']->value['name'];?>

						<?php }?>
					<?php }} ?>
				<?php }elseif($_smarty_tpl->tpl_vars['value']->value['token_type']==1){?>
					<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cgrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value2']->value['cgid']==$_smarty_tpl->tpl_vars['value']->value['token_id1']){?>
							<?php echo $_smarty_tpl->tpl_vars['value2']->value['name'];?>

						<?php }?>
					<?php }} ?>
				<?php }?>
				</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<?php if ($_smarty_tpl->tpl_vars['value']->value['token_type']==1){?>
					<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value2']->value['cid']==$_smarty_tpl->tpl_vars['value']->value['token_id2']){?>
							<?php echo $_smarty_tpl->tpl_vars['value2']->value['channel_name'];?>

						<?php }?>
					<?php }} ?>
				<?php }?>
				</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['token_created'],"%d.%m.%Y - %H:%M:%S");?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['token_description'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_token_delete'])||$_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_token_delete']==1){?>
				<input type="checkbox" name="token[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['token'];?>
" />
				<?php }?>
				</td>
			</tr>
			<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php }} ?> 
		<tr>
			<td colspan="6">&nbsp;</td>
			<td align="center"><input type="submit" name="deltoken" value="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" /></td>
		</tr>
	<?php }?>
</table>
</form>
<br />
<?php }?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_token_add'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_token_add'])){?>
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
<form method="post" action="index.php?site=token&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table class="border" style="width:100%" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="6"><?php echo $_smarty_tpl->getVariable('lang')->value['createtoken'];?>
</td>
	</tr>
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['type'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['groups'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['number'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
	</tr>
	<tr>
		<td class="green1 center">
		<select name="tokentype" onchange="hide_select(this.value)">
			<option value=""><?php echo $_smarty_tpl->getVariable('lang')->value['type'];?>
</option>
			<option value="0">(0)<?php echo $_smarty_tpl->getVariable('lang')->value['servergroup'];?>
</option>
			<option value="1">(1)<?php echo $_smarty_tpl->getVariable('lang')->value['channelgroup'];?>
</option>
		</select>
		</td>
		<td class="green1 center">
		<div id="groups">
		<select id="servergroups" style="display:none" name="tokenid1_1">
		<optgroup label="<?php echo $_smarty_tpl->getVariable('lang')->value['servergroups'];?>
">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sgrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['value']->value['type']!=0){?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
">(<?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
) <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
			<?php }?>
		<?php }} ?>
		</optgroup>
		</select>
		<select id="channelgroups" style="display:none" name="tokenid1_2">
		<optgroup label="<?php echo $_smarty_tpl->getVariable('lang')->value['channelgroups'];?>
">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cgrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['value']->value['type']!=0){?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
">(<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
) <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
			<?php }?>
		<?php }} ?>
		</optgroup>
		</select>
		</div>
		</td>
		<td class="green1 center">
		<select id="channel" style="display:none" name="tokenid2">
		<option value="0"><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
</option>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</option>
		<?php }} ?>
		</select>
		</td>
		<td class="green1 center">
		<input type="text" name="description" value="" />
		</td>
		<td class="green1 center">
		<input type="text" name="number" size="3" value="1" />
		</td>
		<td class="green1 center">
		<input class="button" type="submit" name="addtoken" value="<?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
" />
		</td>
	</tr>
</table>
</form>
<?php }?>