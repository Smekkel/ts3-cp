<?php /* Smarty version Smarty3rc4, created on 2014-07-15 04:24:30
         compiled from "c:\WebServers\home\cp.test.ru\www\ts3wi\templates/yeti/mainbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1677753c474bec94656-63176325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed9bb92b0c235850dd2a5e3b0e17da2d2c6ba902' => 
    array (
      0 => 'c:\\WebServers\\home\\cp.test.ru\\www\\ts3wi\\templates/yeti/mainbar.tpl',
      1 => 1405376973,
    ),
  ),
  'nocache_hash' => '1677753c474bec94656-63176325',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
    <div class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">TS3 Cloud</a>
            </div>
            <?php if ($_smarty_tpl->getVariable('loginstatus')->value===true&&$_smarty_tpl->getVariable('site')->value!=='login'){?>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php if ($_smarty_tpl->getVariable('loginstatus')->value===true&&$_smarty_tpl->getVariable('site')->value!=='login'){?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-hdd"></span> <?php echo $_smarty_tpl->getVariable('lang')->value['server'];?>
 <span class="caret"></span></a>
                             <ul class="dropdown-menu" role="menu">
                                <?php if ($_smarty_tpl->getVariable('hoststatus')->value===true){?>
                                <li><a href="index.php?site=server"><?php echo $_smarty_tpl->getVariable('lang')->value['serverlist'];?>
</a></li>
                                <?php }?>
                                <?php if (!isset($_smarty_tpl->getVariable('sid')->value)&&$_smarty_tpl->getVariable('hoststatus')->value===true){?>
                                    <li><a href="index.php?site=createserver"><?php echo $_smarty_tpl->getVariable('lang')->value['createserver'];?>
</a></li>
                                    <li><a href="index.php?site=servertraffic"><?php echo $_smarty_tpl->getVariable('lang')->value['instancetraffic'];?>
</a></li>
                                    <li><a href="index.php?site=instanceedit"><?php echo $_smarty_tpl->getVariable('lang')->value['instanceedit'];?>
</a></li>
                                    <li><a href="index.php?site=logview"><?php echo $_smarty_tpl->getVariable('lang')->value['logview'];?>
</a></li>
                                    <li><a href="index.php?site=iserverbackup"><?php echo $_smarty_tpl->getVariable('lang')->value['instancebackup'];?>
</a></li>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->getVariable('sid')->value)){?>
                                    <li><a href="index.php?site=serverview&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['serverview'];?>
</a></li>
                                    <li><a href="index.php?site=servertraffic&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['virtualtraffic'];?>
</a></li>
                                    <li><a href="index.php?site=serveredit&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['serveredit'];?>
</a></li>
                                    <li><a href="index.php?site=temppw&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['temppw'];?>
</a></li>
                                    <li><a href="index.php?site=fileupload&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['iconupload'];?>
</a></li>
                                    <li><a href="index.php?site=logview&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['logview'];?>
</a></li>
                                    <li><a href="index.php?site=filelist&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['filelist'];?>
</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:oeffnefenster('site/interactive.php?sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;action=action');"><?php echo $_smarty_tpl->getVariable('lang')->value['massaction'];?>
</a></li>
                                <?php }?>
                            </ul>
                        </li>
                        <?php if (isset($_smarty_tpl->getVariable('sid')->value)){?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> <?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=channel&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['channellist'];?>
</a></li>
                                <li><a href="index.php?site=createchannel&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['createchannel'];?>
</a></li>
                                <?php if (isset($_smarty_tpl->getVariable('cid')->value)){?>
                                    <li><a href="index.php?site=channelview&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['channelview'];?>
</a></li>
                                    <li><a href="index.php?site=channeledit&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['channeledit'];?>
</a></li>
                                <?php }?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=counter&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['clientcounter'];?>
</a></li>
                                <li><a href="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['clientlist'];?>
</a></li>
                                <li><a href="index.php?site=complainlist&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['complainlist'];?>
</a></li>
                                <li><a href="index.php?site=chanclienteditperm&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['chanclientperms'];?>
</a></li>
                                <li><a href="index.php?site=clientcleaner&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['clientcleaner'];?>
</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-remove-circle"></span> <?php echo $_smarty_tpl->getVariable('lang')->value['bans'];?>
 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=banlist&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['banlist'];?>
</a></li>
                                <li><a href="index.php?site=banadd&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['addban'];?>
</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book"></span> <?php echo $_smarty_tpl->getVariable('lang')->value['groups'];?>
 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=sgroups&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['servergroups'];?>
</a></li>
                                <li><a href="index.php?site=sgroupadd&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['addservergroup'];?>
</a></li>
                                <li><a href="index.php?site=cgroups&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['channelgroups'];?>
</a></li>
                                <li><a href="index.php?site=cgroupadd&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['addchannelgroup'];?>
</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tower"></span> <?php echo $_smarty_tpl->getVariable('lang')->value['token'];?>
 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="index.php?site=token&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['token'];?>
</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-lock"></span> <?php echo $_smarty_tpl->getVariable('lang')->value['backup'];?>
 <span class="caret"></span></a>
                             <ul class="dropdown-menu" role="menu">
                             <li><a href="index.php?site=backup&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['chanbackups'];?>
</a></li>
                             <li><a href="index.php?site=serverbackup&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['serverbackups'];?>
</a></li>
                             <li><a href="index.php?site=permexport&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['permexport'];?>
</a></li>
                             <li><a href="index.php?site=clientsexport&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['clientsexport'];?>
</a></li>
                             <li><a href="index.php?site=bansexport&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['bansexport'];?>
</a></li>
                             </ul>
                        </li>
                                <?php }?>
                    <?php }?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($_smarty_tpl->getVariable('fastswitch')->value==true&&$_smarty_tpl->getVariable('hoststatus')->value===true){?>
                    <li><a href="#server-switch" data-toggle="modal"><span class="glyphicon glyphicon-sort"></span> <?php echo $_smarty_tpl->getVariable('lang')->value['switch-server'];?>
</a></li>
                    <?php }?>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> [</span> <?php echo $_SESSION['loginuser'];?>
]<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index.php?site=console&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value['queryconsole'];?>
</a></li>
                            <li><a href="#msgtoall" data-toggle="modal"><?php echo $_smarty_tpl->getVariable('lang')->value['msgtoallmenu'];?>
</a></li>
                            <li class="divider"></li>
                            <li><a href="index.php?site=logout"><span class="glyphicon glyphicon-log-out"> </span> <?php echo $_smarty_tpl->getVariable('lang')->value['logout'];?>
</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            <?php }?>
        </div>
    <!-- Modal -->
    <div class="modal fade" id="server-switch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-modal">
                        <h3><?php echo $_smarty_tpl->getVariable('lang')->value['choose-server'];?>
</h3>
                        <?php if ($_smarty_tpl->getVariable('fastswitch')->value==true&&$_smarty_tpl->getVariable('hoststatus')->value===true){?>
                            <form class="fastswitch-selection" method="get" action="index.php?site=serverview">
                                <?php if (strpos($_smarty_tpl->getVariable('site')->value,'edit')==false||$_smarty_tpl->getVariable('site')->value=='serveredit'){?>
                                    <input type="hidden" name="site" value="<?php echo $_smarty_tpl->getVariable('site')->value;?>
" />
                                <?php }else{ ?>
                                    <input type="hidden" name="site" value="serverview" />
                                <?php }?>
                                <select class="fastswitch-selection form-control" name="sid" onchange="submit()">
                                    <?php  $_smarty_tpl->tpl_vars['server'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('serverlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['server']->key => $_smarty_tpl->tpl_vars['server']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['server']->key;
?>
                                        <?php if ($_smarty_tpl->getVariable('sid')->value==$_smarty_tpl->tpl_vars['server']->value['virtualserver_id']){?>
                                            <option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_port'];?>
</option>
                                        <?php }else{ ?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_port'];?>
</option>
                                        <?php }?>
                                    <?php }} ?>
                                </select>
                            </form>
                        <?php }?>
                        <br>
                        <button type="button" class="btn btn-modal-close btn-xs btn-info" data-dismiss="modal"><?php echo $_smarty_tpl->getVariable('lang')->value['close'];?>
</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="msgtoall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-modal">
                        <h3><?php echo $_smarty_tpl->getVariable('lang')->value['msgtoall'];?>
</h3>
                        <form method="post" action="index.php?site=server">
                            <textarea class="form-control" type="text" name="msgtoall" rows="3"></textarea>
                            <br>
                            <button class="btn btn-primary btn-block" type="submit" name="sendmsg"><?php echo $_smarty_tpl->getVariable('lang')->value['send'];?>
</button>
                            <br>
                            <button type="button" class="btn btn-modal-close btn-xs btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->getVariable('lang')->value['close'];?>
</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>