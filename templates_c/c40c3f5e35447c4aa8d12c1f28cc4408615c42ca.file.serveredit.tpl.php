<?php /* Smarty version Smarty3rc4, created on 2014-10-18 20:49:37
         compiled from "W:\home\cp.test.ru\www\ts3wi\templates/bootstrap/serveredit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:714054429a21990cf0-38294505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c40c3f5e35447c4aa8d12c1f28cc4408615c42ca' => 
    array (
      0 => 'W:\\home\\cp.test.ru\\www\\ts3wi\\templates/bootstrap/serveredit.tpl',
      1 => 1413650906,
    ),
  ),
  'nocache_hash' => '714054429a21990cf0-38294505',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
    <div class="container container-alert">
        <?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
        <div class="alert alert-dismissable alert-warning">
            <h4><b>Warning! </b></h4><?php echo $_smarty_tpl->getVariable('error')->value;?>

        </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->getVariable('noerror')->value)){?>
        <div class="alert alert-dismissable alert-success">
            <?php echo $_smarty_tpl->getVariable('noerror')->value;?>

        </div>
        <?php }?>
    </div>
<?php }?>

<div class="container">
    <div class="jumbotron">
        <h3><?php echo $_smarty_tpl->getVariable('lang')->value['editor'];?>
: <?php echo $_smarty_tpl->getVariable('lang')->value['virtualserver'];?>
 #<b><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_id'];?>
</b> </h3>
    </div>
    <div class="row">
        <div class="col-md-8">
            <form method="post" class="form-horizontal" action="index.php?site=serveredit&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-parent="#group1" href="#group1">
                                    First Group
                                </button>
                            </h4>
                        </div>
                        <div id="group1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="server-name" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</label>
                                    <div class="col-sm-9">
                                        <?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_name'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_name'])){?>
                                            -
                                        <?php }else{ ?>
                                            <input type="text" class="form-control" name="newsettings[virtualserver_name]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_name'];?>
" />
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="server-slots" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getVariable('lang')->value['maxclients'];?>
</label>
                                    <div class="col-sm-9">
                                        <?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_maxclients'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_maxclients'])){?>
                                            -
                                        <?php }else{ ?>
                                            <input type="text" class="form-control" name="newsettings[virtualserver_maxclients]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_maxclients'];?>
" />
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="server-res-slots" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getVariable('lang')->value['maxreservedslots'];?>
</label>
                                    <div class="col-sm-9">
                                        <?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_reserved_slots'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_reserved_slots'])){?>
                                            -
                                        <?php }else{ ?>
                                            <input type="text" class="form-control" name="newsettings[virtualserver_reserved_slots]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_reserved_slots'];?>
" />
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="server-pass-check" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getVariable('lang')->value['passwordset'];?>
</label>
                                    <div class="col-sm-9">
                                        <?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_password'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_password'])){?>
                                            -
                                        <?php }else{ ?>
                                            <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_flag_password']==1){?>
                                                <button type="button" class="btn btn-success btn-block disabled"><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</button>
                                            <?php }else{ ?>
                                                <button type="button" class="btn btn-default btn-block disabled"><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</button>
                                            <?php }?>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="server-min-client-version" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getVariable('lang')->value['minclientversion'];?>
</label>
                                    <div class="col-sm-9">
                                        <?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_min_client_version'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_min_client_version'])){?>
                                            -
                                        <?php }else{ ?>
                                            <input type="text" class="form-control" name="newsettings[virtualserver_min_client_version]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_min_client_version'];?>
" />
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="server-codec" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmode'];?>
</label>
                                    <div class="col-sm-9">
                                        <?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_codec_encryption_mode'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_codec_encryption_mode'])){?>
                                            -
                                        <?php }else{ ?>
                                            <select class="form-control" name="newsettings[virtualserver_codec_encryption_mode]">
                                                <option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_codec_encryption_mode']==0){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmodeindi'];?>
</option>
                                                <option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_codec_encryption_mode']==1){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmodegoff'];?>
</option>
                                                <option value="2" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_codec_encryption_mode']==2){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmodegon'];?>
</option>
                                            </select>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="server-welcome-msg" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getVariable('lang')->value['welcomemsg'];?>
</label>
                                    <div class="col-sm-9">
                                        <?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_welcomemessage'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_welcomemessage'])){?>
                                            -
                                        <?php }else{ ?>
                                            <textarea class="form-control" name="newsettings[virtualserver_welcomemessage]" rows="3"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_welcomemessage'];?>
</textarea>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="server-public-check" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getVariable('lang')->value['showonweblist'];?>
</label>
                                    <div class="col-sm-9">
                                        <?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_weblist'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_weblist'])){?>
                                            -
                                        <?php }else{ ?>
                                            <select class="form-control" name="newsettings[virtualserver_weblist_enabled]">
                                                <option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_weblist_enabled']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</option>
                                                <option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_weblist_enabled']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</option>
                                            </select>
                                        <?php }?>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <button type="button" class="btn btn-info btn-block" data-toggle="collapse" data-parent="#group2" href="#group2">
                                    Second group (in dev)
                                </button>
                            </h4>
                        </div>
                        <div id="group2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="server-name" class="col-sm-3 control-label"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</label>
                                    <div class="col-sm-9">
                                        <?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_name'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_name'])){?>
                                            -
                                        <?php }else{ ?>
                                            <input type="text" class="form-control" name="newsettings[virtualserver_name]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_name'];?>
" />
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_password'])||$_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_password']==1){?>
            <form method="post" action="index.php?site=serveredit&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
                <h5><?php echo $_smarty_tpl->getVariable('lang')->value['serverpassword'];?>
</h5>
                <div class="input-group">
                    <input type="text" class="form-control" name="newsettings[virtualserver_password]" placeholder="<?php echo $_smarty_tpl->getVariable('lang')->value['newpassword'];?>
">
                      <span class="input-group-btn">
                        <button class="btn btn-success" type="submit" name="editpw"><?php echo $_smarty_tpl->getVariable('lang')->value['setpswd'];?>
</button>
                      </span>
                </div>
            </form>
            <?php }?>
        </div>
    </div>
</div>
<hr>
<table style="width:100%" cellpadding="1" cellspacing="0">
	<tr valign="top">
		<td style="width:50%">
		<form method="post" action="index.php?site=serveredit&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
		<table  style="width:100%" class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['virtualserver'];?>
 #<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_id'];?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['editor'];?>
 </td>
			</tr>
			<tr>
				<td class="green1" style="width:50%"><?php echo $_smarty_tpl->getVariable('lang')->value['autostart'];?>
:</td>
				<td class="green1" style="width:50%">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_autostart'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_autostart'])){?>
					-
				<?php }else{ ?>
					<select name="newsettings[virtualserver_autostart]">
						<option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_autostart']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</option>
						<option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_autostart']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</option>
					</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2" style="width:50%"><?php echo $_smarty_tpl->getVariable('lang')->value['port'];?>
:</td>
				<td class="green2" style="width:50%">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_port'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_port'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_port]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_port'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1" style="width:50%"><?php echo $_smarty_tpl->getVariable('lang')->value['minclientversion'];?>
:</td>
				<td class="green1" style="width:50%">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_min_client_version'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_min_client_version'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_min_client_version]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_min_client_version'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_name'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_name'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_name]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_name'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['welcomemsg'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_welcomemessage'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_welcomemessage'])){?>
					-
				<?php }else{ ?>
					<textarea name="newsettings[virtualserver_welcomemessage]" rows="5" cols="30"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_welcomemessage'];?>
</textarea>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['maxclients'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_maxclients'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_maxclients'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_maxclients]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_maxclients'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['maxreservedslots'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_reserved_slots'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_reserved_slots'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_reserved_slots]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_reserved_slots'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['showonweblist'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_weblist'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_weblist'])){?>
					-
				<?php }else{ ?>
					<select name="newsettings[virtualserver_weblist_enabled]">
						<option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_weblist_enabled']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</option>
						<option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_weblist_enabled']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</option>
					</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmode'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_codec_encryption_mode'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_codec_encryption_mode'])){?>
					-
				<?php }else{ ?>
					<select name="newsettings[virtualserver_codec_encryption_mode]">
					<option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_codec_encryption_mode']==0){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmodeindi'];?>
</option>
					<option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_codec_encryption_mode']==1){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmodegoff'];?>
</option>
					<option value="2" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_codec_encryption_mode']==2){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmodegon'];?>
</option>
					</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['passwordset'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_password'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_password'])){?>
					-
				<?php }else{ ?>
					<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_flag_password']==1){?><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
<?php }else{ ?> <?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
<?php }?>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['securitylevel'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_needed_identity_security_level'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_needed_identity_security_level'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_needed_identity_security_level]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_needed_identity_security_level'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['minclientschan'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_channel_forced_silence'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_channel_forced_silence'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_min_clients_in_channel_before_forced_silence]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_min_clients_in_channel_before_forced_silence'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['iconid'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_icon_id'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_icon_id'])){?>
					-
				<?php }else{ ?>
					<input id="iconid" type="text" name="newsettings[virtualserver_icon_id]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_icon_id'];?>
" /><a href="javascript:oeffnefenster('site/showallicons.php?ip=<?php echo $_SESSION['server_ip'];?>
&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;port=<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_port'];?>
');"><?php echo $_smarty_tpl->getVariable('lang')->value['set'];?>
</a>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['standardgroups'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['servergroup'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_default_servergroup'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_default_servergroup'])){?>
					-
				<?php }else{ ?>
					<select name="newsettings[virtualserver_default_server_group]">
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('servergroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['type']==1){?>
							<option <?php if ($_smarty_tpl->tpl_vars['value']->value['sgid']==$_smarty_tpl->getVariable('serverinfo')->value['virtualserver_default_server_group']){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
						<?php }?>
					<?php }} ?>
					</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['channelgroup'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_default_channelgroup'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_default_channelgroup'])){?>
					-
				<?php }else{ ?>
					<select name="newsettings[virtualserver_default_channel_group]">
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channelgroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['type']==1){?>
							<option <?php if ($_smarty_tpl->tpl_vars['value']->value['cgid']==$_smarty_tpl->getVariable('serverinfo')->value['virtualserver_default_channel_group']){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
						<?php }?>
					<?php }} ?>
					</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['chanadmingroup'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_default_channeladmingroup'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_default_channeladmingroup'])){?>
					-
				<?php }else{ ?>
					<select name="newsettings[virtualserver_default_channel_admin_group]">
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channelgroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['type']==1){?>
							<option <?php if ($_smarty_tpl->tpl_vars['value']->value['cgid']==$_smarty_tpl->getVariable('serverinfo')->value['virtualserver_default_channel_admin_group']){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
						<?php }?>
					<?php }} ?>
					</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['host'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hostmessage'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostmessage'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostmessage'])){?>
					-
				<?php }else{ ?>
					<textarea name="newsettings[virtualserver_hostmessage]" rows="5" cols="30"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostmessage'];?>
</textarea>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostmessageshow'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostmessage'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostmessage'])){?>
					-
				<?php }else{ ?>
				<select name="newsettings[virtualserver_hostmessage_mode]">
					<option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostmessage_mode']==0){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['nomessage'];?>
</option>
					<option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostmessage_mode']==1){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['showmessagelog'];?>
</option>
					<option value="2" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostmessage_mode']==2){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['showmodalmessage'];?>
</option>
					<option value="3" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostmessage_mode']==3){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['modalandexit'];?>
</option>
				</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hosturl'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbanner'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbanner'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_hostbanner_url]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbanner_url'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbannerurl'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbanner'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbanner'])){?>
					-
				<?php }else{ ?>
					<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbanner_gfx_url']!=''){?>
					<img style="width:350px" src="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbanner_gfx_url'];?>
" alt="" /><br />
					<?php }?>
					<input type="text" name="newsettings[virtualserver_hostbanner_gfx_url]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbanner_gfx_url'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbannerintval'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbanner'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbanner'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_hostbanner_gfx_interval]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbanner_gfx_interval'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbuttontooltip'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbutton'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbutton'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_hostbutton_tooltip]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbutton_tooltip'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbuttongfx'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbutton'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbutton'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_hostbutton_gfx_url]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbutton_gfx_url'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbuttonurl'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbutton'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_hostbutton'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_hostbutton_url]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbutton_url'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['autoban'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['autobancount'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_complain'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_complain'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_complain_autoban_count]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_complain_autoban_count'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['autobantime'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_complain'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_complain'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_complain_autoban_time]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_complain_autoban_time'];?>
" /><?php echo $_smarty_tpl->getVariable('lang')->value['seconds'];?>

				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['removetime'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_complain'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_complain'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_complain_remove_time]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_complain_remove_time'];?>
" /><?php echo $_smarty_tpl->getVariable('lang')->value['seconds'];?>

				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['antiflood'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['pointstickreduce'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_antiflood'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_antiflood'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_antiflood_points_tick_reduce]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_antiflood_points_tick_reduce'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['pointsneededblockcmd'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_antiflood'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_antiflood'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_antiflood_points_needed_command_block]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_antiflood_points_needed_command_block'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['pointsneededblockip'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_antiflood'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_antiflood'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_antiflood_points_needed_ip_block]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_antiflood_points_needed_ip_block'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['transfers'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['upbandlimit'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_ft_settings'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_ft_settings'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_max_upload_total_bandwidth]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_max_upload_total_bandwidth'];?>
" />Byte/s
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['uploadquota'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_ft_quotas'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_ft_quotas'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_upload_quota]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_upload_quota'];?>
" />MiB
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['downbandlimit'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_ft_settings'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_ft_settings'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[virtualserver_max_download_total_bandwidth]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_max_download_total_bandwidth'];?>
" />Byte/s
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['downloadquota'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_ft_quotas'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_ft_quotas'])){?>
					-
				<?php }else{ ?>	
					<input type="text" name="newsettings[virtualserver_download_quota]" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_download_quota'];?>
" />MiB
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['logs'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['logclient'];?>
:</td>
				<td class="green1">
				<select name="newsettings[virtualserver_log_client]">
					<option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_client']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</option>
					<option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_client']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</option>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['logquery'];?>
:</td>
				<td class="green2">
				<select name="newsettings[virtualserver_log_query]">
					<option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_query']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</option>
					<option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_query']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</option>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['logchannel'];?>
:</td>
				<td class="green1">
				<select name="newsettings[virtualserver_log_channel]">
					<option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_channel']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</option>
					<option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_channel']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</option>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['logpermissions'];?>
:</td>
				<td class="green2">
				<select name="newsettings[virtualserver_log_permissions]">
					<option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_permissions']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</option>
					<option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_permissions']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</option>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['logserver'];?>
:</td>
				<td class="green1">
				<select name="newsettings[virtualserver_log_server]">
					<option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_server']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</option>
					<option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_server']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</option>
				</select>
				</td>
			</tr>	
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['logfiletransfer'];?>
:</td>
				<td class="green2">
				<select name="newsettings[virtualserver_log_filetransfer]">
					<option value="1" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_filetransfer']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</option>
					<option value="0" <?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_filetransfer']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</option>
				</select>
				</td>
			</tr>	
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
				<td class="green1"><input class="button" type="submit" name="editserver" value="Edit" /></td>
			</tr>
		</table>
		</form>
		</td>
		<td style="width:50%" align="center">
		<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_password'])||$_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_modify_password']==1){?>
			<form method="post" action="index.php?site=serveredit&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
			<table class="border" cellpadding="1" cellspacing="0">
				<tr>
					<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['serverpassword'];?>
</td>
				</tr>
				<tr>
					<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['newpassword'];?>
:</td>
					<td class="green1">
					<input type="text" name="newsettings[virtualserver_password]" value=""/>
					</td>
				</tr>
				<tr>
					<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
					<td class="green2"><input class="button" type="submit" name="editpw" value="Senden" /></td>
				</tr>
			</table>
			</form>
		<?php }?>
		</td>
	</tr>
</table>